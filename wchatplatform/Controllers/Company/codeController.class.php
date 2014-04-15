<?php

class codeController extends BaseController {

    public $userOpenId;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];


            $this->assign('open_id', $this->userOpenId);
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';
        }
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */
    public function index() {

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx1273344d7b97cd07&secret=65f0ce66ed3b65ef8aebd7ae3ea92e5c&code=' . $_REQUEST['code'] . '&grant_type=authorization_code';

        $result = transferData($url, "get");

        $array = json_decode($result, true);

        if (!empty($array['openid'])) {

            $this->assign('open_id', $array['openid']);
        }



        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            if (!empty($array['openid'])) {


                $this->userOpenId = $array['openid'];
            }



            $this->display_page = $function;

            $this->$function();
        }
    }

    public function authUrl($giveUrl) {




        $urlEncodeGiveUrl = urlencode($giveUrl);


        // $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&response_type=code&scope=snsapi_base&state=123#wechat_redirect&redirect_uri=' . $urlEncodeGiveUrl;


        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri=' . $urlEncodeGiveUrl . '&response_type=code&scope=snsapi_base&state=123#wechat_redirect';


        return $url;
    }

    /**
     * 生成 用户 授权页面
     */
    public function giveCodeAuth() {


        if (!empty($_REQUEST['code_id']) && !empty($_REQUEST['open_id'])) {


            $giveUrl = WebSiteUrl . '?g=company&a=code&v=index&action=giveResult&give_open_id=' . $_REQUEST['open_id'] . '&code_id=' . $_REQUEST['code_id'];

            $url = $this->authUrl($giveUrl);

            $this->jsJump($url);
        }
    }

    /**
     * 优惠券 详情页面
     */
    public function giveCodeDetail() {

        $user = new userApi();

        $userInfo = $user->getUserInfo($this->userOpenId, 'company');

        $var = 'source=company&action=/code/giveCode&give_open_id=' . $_REQUEST['give_open_id'] . '&open_id=' . $this->userOpenId;

        $error = new errorApi();

        $error->JudgeError($userInfo, $var, 'company', $this->userOpenId);

        $this->getCode($this->userOpenId, $_REQUEST['give_open_id']);
    }

    public function getCode($give_open_id, $open_id) {

        $codeApi = new codeApi();

        $result = $codeApi->getUserReceviceCode('company', 2, $give_open_id);

        $codeInfo = $codeApi->getcodeInfo($result['promo_code_id'], 'company');

        $this->assign('give_open_id', $give_open_id);

        $this->assign('open_id', $open_id);

        $this->assign('codeInfo', $codeInfo);

        $this->setDir('Code');

        $this->display('user_code_detail');
    }

    /**
     *  赠送  优惠券 后台逻辑
     *  判断授权后的用户 是否已经注册  如未注册 跳转注册页面  并 记录 该地址
     *  如已注册   调用优惠券赠送 接口
     *  $this->userOpenId    授权后 获取到的用户openid
     *  give_open_id         赠送的open_id
     *  code_id              优惠券id
     */
    public function giveResult() {




        if ($this->userOpenId == $_REQUEST['give_open_id']) {


            echo '自己无法领取';
            die;
        }

        if (!empty($_REQUEST['code_id']) && !empty($this->userOpenId) && !empty($_REQUEST['give_open_id'])) {

            $user = new userApi();

            $userInfo = $user->getUserInfo($this->userOpenId, 'company1');
            $code = new codeApi();

            $codeResult = $code->giveCode($_REQUEST['code_id'], $this->userOpenId, $_REQUEST['give_open_id'], 'company');

            $error = new errorApi();

            $error->JudgeError($codeResult);

            if (!empty($codeResult) && $codeResult['res'] == 1) {


                if ($userInfo['weixin_user']['subscribe'] == 0) {


                    $msg = '领取成功,请关注脊安堂 服务号 ';

                    $this->displayMessage($msg);
                } else {

                    U('company/user/userCenter', array('open_id' => $this->userOpenId));
                }
            }
        }
    }

    public function promoMessage() {
        $nowTime = time();
        $postDate["source"] = "company";
        $postDate['open_id'] = $this->userOpenId;
        
        $groupBy = isset($_GET["groupBy"]) ? $_GET["groupBy"] : "";
        $userCode = transferData(APIURL . "/code/get_user_code", "post", $postDate);
        $userCode = json_decode($userCode, true);
        if (isset($userCode["error"])) {
            $this->assign("codeInfo", "error");
        } else if ($userCode == "") {
            $this->assign("codeInfo", "error");
        } else {
            $codeInfo = array();
            if (!isset($groupBy) || $groupBy == "") {
                foreach ($userCode as $key => $value) {
                    $codeEndTime = $value["code_record"]['code_end_time'];
                    if ($value['code_info']["code_state"] == "1" && $codeEndTime > $nowTime) {
                        $codeCreateTime = $value["code_record"]['ctime'];
                        $value['code_info']["createTime"] = $codeCreateTime;
                        array_push($codeInfo, $value['code_info']);
                    }
                }
                $this->assign("groupBy", "");
            } else if ($groupBy == "used") {
                foreach ($userCode as $key => $value) {
                    if ($value['code_info']["code_state"] == "2") {
                        $codeCreateTime = $value["code_record"]['ctime'];
                        $value['code_info']["createTime"] = $codeCreateTime;
                        array_push($codeInfo, $value['code_info']);
                        $this->assign("groupBy", $_GET["groupBy"]);
                    }
                }
            } else if ($groupBy == "timeOut") {
                foreach ($userCode as $key => $value) {
                    $codeEndTime = $value["code_record"]['code_end_time'];
                    if ($codeEndTime < $nowTime) {
                        $codeCreateTime = $value["code_record"]['ctime'];
                        $value['code_info']["createTime"] = $codeCreateTime;
                        array_push($codeInfo, $value['code_info']);
                        $this->assign("groupBy", $_GET["groupBy"]);
                    }
                }
            }

            if (empty($codeInfo)) {
                $codeInfo = "";
            }
            $this->assign("codeInfo", $codeInfo);
            $this->assign("nowTime", $nowTime);
        }
        $this->assign("groupBy", $groupBy);
        $this->display("promoMessage");
    }

    public function getReceviceCode() {


        $giveUrl = WebSiteUrl . '?g=company&a=code&v=index&action=giveCodeDetail&give_open_id=' . $_REQUEST['open_id'];

        $url = $this->authUrl($giveUrl);

        $this->jsJump($url);


        //U('company/code/giveCodeDetail',array('code_id'=>$result['promo_code_id'],'open_id'=>$_REQUEST['open_id']));
        //$url = WebSiteUrl.'?g=company&a=code&v=giveCodeDetail';
    }

}

?>
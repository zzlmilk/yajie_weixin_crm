<?php

class codeController extends BaseController {

    public $userOpenId;

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            //$this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';
        }

        $this->assign('open_id', $this->userOpenId);
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

    /**
     *  获取用户 优惠券列表
     */
    
  public function giveCode() {

      if($_REQUEST['action'] == 'detail'){

        $this->giveCodeDetail();

      } else{

         $user = new userApi();

        $codeInfo = $user->getUserCode($this->userOpenId, 'company');

        $this->assign('codeInfo', $codeInfo);

        $this->assign('url', urlencode($url));

        $this->display('user_give_code');

      }

       
    }


    public function authUrl($giveUrl){


            

            $urlEncodeGiveUrl = urlencode($giveUrl);


           // $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&response_type=code&scope=snsapi_base&state=123#wechat_redirect&redirect_uri=' . $urlEncodeGiveUrl;


            $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx1273344d7b97cd07&redirect_uri='.$urlEncodeGiveUrl.'&response_type=code&scope=snsapi_base&state=123#wechat_redirect';


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

        if (!empty($_REQUEST['code_id']) && !empty($_REQUEST['open_id'])) {


            $code = new codeApi();

            $codeInfo = $code->getcodeInfo($_REQUEST['code_id'], 'company');

            $this->assign('give_open_id', $_REQUEST['open_id']);

            $this->assign('codeInfo', $codeInfo);

            $this->display('user_code_detail');
        }
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

            $userInfo = $user->getUserInfo($this->userOpenId, 'company');

            //$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
                
           
            $giveUrl = WebSiteUrl . '?g=company&a=code&v=index&action=giveResult&give_open_id=' . $_REQUEST['give_open_id'] . '&code_id=' . $_REQUEST['code_id'];

           
            $url = $this->authUrl($giveUrl);
            
            $error = new errorApi();

            $error->JudgeError($userInfo,$url,'company',$this->userOpenId);

            $code = new codeApi();
            
            $codeResult =  $code->giveCode($_REQUEST['code_id'], $this->userOpenId,$_REQUEST['give_open_id'],'company');

            $error->JudgeError($codeResult);

            if(!empty($codeResult) && $codeResult['res'] == 1){

                $this->displayMessage('领取成功');
            }

        }
    }


}

?>
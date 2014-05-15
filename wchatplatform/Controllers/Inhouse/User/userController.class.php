<?php

class UserController extends BaseController {

    public $postData;
    public $errorMessage = "";

    public function __construct() {

        header("Content-type:text/html;charset=utf-8");




        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            


            $this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc1234';


            //$this->userOpenId = 'dasdasd';
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

        $this->assign('open_id', $array['openid']);

        $this->userOpenId = $array['openid'];

        if (!empty($_REQUEST['action'])) {

            $function = $_REQUEST['action'];

            $this->display_page = $function;

            $this->$function();
        }
    }

    

    /**
     * 用户积分
     */
    public function userCenter() {

        $this->able_register();


        $userMessage["source"] = SOURCE;
        $userMessage["open_id"] = $this->userOpenId;

        $userMessage['type'] = 1;

       
        
        $userJsonData = transferData(APIURL . "/user/getUserCardInfo/", "post", $userMessage);
        $expenseItem = json_decode($userJsonData, true);


        
        $userInfo = transferData(APIURL . "/user/get_info", "post", $userMessage);
        $userInfo = json_decode($userInfo, TRUE);
        $error = new errorApi();
        $error->JudgeError($userInfo);
        

      




        if(count($expenseItem['record']) > 0){

            $result = $expenseItem['record'];

            $xval = array();

            $yval = array();

            foreach($result as $v){

                $time = strtotime($v['order_time']);

                $val = date('Y-m-d',$time);

                array_unshift($xval, $val);

                array_unshift($yval, (int)$v['money']);

                // array_push($xval, $val);

                // array_push($yval, (int)$v['money']);
            }

        }

        $error = new errorApi();

        $error->JudgeError($expenseItem);

        $this->assign("XVAL", json_encode($xval));

        $this->assign("YVAL", json_encode($yval));

        $this->assign("userInfo", $userInfo["user"]);


         $this->assign("weixin", $userInfo["weixin_user"]);


        $this->display();
    }

    public function userInfo() {

        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $error = new errorApi();
        $error->JudgeError($userInfo);
        $this->assign('userinfo', $userInfo["weixin_user"]);
        $birthdayToDate = $userInfo["user"]["birthday"];
        $birthdayToDate = date("Y-m-d", $birthdayToDate);
        $this->assign("userBirthday", $birthdayToDate);
        $this->display();
    }

    /**
     * 用户积分
     */
    public function userJf() {



        if (!empty($_REQUEST['type'])) {


            $type = $_REQUEST['type'];
        } else {

            $type = 1;
        }

        $userApi = new userApi();

        $result = $userApi->getUserRecord($this->userOpenId, $type);


        $this->assign('type', $type);
        $this->assign('data', $result);

        $this->assign('number', count($result));

        $this->display();
    }

   

    /**
     * 手机绑定
     */

    public function bind(){
     
        if (!empty($_REQUEST['phone']) && !empty($this->userOpenId)) {


            $userApi = new userApi();

            $info = $userApi->bind($_REQUEST['phone'],$this->userOpenId);

            $error =  new errorApi();

            $error->JudgeError($info);

            $this->displayMessage("恭喜绑定成功",1);
        }

    }

  
    //用户消费记录
    public function userExpense() {
        // $this->able_register();
        $error = new errorApi();
        $userMessage["source"] = SOURCE;
        $userMessage["open_id"] = $this->userOpenId;
        $userInfo = transferData(APIURL . "/user/get_info", "post", $userMessage);
        $userInfo = json_decode($userInfo, TRUE);
        $userMessage["type"] = 1;
        $userJsonData = transferData(APIURL . "/user/getUserCardInfo/", "post", $userMessage);
        $expenseItem = json_decode($userJsonData, true);
        $error->JudgeError($expenseItem);
        $this->assign("expenseItem", $expenseItem["record"]);
        $this->assign("userInfoWeixin", $userInfo["weixin_user"]);
        $this->assign("userInfo", $userInfo["user"]);
        $this->display();
    }

    public function ativating() {

        $this->display();
    }

}

?>
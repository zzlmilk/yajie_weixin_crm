<?php

class UserController extends BaseController {


    public $userOpenId;
    public $postData;
    public $errorMessage = "";
        
	public function __construct() {

        header("Content-type:text/html;charset=utf-8");

        if(!empty($_REQUEST['open_id'])){

            $this->userOpenId = $_REQUEST['open_id'];

        } else{

            $this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';

        }

         $this->assign('open_id',$this->userOpenId);
    }

    /**
     * 通过授权来获取到open_id 并  将open_id 输出到页面众
     */

    public function index(){

        $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=wxe7878882ea37482b&secret=afc26fbaff69f7ce8c3c2a1cabdf0047&code='.$_REQUEST['code'].'&grant_type=authorization_code';
        
        $result = transferData($url, "get");
       
        $array = json_decode($result,true);
       
        $this->assign('open_id',$array['openid']);

        if(!empty($_REQUEST['action'])){

            $function = $_REQUEST['action'];

            $this->$function();
        }

    }

    //兑换物品
    public function changeGoods() {
        //$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['goodsId'])) {
            $goodsId=$_GET['goodsId'];
            $postDate["source"] = "company";
            $postDate['open_id'] = $this->userOpenId;
            $postDate['id'] = $goodsId;
            $exchangeList = transferData(APIURL . "/exchange/redeem", "post", $postDate);
            var_dump($exchangeList);
        }
    }



     //兑换列表
    public function getExchangeList() {
        //$this->userOpenId = $_REQUEST['open_id'];
        $exchangeList = transferData(APIURL . "/exchange/get_exchange_list?source=company&open_id=" . $this->userOpenId, "get");
        $exchangeList = json_decode($exchangeList, true);
        var_dump($exchangeList);
        $this->assign("exchangeList", $exchangeList);

        $this->display();
    }

    //兑换物品详情
    public function exchangeGoods() {
        // $this->userOpenId = $_REQUEST['open_id'];
        $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info?exchange_id=" . $_GET['goodsId'], "get");
        $exchangeItem = json_decode($exchangeItem, true);
        var_dump($exchangeItem["exchange_info"]);
        $this->assign("exchangeInfo", $exchangeItem["exchange_info"]);
        $this->display();
    }

    /**
     * 下订单 和修改订单
     */
    public function order() {
        //$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['checkReturn'])) {
            $this->assign("checkReturn", $_GET['checkReturn']);
            $this->assign("returnVal", $_POST);
        }
        $selectReturnVal = transferData(APIURL . "/order/get_merchandise", "get");
        $selectVal = json_decode($selectReturnVal, true);
        //var_dump($selectReturnVal);
        $this->assign("selectVal", $selectVal);
        // $this->assign('open_id', $_REQUEST['open_id']);
        $this->display();
    }

    /**
     *  查看订单
     */
    public function orderCheck() {
        //$this->userOpenId = $_REQUEST['open_id'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //预处理post发送的值
            foreach ($_POST as $key => $val) {
                if ($key == "orderDateInput") {
                    $valCache = explode(" ", $val);
                    $val = $valCache[0];
                    $returnVal["weekNum"] = $valCache[1];
                }
                $returnVal["$key"] = $val;
            }
            //查询预约项目所需金额
            $merchandiseDate['source'] = 'company';
            $merchandiseDate['merchandise_id'] = $returnVal['orderMerchandise'];
            $merchandise = transferData(APIURL . "/order/get_merchandise_info", "post", $merchandiseDate);
            $merchandise = json_decode($merchandise, TRUE);
            $returnVal['merchandiseIteams'] = $merchandise['merchandise']['merchandise_name'];
            $returnVal['needMoney'] = $merchandise['merchandise']['merchandise_money'];
            //
            $postTime = strtotime($returnVal["orderDateInput"] . " " . $returnVal["orderTimeInput"]);
            $postDate["source"] = "company";
            $postDate["open_id"] = $this->userOpenId;
            $postDate["merchandise_id"] = $returnVal['orderMerchandise'];
            $postDate['order_number'] = $returnVal["porpleCountSubmit"];
            $postDate["appointment_time"] = $postTime;
            $postDate["appointment_object"] = $returnVal['orderObject'];
            if (isset($_GET['checkReturn'])) {//修改订单
                $userOrder["source"] = "company";
                $userOrder["open_id"] = $this->userOpenId;
                $userJsonData = transferData(APIURL . "/order/get_order", "post", $userOrder);
                $orderItem = json_decode($userJsonData, true);
                $orderCode = $orderItem["order"]['order_code'];
                $postDate["order_code"] = $orderCode;
                $reviseOrder = transferData(APIURL . "/order/revise_order", "post", $postDate);
                $orderChangeIsScuess = json_decode($reviseOrder, TRUE);
                if ($orderChangeIsScuess["res"] == "1") {
                    
                } else {
                    echo "failed";
                    die;
                }
            } else {//插入订单
                $userJsonData = transferData(APIURL . "/order/add", "post", $postDate);
                $thisUserData = $this->userData = json_decode($userJsonData, TRUE);
                if ($thisUserData["error"]["error_status"] == "30005") {
                    $this->errorMessage = 1;
                    return $this->cancelOrder();
                }
            }
        } else {
            $userOrder["source"] = "company";
            $userOrder["open_id"] = $this->userOpenId;
            $userJsonData = transferData(APIURL . "/order/get_order", "post", $userOrder);
            $orderItem = json_decode($userJsonData, true);
            $orderString = $orderItem["order"];
            $returnVal["porpleCountSubmit"] = $orderString['order_number'];
            $orderDate = date("Y-m-d ", $orderString['appointment_time']);
            $orderTime = date("H:i", $orderString['appointment_time']);

            $orderweek = date("w", $orderString['appointment_time']);
            $weekName = array("周日", "周一", "周二", "周三", "周四", "周五", "周六");
            $returnVal["weekNum"] = $weekName[$orderweek];
            $returnVal["orderDateInput"] = $orderDate;
            $returnVal["orderTimeInput"] = $orderTime;

            $postUserDate['source'] = "company";
            $postUserDate['merchandise_id'] = $orderString['merchandise_id'];
            $MerchandiseValue = transferData(APIURL . "/order/get_merchandise_info", "post", $postUserDate);
            $MerchandiseValue = json_decode($MerchandiseValue, true);
            $returnVal['merchandiseIteams'] = $MerchandiseValue['merchandise']['merchandise_name'];
            $returnVal['needMoney'] = $MerchandiseValue['merchandise']['merchandise_money'];
            $returnVal['orderMerchandise'] = $orderString['merchandise_id'];
            $returnVal['orderObject'] = $orderString['appointment_object'];
        }
        header("Content-Type:text/html;charset=utf8");
        $this->assign("returnVal", $returnVal);
        // $this->assign('open_id', $_REQUEST['open_id']);
        $this->display();
    }

    //取消订单
    public function cancelOrder() {
        //$this->userOpenId = $_REQUEST['open_id'];
        if ($this->errorMessage != "") {
            $this->assign("errorMessage", "您已经有激活的订单，请修改或者取消后再进行预约");
            $this->errorMessage = "";
        }
        $userGetOrder["source"] = "company";
        $userGetOrder["open_id"] = $_REQUEST['open_id'];
        $userOrderJsonData = transferData(APIURL . "/order/get_order", "post", $userGetOrder);
        $userOrderData = json_decode($userOrderJsonData, TRUE);
        if (isset($_GET["toCancel"])) {
            $orderCode = $userOrderData['order']['order_code'];
            $userOrderChange["order_code"] = $orderCode;
            $userOrderChange["order_state"] = '2';
            $userOrderChange["open_id"] = $userGetOrder["open_id"];
            $userOrderChange["source"] = $userGetOrder["source"];

            $reviseOrderStateReturnJsonValue = transferData(APIURL . "/order/revise_order_state", "post", $userOrderChange); //取消订单

            $reviseOrderStateReturnValue = json_decode($reviseOrderStateReturnJsonValue, true);
            if ($reviseOrderStateReturnValue['res'] == '1') {
                echo "取消成功";
            } else if ($reviseOrderStateReturnValue['error'] != "") {
                echo "取消失败，失败代码：" . $reviseOrderStateReturnValue['error']['error_status'] . "<br>失败信息" . $reviseOrderStateReturnValue['error']['status_info'];
            }
        } else {
            $activateOrderJsonValue = transferData(APIURL . "/order/get_order", "post", $userGetOrder);
            $activateOrderValue = json_decode($activateOrderJsonValue, TRUE);
            if (empty($activateOrderValue['order'])) {
                echo '你没有可以取消的订单';
            } else {

                $orderDate = date("Y-m-d ", $activateOrderValue['order']['appointment_time']);
                $orderTime = date("H:i", $activateOrderValue['order']['appointment_time']);

                $orderweek = date("w", $activateOrderValue['order']['appointment_time']);
                $weekName = array("周日", "周一", "周二", "周三", "周四", "周五", "周六");
                $activateOrderValue["order"]["weekNum"] = $weekName[$orderweek];
                $activateOrderValue["order"]["orderDateInput"] = $orderDate;
                $activateOrderValue["order"]["orderTimeInput"] = $orderTime;

                $postUserDate['source'] = "company";
                $postUserDate['merchandise_id'] = $activateOrderValue["order"]['merchandise_id'];
                $MerchandiseValue = transferData(APIURL . "/order/get_merchandise_info", "post", $postUserDate);
                $MerchandiseValue = json_decode($MerchandiseValue, true);
                $activateOrderValue["order"]['orderMerchandise'] = $MerchandiseValue['merchandise']['merchandise_name'];
                $activateOrderValue["order"]['needMoney'] = $MerchandiseValue['merchandise']['merchandise_money'];

                $this->assign("returnVal", $activateOrderValue["order"]);
                $this->assign('open_id', $_REQUEST['open_id']);
                $this->display("cancelOrder");
            }
        }
    }

    public function getAllOrder() {
       // $this->userOpenId = $_REQUEST['open_id'];
        $postUserDate['source'] = "company";
        $postUserDate['open_id'] = $this->userOpenId;
        $DateValue = transferData(APIURL . "/order/get_order_all", "post", $postUserDate);
        $DateValue = json_decode($DateValue, TRUE);
        $this->assign("orders", $DateValue['order']);
        $this->display();
    }

    public function register() {


     

        $this->display();
    }


 /**
     * 提交注册
     */

    public function submitRegister(){

        $mobilephone = $_POST['phoneNumber'];

        $userName = $_POST['userName'];
        if (!empty($userName)) {
                    if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$mobilephone)){   
                $data = array();
                //$data['open_id'] = 'ocpOotwOr44N8_zpyG7LttDgZscw';
                $data['open_id'] = $_POST['open_id'];
                $data['source'] = 'company';
                $data['user_name'] = $_POST['userName'];
                $data['sex'] = $_POST['gender'];
                $data['user_phone'] = $_POST['phoneNumber'];
                $data['birthday'] = strtotime($_POST['year'].$_POST['month'].$_POST['date']);

                $resultRename = transferData(APIURL.'/user/able_user/','post',$data);
                $res = json_decode($resultRename,true);


                if($res['success'] == 1){
                    $resultRegister = transferData(APIURL.'/user/add','post',$data);
                    $resultRegister = json_decode($resultRegister,true);

                    if($resultRegister['user']['user_id'] > 0){
                        echo "注册成功";
                        // 注册成功后跳转会员中心
                    }

                }else{

                    echo "已被注册过";

                }

                }else{   

                echo "格式不正确";
            }   


        }else{

            echo "用户名不能为空";
        }

    }



    /**
     * 用户积分
     */

    
    public function  userCenter(){


    	$this->display();

    }

    public function userInfo(){

    	$this->display();

    }

    /**
     * 用户积分
     */
    public function userJf(){

        $this->display();
    }

    /**
     * 用户签到
     */

    public function userlogin(){


    }


     /**
     *  激活页面
     */
    public function ativating() {


        $this->display();
    }


    //兑换物品
    public function changeGoods() {

        //$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['goodsId'])) {
            $postDate["source"] = "company";
            $postDate['open_id'] = $this->userOpenId;
            $goodsId = $_GET['goodsId'];
            $exchangeItem = transferData(APIURL . "/exchange/get_exchange_info?exchange_id=" . $_GET['goodsId'], "get");
            $exchangeItem = json_decode($exchangeItem, true);
            if ($exchangeItem['exchange_info']["exchange_type"] == "1") {
                $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
                $userInfo = json_decode($userInfo, TRUE);
                if ($userInfo['user']['province_id'] == "0") {
                    //填写信息
                } else {
                    //显示地址页面
                }
            } else {
                $postDate["source"] = "company";
                $postDate['open_id'] = $this->userOpenId;
                $postDate['id'] = $goodsId;
                $exchangeList = transferData(APIURL . "/exchange/redeem", "post", $postDate);
                var_dump($exchangeList);
            }
            var_dump($exchangeItem);
            die;
        }
    }
    public function locationCheck() {
        $getProvince = transferData(APIURL . "/area/get_area", "get");
        $getProvince = json_decode($getProvince, true);
        $this->assign("provinceValue", $getProvince);
        $this->display();
    }


}




?>
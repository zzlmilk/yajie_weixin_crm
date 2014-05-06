<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reserveController
 *
 * @author zhaixiaoping
 */
class reserveController extends BaseController {

    //put your code here

    public function __construct() {


        header("Content-type:text/html;charset=utf-8");

        if (!empty($_REQUEST['open_id'])) {

            $this->userOpenId = $_REQUEST['open_id'];
        } else {
            $this->userOpenId = 'ocpOot-COx7UruiqEfag_Lny7dlc';         
        }

        $this->assign('open_id', $this->userOpenId);
    }

    /**
     * 下订单 和修改订单
     */
    public function order() {


        $this->able_register();
        //$this->userOpenId = $_REQUEST['open_id'];
        if (isset($_GET['checkReturn'])) {
            $this->assign("checkReturn", $_GET['checkReturn']);
            $this->assign("returnVal", $_POST);
        }
        $userOrder["source"] = SOURCE;
        $userOrder["open_id"] = $this->userOpenId;

        $userJsonData = transferData(APIURL . "/order/get_order", "post", $userOrder);
        $orderItem = json_decode($userJsonData, true);
        $error = new errorApi();
        $error->JudgeError($orderItem);
        $nowTime = time();
        $orderTime = $orderItem["order"]["appointment_time"];
        if ($_GET["checkReturn"] == 1) {
            
        } else if ((int) $orderTime > $nowTime) {
            $this->displayMessage("你已经有正在进行的订单，请执行<a href='" . WebSiteUrl . "?g=".SOURCE."&a=order&v=orderCheck&open_id=" . $this->userOpenId . "'>编辑</a>操作");
        }
        $selectReturnVal = transferData(APIURL . "/order/get_merchandise", "get");
        
       
        $selectVal = json_decode($selectReturnVal, true);

        $error->JudgeError($selectVal);
        //var_dump($selectReturnVal);
        $this->assign("selectVal", $selectVal);

        // $this->assign('open_id', $_REQUEST['open_id']);
        $this->display();
    }

    /**
     *  查看订单
     */
    public function orderCheck() {

        $this->able_register();
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
            $merchandiseDate['source'] = SOURCE;
            $merchandiseDate['merchandise_id'] = $returnVal['orderMerchandise'];
            $merchandise = transferData(APIURL . "/order/get_merchandise_info", "post", $merchandiseDate);
            $merchandise = json_decode($merchandise, TRUE);

            $error = new errorApi();

            $error->JudgeError($merchandise);

            $returnVal['merchandiseIteams'] = $merchandise['merchandise']['merchandise_name'];
            $returnVal['needMoney'] = $merchandise['merchandise']['merchandise_money'];
            //
            $postTime = strtotime($returnVal["orderDateInput"] . " " . $returnVal["orderTimeInput"]);
            $postDate["source"] = SOURCE;
            $postDate["open_id"] = $this->userOpenId;
            $postDate["merchandise_id"] = $returnVal['orderMerchandise'];
            $postDate['order_number'] = $returnVal["porpleCountSubmit"];
            $postDate["appointment_time"] = $postTime;
            $postDate["appointment_object"] = $returnVal['orderObject'];
            if (isset($_GET['checkReturn'])) {//修改订单
                $userOrder["source"] =SOURCE;
                $userOrder["open_id"] = $this->userOpenId;
                $userJsonData = transferData(APIURL . "/order/get_order", "post", $userOrder);
                $orderItem = json_decode($userJsonData, true);
                $error = new errorApi();

                $error->JudgeError($orderItem);


                $orderCode = $orderItem["order"]['order_code'];
                $postDate["order_code"] = $orderCode;
                $reviseOrder = transferData(APIURL . "/order/revise_order", "post", $postDate);
                $orderChangeIsScuess = json_decode($reviseOrder, TRUE);

                if ($orderChangeIsScuess["res"] == "1") {
                    
                } else {

                    $this->displayMessage('failed');
                    die;
                }
            } else {//插入订单
                $userJsonData = transferData(APIURL . "/order/add", "post", $postDate);
                $thisUserData = $this->userData = json_decode($userJsonData, TRUE);

                $error = new errorApi();
                $error->JudgeError($thisUserData);

                if ($thisUserData["error"]["error_status"] == "30005") {
                    $this->errorMessage = 1;
                    return $this->cancelOrder();
                } else if ($thisUserData["error"]["error_status"] == "30006") {

                    $this->displayMessage($thisUserData["error"]["status_info"]);
                    return;
                }
            }
        } else {
            $userOrder["source"] = SOURCE;
            $userOrder["open_id"] = $this->userOpenId;
            $userJsonData = transferData(APIURL . "/order/get_order", "post", $userOrder);
            $orderItem = json_decode($userJsonData, true);
            if (empty($orderItem['order'])) {

                $this->displayMessage('暂无订单');

                die;
            }

            $orderString = $orderItem["order"];
            if (time() >= $orderString['appointment_time']) {
                $returnVal['orderState'] = "1";
            }
            $returnVal["porpleCountSubmit"] = $orderString['order_number'];
            $orderDate = date("Y-m-d ", $orderString['appointment_time']);
            $orderTime = date("H:i", $orderString['appointment_time']);

            $orderweek = date("w", $orderString['appointment_time']);
            $weekName = array("周日", "周一", "周二", "周三", "周四", "周五", "周六");
            $returnVal["weekNum"] = $weekName[$orderweek];
            $returnVal["orderDateInput"] = $orderDate;
            $returnVal["orderTimeInput"] = $orderTime;

            $postUserDate['source'] = SOURCE;
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

        $this->able_register();

        //$this->userOpenId = $_REQUEST['open_id'];
        if ($this->errorMessage != "") {
            $this->assign("errorMessage", "您已经有激活的订单，请修改或者取消后再进行预约");
            $this->errorMessage = "";
        }
        $userGetOrder["source"] = SOURCE;
        $userGetOrder["open_id"] = $this->userOpenId;
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

            $error = new errorApi();

            $error->JudgeError($reviseOrderStateReturnValue);

            if ($reviseOrderStateReturnValue['res'] == '1') {

                $this->displayMessage("取消成功<a href='" . WebSiteUrl . "?g=company&a=user&v=order'>返回</a>");
            }
        } else {
            $activateOrderJsonValue = transferData(APIURL . "/order/get_order", "post", $userGetOrder);
            $activateOrderValue = json_decode($activateOrderJsonValue, TRUE);

            $error = new errorApi();

            $error->JudgeError($reviseOrderStateReturnValue);

            if (empty($activateOrderValue['order'])) {

                $this->displayMessage('你没有可以取消的订单');
            } else {

                $orderDate = date("Y-m-d ", $activateOrderValue['order']['appointment_time']);
                $orderTime = date("H:i", $activateOrderValue['order']['appointment_time']);

                $orderweek = date("w", $activateOrderValue['order']['appointment_time']);
                $weekName = array("周日", "周一", "周二", "周三", "周四", "周五", "周六");
                $activateOrderValue["order"]["weekNum"] = $weekName[$orderweek];
                $activateOrderValue["order"]["orderDateInput"] = $orderDate;
                $activateOrderValue["order"]["orderTimeInput"] = $orderTime;

                $postUserDate['source'] = SOURCE;
                $postUserDate['merchandise_id'] = $activateOrderValue["order"]['merchandise_id'];
                $MerchandiseValue = transferData(APIURL . "/order/get_merchandise_info", "post", $postUserDate);
                $MerchandiseValue = json_decode($MerchandiseValue, true);
                $activateOrderValue["order"]['orderMerchandise'] = $MerchandiseValue['merchandise']['merchandise_name'];
                $activateOrderValue["order"]['needMoney'] = $MerchandiseValue['merchandise']['merchandise_money'];

                $this->assign("returnVal", $activateOrderValue["order"]);
                $this->assign('open_id', $this->userOpenId);
                $this->display("cancelOrder");
            }
        }
    }

    public function getAllOrder() {

        $this->able_register();

        // $this->userOpenId = $_REQUEST['open_id'];
        $postUserDate['source'] = SOURCE;
        $postUserDate['open_id'] = $this->userOpenId;
        $DateValue = transferData(APIURL . "/order/get_order_all", "post", $postUserDate);
        $DateValue = json_decode($DateValue, TRUE);
        $this->assign("orders", $DateValue['order']);
        $this->display();
    }

    //支付
    public function payment() {
        $this->able_register();
        $postDate["source"] = SOURCE;
        $postDate['open_id'] = $this->userOpenId;
        $userInfo = transferData(APIURL . "/user/get_info", "post", $postDate);
        $userInfo = json_decode($userInfo, TRUE);
        $error = new errorApi();
        $error->JudgeError($userInfo);

        $promoInfo = transferData(APIURL . "/code/getUserCode", "post", $postDate);
        $promoInfo = json_decode($promoInfo, true);
        $error->JudgeError($promoInfo);

        $userJsonData = transferData(APIURL . "/order/get_order", "post", $postDate);
        $orderItem = json_decode($userJsonData, true);
        $error->JudgeError($orderItem);
        $nowTime = time();
        $userOrder = $orderItem["order"];
        $merchandiseDate['source'] = SOURCE;
        $merchandiseDate['merchandise_id'] = $userOrder['merchandise_id'];
        $merchandise = transferData(APIURL . "/order/get_merchandise_info", "post", $merchandiseDate);
        $merchandise = json_decode($merchandise, TRUE);
        $error->JudgeError($merchandise);
        $costMoney = $merchandise['merchandise']["merchandise_money"];
        if ($nowTime > $userOrder["appointment_time"]) {

            $this->displayMessage("您的订单已经过期，请重新<a href='" . WebSiteUrl . "?g=company&a=order&v=order&open_id=" . $this->userOpenId . "'>预约</a>。");
        }
        $userName = $userInfo["weixin_user"]["nickname"];
        $this->assign("promoInfo", $promoInfo["list"]);
        $this->assign("costMoney", $costMoney);
        $this->assign("userName", $userName);
        $this->display();
    }

    public function orderPayPage() {
        $error = new errorApi();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $payData["source"] = SOURCE;
            $payData['open_id'] = $this->userOpenId;
            $userJsonData = transferData(APIURL . "/order/get_order", "post", $payData);
            $orderItem = json_decode($userJsonData, true);
            $error->JudgeError($orderItem);
            $userOrder = $orderItem["order"];
            $payData["order_price"] = $_POST["costMoney"];
            $payData["order_code"] = $userOrder["order_code"];
            $payData["commodity_id"] = $_POST["promoSelect"];
            if ($_GET["payType"] == "weixin") {
                
            } else if ($_GET["payType"] == "store") {
                $this->displayMessage("您已经成功提交订单，请在预约时间内到店消费。<a href='" . WebSiteUrl . "?g=".SOURCE."&a=order&v=orderCheck&open_id=" . $this->userOpenId . "'>查看订单</a>");
            }
//                $pay = transferData(APIURL . "/order/revise_order_pay", "post", $payData);
//                $pay = json_decode($pay, TRUE);
//                $error->JudgeError($pay);
//                if ($pay["res"] == 1) {
//                    $this->displayMessage("您已经成功提交订单，请在预约时间内到店消费。<a href='" . WebSiteUrl . "?g=company&a=order&v=orderCheck&open_id=" . $this->userOpenId . "'>查看订单</a>");
//                } else {
//                    $this->displayMessage("预约请求失败请<a href='" . WebSiteUrl . "?g=company&a=order&v=orderCheck&open_id=" . $this->userOpenId . "'>查看订单</a>后重试。");
//                }
//            }
        } else {
            $this->displayMessage("url请求出错请<a href='" . WebSiteUrl . "?g=".SOURCE."&a=order&v=orderCheck&open_id=" . $this->userOpenId . "'>返回</a>重试。");
        }
    }

}

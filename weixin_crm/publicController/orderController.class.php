<?php

class orderController {

    public $errorMessage = "";

    public function getOrderlist() {
        $pageSize = 4;
        $orderModel = new orderModel();
        $joinString = ' LEFT JOIN merchandise ON merchandise.merchandise_id = order.merchandise_id ';
        $orderModel->addJoin($joinString);
        $orderModel->initialize("order_state <= 1");
        $orderNumber = $orderModel->vars_number;
        $orderModel->addOffset(0, $pageSize);
        $orderModel->initialize();
        $orderList = $orderModel->vars_all;
        $_ENV['smarty']->setDirTemplates('order');
        $_ENV['smarty']->assign('orderList', $orderList);
        $url = WebSiteUrl . "/pageredirst.php?action=order&functionname=orderListPage";
        $page = $_ENV['smarty']->getPages($url, 1, $orderNumber, $pageSize);
        $_ENV['smarty']->assign('pages', $page);
        $_ENV['smarty']->assign('errorMessage', $this->errorMessage);
        $_ENV['smarty']->display('orderList');
    }

    public function orderListPage() {
        if (isset($_GET["page"])) {
            $pageSize = 4;
            $pageNumber = $_GET["page"];
            $orderModel = new orderModel();
            $orderModel->initialize("order_state <= 1");
            $joinString = ' LEFT JOIN merchandise ON merchandise.merchandise_id = order.merchandise_id ';
            $orderModel->addJoin($joinString);
            $orderNumber = $orderModel->vars_number;
            $dateCount = $pageSize * ($pageNumber - 1);
            $orderModel->addOffset($dateCount, $pageSize);
            $orderModel->initialize();
            $orderList = $orderModel->vars_all;
            $_ENV['smarty']->setDirTemplates('order');
            $_ENV['smarty']->assign('orderList', $orderList);
            $url = WebSiteUrl . "/pageredirst.php?action=order&functionname=orderListPage";
            $page = $_ENV['smarty']->getPages($url, $pageNumber, $orderNumber, $pageSize);
            $_ENV['smarty']->assign('pages', $page);
            $_ENV['smarty']->display('orderList');
        } else {
            $this->getOrderlist();
        }
    }

    public function orderEdit() {
        $errorFlag = true;
        if (isset($_GET['orderCode'])) {
            $orderCode = $_GET['orderCode'];
            $orderModel = new orderModel();
            $orderModel->initialize("order_code=$orderCode");
            $orderCount = $orderModel->vars_number;
            if ($orderCount > 0) {
                $orderData = $orderModel->vars;
                $merchandise = new MerchandiseModel();
                $merchandise->initialize();
                $merchandiseIteams = $merchandise->vars_all;
            } else {
                $errorFlag = FALSE;
                $errorMessage = "未搜索到该用户请刷新后重试";
            }
        } else {
            $errorFlag = FALSE;
            $errorMessage = "非法的登入请重试";
        }
        $_ENV['smarty']->setDirTemplates('order');
        $returnData = $errorFlag ? $orderData : $errorMessage;
        $_ENV['smarty']->assign('orderData', $returnData);
        $_ENV['smarty']->assign('merchandise', $merchandiseIteams);
        $_ENV['smarty']->assign('errorFlag', $errorFlag);
        $_ENV['smarty']->display('orderEdit');
    }

    public function seachOrder() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errorFlag = true;
            if (!empty($_POST['selectText'])) {
                $orderCode = $_POST['selectText'];
                $orderModel = new orderModel();
                $joinString = ' LEFT JOIN merchandise ON merchandise.merchandise_id = order.merchandise_id ';
                $orderModel->addJoin($joinString);
                $orderModel->initialize("order_state<=0 and (order_code = '" . $orderCode . "' or user_phone = '" . $orderCode . "')");
                if ($orderModel->vars_number>0) {
                    $reVal = $orderModel->vars_all;

                    $errorFlag = false;
                } else {
                    $this->errorMessage = "未找到对应的订单号码请确认后重新输入";
                }
            } else {
                $this->errorMessage = "订单号码不能为空，请确认后重新输入";
            }
        }
        if ($errorFlag) {
            $this->getOrderlist();
        } else {
            $_ENV['smarty']->setDirTemplates('order');
            $_ENV['smarty']->assign('orderList', $reVal);
            $_ENV['smarty']->display('orderList');
        }
    }

    public function orderAdd() {
        $merchandise = new MerchandiseModel();
        $merchandise->initialize();
        $merchandiseIteams = $merchandise->vars_all;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $insertDate['order_code'] = date("YmdHis", time()) . rand(10, 99);
            $insertDate["appointment_time"] = strtotime($_POST['orderTime']);
            $insertDate["appointment_object"] = $_POST['appointment_object'];
            $insertDate["orders_remarks"] = $_POST['orders_remarks'];
            $insertDate["merchandise_id"] = $_POST['merchandise_id'];
            $insertDate["user_phone"] = $_POST['userPhone'];
            $insertDate["order_type"] = 2;
            $insertDate["order_state"] = 0;
            $insertDate["order_time"] = date(time());
            $insertDate["order_number"] = $_POST['order_number'];
            $insertDate['order_pay_state'] = $_POST["order_pay_state"];
            $this->addOrder($insertDate);
            return $this->getOrderlist();
        }

        $_ENV['smarty']->setDirTemplates('order');
        $_ENV['smarty']->assign('merchandiseIteams', $merchandiseIteams);
        $_ENV['smarty']->display('orderAdd');
    }

    public function orderUpdata() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST)) {
                $orderCode = $_POST['order_code'];
                $upDatas['appointment_time'] = strtotime($_POST['orderTime']);
                 $upDatas["appointment_object"] = $_POST['appointment_object'];
                $upDatas["orders_remarks"] = $_POST['orders_remarks'];
                $upDatas["merchandise_id"] = $_POST['merchandise_id'];
                $upDatas["user_phone"] = $_POST['user_phone'];
                $upDatas["order_number"] = $_POST['order_number'];
                $upDatas['order_pay_state'] = $_POST["order_pay_state"];
                $this->updateOrder($upDatas, $orderCode);
                $this->getOrderlist();
            } else {
                
            }
        } else {
            
        }
    }

    public function cancelReservation() {
        if (isset($_GET['orderCode'])) {
            $upDatas['order_state'] = 2;
            $this->updateOrder($upDatas, $_GET['orderCode']);
            $this->getOrderlist();
        } else {
            echo"非法的请求 请返回后重试！";
        }
    }

    public function addOrder($data) {

        if (is_array($data) && count($data) > 0) {

            $order = new orderModel();

            $order->insert($data);
        }
    }

    public function updateOrder($data, $orderNumber) {


        if (is_array($data) && count($data) > 0) {

            $order = new orderModel();

            $order->initialize('order_code like "' . $orderNumber . '"');

            if ($order->vars_number > 0) {

                $order->update($data);
            }
        }
    }

    public function deleteOrder($order_number) {

        if (!empty($order_number)) {

            $order = new orderModel();

            $order->initialize('order_code like "' . $order_number . '"');

            if ($order->vars_number > 0) {

                $order->remove();
            }
        }
    }

}

?>
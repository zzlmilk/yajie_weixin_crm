<?php

class orderController {

    public function getOrderlist() {
        
        $orderModel = new orderModel();
        $joinString=' LEFT JOIN merchandise ON merchandise.merchandise_id = order.merchandise_id ';
        $orderModel->addJoin($joinString);
        $orderModel->initialize();
       $orderList= $orderModel->vars_all;
        $_ENV['smarty']->setDirTemplates('order');
        $_ENV['smarty']->assign('orderList', $orderList);
        $_ENV['smarty']->display('orderList');
    }
    public function editOrder(){
        
    }
    public function orderAdd(){
        $merchandise=new MerchandiseModel();
        $merchandise->initialize();
        $merchandiseIteams=$merchandise->vars_all;
        var_dump($merchandiseIteams);
        $_ENV['smarty']->setDirTemplates('order');
        $_ENV['smarty']->assign('merchandiseIteams', $merchandiseIteams);
        $_ENV['smarty']->display('orderAdd');
    }
    public function cancelReservation(){
       if(isset($_GET['orderCode'])){
           $this->deleteOrder($_GET['orderCode']);
        }
        else{
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
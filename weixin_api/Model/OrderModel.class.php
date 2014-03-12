<?php


class OrderModel  extends Basic{



	public function __construct() {

		$this->child_name = 'order';

		parent::__construct();

    }


    /**
     * 创建订单
     */

    public function crearteOrder($result,$userInfo){

    	$data['user_id'] = $userInfo['user_id'];

        $data['user_phone'] = $userInfo['user_phone'];

    	$data['merchandise_id'] = $result['merchandise_id'];

        $data['appointment_time'] = $result['appointment_time'];

        $data['appointment_object'] = $result['appointment_object'];

    	$data['order_type'] = 1;

    	$data['order_state'] = 0;

    	$data['order_time'] = time();

    	$data['order_money'] = $result['order_money'];

    	$data['order_code'] = date('Ymdhis').rand(10,99);

    	$this->insert($data);

    	return $data;
    }

    /**
     * 修改订单状态
     */
    public function updateOrderState($orderNumber){


        $order = new OrderModel();

        $order->addCondition('order_code like "'.$orderNumber.'"',1);

        $order->initialize();

        if($order->vars_number > 0 ){

            $update['order_state'] = 1;

            $order->update($update);

            return 1;

        }
    }

}

?>
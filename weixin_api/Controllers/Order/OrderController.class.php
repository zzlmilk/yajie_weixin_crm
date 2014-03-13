<?php

class OrderController  implements Order{


	/**
	 * 下订单
	 */
	public function  add(){

		if(!empty($_REQUEST['source'])){

			if(!empty($_REQUEST['open_id'])  && !empty($_REQUEST['merchandise_id'])){

				if(!empty($_REQUEST['order_money']) && $_REQUEST['order_money'] > 0){

					if(!empty($_REQUEST['appointment_time'])){

						$user = new userModel();

						$userInfo = $user->getUserInfo($_REQUEST['open_id']);

						$orderModel = new OrderModel();

						$orderInfo['order'] =  $orderModel->crearteOrder($_REQUEST,$userInfo);

						$orderInfo['user']  = arrayToObject($userInfo);

						AssemblyJson($orderInfo);

					} else{

						echoErrorCode(30002);
					}
				}else{


					echoErrorCode(30001);
				}

			}

		}
		
	}

	/**
	 * 修改订单状态  将状态修改为成功支付
	 */

	public function revise_order_state(){

		if(!empty($_REQUEST['source'])){

			if(!empty($_REQUEST['order_number'])){

				$orderModel = new OrderModel();

				$state = $orderModel->updateOrderState($_REQUEST['order_number']);

				$array['state'] = 1;

				AssemblyJson($array);

			}

		}

	}

}

?>
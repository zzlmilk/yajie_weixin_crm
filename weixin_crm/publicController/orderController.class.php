<?php

class orderController  {



	public function getOrderlist(){


	}


	public function addOrder($data){

		if(is_array($data) && count($data)>0){

			$order = new orderModel();

			$order->insert($data);

		}
	}

	public function updateOrder($data,$orderNumber){


		if(is_array($data) && count($data)>0){

			$order = new orderModel();

			$order->initialize('order_code like "'.$orderNumber.'"');

			if($order->vars_number > 0){

				$order->update($data);

			}
		}


	}

	public function deleteOrder($order_number){

		if(!empty($order_number)){

			$order = new orderModel();

			$order->initialize('order_code like "'.$order_number.'"');

			if($order->vars_number > 0){

				$order->remove();

			}
		}


	}

}

?>
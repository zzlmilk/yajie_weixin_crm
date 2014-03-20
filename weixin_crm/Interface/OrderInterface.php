<?php

interface order {


	/**
	 * 获取订单列表
	 */

	public function getOrderlist();

	/**
	 * 添加订单
	 */

	public function addOrder();

	/**
	 * 修改订单
	 */
	public function updateOrder();

	/**
	 * 删除订单
	 */
	public function deleteOrder();

}

?>
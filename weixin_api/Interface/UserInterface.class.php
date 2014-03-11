<?php

interface user {

	/**
	 * 用户注册  v1
	 */
	public function add();

	/**
	 * 用户积分 累加  v1
	 */

	public function add_user_integration();

	/**
	 * 判断用户是否已经注册
	 */

	public function able_user();


	public function add_user_money();


}

?>
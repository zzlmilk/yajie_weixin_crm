<?php

interface user {

	/**
	 * 用户注册  v1
	 */
	public function add();
	/**
	 * 获取单个用户信息  v1
	 */

	public function get_info();
	/**
	 *  获取全部用户信息  v1
	 */

	public function get_info_all();
	/**
	 * 修改用户信息  v1
	 */

	public function  revise_user();
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
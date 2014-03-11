<?php

interface User{

	public function searchUser();


	public function addUser($data);
	

	public function updateUser($data,$user_id);


	public function deleteUser($user_id);

	/**
	 * 添加用户积分  user_id  用户id  integration  积分
	 */
	public function addPointer($user_id,$integration);

	/**
	 * 添加用户金钱  user_id  用户id  money  积分
	 */

	public function addMoney($user_id,$money);
	/**
	 *  减少用户积分 
	 *  user_id  int  用户id    intergration  需用户减少的积分
	 */
	public  function reductionPointer($user_id,$integration);
	/**
	 *  减少用户金钱 
	 *  user_id  int  用户id    money  需用户减少的积分
	 */
	public  function reductionMoney($user_id,$money);

}

?>
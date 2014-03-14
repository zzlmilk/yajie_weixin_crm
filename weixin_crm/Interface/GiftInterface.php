<?php

interface  gift{

	public function  getGiftList($type);

	public function  updateGift($data);

	/**
	 *  获取刮刮卡礼品列表
	 */
	public function  getCardList();
	/**
	 *  获取大转盘礼品列表
	 */
	public function  getBigWheelList();

}
?>
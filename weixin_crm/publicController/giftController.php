<?php


class giftController implements gift {



		public function  getGiftList($type){

		}

	public function  updateGift($data){

	}

	public function addGift($data){

	}

	public function deleteGift($data){

	}

	/**
	 *  获取刮刮卡礼品列表
	 */
	public function  getCardList(){

		$_ENV['smarty']->setDirTemplates('gift');

		$_ENV['smarty']->assign('name',111);

		$_ENV['smarty']->display('getCardList');

	}
	/**
	 *  获取大转盘礼品列表
	 */
	public function  getBigWheelList(){

		$_ENV['smarty']->setDirTemplates('gift');

		$_ENV['smarty']->assign('name',1234);

		$_ENV['smarty']->display('getBigWheelList');


	}
	

}


?>
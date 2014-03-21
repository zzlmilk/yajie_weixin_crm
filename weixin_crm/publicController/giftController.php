<?php


class giftController implements gift {



	public function  getGiftList($type){

	}

	public function  updateGift($data){

	}


	/*
	*修改大转盘游戏 一二三等奖的概率配置
	**/
	public function updateGiftRate(){

		if(!empty($_REQUEST['gift_type']) && $_REQUEST['gift_type'] > 0 ){

			$giftSettingModel = new giftSettingModel();

	  		$giftSettingModel->initialize('gift_type = '.$_REQUEST['gift_type']);

	  		if($giftSettingModel->vars_number > 0){


	  				$data = array();

	  				if($_REQUEST['gift_one_probability'] != null && $_REQUEST['gift_two_probability']!= null && $_REQUEST['gift_three_probability']!= null){


	  					$data['gift_one_probability'] = $_POST['gift_one_probability'];
						$data['gift_two_probability'] = $_POST['gift_two_probability'];
						$data['gift_three_probability'] = $_POST['gift_three_probability'];

						$giftSettingModel->update($data);

						echo "<script>alert('修改成功');</script>";

	  				}

	  		}

		}
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


		$giftSetting = new giftSettingModel(1);

		 $giftSetting->initialize('gift_type = 1');


		 $_ENV['smarty']->assign('giftSetting',$giftSetting->vars);


		$_ENV['smarty']->setDirTemplates('gift');

		$_ENV['smarty']->assign('name',1234);

		$_ENV['smarty']->display('getBigWheelList');

	}

	/**
	 *获取一二三等奖的概率
	*/

	public function  getProbabilityInfo(){

		$_ENV['smarty']->setDirTemplates('gift');

		$_ENV['smarty']->assign('name',1234);

		$_ENV['smarty']->display('getBigWheelList');

	}
	

}


?>
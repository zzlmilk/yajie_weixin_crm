<?php


class GiftController  implements gift{


	/**
	 * 大转盘 中奖返回
	 */

	public function get_probability_wheel(){


		if(!empty($_REQUEST['source'])){

			$gift_setting = new GiftSettingModel();

			$gift_id = $gift_setting->cipher_probability();

			$array['gift_id'] = $gift_id;

			AssemblyJson($array);

		}
		
		
	}


	public function recevice_award(){


		if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])){


			if(!empty($_REQUEST['gift_id']) && $_REQUEST['gift_id'] >0){

				$gift = new giftModel();

				$gift_info = $gift->getGiftInfo($_REQUEST['gift_id'],1);

				$gift->getAwardByGift($gift_info,$_REQUEST['open_id']);

			}

		}

	}


}

?>
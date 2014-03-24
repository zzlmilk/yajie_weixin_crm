<?php


class ApplyController implements Apply{



	/**
	 * 优惠码绑定
	 */
	public function addCode(){

		if(!empty($_REQUEST['source']) &&!empty($_REQUEST['code_id'])&&!empty($_REQUEST['open_id'])){

			$code = new  PromoCodeRecordModel();

			$info = $code->addCode($_REQUEST);

			AssemblyJson($info);
		}

	}

	/**
	 * 获取用户优惠吗记录
	 */
	public function get_code(){

		if(!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])){

			$apply = new ApplyModel();

			$apply_all = $apply->getInfoAll($_REQUEST['open_id']);

			$apply_array = array();

			foreach($apply_all as $k=>$v){

				$apply_array[$k] = arrayToObject($v,0);

			}

			$array['apply_record'] = $apply_array;

			AssemblyJson($array);

		}

	}

}


?>
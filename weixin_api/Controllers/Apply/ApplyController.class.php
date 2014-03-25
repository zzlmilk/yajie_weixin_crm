<?php


class ApplyController implements Apply{



	/**
	 * 添加活动申请
	 */
	public function addApply(){

		if(!empty($_REQUEST['source']) &&!empty($_REQUEST['real_name']) && !empty($_REQUEST['user_phone']) && !empty($_REQUEST['activity_id'])){

			$apply = new  ApplyModel();

			$info = $apply->addApply($_REQUEST);

			AssemblyJson($info);
		} else{

			echoErrorCode(105);
		}

	}

	/**
	 * 获取用户活动申请记录
	 */
	public function get_apply_number(){

		if(!empty($_REQUEST['source'])){

			$apply = new ApplyModel();

			$apply_all = $apply->getInfoAll();

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
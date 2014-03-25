<?php


class CodeController implements Code{



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
	 * 获取优惠吗
	 */
	public function get_code(){

		if(!empty($_REQUEST['source'])){

			$code = new  PromoCodeModel();

			$code = $code->getCode();

			AssemblyJson($code);

		}

	}

}


?>
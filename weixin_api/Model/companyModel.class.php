<?php

class companyModel extends Basic{


	protected  $tableName = 'company';



	public function create($info){

		$companyArray = array();

		$companyArray['company_code'] = 'WX'.date('Ymd').time();

		$companyArray['company_token'] = $info['token'];

		if(!empty($info['appid'])){

			$companyArray['app_id'] = $info['appid'];
		}
		
		if(!empty($info['app_secret'])){

			$companyArray['app_secret'] = $info['app_secret'];
		}

		$companyArray['create_time'] = time();

		$this->insert($companyArray);


		arrayToObject($companyArray,1);

		die;
		
	}


	public function create_company(){


		
	}



}
?>
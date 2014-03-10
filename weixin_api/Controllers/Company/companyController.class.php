<?php

class companyController {



	public function add(){


		$company = new companyModel();


		$info['token']  = 'company';

		$company->create($info);
	}


	public function get_info(){

		if(!empty($_REQUEST['company_token'])){


			

		}

	}



}

?>
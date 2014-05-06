<?php

class companyTokenModel extends Basic {

	public function __construct($id =null) {

		$this->child_name = 'company_token';

		$this->dbname = 'weixin';

		parent::__construct();

		  if ($id) {
            $obj['company_id'] = $id;
            $this->initialize($obj);
        }
    }

    public function getToken($id,$appid,$sercet){

    	 $obj['company_id'] = $id;
         $this->initialize($obj);

         if($this->vars_number > 0){

         	$today_time = time() - (int)$this->vars['application_time'];

         	if($today_time > 7200){

         	  $token = getWeixinToken($appid,$sercet);

         	} else{

         		$token = $this->vars['token'];
         	}
         } else{


         	$token = getWeixinToken($appid,$sercet);
         }

         return $token;

    }


}
?>
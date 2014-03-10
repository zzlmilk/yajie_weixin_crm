<?php


class adminModel extends Basic{

	public function __construct() {

		$this->child_name = 'admin';

		parent::__construct();

    }


    public function  getAdminInfo($username,$password){

    	$admin = new adminModel();

    	$admin->initialize('account like "'.$username.'" and account_password like "'.$password.'"');


    	if($admin->vars_number > 0 ){

    		return 1;

    	} else{

    		return 0;
    	}

    }

}

?>
<?php

class MerchandiseModel extends Basic{


	public function __construct() {

		$this->child_name = 'merchandise';

		parent::__construct();

    }

    public function getMerchandise(){


    	$this->clearUp();

    	$this->initialize();


    	if($this->vars_number > 0 ){

    		return $this->vars_all;

    	}

    }

    public function getMerchandiseInfo($id){


        $this->clearUp();

        $this->initialize('merchandise_id = '.$id);


        if($this->vars_number > 0 ){


            return $this->vars;


        }

    }



}
?>
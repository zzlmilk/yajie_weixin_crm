<?php


class applyModel extends Basic{

	public function __construct() {

		$this->child_name = 'apply';

		parent::__construct();

    }


   public function getActivityList($id){


   	    if(!empty($id) && $id > 0){


   	       $this->initialize('activity_id = '.$id);

	   	   return $this->vars_all;

   	    }
	   

   }

}

?>
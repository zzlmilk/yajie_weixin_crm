<?php


class activityModel extends Basic{

	public function __construct() {

		$this->child_name = 'activity';

		parent::__construct();

    }


   public function getActivityList(){


	   	$this->initialize();

	   	return $this->vars_all;

   }

}

?>
<?php

class userModel extends Basic {


	public function __construct() {

		$this->child_name = 'user';

		print_r($_ENV);

		die;

		parent::__construct();

    }

}
?>
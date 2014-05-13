<?php


class authDetailModel extends Basic{

	public function __construct() {

		$this->child_name = 'auth_detail';

		$this->dbname = 'weixin';

		parent::__construct();

    }

}

?>
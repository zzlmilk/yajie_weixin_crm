<?php

class companyModel extends Basic {

	public function __construct($id = null) {

		$this->child_name = 'company';

		$this->dbname = 'weixin';

		parent::__construct();

		  if ($id) {
            $obj[$this->child_name . '_id'] = $id;
            $this->initialize($obj);
        }

    }


}
?>
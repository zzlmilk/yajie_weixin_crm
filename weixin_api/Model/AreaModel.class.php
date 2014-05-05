<?php

class AreaModel extends Basic {

    public function __construct() {

        $this->child_name = 'area';
        
        
        $this->dbname = 'weixin';
        

        parent::__construct();
    }

    public function getAreaByPid($pid) {

        $this->clearUp();

        $this->initialize('pid = ' . $pid);

        if ($this->vars_number > 0) {

            return $this->vars_all;
        }
    }

}

?>
<?php

class QuestionModel extends basic {

    public function __construct() {

        $this->child_name = 'question';

        parent::__construct();
    }

    public function get_info() {

        $this->initialize();

        if ($this->vars_number > 0) {

            return $this->vars_all;
        }
    }

}

?>
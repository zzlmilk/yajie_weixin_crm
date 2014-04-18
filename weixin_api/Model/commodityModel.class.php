<?php

class commodityModel extends Basic {

    public function __construct() {

        $this->child_name = 'commodity';

        parent::__construct();
    }

    public function getCommodityInfo($id) {

        if (!empty($id)) {

            $this->addCondition('commodity_id = ' . $id, 1);

            $this->initialize();


            if ($this->vars_number > 0) {

                return $this->vars;
            } else {
                echoErrorCode(80001);
            }
        }
    }

}

?>
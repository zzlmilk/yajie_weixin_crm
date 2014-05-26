<?php

class giftModel extends Basic {

    public function __construct($id = null) {

        $this->child_name = 'gift';

        if(!empty($id)){

        	$data['gift_id'] = $id;

        	$this->initialize($data);
        }

        parent::__construct();
    }

}

?>
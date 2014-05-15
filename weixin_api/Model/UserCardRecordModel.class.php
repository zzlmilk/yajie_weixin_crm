<?php

class UserCardRecordModel extends Basic {

    public function __construct() {

        $this->child_name = 'user_card_record';
       
        parent::__construct();
        
    }

    public function getCardRecord($card,$begin_time,$end_time,$type =''){

    	$where = 'user_card like "'.$card.'"';

        if(!empty($type)){


            $this->randOffset(5);

            $this->addOrderBy($type);
            
        } else{


            if(!empty($end_time) && !empty($begin_time)){

                $where.=' and order_time between "'.$begin_time.'"  and "'.$end_time.'"';

            }

        }


       $this->initialize($where);


       return $this->vars_all;

    }

    

}

?>
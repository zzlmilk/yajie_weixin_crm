<?php

class giftRecordModel extends basic {

    public function __construct() {

        $this->child_name = 'gift_record';

        parent::__construct();
    }

    public function getGiftInfoById($userInfo,$type) {


        $endTime = mktime(0, 0, 0) + 86400;

        $beginTime = mktime(0, 0, 0);

        if (!empty($type) && !empty($userInfo)) {

            $this->addCondition('gift_type = '.$type.' and user_id = ' . $userInfo['user_id'] . '  and play_time >=' . $beginTime . ' and play_time <' . $endTime, 1);

            $this->initialize();

            if ($this->vars_number > 0) {

                echoErrorCode(70002);
            } else {

                return 1;
            }
        }
    }
    
    
    public function addRecord($gift_id,$gift_type,$userInfo){
        
        
        $insert['gift_id'] = $gift_id;
        
        $insert['gift_type'] = $gift_type;
        
        $insert['user_id'] = $userInfo['user_id'];
        
        $insert['play_time'] = time();
        
        $this->insert($insert);
    }

}

?>
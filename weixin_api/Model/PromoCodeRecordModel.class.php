<?php

class PromoCodeRecordModel extends basic {

    public function __construct() {

        $this->child_name = 'promo_code_record';

        parent::__construct();
    }

    public function addCode($result) {
        
    }
    
    /**
     * 获取用户个人优惠信息
     * $userInfo  array  用户个人信息
     * return object
     */
    
    public function  getCodeUserInfo($userInfo){
        
        $code = new PromoCodeRecordModel();
        $code->addOrderBy('ctime DESC');
        $code->initialize('user_id = '.$userInfo['user_id']);
        $array = array();
        if($code->vars_number>0){
            
            foreach($code->vars_all as $k=>$v){
                
                $code = new PromoCodeModel();
                
                $code_info = $code->getCodeInfoById($v['promo_code_id']);
                
                $array[$k]['code_record'] = arrayToObject($v,0);
                
                $array[$k]['code_info'] = arrayToObject($code_info,0);
                
            }
            
            return $array;
        } else{
            
            echoErrorCode(60002);
        }
        
    }

}

?>
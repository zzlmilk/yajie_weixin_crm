<?php

class companyModel extends Basic {

    public function __construct() {

        $this->child_name = 'company';

        parent::__construct();
    }

    public function create($info) {

        $companyArray = array();

        $companyArray['company_code'] = 'WX' . date('Ymd') . time();

        $companyArray['company_token'] = $info['token'];

        if (!empty($info['appid'])) {

            $companyArray['app_id'] = $info['appid'];
        }

        if (!empty($info['app_secret'])) {

            $companyArray['app_secret'] = $info['app_secret'];
        }

        $companyArray['create_time'] = time();

        $this->insert($companyArray);


        arrayToObject($companyArray, 1);

        die;
    }

    public function create_company() {
        
    }
    
    
    public function get_info($token){
        
        $this->addCondition('company_token like "'.$token.'"', 1);
        
        $this->initialize();
        
        if($this->vars_number > 0){
            
            return $this->vars;
        } else{
            
            echoErrorCode(107);
        }
        
    }

}

?>
<?php

class ExchangeCodeModel extends Basic {

    public function __construct() {

        $this->child_name = 'exchange_code';

        parent::__construct();
    }


    /**
     * 判断验证码是否重复 如重复 重新获取
     */
    public function getCodeByCode($code){


        $this->addCondition('code like "'.$code.'"',1);

        $this->initialize();

        if($this->vars_number > 0){

            $newcode = $this->getCode();

        } else{

            $newcode = $code;
        }

        return $newcode;

    }
    
    public function create($info){


        $code = $this->getCode();


    	$result['user_id'] = $info['user_id'];

    	$result['code'] = $code;

    	$result['exchange_id'] = $info['exchange_id'];

    	$result['state'] = 0;

    	$result['create_time'] = time();


    
        $this->insert($result);


        return $result;


        
    }

    public function getCode(){

        $endtime=1356019200;//2012-12-21时间戳

        $curtime=time();//当前时间戳

        $newtime=$curtime-$endtime;//新时间戳


        $number = substr($newtime,-6);

        
        $code=base_convert($number,10,36);//把10进制转为36进制的唯一ID

        $newcode = $this->getCodeByCode($code);

        return $newcode;

    }
}

?>
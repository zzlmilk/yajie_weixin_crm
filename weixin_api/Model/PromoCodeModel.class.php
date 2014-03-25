<?php

class PromoCodeModel extends basic{

		public function __construct() {

		$this->child_name = 'promo_code';

		parent::__construct();

    }


    /**
     * 获取优惠吗 信息
     */

    public function getCodeInfo($code_name){


   	 	

    }

    /**
     * 生成优惠吗
     */

    public function generateCode($number,$count){

    	$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    	$promotion_codes = array();//这个数组用来接收生成的优惠码 

    	for($j = 0 ; $j < $number; $j++) 
		{ 
		    $code = "WX"; 

			for ($i = 0; $i < $count; $i++) 
			{ 
			     
                $code .= $characters[mt_rand(0, strlen($characters)-1)].rand(10,99); 
			} 

            $insert['code_name'] = $code;

            $insert['code_merchandise'] = 1;

            $this->insert($insert);
		}

    }

    /**
     * 
     */
    public function getCode(){

        $this->clearUp();

        $this->initialize('code_merchandise = 1');


        if($this->vars_number > 0 ){

           $array = $this->vars_all;

           $randNumber = array_rand($array);

           return $array[$randNumber];

        } else{

            $this->generateCode(50,10);

            $this->getCode();
        }
    }


}

?>
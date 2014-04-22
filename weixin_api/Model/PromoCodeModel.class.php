<?php

class PromoCodeModel extends basic {

    public function __construct() {

        $this->child_name = 'promo_code';

        parent::__construct();
    }

    /**
     * 获取优惠吗 信息
     */
    public function getCodeInfoById($code_id) {

        $join_str = array(array("commodity", "commodity.commodity_id", "promo_code.code_merchandise"));
        $this->clearUp();

        $this->addJoin($join_str);

        $this->initialize('promo_code_id = ' . $code_id);


        if ($this->vars_number > 0) {

            return $this->vars;
        } else {

            echoErrorCode(60001);
        }
    }

    /**
     * 生成优惠吗
     */
    public function generateCode($number, $count, $type) {

        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        $promotion_codes = array(); //这个数组用来接收生成的优惠码 

        for ($j = 0; $j < $number; $j++) {
            $code = "WX";

            for ($i = 0; $i < $count; $i++) {

                $code .= $characters[mt_rand(0, strlen($characters) - 1)] . rand(10, 99);
            }

            $insert['code_name'] = $code;

            $insert['code_merchandise'] = rand(1, 2);

            $insert['code_type'] = $type;

            $insert['code_begin_time'] = mktime(0, 0, 0);

            $insert['code_end_time'] = mktime(23, 59, 59) + (rand(1, 3) * 86400);

            $this->insert($insert);
        }
    }

    /**
     * 
     */
    public function getCode($type = 1) {

        $this->clearUp();

        $join_str = array(array("commodity", "commodity.commodity_id", "promo_code.code_merchandise"));

        $this->addJoin($join_str);

        $this->initialize('code_state = 0  and code_type = ' . $type);


        if ($this->vars_number > 0) {

            $array = $this->vars_all;

            $randNumber = array_rand($array);


            return $array[$randNumber];
        } else {

            $this->generateCode(50, 4, $type);

            $this->getCode($type);
        }
    }

}

?>
<?php

class GiftSettingModel extends Basic {

    public function __construct() {

        $this->child_name = 'gift_setting';

        parent::__construct();
    }

    /**
     * 获取概率
     */
    public function get_probability($type) {


        $this->initialize('gift_type = ' . $type);

        if ($this->vars_number > 0) {

            return $this->vars;
        }
    }

    /**
     * 计算概率
     * $type int  游戏类型
     */
    public function cipher_probability($type) {

        /**
         * 获取大转盘礼品列表
         */
        $gift = new GiftModel();

        $wheel_list_array = $gift->getGiftList($type);



          /**
         * 计算基值
         */
        $state_sum = 0;

        $prize_arr = array();


        foreach ($wheel_list_array as $k_array => $v_array) {

 
            $state_sum += $v_array['gift_probability'];

            $array1['id'] = $v_array['gift_id'];

            $array1['v'] = $v_array['gift_probability'];

            $array1['image'] = $v_array['gift_image'];

            $array1['award'] = 1;

            array_push($prize_arr, $array1);


                  
       }

        /**
         * 生成 12个 数组  begin
         */
        for ($var = count($prize_arr) + 1; $var <= 12; $var++) {

            $array1['id'] = $var;

            $array1['v'] = 100 - $state_sum;

            $array1['image'] = '';

             $array1['award'] = 0;

            array_push($prize_arr, $array1);
           
        }

        foreach ($prize_arr as $key => $val) {

            $arr[$val['id']] = $val['v'];

        }


       
        /**
         * 生成 end  计算概率begin
         */
        $rid = $gift->get_rand($arr);

    
        return $prize_arr[$rid];
    }

}

?>
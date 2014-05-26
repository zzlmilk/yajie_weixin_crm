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

            $prize_arr[$v_array['gift_id']]['id'] = $v_array['gift_id'];

            $prize_arr[$v_array['gift_id']]['v'] = $v_array['gift_probability'];

            $prize_arr[$v_array['gift_id']]['image'] = $v_array['gift_image'];

            $prize_arr[$v_array['gift_id']]['award'] = 1;
                  
       }




        /**
         * 生成 12个 数组  begin
         */
        for ($var = 1; $var <= 12; $var++) {


            if(empty($prize_arr[$var])){

                $prize_arr[$var]['id'] = $var;

                $prize_arr[$var]['v'] = 100 - $state_sum;

                $prize_arr[$var]['image'] = rand(1,3);

                $prize_arr[$var]['award'] = 0;

            }

           
        }




  
        $tempArray = array();


        foreach ($prize_arr as $key => $val) {

            $arr[$val['id']] = $val['v'];

             $tempArray[$val['id']] = $val;  

        }

       


       
        /**
         * 生成 end  计算概率begin
         */
        $rid = $gift->get_rand($arr);
    
        return $tempArray[$rid];
    }

}

?>
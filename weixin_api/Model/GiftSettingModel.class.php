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
    public function cipher_probability($type, $userInfo) {

        /**
         * 获取大转盘的概率
         */
        $probabilityArray = $this->get_probability($type);

        /**
         * 获取大转盘礼品列表
         */
        $gift = new GiftModel();

        $wheel_list_array = $gift->getGiftList($type);

        /**
         * 计算基值
         */
        $state_sum = $probabilityArray['gift_one_probability'] + $probabilityArray['gift_two_probability'] + $probabilityArray['gift_three_probability'];

        $prize_arr = array();

        /**
         * 生成 12个 数组  begin
         */
        for ($var = 1; $var <= 12; $var++) {

            $a = 0;

            foreach ($wheel_list_array as $k_array => $v_array) {

                if ($var == $v_array['gift_id']) {

                    switch ($v_array['gift_id']) {

                        case '1':

                            $number = $probabilityArray['gift_one_probability'];

                            break;

                        case '5':

                            $number = $probabilityArray['gift_two_probability'];

                            break;

                        case '9':

                            $number = $probabilityArray['gift_three_probability'];

                            break;

                        case '11':
                            $number = $probabilityArray['gift_one_probability'];

                            break;
                        case '12':
                            $number = $probabilityArray['gift_two_probability'];

                            break;
                        case '13':
                            $number = $probabilityArray['gift_three_probability'];

                            break;
                    }

                    $array1['id'] = $v_array['gift_id'];

                    $array1['v'] = $number;

                    array_push($prize_arr, $array1);

                    $a = 1;

                    break;
                }
            }

            if ($a == 0) {

                $array1['id'] = $var;

                $array1['v'] = 100 - $state_sum;

                array_push($prize_arr, $array1);
            }
        }

        foreach ($prize_arr as $key => $val) {
            $arr[$val['id']] = $val['v'];
        }

        /**
         * 生成 end  计算概率begin
         */
        $rid = $gift->get_rand($arr);

        if ($type == 1) {

            $record = new giftRecordModel();

            $record->addRecord($rid, $type, $userInfo['user_id']);
        }


        return $rid;
    }

}

?>
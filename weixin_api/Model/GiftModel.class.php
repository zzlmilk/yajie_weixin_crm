<?php

class GiftModel extends Basic {

    public function __construct() {

        $this->child_name = 'gift';

        parent::__construct();
    }

    public function get_rand($proArr) {
        $result = '';

        //概率数组的总概率精度
        $proSum = array_sum($proArr);

        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) {
                $result = $key;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset($proArr);

        return$result;
    }

    public function getGiftInfo($id, $type) {

        $this->clearUp();

        $this->initialize('gift_id = ' . $id . ' and gift_type = ' . $type);

        if ($this->vars_number > 0) {

            return $this->vars;
        }
    }

    public function getGiftList($type) {

        $this->clearUp();

        $this->initialize('gift_type = ' . $type);

        if ($this->vars_number > 0) {

            return $this->vars_all;
        }
    }

    public function getAwardByGift($info, $open_id) {


        if (is_array($info) && !empty($open_id)) {

            $userModel = new userModel();

            $userinfo = $userModel->getUserInfo($open_id);


            $gift = new giftRecordModel();

            $giftRes = $gift->getGiftInfoById($userinfo, $info['gift_type']);


            /**
             * 判断礼品奖励  为0  则直接添加 1 则判断 是否为虚拟物品 如是 则添加 
             */
            switch ($info['gift_award_type']) {


                case '1':

                    $exchange = new ExchangeModel();

                    $exchange_info = $exchange->getExchangeInfo($info['gift_exchange_id']);

                    if ($exchange_info['exchange_type'] == 0) {

                        $result['id'] = $info['gift_exchange_id'];

                        $result['open_id'] = $open_id;

                        $array = $exchange->redeem($result, 1);

                        AssemblyJson($array);
                    } else {

                        $array['jump'] = 'exchange';

                        $array['info'] = $exchange_info;

                        AssemblyJson($array);
                    }

                    break;


                case '0':


//                    $userModel = new userModel();
//
//                    $userinfo = $userModel->getUserInfo($open_id);

                    $userObject = $userModel->addUserIntegration($open_id, $info['gift_integration']);


                    /**
                     * 
                     */
                    $userRecord = new userPointerRecordModel();

                    $recordArray = $userRecord->addRecord($userinfo['user_id'], 1, $info['gift_integration'], 'gift');

                    $array['user'] = arrayToObject($userObject, 0);

                    $array['record'] = arrayToObject($recordArray, 0);

                    AssemblyJson($array);

                    break;


                case '2':


                    /**
                     * 获取优惠码
                     */
                    $code = new PromoCodeModel();

                    $codeInfo = $code->getCode();


                    $codeRecord = new PromoCodeRecordModel();

                    $record = $codeRecord->addCode($codeInfo['promo_code_id'], $open_id);

                    $array['code'] = $codeInfo;

                    AssemblyJson($array);

                    break;
            }
        }
    }

}

?>
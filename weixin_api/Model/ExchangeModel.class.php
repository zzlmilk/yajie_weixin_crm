<?php

class ExchangeModel extends Basic {

    public function __construct() {

        $this->child_name = 'exchange';

        parent::__construct();
    }

    public function getExchangeList($begin = 0,$end = 100000) {

       if(empty($begin)){

          $begin = 0;
       }

       if(empty($end)){

          $end = 100000;
       }

        $this->clearUp();

        $this->initialize('exchange_integration > '.$begin.' and exchange_integration <='.$end);

        if ($this->vars_number > 0) {

            return $this->vars_all;
        }
    }

    public function getExchangeInfo($id) {

        $this->clearUp();

        $this->initialize('exchange_id = ' . $id);

        if ($this->vars_number > 0) {

            return $this->vars;
        }
    }

    /**
     * 兑换接口  $result['id'] 为兑换物品id open_id 为微信公众平台id
     *  $able  如为1时  则  无需 扣除 积分
     */
    public function redeem($result, $able = 0) {

        if (!empty($result['id']) && $result['id'] > 0 && !empty($result['open_id'])) {

            $this->clearUp();

            $this->initialize('exchange_id = ' . $result['id']);

            if ($this->vars_number > 0) {

                $userModel = new userModel();

                $userinfo = $userModel->getUserInfo($result['open_id']);

                if (count($userinfo) > 0) {

                    if ($able == 1) {

                        $exchange_integration = 0;
                    } else {

                        $exchange_integration = $this->vars['exchange_integration'];
                    }

                    /**
                     * 判断兑换类型  如为实物 则 需要填写特定字段
                     */
                    //$fieldArray = array('1'=>'user_name,user_phone,')

                    if ($this->vars['exchange_type'] == 1) {

                        if (empty($userinfo['street']) && empty($userinfo['real_name']) && empty($userinfo['province_id']) && empty($userinfo['city_id']) && empty($userinfo['area_id']) && empty($userinfo['address_phone'])) {

                            if (!empty($result['real_name']) && !empty($result['province_id']) && !empty($result['city_id']) && !empty($result['area_id']) && !empty($result['street']) && !empty($result['address_phone'])) {

                                $updateUser['province_id'] = $result['province_id'];

                                $updateUser['city_id'] = $result['city_id'];

                                $updateUser['area_id'] = $result['area_id'];

                                $updateUser['street'] = $result['street'];

                                $updateUser['real_name'] = $result['real_name'];

                                $updateUser['address_phone'] = $result['address_phone'];

                                $userModel->updateInfo($updateUser, $userinfo['user_id']);
                            } else {

                                /**
                                 *  用户无收货地址
                                 */
                                $array['exchange_info'] = $this->vars;

                                return $array;
                            }
                        }
                    }


                    if ($userinfo['user_integration'] >= $exchange_integration) {

                        $exchangeRecordModel = new exchangeRecordModel();

                        $exchange_record = $exchangeRecordModel->addRecord($result, $userinfo);

                        $array['exchange_record'] = arrayToObject($exchange_record, 0);

                        $user_integration = $userModel->reductionUserIntegration($result['open_id'], $exchange_integration);

                        $array['user_integration'] = arrayToObject($user_integration, 0);

                        $userPointerRecord = new userPointerRecordModel();

                        if ($able == 1) {

                            $user_record = $userPointerRecord->addRecord($userinfo['user_id'], 1, '-' . $exchange_integration, 'gift', $result['id']);
                        } else {

                            $user_record = $userPointerRecord->addRecord($userinfo['user_id'], 1, '-' . $exchange_integration, 'exchange', $result['id']);
                        }

                        $array['user_record'] = arrayToObject($user_record, 0);

                        $array['exchange_info'] = $this->vars;

                        return $array;
                    } else {

                        echoErrorCode(40001);
                    }
                }
            }
        } else {

            echoErrorCode(40002);
        }
    }

}

?>
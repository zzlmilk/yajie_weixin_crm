<?php

class GiftController implements gift {

    /**
     * 大转盘 中奖返回
     */
    public function get_probability_wheel() {


        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {

            $userModel = new userModel();

            $userinfo = $userModel->getUserInfo($_REQUEST['open_id']);

            $gift_setting = new GiftSettingModel();

            $gift_id = $gift_setting->cipher_probability(1, $userinfo);

            $array['gift_id'] = $gift_id;

            AssemblyJson($array);
        } else {

            echoErrorCode(105);
        }
    }

    public function recevice_award() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['gift_id']) && $_REQUEST['gift_id'] > 0) {

                $userModel = new userModel();

                $userinfo = $userModel->getUserInfo($_REQUEST['open_id']);


                $gift = new giftModel();

                if (!empty($_REQUEST['gift_type'])) {

                    $gift_info = $gift->getGiftInfo($_REQUEST['gift_id'], $_REQUEST['gift_type']);

                    $gift->getAwardByGift($gift_info, $_REQUEST['open_id']);
                } else {

                    echoErrorCode(105);
                }
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 刮刮卡 刮奖返回
     */
    public function get_probability_card() {

        if (!empty($_REQUEST['source'])) {

            $gift_setting = new GiftSettingModel();

            $gift_id = $gift_setting->cipher_probability(2);

            $array['gift_id'] = $gift_id;

            AssemblyJson($array);
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取礼品信息
     */
    public function get_gift_info() {


        if (!empty($_REQUEST['source']) && !empty($_REQUEST['gift_id']) && !empty($_REQUEST['gift_type'])) {

            $gift = new GiftModel();

            $giftInfo = $gift->getGiftInfo($_REQUEST['gift_id'], $_REQUEST['gift_type']);

            if (count($giftInfo) > 0) {

                $giftInfoObject = arrayToObject($giftInfo, 0);

                AssemblyJson($giftInfoObject);
            } else {
                echoErrorCode(70001);
            }
        } else {

            echoErrorCode(105);
        }
    }

    public function get_user_gift_record() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['gift_type']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

                $gift = new giftRecordModel();

                $giftRes = $gift->getGiftInfoById($userInfo, $_REQUEST['gift_type']);

                if ($giftRes == 1) {

                    $array['res'] = 1;

                    AssemblyJson($array);
                }
            } else {
                echoErrorCode(70001);
            }
        } else {

            echoErrorCode(105);
        }
    }

    public function add_record() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['gift_id']) && !empty($_REQUEST['gift_type']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

               $record = new giftRecordModel();

               $record->addRecord($_REQUEST['gift_id'], $_REQUEST['gift_type'], $userInfo);
            } else {
                echoErrorCode(70001);
            }
        } else {

            echoErrorCode(105);
        }
    }

}

?>
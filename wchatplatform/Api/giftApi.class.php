<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of giftApi
 *
 * @author zhaixiaoping
 */
class giftApi {

    public function getGiftInfo($id, $type) {
        $data['gift_id'] = $id;
        $data['gift_type'] = $type;
        $data['source'] = 'company';
        $giftInfoJson = transferData(APIURL . "/gift/get_gift_info", "post", $data);
        $giftInfoArray = json_decode($giftInfoJson, true);
        return $giftInfoArray;
    }

    public function sendUserGift($id, $open_id, $type) {

        $data['gift_id'] = $id;
        $data['gift_type'] = $type;
        $data['open_id'] = $open_id;
        $data['source'] = 'company';

        $giftInfoJson = transferData(APIURL . "/gift/recevice_award", "post", $data);
        $giftInfoArray = json_decode($giftInfoJson, true);
        return $giftInfoArray;
    }

    public function getUserGameRecord($open_id, $type) {

        $data['gift_type'] = $type;
        $data['open_id'] = $open_id;
        $data['source'] = 'company';

        $giftInfoJson = transferData(APIURL . "/gift/get_user_gift_record", "post", $data);
        $giftInfoArray = json_decode($giftInfoJson, true);
        return $giftInfoArray;
    }

    public function addCardRecord($id, $open_id, $type) {

        $data['gift_id'] = $id;
        $data['gift_type'] = $type;
        $data['open_id'] = $open_id;
        $data['source'] = 'company';
        $giftInfoJson = transferData(APIURL . "/gift/add_record", "post", $data);
        $giftInfoArray = json_decode($giftInfoJson, true);
        return $giftInfoArray;
    }

}

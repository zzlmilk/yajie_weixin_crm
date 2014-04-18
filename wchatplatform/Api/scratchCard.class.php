<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of scratchCard
 *
 * @author Administrator
 */
class scratchCard {

    public function __construct() {
        
    }

    public function getScratchCardResults($source) {
        $data['source'] = $source;
        
        $userInfoJson = transferData(APIURL . "/gift/get_probability_card", "post", $data);
        $userInfoArray = json_decode($userInfoJson, true);
        return $userInfoArray;
    }

    public function getScratchCardReceviceAward($source, $openId, $giftId) {
        $data['source'] = $source;
        $data['open_id'] = $openId;
        $data['gift_type'] = 2;
        $data['gift_id'] = $giftId;
        $userInfoJson = transferData(APIURL . "/gift/recevice_award", "post", $data);
        $userInfoArray = json_decode($userInfoJson, true);
        return $userInfoJson;
    }

    public function getScratchCardInfo($source, $giftId) {
        $data['source'] = $source;
        $data['gift_type'] = 2;
        $data['gift_id'] = $giftId;
        $userInfoJson = transferData(APIURL . "/gift/get_gift_info", "post", $data);
        $userInfoArray = json_decode($userInfoJson, true);
        return $userInfoJson;
    }

}

?>

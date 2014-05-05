<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of exchangeApi
 *
 * @author zhaixiaoping
 */
class exchangeApi {

    //put your code here


    public function __construct() {
        
    }

    /**
     * 获取用户信息
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function getUserExchangeInfo($open_id, $source) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/exchange/user_exchange_record", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);

            $error = new errorApi();

            $error->JudgeError($userInfoArray);
            return $userInfoArray;
        }
    }

}

<?php

/**
 * 用户API 方法库
 */
class userApi {

    public function __construct() {
        
    }

    /**
     * 获取用户信息
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function getUserInfo($open_id, $source) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = $source;
            $userInfoJson = transferData(APIURL . "/user/get_info", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            return $userInfoArray;
        }
    }
    
    /**
     * 获取用户优惠券
     * @param type $open_id
     * @param type $source
     * @return type
     */
    public function getUserCode($open_id, $source) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = $source;
            $userInfoJson = transferData(APIURL . "/code/get_user_code", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            return $userInfoArray;
        }
    }

}
?>


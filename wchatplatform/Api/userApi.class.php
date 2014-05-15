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
    public function getUserInfo($open_id) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/user/get_info", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            return $userInfoArray;
        }
    }

    /**
     * 用户是否注册
     * @param int $open_id     用户在微信公众平台的唯一标识
     * @param varchar $source  微信公众平台来源
     * @return array   返回为已经解析完成的数组
     */
    public function ableUser($open_id) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/user/able_user", "post", $data);
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
    public function getUserCode($open_id) {

        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;
            $userInfoJson = transferData(APIURL . "/code/get_user_code", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);
            return $userInfoArray;
        }
    }

    /**
     * 获取用户消费 和  积分记录
     */
    public function getUserRecord($open_id, $type) {
        if (!empty($open_id)) {
            $data['open_id'] = $open_id;
            $data['source'] = SOURCE;

            $data['type'] = $type;
            $userInfoJson = transferData(APIURL . "/user/getUserRecord", "post", $data);
            $userInfoArray = json_decode($userInfoJson, true);

            $error = new errorApi();

            $error->JudgeError($userInfoArray);


            return $userInfoArray;
        }
    }


    /**
     * 博卡系统  绑定手机 关联
     */

    public function bind($phone,$open_id){


        $data['open_id'] = $open_id;

        $data['phone'] = $phone;

        $data['source'] = SOURCE;

        $arrayJson = transferData(APIURL . "/user/binding", "post", $data);

        $array = json_decode($arrayJson, true);

       
        $error = new errorApi();

        $error->JudgeError($array);

        return $array;

    }

}
?>


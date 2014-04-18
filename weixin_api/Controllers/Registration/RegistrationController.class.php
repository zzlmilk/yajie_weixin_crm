<?php

class RegistrationController implements registration {

    /**
     * 用户签到
     */
    public function user_registeration() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

                $user_registeration = new UserRegistrationModel();

                $user_registeration->getUserRegisteration($userInfo);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取用户签到信息
     */
    public function get_registeration() {


        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

                $user_registeration = new UserRegistrationModel();

                $array = $user_registeration->getUserRegisterationInfo($userInfo);

                $json = arrayToObject($array, 0);

                AssemblyJson($json);
            }
        } else {

            echoErrorCode(105);
        }
    }

}

?>
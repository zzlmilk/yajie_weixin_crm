<?php

class RegistrationController implements registration {


    private $object;

    public function __construct() {

        /**
         *  判断来源   根据来源来加载扩展库 如一般接口中不存在 相应的接口  查找扩展库中是否存在
         *  如存在 就执行扩展库中的方法
         */

        if(!empty($_REQUEST['source'])){

            $source = $_REQUEST['source'].'.php';

            if(file_exists(PLUGDIR.$source)){

                $name = $_REQUEST['source'].'Plug';

                $this->object = new $name();

                if(!method_exists($this,ACTION_NAME)){

                    if(method_exists($this->object, ACTION_NAME)){

                        call_user_func(array($this->object, ACTION_NAME),$_REQUEST);  

                        die;

                    }
                   
                }
            }
            
        }
    }


    /**
     * 用户签到
     */
    public function user_registeration() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            /**
             * 脊安堂 
             */

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
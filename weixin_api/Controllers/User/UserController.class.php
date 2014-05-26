<?php

class UserController implements User {


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
     * 添加用户
     */
    public function add() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['user_name']) && !empty($_REQUEST['user_phone']) && !empty($_REQUEST['sex']) && !empty($_REQUEST['birthday'])) {

                $user = new UserModel();

                $user->insertUser($_REQUEST);
            } else {

                echoErrorCode(105);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 判断用户是否已被注册
     */
    public function able_user() {

        if (!empty($_REQUEST['open_id'])) {

            $user = new UserModel();

            $user->ableUserRegister($_REQUEST['open_id']);
        } else {

            echoErrorCode(10002);
        }
    }

    /**
     * 用户积分 累加  v1
     */
    public function add_user_integration() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration']) && !empty($_REQUEST['source'])) {

            $user = new UserModel();

            $data = $user->addUserIntegration($_REQUEST['open_id'], $_REQUEST['integration']);

            AssemblyJson($data);
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 用户金额 累加  v1
     */
    public function add_user_money() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['money']) && !empty($_REQUEST['source'])) {

            $user = new UserModel();

            $data = $user->addUserMoney($_REQUEST['open_id'], $_REQUEST['money']);

            AssemblyJson($data);
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 减少用户积分
     */
    public function reduction_user_integration() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['integration']) && !empty($_REQUEST['source'])) {

            $user = new UserModel();

            $data = $user->reductionUserIntegration($_REQUEST['open_id'], $_REQUEST['integration']);

            AssemblyJson($data);
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 减少用户金额
     */
    public function reduction_user_money() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['money']) && !empty($_REQUEST['source'])) {

            $user = new UserModel();

            $data = $user->reductionUserMoney($_REQUEST['open_id'], $_REQUEST['money']);

            AssemblyJson($data);
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取用户资料
     */
    public function get_info() {



        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {


            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

           

            if (count($userInfo) > 0) {

            
                $weixinUser = new WeiXinUserModel();

                $weixinUserInfo = $weixinUser->getWeiXinInfo($userInfo['user_open_id'], $userInfo['user_id']);

                $array['user'] = arrayToObject($userInfo, 0);

                $array['weixin_user'] = arrayToObject($weixinUserInfo, 0);

                AssemblyJson($array);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 修改用户信息
     */
    public function updateInfo($data, $user_id) {

        if (is_array($data) && count($data) > 0) {

            $user = new userModel();

            $user->updateInfo($data, $user_id);

            $array['res'] = 1;

            AssemblyJson($array);
        }
    }

    /**
     * 修改用户 收货地址
     */
    public function update_user_address() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['address_phone']) && !empty($_REQUEST['province_id']) && !empty($_REQUEST['city_id']) && !empty($_REQUEST['area_id']) && !empty($_REQUEST['street']) && !empty($_REQUEST['real_name'])) {

                $user = new userModel();

                $userInfo = $user->getUserInfo($_REQUEST['open_id']);

                if (count($userInfo) > 0) {

                    $update = array();

                    $update_field = array('address_phone', 'province_id', 'city_id', 'area_id', 'street', 'real_name');

                    foreach ($update_field as $v) {

                        $update[$v] = $_REQUEST[$v];
                    }

                    if (count($update) > 0) {

                        $this->updateInfo($update, $userInfo['user_id']);
                    }
                } else {

                    echoErrorCode(10005);
                }
            } else {

                echoErrorCode(105);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取用户积分和消费记录
     */
    public function getUserRecord() {

        if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['source']) && !empty($_REQUEST['type'])) {

            $userModel = new userModel();

            $userinfo = $userModel->getUserInfo($_REQUEST['open_id']);

            $userRecord = new userPointerRecordModel();

            $userRecord->getUserRecord($userinfo, $_REQUEST['type']);
        } else {

            echoErrorCode(105);
        }
    }


    /**
     * 用户 兑换  订单  优惠吗 状态
     */

    public function get_info_status(){

        if(!empty($_REQUEST['open_id']) && !empty($_REQUEST['source'])){

            $userModel = new userModel();

            $array = $userModel->getUserStatus($_REQUEST['open_id']);


            AssemblyJson($array);

        } else{

            echoErrorCode(105);

        }

    }

}

?>
<?php


class JiantangPlug{



	/**
	 *  签到增加1积分
	 */
	public function userRegisterationIntegration($data){

		 if (!empty($data['open_id']) && !empty($data['source'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($data['open_id']);

            $addIntegration = $user->addUserIntegration($data['open_id'],1);

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
     * 脊安堂 下订单  成功后 增加100积分
     */
    public function add($data) {

        //$_REQUEST['open_id'] = $this->open_id;

        if (!empty($data['source'])) {

            if (!empty($data['open_id']) && !empty($data['merchandise_id'])) {

                if (!empty($data['order_number']) && $data['order_number'] > 0) {

                    if (!empty($data['appointment_time'])) {

                        $user = new userModel();

                        $userInfo = $user->getUserInfo($data['open_id']);

                        $orderModel = new OrderModel();

                        $orderInfo = $orderModel->getOrderInfo($userInfo['user_id'], 0);

                        if (count($orderInfo) > 0) {

                            echoErrorCode(30005);
                        } else {

                            /**
                             * 预约成功  脊安堂  增加100积分
                             */

                            $user->addUserIntegration($data['open_id'],100);

                            $orderInfo['order'] = $orderModel->crearteOrder($_REQUEST, $userInfo);

                            $orderInfo['user'] = arrayToObject($userInfo, 0);

                            AssemblyJson($orderInfo);
                        }
                    } else {

                        echoErrorCode(30002);
                    }
                } else {


                    echoErrorCode(30001);
                }
            } else {


                echoErrorCode(30006);
            }
        }
    }
}
?>
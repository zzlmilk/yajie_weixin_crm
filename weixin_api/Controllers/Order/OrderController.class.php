<?php

class OrderController implements Order {

    private $open_id = 'ocpOot-COx7UruiqEfag_Lny7dlc';

    /**
     * 下订单
     */
    public function add() {

        //$_REQUEST['open_id'] = $this->open_id;

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['merchandise_id'])) {

                if (!empty($_REQUEST['order_number']) && $_REQUEST['order_number'] > 0) {

                    if (!empty($_REQUEST['appointment_time'])) {

                        $user = new userModel();

                        $userInfo = $user->getUserInfo($_REQUEST['open_id']);

                        $orderModel = new OrderModel();

                        $orderInfo = $orderModel->getOrderInfo($userInfo['user_id'], 0);

                        if (count($orderInfo) > 0) {

                            echoErrorCode(30005);
                        } else {

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

    public function revise_order() {

        //$_REQUEST['open_id'] = $this->open_id;

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['open_id']) && !empty($_REQUEST['merchandise_id'])) {

                if (!empty($_REQUEST['order_number']) && $_REQUEST['order_number'] > 0) {

                    if (!empty($_REQUEST['appointment_time'])) {

                        $user = new userModel();

                        $userInfo = $user->getUserInfo($_REQUEST['open_id']);

                        $orderModel = new OrderModel();

                        $orderInfo = $orderModel->getOrderInfo($userInfo['user_id'], 0);

                        if (!empty($_REQUEST['order_code'])) {


                            if (count($orderInfo) > 0) {

                                $orderInfo['order'] = $orderModel->updateOrder($_REQUEST, $userInfo);

                                $orderInfo['res'] = 1;

                                AssemblyJson($orderInfo);
                            } else {

                                echoErrorCode(30005);
                            }
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

    /**
     * 修改订单状态  将状态修改为成功支付
     */
    public function revise_order_state() {

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['order_code'])) {

                $orderModel = new OrderModel();

                $data = array();

                if (!empty($_REQUEST['order_state'])) {

                    $data['order_state'] = $_REQUEST['order_state'];
                }
                $state = $orderModel->updateOrderState($_REQUEST['order_code'], $data);

                $array['res'] = 1;

                AssemblyJson($array);
            } else {

                echoErrorCode(30003);
            }
        }
    }

    /**
     * 获取正在进行的订单
     */
    public function get_order() {


        //$_REQUEST['open_id'] = $this->open_id;


        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            if (count($userInfo) > 0) {

                $order = new orderModel();

                $orderArray = $order->getOrderInfo($userInfo['user_id'], 0);

                $orderJsonArray['order'] = arrayToObject($orderArray, 0);

                $orderJsonArray['user'] = arrayToObject($userInfo, 0);

                AssemblyJson($orderJsonArray);
            } else {

                echoErrorCode(30007);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     *  获取全部订单
     */
    public function get_order_all() {

        //$_REQUEST['open_id'] = $this->open_id;

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);



            if (count($userInfo) > 0) {

                $order = new orderModel();

                $orderArray = $order->getOrderInfoAll($userInfo['user_id'], 0);


                $orderArrayTemp = array();

                foreach ($orderArray as $k => $v) {

                    $orderArrayTemp[$k] = arrayToObject($v, 0);
                }


                $orderJsonArray['order'] = $orderArrayTemp;

                $orderJsonArray['user'] = arrayToObject($userInfo, 0);

                AssemblyJson($orderJsonArray);
            } else {

                echoErrorCode(30007);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 修改订单状态  将状态修改为成功支付
     */
    public function revise_order_pay_state() {

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['order_code'])) {

                $data = array();

                if (!empty($_REQUEST['order_pay_state'])) {

                    $data['order_pay_state'] = $_REQUEST['order_pay_state'];
                }

                $orderModel = new OrderModel();

                $state = $orderModel->updateOrderPayState($_REQUEST['order_code'], $data);

                $array['state'] = 1;

                AssemblyJson($array);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取订单中的物品
     */
    public function get_merchandise() {

        $merchandise_list = new MerchandiseModel();

        $merchandise_list_ = $merchandise_list->getMerchandise();



        if (count($merchandise_list_) > 0) {

            $merchandiseArray = array();

            foreach ($merchandise_list_ as $k => $v) {

                $merchandiseArray[$k] = arrayToObject($v, 0);
            }
        }
        AssemblyJson($merchandiseArray);
    }

    /**
     *  查询物品信息
     */
    public function get_merchandise_info() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['merchandise_id'])) {

            $merchandise = new MerchandiseModel();

            $merchandieseInfo = $merchandise->getMerchandiseInfo($_REQUEST['merchandise_id']);

            $array['merchandise'] = arrayToObject($merchandieseInfo, 0);

            AssemblyJson($array);
        } else {

            echoErrorCode(105);
        }
    }

}

?>
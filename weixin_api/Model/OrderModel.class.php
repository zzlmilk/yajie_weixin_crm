<?php

class OrderModel extends Basic {

    public function __construct() {

        $this->child_name = 'order';

        parent::__construct();
    }

    public function updateOrder($result, $userInfo) {


        $this->clearUp();

        $this->initialize('order_code like "' . $result['order_code'] . '"');

        if ($this->vars_number > 0) {


            $data['merchandise_id'] = $result['merchandise_id'];

            $data['appointment_time'] = $result['appointment_time'];

            $data['appointment_object'] = $result['appointment_object'];

            $data['order_number'] = $result['order_number'];

            $data['order_state'] = 0;

            $this->update($data);

            return $data;
        }
    }

    /**
     * 创建订单
     */
    public function crearteOrder($result, $userInfo) {

        $data['user_id'] = $userInfo['user_id'];

        $data['user_phone'] = $userInfo['user_phone'];

        $data['merchandise_id'] = $result['merchandise_id'];

        $data['appointment_time'] = $result['appointment_time'];

        $data['appointment_object'] = $result['appointment_object'];

        $data['order_type'] = 1;

        $data['order_state'] = 0;

        $data['order_time'] = time();

        $data['order_number'] = $result['order_number'];

        $data['order_state'] = 0;

        $data['order_code'] = date('Ymdhis') . rand(10, 99);

        $merchandise = new MerchandiseModel();

        $info = $merchandise->getMerchandiseInfo($result['merchandise_id']);


        $data['order_money'] = $info['order_money'];


        $this->insert($data);

        return $data;
    }

    /**
     * 修改订单状态 0为正在进行  1为完成 2为删除订单
     */
    public function updateOrderState($orderNumber, $data) {


        $order = new OrderModel();

        $order->addCondition('order_code like "' . $orderNumber . '"', 1);

        $order->initialize();

        if ($order->vars_number > 0) {

            $order->update($data);

            return 1;
        }
    }

    /**
     * 修改订单支付状态
     */
    public function updateOrderPayState($orderNumber, $data) {


        $order = new OrderModel();

        $order->addCondition('order_code like "' . $orderNumber . '"', 1);

        $order->initialize();

        if ($order->vars_number > 0) {

            $update['order_pay_state'] = $data;

            $order->update($update);

            return 1;
        }
    }

    /**
     *  获取订单
     */
    public function getOrderInfo($user_id, $state, $number = 0) {


        if (!empty($user_id) && $user_id > 0) {

            $order = new orderModel();

            if ($number > 0) {

                $order->randOffset($number);
            }

            if ($state == 0) {

                $this->cannelOrder($user_id);

                $where = ' and appointment_time >= ' . mktime(0, 0, 0);
            } else {

                $where = '';
            }

            $order->addCondition('user_id = ' . $user_id . ' and order_state = ' . $state . $where, 1);

            $order->initialize();


            if ($order->vars_number > 0) {

                return $order->vars;
            }
        }
    }

    /**
     *  获取所有订单
     */
    public function getOrderInfoAll($user_id, $state) {

        if (!empty($user_id) && $user_id > 0) {

            $order = new orderModel();

            $order->initialize('user_id = ' . $user_id);

            if ($order->vars_number > 0) {

                return $order->vars_all;
            }
        }
    }

    /**
     * 预约时间 如 小于当前时间 则取消订单
     */
    public function cannelOrder($user_id) {

        $order = new OrderModel();

        $order->addCondition('appointment_time < ' . time() . ' and user_id = ' . $user_id . ' and order_state !=2', 1);

        $order->initialize();


        if ($order->vars_number > 0) {


            $order->var['order_state'] = 2;


            $order->updateVars();
        }
    }

    /**
     * 修改订单价钱  如有使用到优惠券 则 获取优惠券 并 随机将1条 变成已使用的状态
     * @param type $data
     */
    public function updateOrderPay($data) {

        if (is_array($data)) {

            $order = new OrderModel();

            $order->initialize('order_code like "' . $data['order_code'] . '"');

            if ($order->vars_number > 0) {

                $order->vars['order_money'] = $data['order_price'];

                if (!empty($data['commodity_id'])) {

                    $join_str = array(array("promo_code", "promo_code.promo_code_id", "promo_code_record.promo_code_id"));


                    $order->vars['commodity_id'] = $data['commodity_id'];

                    $codeRecord = new PromoCodeRecordModel();

                    $codeRecord->addJoin($join_str);

                    $codeRecord->initialize('user_id = ' . $order->vars['user_id'] . ' and code_merchandise = ' . $data['commodity_id'] . ' and code_state = 1 and code_end_time > ' . mktime(0, 0, 0));

                    if ($codeRecord->vars_number > 0) {

                        $id = $codeRecord->vars['promo_code_id'];

                        $code = new PromoCodeModel();

                        $code->initialize('promo_code_id = ' . $id);

                        if ($code->vars_number > 0) {

                            $code->vars['code_state'] = 2;

                            $code->updateVars();
                        }
                    }
                }

                $order->updateVars();
            }
        }
    }

}

?>
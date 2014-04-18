<?php

class PromoCodeRecordModel extends basic {

    public function __construct() {

        $this->child_name = 'promo_code_record';

        parent::__construct();
    }

    public function addCode($code_id, $open_id) {

        if (!empty($code_id) && !empty($open_id)) {

            $userModel = new userModel();

            $userinfo = $userModel->getUserInfo($open_id);

            $code = new PromoCodeModel();

            $code->initialize('promo_code_id = ' . $code_id);

            if ($code->vars_number > 0) {

                $codeRecord = new PromoCodeRecordModel();

                $insert['user_id'] = $userinfo['user_id'];

                $insert['promo_code_id'] = $code_id;

                $insert['ctime'] = time();

                $id = $codeRecord->insert($insert);

                if ($id > 0) {

                    $code->vars['code_state'] = 1;

                    $code->updateVars();
                }
            } else {
                echoErrorCode(60001);
            }
        }
    }

    /**
     * 获取用户个人优惠信息
     * $userInfo  array  用户个人信息
     * return object
     */
    public function getCodeUserInfo($userInfo) {

        $code = new PromoCodeRecordModel();
        $code->addOrderBy('ctime DESC');
        $code->initialize('user_id = ' . $userInfo['user_id']);
        $array = array();
        if ($code->vars_number > 0) {

            foreach ($code->vars_all as $k => $v) {

                $code = new PromoCodeModel();

                $code_info = $code->getCodeInfoById($v['promo_code_id']);

                $array[$k]['code_record'] = arrayToObject($v, 0);

                $array[$k]['code_info'] = arrayToObject($code_info, 0);
            }

            return $array;
        } else {

            echoErrorCode(60002);
        }
    }

    /**
     * 获取用户个人优惠信息
     * $userInfo  array  用户个人信息
     * return object
     */
    public function getCodeInfo($code_id) {

        $code = new PromoCodeRecordModel();

        $code->initialize('promo_code_id = ' . $code_id . ' and state = 0');
        $array = array();
        if ($code->vars_number > 0) {



            $codeInfo = new PromoCodeModel();

            $code_info = $codeInfo->getCodeInfoById($code->vars['promo_code_id']);

            $array['code_record'] = arrayToObject($codeInfo->vars, 0);

            $array['code_info'] = arrayToObject($code_info, 0);

            return $array;
        } else {

            echoErrorCode(60002);
        }
    }

    public function giveCode($code_id, $open_id, $give_open_id) {

        if (!empty($code_id) && !empty($open_id) && !empty($give_open_id)) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($open_id);

            $userInfoGive = $user->getUserInfo($give_open_id);

            $codeInfo = new PromoCodeModel();

            $codeInfo->initialize('promo_code_id = ' . $code_id);

            $code = new PromoCodeRecordModel();

            $code->addCondition('promo_code_id = ' . $code_id . ' and user_id = ' . $userInfo['user_id'], 1);

            $code->initialize();

            /**
             * 插入 赠送人的 信息  并修改 优惠券 信息  修改为 已领取
             */
            if ($code->vars_number > 0) {

                $code->vars['give_user_id'] = $userInfoGive['user_id'];

                $code->vars['state'] = 1;

                $code->updateVars();
            } else {

                $data['promo_code_id'] = $code_id;

                $data['user_id'] = $userInfo['user_id'];

                $data['give_user_id'] = $userInfoGive['user_id'];

                $data['ctime'] = time();

                $data['state'] = 1;


                $code->insert($data);
            }

            $codeInfo->vars['code_state'] = 1;

            $codeInfo->updateVars();


            /**
             * 修改  赠送人的信息
             */
            $giveCode = new PromoCodeRecordModel();

            $giveCode->addCondition('promo_code_id = ' . $code_id . ' and user_id = ' . $userInfoGive['user_id'], 1);

            $giveCode->initialize();


            if ($giveCode->vars_number > 0) {


                $update['give_user_id'] = $userInfo['user_id'];

                $update['state'] = 2;

                $giveCode->update($update);
            } else {

                $dataGive['promo_code_id'] = $code_id;

                $dataGive['user_id'] = $userInfoGive['user_id'];

                $dataGive['give_user_id'] = $userInfo['user_id'];

                $dataGive['ctime'] = time();

                $dataGive['state'] = 2;


                $giveCode->insert($dataGive);
            }
        }
    }

    /**
     * 获取用户优惠券信息 并获取
     */
    public function getUserRecordCode($userinfo) {


        $join_str = array(array("promo_code", "promo_code.promo_code_id", "promo_code_record.promo_code_id"));

        $this->addJoin($join_str);

        $where = 'user_id = ' . $userinfo['user_id'] . '   and (state = 1 or state = 0 )';
        
        $this->addGroupBy('code_merchandise');

        $this->initialize($where);

        $array = array();
        if ($this->vars_number > 0) {

            foreach ($this->vars_all as $k => $v) {

                if (!empty($v['code_merchandise'])) {

                    $info = new commodityModel();

                    $result = $info->getCommodityInfo($v['code_merchandise']);

                    if (is_array($result)) {
                        array_push($array, $result);
                    }
                }
            }
        }

        return $array;
    }

}

?>
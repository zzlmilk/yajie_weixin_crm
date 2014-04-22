<?php

class CodeController implements Code {

    /**
     * 优惠码绑定
     */
    public function addCode() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['code_id']) && !empty($_REQUEST['open_id'])) {

            $code = new PromoCodeRecordModel();

            $info = $code->addCode($_REQUEST['code_id'], $_REQUEST['open_id']);

            AssemblyJson($info);
        }
    }

    /**
     * 获取优惠吗
     */
    public function get_code() {

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['code_type'])) {

                $codeType = 2;
            } else {

                $codeType = 1;
            }

            $code = new PromoCodeModel();

            $codeDetail = $code->getCode($codeType);

            AssemblyJson($codeDetail);
        }
    }

    public function get_user_code() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            $code = new PromoCodeRecordModel();

            $record = $code->getCodeUserInfo($userInfo);

            AssemblyJson($record);
        } else {

            echoErrorCode(105);
        }
    }

    public function get_code_info() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['code_id'])) {


            $code = new PromoCodeRecordModel();

            $record = $code->getCodeInfo($_REQUEST['code_id']);

            AssemblyJson($record);
        } else {

            echoErrorCode(105);
        }
    }

    public function give_code() {

        if (!empty($_REQUEST['source']) && !empty($_REQUEST['code_id']) && !empty($_REQUEST['open_id']) && !empty($_REQUEST['give_open_id'])) {


            $code = new PromoCodeRecordModel();

            $code->giveCode($_REQUEST['code_id'], $_REQUEST['open_id'], $_REQUEST['give_open_id']);

            $array['res'] = 1;

            AssemblyJson($array);
        } else {

            echoErrorCode(105);
        }
    }

    public function getReceiveCode() {
        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['code_type'])) {

                $codeType = 2;
            } else {

                $codeType = 1;
            }

            $code = new PromoCodeModel();

            $codeDetail = $code->getCode($codeType);




//            $codeR = new PromoCodeRecordModel();
//
//            $info = $codeR->addCode($codeDetail['promo_code_id'], $_REQUEST['open_id']);



            AssemblyJson($codeDetail);
        } else {

            echoErrorCode(105);
        }
    }

    public function getUserCode() {


        if (!empty($_REQUEST['source']) && !empty($_REQUEST['open_id'])) {

            $user = new userModel();

            $userInfo = $user->getUserInfo($_REQUEST['open_id']);

            $codeRecord = new PromoCodeRecordModel();

            $list = $codeRecord->getUserRecordCode($userInfo);
            
            $array['list'] = $list;
            
            AssemblyJson($array);
        } else {

            echoErrorCode(105);
        }
    }

}

?>
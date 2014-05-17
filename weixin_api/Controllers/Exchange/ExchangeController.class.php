<?php

class ExchangeController implements exchange {


    public function __construct() {

        /**
         *  判断来源   根据来源来加载扩展库 如一般接口中不存在 相应的接口  查找扩展库中是否存在
         *  如存在 就执行扩展库中的方法
         */

        if(!empty($_REQUEST['source'])){

            $source = $_REQUEST['source'].'.php';

            if(file_exists(PLUGDIR.$source)){

                $name = $_REQUEST['source'].'Plug';

                $object = new $name();

                if(!method_exists($this,ACTION_NAME)){

                    if(method_exists($object, ACTION_NAME)){


                        call_user_func(array($object, ACTION_NAME),$_REQUEST);  

                        die;

                    }
                   
                }
            }
            
        }
    }
    

    /**
     * 获取兑换物品列表
     */
    public function get_exchange_list() {


        if (!empty($_REQUEST['source'])) {


            $exchangeModel = new ExchangeModel();

            $exchangeListArray = $exchangeModel->getExchangeList();

            if (count($exchangeListArray) > 0) {

                $exchangeArray = array();

                foreach ($exchangeListArray as $k => $v) {

                    $exchangeArray[$k] = arrayToObject($v, 0);
                }

                AssemblyJson($exchangeArray);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 获取兑换物品信息
     */
    public function get_exchange_info() {

        if ($_REQUEST['exchange_id'] > 0 && !empty($_REQUEST['source'])) {

            $exchangeModel = new ExchangeModel();

            $exchangeInfoArray = $exchangeModel->getExchangeInfo($_REQUEST['exchange_id']);

            if (count($exchangeInfoArray) > 0) {

                $exchangeArray = array();

                $array['exchange_info'] = arrayToObject($exchangeInfoArray, 0);

                AssemblyJson($array);
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 积分兑换
     */
    public function redeem() {

        if (!empty($_REQUEST['source'])) {

            if (!empty($_REQUEST['id']) && $_REQUEST['id'] > 0) {

                if (!empty($_REQUEST['open_id'])) {

                    $exchange = new ExchangeModel();

                    $array = $exchange->redeem($_REQUEST);

                    AssemblyJson($array);
                }
            }
        } else {

            echoErrorCode(105);
        }
    }

    /**
     * 用户兑换记录
     */
    public function user_exchange_record() {


        if (!empty($_REQUEST['source'])) {


            if (!empty($_REQUEST['open_id'])) {

                $user = new userModel();

                $userInfo = $user->getUserInfo($_REQUEST['open_id']);

                $exchangeRecord = new ExchangeRecordModel();

                $exchangeUserRecord = $exchangeRecord->getUserRecord($userInfo['user_id']);

                $exchangeArray = array();

                if (count($exchangeUserRecord) > 0) {

                    foreach ($exchangeUserRecord as $k => $v) {

                        $exchangeModel = new ExchangeModel();

                        $exchangeInfoArray = $exchangeModel->getExchangeInfo($v['exchange_id']);

                        $exchangeArray[$k]['exchange_record'] = arrayToObject($v, 0);

                        $exchangeArray[$k]['exchange_info'] = arrayToObject($exchangeInfoArray, 0);
                    }

                    AssemblyJson($exchangeArray);
                } else {

                    echoErrorCode(104);
                }
            }
        } else {

            echoErrorCode(105);
        }
    }

}

?>
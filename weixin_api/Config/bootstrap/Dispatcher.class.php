<?php

class Dispatcher {

    public function dispatcher() {




        if (URL_MODEL == 0) {

            $pathInfo = array();


            if (!empty($_REQUEST[VAR_GROUP])) {

                array_push($pathInfo, $_REQUEST[VAR_GROUP]);
            }

            if (!empty($_REQUEST[VAR_MODULE])) {

                array_push($pathInfo, $_REQUEST[VAR_MODULE]);

                if (!empty($_REQUEST[VAR_ACTION])) {

                    $function = $_REQUEST[VAR_ACTION];
                } else {

                    $function = 'index';
                }
                array_push($pathInfo, $function);
            }
        } elseif (URL_MODEL == 1) {

            if (!empty($_SERVER['PATH_INFO'])) {
                $pathInfo = explode(URL_PATHINFO_DEPR, trim($_SERVER['PATH_INFO'], URL_PATHINFO_DEPR));
            }
        }


        if (count($pathInfo) > 0 && count($pathInfo) <= 3) {

            $this->DataProcess($pathInfo);
        } else {

            die;
        }
    }

    /**
     * 处理数组 来获取方法和操作
     */
    private function DataProcess($pathArray) {
        /**
         * shop/shopInfo
         * shop/user/usershoped
         * 第一个为文件夹的名称 如 数组只存在2个 那么 第一个 既为文件夹名称 也为controller 名称
         * 最后一个  为 该模块运行的方法  
         */
        defined('MODULE_DIR_NAME') or define('MODULE_DIR_NAME', ucfirst($pathArray[0]));


        if (count($pathArray) <= 2) {


            defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', ucfirst($pathArray[0]) . 'Controller');

            defined('MODULE') or define('MODULE', strtolower(ucfirst($pathArray[0])));
        } else {

            array_shift($pathArray);

            defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', ucfirst($pathArray[0]) . 'Controller');

            defined('MODULE') or define('MODULE', strtolower(ucfirst($pathArray[0])));
        }


        array_shift($pathArray);
        defined('ACTION_NAME') or define('ACTION_NAME', $pathArray[0]);

        defined('MODULE_URL') or define('MODULE_URL', '/' . MODULE . '/' . ACTION_NAME);
    }

}

?>
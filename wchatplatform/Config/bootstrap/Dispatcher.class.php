<?php

class Dispatcher {

    public function dispatcher() {

        switch (URL_MODEL) {

            case '0':
                
                $this->parsentUrl();

                break;

            case '1':

                $this->parsentPathInfo();

                break;
        }
    }

    private function parsentUrl() {

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

        $this->DataProcess($pathInfo);
    }

    private function parsentPathInfo() {

        if (!empty($_SERVER['PATH_INFO'])) {

            $pathInfo = explode(URL_PATHINFO_DEPR, trim($_SERVER['PATH_INFO'], URL_PATHINFO_DEPR));

            $this->DataProcess($pathInfo);
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
        
        defined('MODULE_DIR_NAME') or define('MODULE_DIR_NAME', ucfirst($pathArray[0]));
        if (count($pathArray) <= 2) {

            defined('MODULE_DIR') or define('MODULE_DIR', ucfirst($pathArray[0]));

            defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', ($pathArray[0]) . 'Controller');
        } else {

            array_shift($pathArray);

            defined('MODULE_DIR') or define('MODULE_DIR', ucfirst($pathArray[0]));

            defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', ($pathArray[0]) . 'Controller');
        }



        array_shift($pathArray);

        defined('ACTION_NAME') or define('ACTION_NAME', $pathArray[0]);
        
        
       

        /**
         * 载入该目录的Controller
         */
        include_path_file(array('Controller' => MODULE_DIR_NAME), 'Controllers');
    }

}

?>
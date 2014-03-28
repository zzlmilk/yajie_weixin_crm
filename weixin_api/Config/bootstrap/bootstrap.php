<?php

class website {

    public function __construct() {

        session_start();
        /**
         * 初始化 加载配置文件
         */
        include_once 'defined.php';
        /**
         * 引入扩展函数库
         */
        include_once 'extends.php';
        /**
         * 载入 路由 规则
         */
        include_once 'Dispatcher.class.php';
    }

    public function run() {
        /**
         * 加载Model以及DB层
         */
        $file_path = array('Config' => array('DB'), 'Model','Plug','Interface');

        foreach ($file_path as $fileKey => $fileValue) {

            include_path_file($fileValue, $fileKey);

        }
        /**
         * 处理URL 以及 执行Action
         */


        if(Develop == 1){

            $this->initializationTest();

        } else{

            $this->initialization();

        }
        
    }

    private function initializationTest(){

        /**
         * 路由处理
         */
        $url = new Dispatcher();
        
        $url->dispatcher();
        
        /**
         * 判断模块是否存在
         */
        if (class_exists(MODULE_NAME_CONTROLLER)) {

            /**
             * 实例化类
             */
            $className = MODULE_NAME_CONTROLLER;
            $module = new $className();
            if ($module) {
                /**
                 * 执行方法
                 */
                call_user_func(array(&$module, ACTION_NAME));
            }
        }

    }

    private function initialization() {
        /**
         * 路由处理
         */
        $url = new Dispatcher();

        $url->dispatcher();
        
        if(!empty($_REQUEST['version'])){

            $version = $_REQUEST['version'];


            $versionApi = include_once 'core.php';

            $api = $versionApi[$version];


          

            if(!empty($api[MODULE]) && is_array($api[MODULE])){

                if (class_exists(MODULE_NAME_CONTROLLER)) {
                    /**
                     * 实例化类
                     */
                    $className = MODULE_NAME_CONTROLLER;
                    
                    $module = new $className();

                    if ($module) {

                        /**
                         *  判断方法是否存在 如存在 执行方法
                         */

                        if(in_array(ACTION_NAME, $api[MODULE])){

                            call_user_func(array(&$module, ACTION_NAME));

                        } else{

                           echoErrorCode(101);
                        }
                    } else{

                        echoErrorCode(102);
                    }
                }

            } else{

                echoErrorCode(103);
            }
            
        }

        
    }

}

?>

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
        
        $array = array('dir','model','action');

        foreach ($array as $k => $v) {
           
             if(!empty($pathArray[0])){

                 $$v = $pathArray[0];

                 array_shift($pathArray);

             }        
        }

        if(empty($action)){

            $action = $model;
        }

        if(count($pathArray) > 0){

            for($i = 0 ; $i < count($pathArray); $i = $i+2){

                 $key = $k  + 1;

                 if(!empty($pathArray[$key])){

                     $_ENV['request'][$pathArray[$i]] = $pathArray[$key];

                 } else{

                     $_ENV['request'][$pathArray[$i]] = '';
                 }

            }
        }

        if(count($_REQUEST) > 0){

             foreach($_REQUEST as $k=>$v){
                
                $_ENV['request'][$k] = $v;

             }
        }

        defined('MODULE_DIR_NAME') or define('MODULE_DIR_NAME', ucfirst($dir));
            
        defined('MODULE_DIR') or define('MODULE_DIR', ucfirst($model));
        
        defined('MODULE_NAME_CONTROLLER') or define('MODULE_NAME_CONTROLLER', ucfirst($model) . 'Controller');

        defined('ACTION_NAME') or define('ACTION_NAME', $action);
        
        /**
         * 载入该目录的Controller
         */
        include_path_file(array('Controller' => MODULE_DIR_NAME), 'Controllers');
    }

}

?>
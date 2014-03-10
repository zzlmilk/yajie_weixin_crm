<?php

ob_start();

$_ENV['error_code'] = 0;

/**
 *  自动加载 配置文件
 * @param type $filePath  路径地址
 * 2013-8-6 by zxp
 */
function fileRead($filePath) {
    if ($handle = opendir($filePath)) {
        /* to include all files that in the class folder what a way to include classes!!! */
        while (false !== ($file = readdir($handle))) {
            $fileName = $filePath . $file;
            //echo $file.'<br />';
            if ($file != '.' && $file != '..' && $file != '.svn' && $file != '.DS_Store') {
                if (is_file($fileName)) {
                    include_once($fileName);
                } else if (is_dir($fileName)) {
                    fileRead($fileName . '/');
                }
            }
        }
        closedir($handle);
    }
}

/**
 * 去除数组中的空值
 *  $var 为 传进来的数组
 */
function filter($array) {
    $newArray = array();
    foreach ($array as $v) {
        if ($v != '') {
            $newArray[] = $v;
        }
    }
    return $newArray;
}

/**
 * 对象数组排序
 */

/**
 *  php:sorted object in array according to a object's field.
 * 
 * @param array $List
 * @param var $by sort filed
 * @param var $order desc/asc
 * @param var $type sort type（num/string）
 * @return array
 */
function ArraySort(array $List, $by, $order = '', $type = '') {
    if (empty($List))
        return $List;
    foreach ($List as $key => $row) {
        //    $sortby[$key] = $row[$by] ;
        $sortby[$key] = $row->$by;
    }
    if ($order == "DESC") {
        if ($type == "num") {
            array_multisort($sortby, SORT_DESC, SORT_NUMERIC, $List);
        } else {
            array_multisort($sortby, SORT_DESC, SORT_STRING, $List);
        }
    } else {
        if ($type == "num") {
            array_multisort($sortby, SORT_ASC, SORT_NUMERIC, $List);
        } else {
            array_multisort($sortby, SORT_ASC, SORT_STRING, $List);
        }
    }
    return $List;
}

/**
 * 处理 URL
 */
function urlAction($url, $count) {
    $urlCount = (count($url) - $count < 0 ) ? 0 : count($url) - $count;
    return $urlCount;
}

/**
 *  错误日志
 */
function log_write($msg, $log_file, $type, $functionname = 'null') {
    if (LOG_STATE == 0) {
        if ($log_file == "") {
            return false;
        }

        $type = ($type != '') ? $type : 'DEFAULT';

        $now = date("M d H:i:s ");


        /**
         *  判断日志文件大小是否超过预设的文件大小
         */
        if (is_file($log_file) && floor(LOG_FILE_SIZE) <= filesize($log_file)) {

            rename($log_file, dirname($log_file) . '/' . time() . '-' . basename($log_file));
        }
        $message = $now . '[' . $type . ']' . '_' . $functionname . '_' . get_client_ip() . '_' . $_SERVER['REQUEST_URI'] . "\r\n" . $msg . "\r\n";

        $fp = fopen($log_file, "a");
        flock($fp, LOCK_EX);
        fputs($fp, $message);
        fclose($fp);
        return TRUE;
    }
}

/**
 * 创建文件夹目录  
 * $path string  文件夹目录  如/home/wwwroot/cloud/name 
 */
function mkdirPath($path) {
    $new = @iconv("UTF-8", "GBK", $path);
    if (!file_exists($new)) {
        mkdir($new, 0777);
    }
}

/**
 * 通过经纬度 和 距离 计算出 4个点
 * @param int $latitude  
 * @param int $longitude
 * @param int $raidus  距离  单位为 千米
 * @return array 
 */
function getAround($latitude, $longitude, $raidus) {
    $result = array();
    $degree = (24901 * 1609) / 360.0;
    $raidusMile = $raidus;
    $dpmLat = 1 / $degree;
    $radiusLat = $dpmLat * $raidusMile;
    $mpdLng = $degree * cos($latitude * (3.14159265 / 180));
    $dpmLng = 1 / $mpdLng;
    $radiusLng = $dpmLng * $raidusMile;

    $minLat = $latitude - $radiusLat;
    $maxLat = $latitude + $radiusLat;

    $minLng = $longitude - $radiusLng;
    $maxLng = $longitude + $radiusLng;


    $result['minLat'] = $minLat;
    $result['maxLat'] = $maxLat;
    $result['minLng'] = $minLng;
    $result['maxLng'] = $maxLng;

    return $result;
}

/**
 * 根据经纬度计算距离
 * @param float $lng1
 * @param float $lat1
 * @param float $lng2
 * @param float $lat2
 * @return int
 */
function getdistance($lng1, $lat1, $lng2, $lat2) {//
    //将角度转为狐度 
    $array = array();
    $radLat1 = deg2rad($lat1);
    $radLat2 = deg2rad($lat2);
    $radLng1 = deg2rad($lng1);
    $radLng2 = deg2rad($lng2);
    $a = $radLat1 - $radLat2; //两纬度之差,纬度<90
    $b = $radLng1 - $radLng2; //两经度之差纬度<180
    $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137;
    if ($s < 1) {
        $m = $s * 1000;
        $array['val'] = $m;
        $array['type'] = 1;
    } else {
        $array['val'] = $s;
        $array['type'] = 0;
    }
    return $array;
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @return mixed
 */
function get_client_ip($type = 0) {
    $type = $type ? 1 : 0;
    static $ip = NULL;
    if ($ip !== NULL)
        return $ip[$type];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos)
            unset($arr[$pos]);
        $ip = trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $long = sprintf("%u", ip2long($ip));
    $ip = $long ? array($ip, $long) : array('0.0.0.0', 0);
    return $ip[$type];
}

/**
 *  使用CURL 函数 获取远程地址的数据
 */
function transmissionData($url, $jsonData,$method) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $access_token);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $tmpInfo = curl_exec($ch);
    if (curl_errno($ch)) {
        echo curl_error($ch);
    }

    curl_close($ch);

    echo $tmpInfo;
}

function getApiArray($name) {
    $api = include_once 'Api.php';
    if (!empty($api[$name])) {
        return $api[$name];
    } else {
        return 0;
    }
}

/**
 * 自动加载 相关配置文件
 * @param type $dirName  为 引入的文件夹名称
 * @param type $fileKey  当在同一个文件夹 有2个内容 需要引入  将数组定义成二维数组时 为同一个文件夹
 */
function include_path_file($dirName, $fileKey) {
    $filePath = '';
    if (is_array($dirName)) {
        foreach ($dirName as $dirValue) {
            if (!empty($dirValue) && $dirValue != '') {
                $filePath = ROOT_DIR . $fileKey . '/' . $dirValue . '/';
                //echo $filePath.'<br />';

                if(file_exists($filePath)){

                    fileRead($filePath);

                }
                
            }
        }
    } else {
        $filePath = ROOT_DIR . $dirName . '/';
         if(file_exists($filePath)){

            fileRead($filePath);
                    
         }
    }
}


/**
 * 将数组中的键值 转换为 对象
 * 
 * $array  array    1维数组
 * 
 * $output  int   默认为1   1为输出json数据 0为返回已经生成好的对象
 *
 */

function arrayToObject($array,$output = 1){

    $object =  new stdClass();

    if(is_array($array) && count($array) > 0 ){

        foreach($array as $key=>$value){

            $object->$key = $value;

         }

    }

    if($output == 1){

           
        echo json_encode($object);

        die;

    } else{

        return $object;

    }

}


/**
 * 组装成json  如错误代码 则直接返回错误代码的json
 * 判断传进来的值 是否为数组 如不为数组 则定义数组类型
 * 调用setErrorrCode 函数 判断是否有PHP 错误 如有PHP 错误 则优先把错误代码设置为PHP错误代码
 * 调用getErrorInfo 函数 获取该错误代码的提示内容
 * 返回json
 */
function AssemblyJson($jsonArray = null, $type = 'json') {
    $logs = apiLog . date("Y_m_d") . '.log';

    if (count($jsonArray) == 0) {
        $jsonArray = array();
    }
    setErrorCode($_ENV['error_code']);
    if ($_ENV['error_code'] != 0) {
        $errorStatus = getErrorInfo($_ENV['error_code']);
        $errorObject = new stdClass();
        $errorObject->error_status = $_ENV['error_code'];
        $errorObject->status_info = $errorStatus;
        $jsonArray['error'] = $errorObject;
    }
    $encodeJsonEncode = json_encode($jsonArray);
    log_write($encodeJsonEncode, $logs, 'RETURN');
    switch (strtoupper($type)) {
        case 'JSON' :
            // 返回JSON数据格式到客户端 包含状态信息
            header('Content-Type:application/json; charset=utf-8');
            exit($encodeJsonEncode);
            break;
    }
}

/**
 * 设定错误代码
 */
function setErrorCode($errorCode) {
    /**
     * 判断是否有PHP错误
     */

    if (count(error_get_last()) > 0) {

        $error_array = error_get_last();

        if ($error_array['type'] != 8192) {

            $_ENV['error_code'] = 100;
        }
    } else {
        $_ENV['error_code'] = $errorCode;
    }
}

/**
 * 设定错误代码 并显示到页面上
 */
function echoErrorCode($errorCode) {

    setErrorCode($errorCode);

    AssemblyJson();
}

/**
 * 获取错误代码表达的内容
 */
function getErrorInfo() {

    $errorListArray = include ROOT_DIR . 'Config/bootstrap/error_list.php';

    if (!empty($errorListArray[$_ENV['error_code']])) {

        return $errorListArray[$_ENV['error_code']];
    }
}

/**
 * 传递数据 
 *  $url  为接口调用的url 地址  
 *  $method  为传递的方式  POST  GER
 *  $data   当method 为post时  传值为array
 */

function  transferData($url,$method,$data =''){

    switch($method){

        case 'post':

            $output = curlPost($url,$data);

        break;

        case 'get':

           $output = curlGet($url);

        break;

    }

    return $output;
    
}


function curlPost($url,$post = null,$options = array()){

    $defaults = array( 

        CURLOPT_POST => 1, 
        CURLOPT_HEADER => 0, 
        CURLOPT_URL => $url, 
        CURLOPT_FRESH_CONNECT => 1, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_FORBID_REUSE => 1, 
        CURLOPT_TIMEOUT => 4, 
        CURLOPT_POSTFIELDS => http_build_query($post),
        CURLOPT_FOLLOWLOCATION=> 1
    ); 

    $ch = curl_init(); 

    curl_setopt_array($ch, ($options + $defaults)); 

    if( ! $result = curl_exec($ch)) 
    { 
        trigger_error(curl_error($ch)); 
    } 
    curl_close($ch); 
    return $result; 

}


function curlGet($url){


     $defaults = array( 

        CURLOPT_URL => $url, 

        CURLOPT_HEADER => 0, 

        CURLOPT_RETURNTRANSFER => TRUE, 

        CURLOPT_TIMEOUT => 4,
        
        CURLOPT_FOLLOWLOCATION=> 1
    ); 
    
    $ch = curl_init(); 

    curl_setopt_array($ch, $defaults); 

    if( ! $result = curl_exec($ch)) 
    { 
        trigger_error(curl_error($ch)); 
    } 

    curl_close($ch); 

    return $result; 

}

?>

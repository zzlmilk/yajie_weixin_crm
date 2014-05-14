<?php

ob_start();

date_default_timezone_set('PRC');

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
                $filePath = ROOT_DIR . '/' . $fileKey . '/' . $dirValue . '/';
                //echo $filePath.'<br />';
                fileRead($filePath);
            }
        }
    } else {
        $filePath = ROOT_DIR . '/' . $dirName . '/';
        
       // echo $filePath;
        
        
        fileRead($filePath);
    }
}

/**
 * 传递数据 
 *  $url  为接口调用的url 地址  
 *  $method  为传递的方式  POST  GER
 *  $data   当method 为post时  传值为array
 */
function transferData($url, $method, $data = '') {

    switch ($method) {

        case 'post':

            $output = curlPost($url, $data);

            break;

        case 'get':

            $output = curlGet($url);

            break;
    }

    return $output;
}

function curlPost($url, $post = null, $options = array()) {


   $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$post);
      $result =   curl_exec($ch);
        curl_close($ch);

        return $result;
}

function curlGet($url) {

    $defaults = array(
        CURLOPT_URL => $url,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_TIMEOUT => 14,
        CURLOPT_FOLLOWLOCATION => 1
    );

    $ch = curl_init();

    curl_setopt_array($ch, $defaults);

    if (!$result = curl_exec($ch)) {
        trigger_error(curl_error($ch));
    }

    curl_close($ch);

    return $result;
}

//加载模块
function U($pathinfo, $var = '', $model = 0) {

    $info = pathinfo($pathinfo);

    $action = $info['basename'];
    $module = $info['dirname'];

    $class_strut = explode('/', $module);

    $jumpUrl = WebSiteUrl . '?g=' . $class_strut[0] . '&a=' . $class_strut[1] . '&v=' . $action;


    if (count($var) > 0 && is_array($var)) {

        $array = array();

        foreach ($var as $k => $v) {
            $array[] = $k . '=' . $v;
        }

        $fields = implode('&', $array);

        $string.='&' . $fields;

        $jumpUrl.=$string;
    }


    if (is_string($var)) {

        $jumpUrl.='&' . $var;
    }
    if ($model == 0) {

        echo '<script>window.location.href="' . $jumpUrl . '"</script>';

        die;
    } else {

        return $jumpUrl;
    }
}

/**
 * 远程调用模块的操作方法 URL 参数格式[分组/]模块/操作
 * @param string $url 调用地址
 * @param array $vars 调用参数 数组 
 * @return mixed
 */
function R($url, $sorce, $vars = array()) {
    $info = pathinfo($url);


    $action = $info['basename'];
    $module = $info['dirname'];
    $class = A($module, $sorce);
    if ($class) {
        return call_user_func_array(array(&$class, $action), $vars);
    } else {
        return false;
    }
}

/**
 * 初始化类名
 * @param type $module
 * @param type $ext
 * @param type $file
 * @return class
 */
function A($module, $sorce, $ext = '.class.php', $file = 'Controller') {
    $class_strut = explode('/', $module);
    $class = str_replace(array('.', '#'), array('/', '.'), $module);
    $class = substr_replace($class, '', 0, strlen($class_strut[0]) + 1);
    $baseUrl = ROOT_DIR . 'Controllers/' . ucfirst($sorce) . '/';
    $classfile = $baseUrl . $class . $file . $ext;

    if (file_exists($classfile)) {

        require_once $classfile;
        $class = basename($module . $file);
        $class = new $class();
        return $class;
    }
}

function checkMobile($phone) {

    if (preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/", $phone)) {

        return true;
    } else {

        return false;
    }
}

?>

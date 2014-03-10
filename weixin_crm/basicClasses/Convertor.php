<?php

class Convertor {

    static public function convertDateToUnix() {

    }

    static public function convertUnixToDate($unix_time) {
        return date('Y-m-d G:i:s', $unix_time);
    }

    static public function convertUnixToTime($unix_time) {
        $hour = 0;
        $day = 0;
        $sec = 0;
        $min = 0;
        $remain = $unix_time;
        $day = floor($remain / 86400);
        $remain -= $day * 86400;
        $hour = floor($remain / 3600);
        $remain -= $hour * 3600;
        $min = floor($remain / 60);
        $remain -= $min * 60;
        $sec = $remain;
        if ($day > 0) {
            return sprintf('%02d:%02d:%02d ', $hour, $min, $sec);
        } else {
            return sprintf('%02d:%02d:%02d ', $hour, $min, $sec);
        }
    }

    static public function convertUnixToDay($unix_time) {
        $day = '';
        $hour = 0;
        $day = 0;
        $sec = 0;
        $min = 0;
        $remain = $unix_time;
        $day = floor($remain / 86400);
        $remain -= $day * 86400;
        $hour = floor($remain / 3600);
        $remain -= $hour * 3600;
        $min = floor($remain / 60);
        $remain -= $min * 60;
        $sec = $remain;
        if ($day > 0) {
            return sprintf('%d天 ', $day);
        } else {
            return sprintf('%02d:%02d:%02d ', $hour, $min, $sec);
        }
    }

    static function convertUnixToDayHr($unix_time) {
        $day = '';
        $hour = 0;
        $day = 0;
        $sec = 0;
        $min = 0;
        $remain = $unix_time;
        $day = floor($remain / 86400);
        $remain -= $day * 86400;
        $hour = floor($remain / 3600);
        $remain -= $hour * 3600;
        $min = floor($remain / 60);
        $remain -= $min * 60;
        $sec = $remain;
        return sprintf('%02d天%02d小时', $day, $hour);
    }

    static public function convertLabletoValue($lable, $value, $template) {
        return str_replace('##' . $lable . '##', $value, $template);
    }

    static public function convertToMD5($value) {
        return md5($value);
    }

    /* -------------------------------------------------------------------------------------
      3 different types will deal with different needs:
      KEY=>keys in the array
      VALUE=>values in the array
      DB_VALUE=> the value of array for DB usage
     */

    static public function convertArrayToString($array, $type=NULL) {

        $string = '';
        $DB = new Query;
        foreach ($array as $key => $value) {
            if ($type == 'KEY')
                $string .= $key . ',';
            else if ($type == 'VALUE')
                $string .= $value . ',';
            else if ($type == 'DB_VALUE')
                $string .= "'" . $DB->makeStringDBSafe($value) . "',";
        }
        $string = substr($string, 0, strlen($string) - 1);
        return $string;
    }

    static public function convertStringToArray($string, $type=NULL) {
        return explode(',', $array);
    }

    /* -------------------------------------------------------------------------------------
      this array is combined by fleid_name_in_template=> fleid_name_in_database
      this is use to filter all no need elments in a post array, the returned array is normally used in database functionality
     */

    static public function filterPOST($array, $post) {
        $require_array = array();
        foreach ($post as $key => $value) {
            if (array_key_exists($key, $array)) {
                $field_name = $array[$key];
                if ($value != '')
                    $require_array[$field_name] = $value;
                else
                    $require_array[$field_name] = '';
            }
        }
        return $require_array;
    }

    static public function addPrefix($array, $prefix) {
        $new_array = array();
        foreach ($array as $key => $value) {
            $new_array[$prefix . $key] = $value;
        }
        return $new_array;
    }

    static public function getPageOffset($number, $offset, $limit) {
        $return_array = array();
        if ($number != NULL) {
            $page_number = ceil($number / $limit);
            $return_array['page_number'] = $page_number;
        } else {
            $page_number = 1;
        }
        $page_number = $page_number == 0 ? 1 : $page_number;
        $next_offset = $offset + $limit;
        $pre_offset = $offset - $limit;
        $last_offset = ($page_number - 1) * $limit;
        $current_page = floor($offset / $limit);
        $return_array['next_offset'] = $next_offset;
        $return_array['pre_offset'] = $pre_offset;
        $return_array['last_offset'] = $last_offset;
        $return_array['current_page'] = $current_page + 1;
        if ($next_offset > $last_offset) {
            $return_array['next_offset'] = $last_offset;
        }if ($return_array['pre_offset'] < 0) {
            $return_array['pre_offset'] = 0;
        }
        return $return_array;
    }

    static public function getKeyPositionArray($array, $index) {
        $position = array();
        foreach ($array as $key => $value) {
            if ($value == $index) {
                $position[] = $key;
            }
        }
        return $position;
    }

    static public function arrayConvertToSubArray($array) {
        if (!is_array($array[0]) && empty($array[0]))
            $return_array[] = $array;
        else
            $return_array = $array;
        return $return_array;
    }

    static public function curPageURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"] == "on") {
            $pageURL .= "s";
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    static public function deleteArrayValueWithKeyNames(&$array, $key_name_array) {

        if (is_array($key_name_array)) {
            $key_index = array();
            foreach ($key_name_array as $key_name) {

                $key_index = array_keys($array, $key_name);
                if (count($key_index) > 0)
                    array_splice($array, $key_index[0], 1);
            }
        }
        else
            return false;
    }

}

?>
<?php

/**
 * 错误 提示 处理
 */
class errorApi extends BaseController {

    var $error_list;

    public function __construct() {

        // 载入  错误代码 文件
        $this->error_list = require_once ROOT_DIR . 'Api/error_list.php';
    }

    /**
     * 判断是否有错误提示
     * @param type $redirect_url  跳转地址 
     * @param type $info    API 调用 返回内容
     */
    public function JudgeError($info, $redirect_url = '', $source = '',$open_id ='') {

        if (!empty($info['error'])) {

            switch ($info['error']['error_status']) {

                case '20004':

                    /**
                     * 未注册  跳转注册页面
                     */
                    R('/user/register', $source, array('open_id' => $open_id, 'redirect_url' => urlencode($redirect_url)));

                    die;
                    break;

                default:

                    if (!empty($this->error_list[$info['error']['error_status']])) {

                        $this->displayMessage($this->error_list[$info['error']['error_status']]);
                    }
            }
        }
    }

}
?>


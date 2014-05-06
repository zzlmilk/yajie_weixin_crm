<?php

class BaseController {

    public $smarty;
    public $display_page;
    public $dir_name;
    public $smarty_dir;
    public $tVar;
    public $userOpenId;
    public $requset;

    private function initView() {

        if (!$this->smarty) {

            // 载入  smarty 文件
            require_once ROOT_DIR . '/Config/bootstrap/smarty.php';

            $this->smarty = $smarty;

            if (!empty($this->display_page)) {
                
            } else {

                $this->display_page = ACTION_NAME;
            }

            if (!empty($this->dir_name)) {

                $this->smarty_dir = $this->dir_name;
            } else {

                $this->smarty_dir = MODULE_DIR;
            }

            $this->smarty->template_dir = ROOT_DIR . '/Tpl/' .MODULE_DIR_NAME.'/'. $this->smarty_dir . '/';
        }

        if ($this->tVar) {

            $this->smarty->assign($this->tVar);
        }
    }

    protected function setDir($dir) {

        $this->dir_name = $dir;
    }

    protected function display($page = '') {

        $this->initView();


        if (!file_exists($this->smarty->template_dir)) {

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir, 0777);
        }


        if (!empty($page)) {

            $displayPage = $page;
        } else {

            $displayPage = $this->display_page;
        }

        if (!file_exists($this->smarty->template_dir . $displayPage . '.tpl')) {

            fopen($this->smarty->template_dir . $displayPage . '.tpl', "w+");
        }



        $this->smarty->assign('websiteUrl', WebSiteUrl);

        $this->smarty->assign('model', MODULE_DIR_NAME);
        
       

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic.'/'.SOURCE);
        

        $this->smarty->display($displayPage . '.tpl');
    }

    public function assign($name, $value = '') {

        if (is_array($name)) {

            $this->tVar = array_merge($this->tVar, $name);
        } else {

            $this->tVar[$name] = $value;
        }
    }

    public function errorDisplay($errorArray) {

        if (!empty($errorArray['error']) && is_array($errorArray['error'])) {
            
        }
    }

    public function jsJump($url) {

        exit('<script>window.location.href="' . $url . '";</script>');
    }

    public function displayMessage($msg, $url = '') {

        $this->setDir('Public');

        $this->assign('url', $url);

        $this->assign('msg', $msg);

        $this->display('message');

        die;
    }

    public function able_register() {


        if (empty($this->userOpenId)) {

            $this->displayMessage('open_id 不存在  请重新登录');
        }

        $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];

        $vars = 'action=url&url=' . urlencode($url) . '&open_id=' . $this->userOpenId;

        $userApi = new userApi();

        $userInfo = $userApi->getUserInfo($this->userOpenId, 'company');


        $error = new errorApi();

        $error->JudgeError($userInfo, $vars, '', $this->userOpenId);
    }

    /**
     * 判断来源  如来源为赠送优惠券  则将获取赠送的人的信息
     */
    public function ableSource($result) {

        if (!empty($result)) {


            switch ($result['action']) {

                case '/code/getCode':

                    /**
                     * 来自赠送  获取赠送人的用户资料
                     */
                    if (!empty($_REQUEST['give_open_id']) && !empty($_REQUEST['open_id'])) {

                        $userApi = new userApi();

                        $info = $userApi->getUserInfo($result['give_open_id'], 'company');

                        $this->assign('give_info', $info);

                        $this->assign('state', 1);
                    }
                    break;
            }
        }
    }

}

?>
<?php

class BaseController {

    private $smarty;
    public $display_page;
    public $dir_name;
    private $smarty_dir;
    protected $tVar;

    private function initView() {

        if (!$this->smarty) {

            // 载入  smarty 文件
            require_once ROOT_DIR . 'Config/bootstrap/smarty.php';

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

            $this->smarty->template_dir = ROOT_DIR . 'templates/' . $this->smarty_dir . '/';
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

        $this->smarty->assign('DIR', strtolower(MODULE_DIR_NAME));

        $this->smarty->assign('WebSiteUrlPublic', WebSiteUrlPublic);
        $this->smarty->display($displayPage . '.tpl');
    }

    protected function assign($name, $value = '') {

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

}

?>
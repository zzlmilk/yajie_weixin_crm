<?php

class view {

	private $smarty;
    
    private $display_page;

    private $smarty_dir;

    protected $tVar;


    public function initView(){

        if(!$this->smarty){
            
            // 载入  smarty 文件
            require_once ROOTPATH . 'js/smarty.php';

            $this->smarty = $smarty;

        }

        if($this->tVar){
            
            $this->smarty->assign($this->tVar);
        }


        if(!empty($this->smarty_dir)){

            $this->smarty->template_dir = ROOTPATH . 'templates/'.$this->smarty_dir.'/';

        } else{

            $this->smarty->template_dir = ROOTPATH . 'templates/';
        }

    }

    public function display($page  = '') {

        $this->initView();

        $displayPage = '';

        if(!empty($page)){

            $displayPage = $page;

        } else{

            $displayPage = $this->display_page;

        }


        if(!file_exists($this->smarty->template_dir)){

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir,0777);

        }

        if(!file_exists($this->smarty->template_dir.$displayPage. '.tpl')){
           
            fopen($this->smarty->template_dir.$displayPage. '.tpl', "w+");

        }

     
       $this->smarty->assign('ROOTPATH', ROOTPATH);

       $this->smarty->assign('WebSiteUrl',WebSiteUrl);

       $this->smarty->assign('URLHANDLER',URLHANDLER);

       $this->smarty->assign('URLCONTROLLER',URLCONTROLLER);

       $this->smarty->display($displayPage. '.tpl');
    }

    public function assign($name,$value =''){

        if(is_array($name)){

            $this->tVar = array_merge($this->tVar, $name);

        } else{

            $this->tVar[$name] = $value;
        }

    }


    public function setDirTemplates($dir){


        $this->smarty_dir =  '';
    }

}

$_ENV['smarty']  = new view();
?>
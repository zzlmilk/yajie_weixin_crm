<?php

class view {

	public $smarty;
    
    public $display_page;

    public $smarty_dir;

    public $tVar;

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

        }

        if(!file_exists($this->smarty->template_dir)){

            mkdir($this->smarty->template_dir);

            chmod($this->smarty->template_dir,0777);

        }

        if(!file_exists($this->smarty->template_dir.$displayPage. '.tpl')){
           
            fopen($this->smarty->template_dir.$displayPage. '.tpl', "w+");

        }


       $this->smarty->assign('uname',$_SESSION['user_name']);
     
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

        if(!empty($dir)){

             $this->smarty_dir =  $dir;

        } else{

             $this->smarty_dir =  '';

        }

       
    }

}

$_ENV['smarty']  = new view();
?>
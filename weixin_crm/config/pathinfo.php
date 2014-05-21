<?php


if(empty($_SESSION['weixin_crm_source'])){

    if (!empty($_SERVER['PATH_INFO'])) {

         $pathInfo = explode(URL_PATHINFO_DEPR, trim($_SERVER['PATH_INFO'], URL_PATHINFO_DEPR));

         if(!empty($pathInfo) && is_array($pathInfo)){

            defined('SOURCE') or define('SOURCE', strtolower($pathInfo[0]));

            $_SESSION['weixin_crm_source'] = SOURCE;
        } else{

            echo '来源不能为空';

            die;
        }
    }
}
include_once 'core.php';

include_once 'extends.php';


 defined('URLCONTROLLER') or define('URLCONTROLLER', WebSiteUrl.'/publicController/'.$_SESSION['weixin_crm_source']);

 defined('FOOTCONTROLLER') or define('FOOTCONTROLLER',  ROOTPATH . 'publicController/'.$_SESSION['weixin_crm_source'].'/');


defined('URLADDRESS') or define('URLADDRESS', WebSiteUrl.'/'.$_SESSION['weixin_crm_source']);

if ($handle = opendir(FOOTCONTROLLER)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTCONTROLLER . $file);
        }
    }
    closedir($handle);
}


?>
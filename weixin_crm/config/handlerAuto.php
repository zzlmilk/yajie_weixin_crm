<?php



if ($handle = opendir(FOOTBASIC)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTBASIC . $file);
        }
    }
    closedir($handle);
}


if ($handle = opendir(FOOTINTERFACE)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTINTERFACE . $file);
        }
    }
    closedir($handle);
}

if ($handle = opendir(FOOTCLASS)) {
    /* to include all files that in the class folder what a way to include classes!!! */
    while (false !== ($file = readdir($handle))) {
        if ($file != '.' && $file != '..' && $file != '.svn') {
            include_once(FOOTCLASS . $file);
        }
    }
    closedir($handle);
}

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
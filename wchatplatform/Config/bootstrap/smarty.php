<?php

require  SmartyDir.'/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->compile_dir = ROOT_DIR . "/Cache";
$smarty->config_dir = ROOT_DIR . "Smarty/Tpl/config";
$smarty->cache_dir = ROOT_DIR . "Smarty/Tpl/cache";
$smarty->caching = false;
?>

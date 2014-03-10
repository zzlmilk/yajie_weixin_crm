<?php

require  ROOT_DIR . 'Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->compile_dir = ROOT_DIR . "/templates_c";
$smarty->config_dir = ROOT_DIR . "Smarty/templates/config";
$smarty->cache_dir = ROOT_DIR . "Smarty/templates/cache";
$smarty->caching = false;
?>

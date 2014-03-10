<?php

require ROOTPATH . 'Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = ROOTPATH . "templates";

$smarty->compile_dir = ROOTPATH . "templates_c";

$smarty->config_dir = ROOTPATH . "Smarty/templates/config";

$smarty->cache_dir = ROOTPATH . "Smarty/templates/cache";

$smarty->caching = false;
?>

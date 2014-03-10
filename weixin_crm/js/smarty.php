<?php

require FOOT . 'Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = FOOT . "/templates";

$smarty->compile_dir = FOOT . "/templates_c";

$smarty->config_dir = FOOT . "Smarty/templates/config";

$smarty->cache_dir = FOOT . "Smarty/templates/cache";

$smarty->caching = false;
?>

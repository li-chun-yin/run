<?php
	define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
	define('SMARTY_PATH','/my 20101130/smarty/');
	require_once BASE_PATH.SMARTY_PATH.'smarty.class.php';
	$smarty = new Smarty();
	$smarty->template_dir = BASE_PATH.'/my 20101130/run/templates/';
	$smarty->compile_dir = BASE_PATH.'/my 20101130/run/templates_c/';
	$smarty->cache_dir = BASE_PATH.'/my 20101130/run/cache/';
	$smarty->config_dir = BASE_PATH.'/my 20101130/run/configs/';
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->allow_php_tag = true;
?>

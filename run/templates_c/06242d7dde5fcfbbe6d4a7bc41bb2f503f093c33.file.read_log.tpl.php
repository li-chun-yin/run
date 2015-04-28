<?php /* Smarty version Smarty3-b8, created on 2010-11-04 11:47:25
         compiled from "D:/AppServ/www/my 20101130/run/templates/read_log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225784cd29d4d8b1377-62125803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06242d7dde5fcfbbe6d4a7bc41bb2f503f093c33' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/read_log.tpl',
      1 => 1288871241,
    ),
  ),
  'nocache_hash' => '225784cd29d4d8b1377-62125803',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('arr')->value[0]['date'];?>
跑步日志</title>
</head>

<body>
	<h1><?php echo $_smarty_tpl->getVariable('arr')->value[0]['date'];?>
</h1>
	<p><?php echo $_smarty_tpl->getVariable('arr')->value[0]['content'];?>
</p>
</body>
</html>

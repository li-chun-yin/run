<?php /* Smarty version Smarty3-b8, created on 2010-11-07 15:52:50
         compiled from "D:/AppServ/www/my 20101130/run/templates/user_record.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64904cd6cb522d6714-94346015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4daaa1fe0d9dd3504598fcac62931437e2e9e3e8' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/user_record.tpl',
      1 => 1289145011,
    ),
  ),
  'nocache_hash' => '64904cd6cb522d6714-94346015',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
	<h1>个人最佳记录</h1>
	<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('record')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
		<li><?php echo $_smarty_tpl->getVariable('item')->value['item'];?>
: <?php echo $_smarty_tpl->getVariable('item')->value['value'];?>
</li>
		<li class="right">创造于--<?php echo $_smarty_tpl->getVariable('item')->value['date'];?>
</li>
<?php }} ?>
	</ul>
</body>
</html>

<?php /* Smarty version Smarty3-b8, created on 2010-11-08 07:07:00
         compiled from "D:/AppServ/www/my 20101130/run/templates/reckon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45044cd7a1942005a5-66882313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1489eab36f6e661994ad5b3801ff006bbe2559fd' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/reckon.tpl',
      1 => 1289200017,
    ),
  ),
  'nocache_hash' => '45044cd7a1942005a5-66882313',
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
	<table id="reckon">
		<tr>
			<th align="center" colspan="4">记录汇总</th>
		</tr>
		<tr bgcolor="#64748B" id="reckonw">
			<td>总跑量</td>
			<td>总时长</td>
			<td>平均每公里</td>
			<td>马拉松预测</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('total_space')->value;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('total_time')->value;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('avg_time')->value;?>
</td>
			<td><?php echo $_smarty_tpl->getVariable('pre_time')->value;?>
</td>
		</tr>
	</table>
</body>
</html>

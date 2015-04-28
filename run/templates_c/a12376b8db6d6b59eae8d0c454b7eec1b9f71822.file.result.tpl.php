<?php /* Smarty version Smarty3-b8, created on 2010-11-08 09:08:01
         compiled from "D:/AppServ/www/my 20101130/run/templates/result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288864cd7bdf1d65977-17224261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12376b8db6d6b59eae8d0c454b7eec1b9f71822' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/result.tpl',
      1 => 1289207279,
    ),
  ),
  'nocache_hash' => '288864cd7bdf1d65977-17224261',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\AppServ\www\My 20101130\Smarty\plugins\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<script src="js/result.js" language="javascript"></script>
<script src="js/xmlhttp.js" language="javascript"></script>
<link href="css/result.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<form name="result" id="result"><input type="hidden" id="user_id" name="user_id"  value="<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
" />
		<table id="res1">
			<tr>
				<th colspan="2">数据录入</th>
			</tr>
			<tr>
				<td>日期：</td>
				<td>
					<input name="year" id="year" type="text" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
年" readonly="readonly" style="float:left;"/>
					<div id="resetyear" style="float:left; margin-left:1px;">
						<a class="a1" href="javascript:Setyear1()">&and;</a>
						<a class="a1" href="javascript:Setyear2(<?php echo smarty_modifier_date_format(time(),'%Y');?>
);" style="margin-top:1px;">&or;</a>
					</div>
					<?php echo $_smarty_tpl->getVariable('month')->value;?>

					<?php echo $_smarty_tpl->getVariable('day')->value;?>

				</td>
			</tr>
			<tr>
				<td>备注：</td>
				<td><textarea id="remark" name="remark"><?php echo $_smarty_tpl->getVariable('log')->value;?>
</textarea><input type="button" value="保存" onclick="savelog();" /></td>
			</tr>
		</table>
	<hr />
		<table>
			<tr>
				<td>项目名称：</td>
				<td><input name="item" type="text" id="item" size="20" maxlength="200" /></td>
			</tr>
			<tr>
				<td>距离：</td>
				<td><input name="space" type="text" id="space" size="5" maxlength="5" />
				(m)</td>
			</tr>
			<tr>
				<td>成绩（所用时间）：</td>
				<td><input name="result1" type="text" id="result1" size="2" maxlength="2" />
				 小时 <input name="result2" type="text" id="result2" size="2" maxlength="2" />
				  分钟 <input name="result3" type="text" id="result3" size="2" maxlength="2" />
				   秒 </td>
			</tr>
			<tr>
				<td>平均速度：</td>
				<td><input name="speed" type="text" id="speed" size="7" readonly="readonly" style="background-color:#EBEBE4;border:1px solid #7F9DB9;" />
				分/Km</td>
			</tr>
			<tr>
				<td colspan='2'><input type="button" value="添加" onclick="addresult();"/></td>
			</tr>
		</table>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('run_arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<hr />
		<table>
			<tr>
				<td>项目名称：</td>
				<td><input name="item<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="item<?php echo $_smarty_tpl->getVariable('key')->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['item'];?>
" size="20" maxlength="200" /></td>
			</tr>
			<tr>
				<td>距离：</td>
				<td><input name="space<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="space<?php echo $_smarty_tpl->getVariable('key')->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['space'];?>
" size="5" maxlength="5" />
m</td>
			</tr>
			<tr>
				<td>成绩（所用时间）：</td>
				<td><input name="result1<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="result1<?php echo $_smarty_tpl->getVariable('key')->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['hour'];?>
" size="2" maxlength="2" />
				小时
<input name="result2<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="result2<?php echo $_smarty_tpl->getVariable('key')->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['min'];?>
" size="2" maxlength="2" />
分钟
<input name="result3<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="result3<?php echo $_smarty_tpl->getVariable('key')->value;?>
" value="<?php echo $_smarty_tpl->getVariable('item')->value['sec'];?>
" size="2" maxlength="2" />
秒 </td>
			</tr>
			<tr>
				<td>平均速度：</td>
				<td><input name="speed<?php echo $_smarty_tpl->getVariable('key')->value;?>
" type="text" id="speed<?php echo $_smarty_tpl->getVariable('key')->value;?>
" style="background-color:#EBEBE4;border:1px solid #7F9DB9;" value="<?php echo $_smarty_tpl->getVariable('item')->value['speed'];?>
" size="7" readonly="readonly"/>
分/Km</td>
			</tr>
			<tr>
				<td colspan="2"><input type="button" value="删除" onclick="delresult(<?php echo $_smarty_tpl->getVariable('item')->value['id'];?>
);" /><input type="button" value="保存" onclick="updateresult(<?php echo $_smarty_tpl->getVariable('item')->value['id'];?>
,<?php echo $_smarty_tpl->getVariable('key')->value;?>
)" /></td>
			</tr>
		</table>
<?php }} ?>
	</form>
</body>
</html>

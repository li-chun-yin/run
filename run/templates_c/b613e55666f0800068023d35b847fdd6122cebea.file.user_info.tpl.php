<?php /* Smarty version Smarty3-b8, created on 2010-11-07 15:23:04
         compiled from "D:/AppServ/www/my 20101130/run/templates/user_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141404cd6c45825e752-72492775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b613e55666f0800068023d35b847fdd6122cebea' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/user_info.tpl',
      1 => 1289143352,
    ),
  ),
  'nocache_hash' => '141404cd6c45825e752-72492775',
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
	<h1>用户信息</h1>
	<ul>
		<li>用户:<?php echo $_SESSION['member'];?>
</li>
		<li>上月跑量:<?php echo $_smarty_tpl->getVariable('um_space')->value;?>
</li>
		<li>本月跑量:<?php echo $_smarty_tpl->getVariable('m_space')->value;?>
</li>
		<li>上周跑量:<?php echo $_smarty_tpl->getVariable('uw_space')->value;?>
</li>
		<li>本周跑量:<?php echo $_smarty_tpl->getVariable('w_space')->value;?>
</li>
		<li>上月速度：<?php echo $_smarty_tpl->getVariable('umavg_time')->value;?>
</li>		
		<li>本月速度：<?php echo $_smarty_tpl->getVariable('mavg_time')->value;?>
</li>
	</ul>
</body>
</html>

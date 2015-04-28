<?php /* Smarty version Smarty3-b8, created on 2010-11-09 00:52:17
         compiled from "D:/AppServ/www/my 20101130/login/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245004cd89b41891ea6-80426620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bd227c03fea28f6d2200ddf2b2b0af3a2877c6' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/login/templates/index.tpl',
      1 => 1289263848,
    ),
  ),
  'nocache_hash' => '245004cd89b41891ea6-80426620',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>5DE7.NET|最有特色的跑步网站(训练日程表|数据分析图|个人最佳记录|马拉松成绩预测）</title>
<link href="../css/body.css" rel="stylesheet" type="text/css" />
<link href="css/index.css" rel="stylesheet" type="text/css" />
<script src="js/index.js" language="javascript"></script>
</head>

<body>
<form name="login" id="login" method="post" action="chk_login.php" onsubmit="return chk_login()">
	<div id="left">
		<div id="left1">
		<img src="images/logo.gif" width="180" height="34" />
		</div>
		<div id="left2">
				<h1>打造最有特色的跑步网站</h1>
				<p>登录5de7.net，记录你的跑步历程，制定个性化马拉松训练计划。使用数据分析图帮助你了解自己的训练状况！</p>
		</div>
		<div id="left3">
			<div id="left31">
				<h2>日程</h2>
				<p>根据你的训练水平，为你量身定做跑步训练日程。</p>
			</div>
			<div id="left32">
				<h2>分析</h2>
				<p>提供每周和每日的速度、跑量、时长分析。</p>
			</div>
			<div id="left33">
				<h2>日志</h2>
				<p>根据跑步记录自动生成跑步日志。</p>
			</div>
			<div id="left34">
				<h2>记录</h2>
				<p>给你记录多个项目的个人最佳记录。</p>
			</div>
		</div>
		<p style="clear:both;"><!--用以清除浮动--></p>
	</div>
	<div id="right">
		<h1>用户登录</h1>
		<ul>
			<li><span>用户名：</span><input type="text" name="user" id="user" /></li>
			<li><span>密&nbsp;&nbsp;码：</span><input type="password" name="pwd" id="pwd" /></li>
			<li>
				<span>验证码：</span>
				<input type="text" name="check_p" id="check_p" />
				<input type="hidden" name="check_h" id="check_h" />
				<span id="check_image"></span>
				<script>check_image();</script>
				<a href="javascript:check_image()">看不清</a>
			</li>
			<li style="text-align:center; margin-top:10px;">
				<input type="submit" value="登录" />
				<input type="button" onclick="open_foundpwd();" value="忘记密码" />
			</li>
		</ul>			
	</div>
	<div id="right2">
		<h2>还没有账号？</h2>
		<input type="button" onclick="open_register()" value="点此注册"/>
	</div>
	</form>
<?php include_once ('D:\AppServ\www\My 20101130\foot.php');?>
 
</body>
</html>

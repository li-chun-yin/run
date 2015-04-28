<?php /* Smarty version Smarty3-b8, created on 2010-11-08 09:32:21
         compiled from "D:/AppServ/www/my 20101130/run/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139024cd7c3a52bb3d4-79888699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fddc1efaec81bfaca41b980c0f1a58eee012d4ad' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/index.tpl',
      1 => 1289208739,
    ),
  ),
  'nocache_hash' => '139024cd7c3a52bb3d4-79888699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link href="css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="header">
		<div id="banner"><img src="images/banner.jpg" alt="跑步——它能使我永远年轻，它使我以更加积极的态度去面对生活" width="955" height="115" /></div>
		<ul>
			<li><a href="?thispage=calender">训练日程</a></li>
			<li><a href="?thispage=image_frame">数据分析图</a></li>
			<li><a href="?thispage=log">跑步日志</a></li>
		</ul>
	</div>
	<div id="content">
		<div id="left">
			<?php include_once ('D:\AppServ\www\My 20101130\run\user_info.php');?>

			<div id="record"><?php include_once ('D:\AppServ\www\My 20101130\run\user_record.php');?>
</div>
		</div>
		<div id="right">
			<?php if ($_smarty_tpl->getVariable('phpath')->value=='calender.php'){?>
				<?php include_once ('D:\AppServ\www\My 20101130\run\calender.php');?>

			<?php }elseif($_smarty_tpl->getVariable('phpath')->value=='image_frame.php'){?>
				<?php include_once ('D:\AppServ\www\My 20101130\run\image_frame.php');?>

			<?php }elseif($_smarty_tpl->getVariable('phpath')->value=='log.php'){?>
				<?php include_once ('D:\AppServ\www\My 20101130\run\log.php');?>

			<?php }elseif($_smarty_tpl->getVariable('phpath')->value=='setcalender.php'){?>
				<?php include_once ('D:\AppServ\www\My 20101130\run\setcalender.php');?>

			<?php }?>
		</div>
		<p style="clear:both; height:20px;margin:0;"></p>
	</div>
	<div id="foot">
		<?php include_once ('D:\AppServ\www\My 20101130\foot.php');?>

	</div>
</body>
</html>

<?php
	include_once'config.php';
	include_once'define.php';
///////////////////////////////生成出生日期选择菜单////////////////////////////////////////////////////
	require_once'class/select_date.class.php';
	$select_date = new select_date();
	$script= "onchange=Setday('selectyear','selectmonth','selectday','resetday');";
	$birthday = $select_date->select_date('','','','',$script,$script);
	$smarty->assign('birthday',$birthday);
////////////////////////////////生成出生日期选择菜单///////////////////////////////
	$select_date= new select_date();
	$script= "onchange=Setday('runyear','runmonth','runday','resetrun');";
	$runday  = $select_date->select_date("runyear","runmonth","runday","resetrun",$script,$script);
	$smarty->assign('runday',$runday);
////////////////////////////////生成开始跑步日期菜单///////////////////////////////////////////

//////////////////////////////////生成开始跑步菜单/////////////////////////////////////////


	$smarty->assign('title','新用户注册');
	$smarty->display('register.tpl');
?>
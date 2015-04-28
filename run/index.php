<?php
header("Cache-Control: no-cache");
include'config.php';
$thispage = $_GET['thispage'];
$phpath = '';
switch($thispage){
	case 'calender':
		$title = '训练日程表';
		$phpath = 'calender.php';
		break;
	case 'image_frame':
		$title = '数据分析图';
		$phpath = 'image_frame.php';
		break;
	case 'log':
		$title = '跑步日志';
		$phpath = 'log.php';
		break;
	case 'setcalender':
		$taitle = '训练日程设置向导';
		$phpath = 'setcalender.php';
		break;
	default:
		$title = '训练日程表';
		$phpath = 'calender.php';
}
$smarty->assign('title',$title);
$smarty->assign('phpath',$phpath);
$smarty->display('index.tpl');
?>
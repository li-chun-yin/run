<?php
	session_start();
	include'conn.php';
	include'config.php';
	$user_id = $_SESSION['id'];
	//上月跑量
	$umd1 = date('Y-') . (date('m')-1) . '-01';
	$umd2 = date('Y-') . (date('m')-1) . '-31';
	$umsql = "select sum(space),avg(speed) from tb_result where user_id='$user_id' and date between '$umd1' and '$umd2'";
	$umrst = $conn->Execute($umsql);
	$um_space = number_format(($umrst->fields(0)/1000),2) .'km';
	$smarty->assign('um_space',$um_space);
	$uma_time = $umrst->fields(1);
	$uma_min = floor($uma_time/60);
	$uma_sec = $uma_time%60;
	if($uma_sec<10) $uma_sec = '0' . $uma_sec;
	$umavg_time = $uma_min . '"' . $uma_sec . '(分/Km)';
	$smarty->assign('umavg_time',$umavg_time);
	//本月总跑量;
	$md1 = date('Y-m-01');
	$md2 = date('Y-m-31');
	$msql = "select sum(space),avg(speed) from tb_result where user_id='$user_id' and date between '$md1' and '$md2'";
	$mrst = $conn->Execute($msql);
	$m_space = number_format(($mrst->fields(0)/1000),2) .'km';
	$smarty->assign('m_space',$m_space);
	$ma_time = $mrst->fields(1);
	$ma_min = floor($ma_time/60);
	$ma_sec = $ma_time%60;
	if($ma_sec<10) $ma_sec = '0' . $ma_sec;
	$mavg_time = $ma_min . '"' . $ma_sec . '(分/Km)';
	$smarty->assign('mavg_time',$mavg_time);
	//上周跑量
	$uwd = date('Y-') . (date('W')-1);
	$uwsql = "select sum(space),avg(speed) from tb_result where user_id='$user_id' and date2='$uwd'";
	$uwrst = $conn->Execute($uwsql);
	$uw_space = number_format(($uwrst->fields(0)/1000),2) .'km';
	$smarty->assign('uw_space',$uw_space);
	//本周总跑量
	$wd = date('Y-W');
	$wsql = "select sum(space),avg(speed) from tb_result where user_id='$user_id' and date2='$wd'";
	$wrst = $conn->Execute($wsql);
	$w_space = number_format(($wrst->fields(0)/1000),2) .'km';
	$smarty->assign('w_space',$w_space);
	$smarty->display('user_info.tpl');
?>

<?php
header('Cache-control:no-cache');
include'conn.php';
include'config.php';
require'class/select_date.class.php';
$user_id = $_GET['user_id'];
$smarty->assign('user_id',$user_id);
$date = $_GET['date'];
$ymd_arr = explode('-',$date);
$select_date = new select_date();
$smarty->assign('year',$ymd_arr[0]);
$smarty->assign('month',$select_date->select_month('month',$ymd_arr[1],'onchange="Setday();"'));
$smarty->assign('day',$select_date->select_day('day',$ymd_arr[2]));
$sql = "select * from tb_result where user_id='$user_id' and date='$date' order by id desc";
$rst = $conn->Execute($sql);
$run_arr = $rst->GetArray();
foreach($run_arr as $key=>$value){
	$run_arr[$key]['hour'] = floor($value['result']/3600)==0 ? '' : floor($value['result']/3600);
	$run_arr[$key]['min'] = floor($value['result']%3600/60)<10 ? '0'.floor($value['result']%3600/60):floor($value['result']%3600/60);
	$run_arr[$key]['sec'] = $value['result']%60<10?'0'.$value['result']%60:$value['result']%60;
	$run_arr[$key]['speed'] = floor($value['speed']/60) . '&quot;' . ($value['speed']%60<10?'0'.$value['speed']%60:$value['speed']%60);
}
$smarty->assign('run_arr',$run_arr);
$smarty->assign('title','ÅÜ²½³É¼¨Â¼Èë');
$rst2 = $conn->Execute("select content from tb_log where user_id='$user_id' and date='$date'");
$smarty->assign('log',$rst2->fields('content'));
$smarty->display('result.tpl');
?>

<?php
	session_start();
	include'config.php';
	include'conn.php';
	$user_id = $_SESSION['id'];
	$page = $_GET['page'];
	$page = empty($page)?1:$page;
	$pagerow = 30;
	$sql = "select date,sum(space),sum(result),avg(speed) from tb_result where user_id='$user_id' group by date order by date desc";
	$rst3 = $conn->PageExecute($sql,$pagerow,$page);
	$smarty->assign('page',$rst3->AbsolutePage());
	$rst4 = $conn->Execute($sql);
	$smarty->assign('lastpage',ceil($rst4->RecordCount()/$pagerow));
	$log_arr = $rst3->GetArray();
	foreach($log_arr as $key=>$value){
		$log_arr[$key][0] = date('Y年m月d日',strtotime($value[0]));
		$log_arr[$key][1] = number_format(($value[1]/1000),2).'Km';
		$hour1 = floor($value[2]/3600);
		$min1 = floor($value[2]%3600/60);
		$sec1 = $value[2]%60;
		if($hour1==0) $hour1='';else $hour1.='小时';
		if($min1<10) $min1='0'.$min1;
		if($sec1<10) $sec1='0'.$sec1;
		$log_arr[$key][2] = $hour1 . $min1 . '分' . $sec1 . '秒';
		$min2 = floor($value[3]%3600/60);
		$sec2 = $value[3]%60;
		if($sec2<10) $sec2='0'.$sec2;
		$log_arr[$key][3] = $min2 . '分' . $sec2 . '秒';
		$rst4 = $conn->Execute("select content from tb_log where user_id='$user_id' and date='$value[0]'");
		if($rst4->RecordCount()>0)
			$log_arr[$key][4] = $rst4->fields('content');
		else
			$log_arr[$key][4] = '';		
	}
	$smarty->assign('log_arr',$log_arr);
	$smarty->display('log.tpl');
?>

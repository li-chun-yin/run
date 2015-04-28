<?php
	session_start();
	include'conn.php';
	include'config.php';
	$user_id=$_SESSION['id'];
	$item = array('马拉松'=>42195,'半程马拉松'=>21098,'1万米'=>10000,'5千米'=>5000,'3千米'=>3000,'1500米'=>1500,'1000米'=>1000,'800米'=>800,'400米'=>400);
	$i=0;
	while(list($key,$value)=each($item)){
		$space = $value;
		$sql = "select min(result),date from tb_result where user_id='$user_id' and space='$space' group by date";
		$rst = $conn->Execute($sql)or die('error');
		if($rst->fields(0)!=''){
			$hour = floor($rst->fields(0)/3600);
			$hour = $hour!=0? $hour.'小时':'';
			$min = floor($rst->fields(0)%3600/60);
			if($min<10) $min = '0' + $min;
			$sec = $rst->fields(0)%60;
			if($sec<10) $sec='0'.$sec;
			$record[$i]['item'] = $key;
			$record[$i]['date'] = date('Y年m月d日',strtotime($rst->fields(1)));
			$record[$i++]['value'] = $hour . $min . '分' . $sec . '秒';
		}
	}
	$smarty->assign('record',$record);
	$smarty->display('user_record.tpl');
?>
<?php
	header('Content-type: text/html; charset=gb2312');
	include'conn.php';
	$user_id = $_GET['user_id'];
	$log = iconv('utf-8','gb2312//IGNORE',$_GET['remark']);
	$date = $_GET['date'];
	$sql = "select * from tb_log where user_id='$user_id' and date='$date'";
	$rst=$conn->Execute($sql);
	if($rst->RecordCount()>0){
		$id = $rst->fields('id');
		$upsql = "update tb_log set content='$log' where id='$id'";
		$conn->Execute($upsql);
	}else{
		$insql = "insert into tb_log (user_id,content,date)values('$user_id','$log','$date')";
		$conn->Execute($insql);
	}
?>
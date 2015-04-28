<?php
	include_once'define.php';
	include_once'../adodb/adodb.inc.php';
	$conn = ADONewConnection('mysql');
	$conn->Connect(HOST,SQL_USER,SQL_PWD,DATABASE_MEMBER) or die( 'error');
	$conn->Execute('set names gb2312');
	$sql = 'select * from tb_member where user="' . $_GET['name'] . '"';
	$rst = $conn->Execute($sql);
		if(!empty($rst->fields['user'])){
			echo '2';
		}else if(empty($rst->fields['user'])){
			echo '1';
		}else{
			echo $conne->msg_error();
		}
?>
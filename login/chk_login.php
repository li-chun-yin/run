<?php
	session_start();
	include_once'define.php';
	include_once'../adodb/adodb.inc.php';
	$user = $_POST['user'];
	$pwd = md5($_POST['pwd']);
	$conn = ADONewConnection('mysql');
	$conn->Connect(HOST,SQL_USER,SQL_PWD,DATABASE_MEMBER);
	$conn->Execute('set names gb2312');
	$sql = "select * from tb_member where user='$user' and pwd='$pwd'";
	$rst = $conn->Execute($sql);
	if($rst->RecordCount()!=1){
		echo'<script>alert("用户名或者密码错误"); history.back();</script>';
	}else{
		$_SESSION['member'] = $rst->fields['user'];
		$_SESSION['id'] = $rst->fields['id'];;
		echo'<script>location="../index.php"</script>';
	}
?>
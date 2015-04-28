<?php
 	header('Content-Type: text/html; charset=gb2312');
	include_once'define.php';
	include_once'../adodb/adodb.inc.php';
	$conn = ADONewConnection('mysql');
	$conn->Connect(HOST,SQL_USER,SQL_PWD,DATABASE_MEMBER) or die( 'error');
	$conn->Execute('set names gb2312');
	$name= $_GET['user'];
	$answer = $_GET['answer'];
	$password = $_GET['password'];
	$reback = '0';
	if(empty($answer) && empty($password)){
		$namesql = "select * from tb_member where user = '$name'";
		$namerst = $conn->Execute($namesql);
		if($namerst->RecordCount() == 1){
			$question = $namerst->fields['question'];
			if($question==''){
				$reback='1';
			}else{
				$reback = $question;
			}
		}
	}else if(!empty($answer)){
		$answersql = "select * from tb_member where user = '".$name."' and answer = '".$answer."'";
		$answerrst = $conn->execute($answersql);
		if($answerrst->recordCount() == 1){
			$reback = '1';
		}
	}else if(!empty($password)){
		$sql = "select * from tb_member where user = '".$name."'";
		$arr = array();
		$rst = $conn->execute($sql);
		if($rst->RecordCount() == 1){
			$arr['pwd'] = md5($password);
			$updateSQL = $conn->GetUpdateSQL($rst,$arr,true);
			$conn->execute($updateSQL);
			$reback = '1';
		}
	}
	echo $reback;

?>
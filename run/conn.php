<?php
	include_once'../adodb/adodb.inc.php';
	$conn = ADONewConnection('mysql');
	$conn->PConnect($_SERVER['HTTP_HOST'],'root','root','running');
	$conn->Execute('set names gb2312');
	$ADODB_FETCH_MODE = ADODB_FETCH_BOTH;
?>
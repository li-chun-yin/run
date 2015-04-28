<?php
	include'conn.php';
	$sql = 'delete from tb_result where id=' . $_GET['id'];
	$conn->Execute($sql)or die('error');
?>

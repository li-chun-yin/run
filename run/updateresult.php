<?php
include'conn.php';
$id=$_GET['id'];
$user_id = $_GET['user_id'];
$date = $_GET['date'];
$date2 = date('Y-W',mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
$space = $_GET['space'];
$item = $_GET['item'];
$result = $_GET['result'];
$speed = $_GET['result']/($_GET['space']/1000);
$sql = "update tb_result set user_id='$user_id', date='$date', space='$space', item='$item', result='$result', speed='$speed', date2='$date2' where id=$id";
$conn->Execute($sql)or die('error');
?>

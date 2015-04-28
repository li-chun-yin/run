<?php
include'conn.php';
$user_id = $_GET['user_id'];
$date = $_GET['date'];
$date2 = date('Y-W',mktime(0,0,0,substr($date,5,2),substr($date,8,2),substr($date,0,4)));
$space = $_GET['space'];
$item = $_GET['item'];
$result = $_GET['result'];
$speed = $_GET['result']/($_GET['space']/1000);
$sql = "insert into tb_result(user_id,date,space,item,result,speed,date2)values('$user_id','$date','$space','$item','$result','$speed','$date2')";
$conn->Execute($sql)or die('error');
?>

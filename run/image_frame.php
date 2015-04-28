<?php
	header('Content-Type: text/html; charset=gb2312');
	include'config.php';
	$lastday = time();
	$firstday = time()-15*24*3600;
	$smarty->assign('lastday',$lastday);
	$smarty->assign('firstday',$firstday);
	$smarty->display('image_frame.tpl');
	//echo strtotime('1998-03-06');
	//echo'<br>';
	//echo mktime(0,0,0,03,06,1998);
?>

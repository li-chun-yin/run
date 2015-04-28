<?php
header('Content-type: text/html; charset=gb2312');
if($_GET['set']=='week'){
	$week1 = date('W',time()-24*3600*7*15);
	$week2 = date('W');
	if($week1<10)
		$week1 = '0'.$week1;
	if($week2<10)
		$week2 = '0'.$week2;
	$week1 = date('Y年第',time()-24*3600*7*15).$week1.'周';
	$week2 = date('Y年第').$week2.'周';
	$str = $week1 . '#' . $week2;
}else if($_GET['set']=='day'){
	$day1 = date('Y年m月d日',time()-24*3600*15);
	$day2 = date('Y年m月d日');
	$str = $day1 . '#' . $day2;
}else{
	$w1 = $_GET['d1'];
	$w2 = $_GET['d2'];
	$year1 = (int)substr($w1,0,4);
	$year2 = (int)substr($w2,0,4);
	$week1 = (int)substr($w1,8,2);
	$week2 = (int)substr($w2,8,2);
	if($_GET['set']=='b'){
		$week1 -= 1;
		if($week1<1)
			$week1 = date('W',mktime(0,0,0,12,28,--$year1));
		$week2 -= 1;
		if($week2<1)
			$week2 = date('W',mktime(0,0,0,12,28,--$year2));
	}else if($_GET['set']=='g'){
		$week1 += 1;
		if($week1>52){
			$week = date('W',mktime(0,0,0,12,28,$year1));
			if($week1>$week)
				$week1 = date('W',mktime(0,0,0,01,04,++$year1));
		}
		$week2 += 1;
		if($week2>52){
			$week = date('W',mktime(0,0,0,12,28,$year2));
			if($week2>$week)	
				$week2 = date('W',mktime(0,0,0,01,04,++$year2));
		}
	}else if($_GET['set']=='a'){
		$year2 = $year1;
		$week2 = $week1;
		for($i=0; $i<15; $i++){
			$week2 += 1;
			if($week2>52){
				$week = date('W',mktime(0,0,0,12,28,$year2));
				if($week2>$week)
					$week2 = date('W',mktime(0,0,0,01,04,++$year2));
			}
		}
	}else if($_GET['set']=='d'){
		$year2 = $year1;
		$week2 = $week1;
		for($i=0; $i<15; $i++){
			$week1 -= 1;
			if($week1<1){
				$week1 = date('W',mktime(0,0,0,12,28,--$year1));
			}
		}
	}
	if($week1<10){
		$week1 = '0' . (int)$week1;
	}else if($week2<10){
		$week2 = '0' . (int)$week2;
	}
	$str = $year1.'年第'.$week1.'周'.'#'.$year2.'年第'.$week2.'周';
}
echo $str;
?>

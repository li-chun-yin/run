<?php
session_start();
include'conn.php';
$user_id = $_SESSION['id'];
$x_unit = $_GET['x_unit'];
switch($x_unit){
	case 'day':
		$x_unit_str = chr(0xE6).chr(0x97).chr(0xA5);
		$db_date = 'date';
		break;
	case 'week':
		$x_unit_str = chr(0xE5).chr(0x91).chr(0xA8);
		$db_date = 'date2';
		break;
	default:
		$x_unit='day';
		$x_unit_str = chr(0xE6).chr(0x97).chr(0xA5);
		$db_date = 'date';
}
$y_unit = $_GET['y_unit'];
switch($y_unit){
	case 'space':
		$y_unit_str = chr(0xE5) . chr(0x8D) . chr(0x95) . chr(0xE4) . chr(0xBD) . chr(0x8D) . chr(0x28) . 'Km' . chr(0x29);
		$db_y = 'sum(space)';
		break;
	case 'time':
		$y_unit_str = chr(0xE5) . chr(0x8D) . chr(0x95) . chr(0xE4) . chr(0xBD) . chr(0x8D) . chr(0x28) . chr(0xE5) . chr(0xB0) . chr(0x8F) . chr(0xE6) . chr(0x97) . chr(0xB6) . chr(0x29);
		$db_y = 'sum(result)';
		break;
	case 'speed':
		$y_unit_str = chr(0xE5) . chr(0x8D) . chr(0x95) . chr(0xE4) . chr(0xBD) . chr(0x8D) . chr(0x28) . chr(0xE5) . chr(0x88) . chr(0x86) . chr(0x2F) .'Km' . chr(0x29);
		$db_y = 'avg(speed)';
		break;
	default:
		$y_unit = 'space';
		$y_unit_str = chr(0xE5) . chr(0x8D) . chr(0x95) . chr(0xE4) . chr(0xBD) . chr(0x8D) . chr(0x28) . 'Km' . chr(0x29);
		$db_y = 'sum(space)';
}
$x_start = substr(preg_replace('/\D+/','-',$_GET['firstday']),0,-1);
if(empty($x_start))
	$x_start = date('Y-m-d',time()-15*24*3600);
$x_end = substr(preg_replace('/\D+/','-',$_GET['lastday']),0,-1);
if(empty($x_end))
	$x_end = date('Y-m-d');
$sql = "select $db_date,$db_y from tb_result where user_id='$user_id' and $db_date between '$x_start' and '$x_end' group by $db_date order by $db_date asc";
$rst = $conn->Execute($sql)or die('error');
$db_arr = $rst->GetArray();
$margin = 30;
$width = 678;
$height = 350;
$font = 'font/simhei.ttf';
$im=imagecreate($width,$height);
$bgcolor = imagecolorallocate($im,200,200,200);
$red = imagecolorallocate($im,255,0,0);
$black = imagecolorallocate($im,0,0,0);
$blue = imagecolorallocate($im,0,0,255);
$yellow = imagecolorallocate($im,255,255,0);
$green = imagecolorallocate($im,0,255,0);
for($i=0; $i<3; $i++){ 
	imagefilledrectangle($im,0,100*$i+50,$width,100*$i+100,imagecolorallocate($im,208,220,231));
}
imageline($im,$margin,$height-$margin,$width-$margin/2,$height-$margin,$red); //x坐标;
imageline($im,$margin*2.5,$margin/2,$margin*2.5,$height-$margin,$red);	//y坐标;
$max = 0;
if($y_unit=='speed'){
	$max = 420;
}else{
	foreach($db_arr as $value){
		if($value[1]>$max){
			$max = $value[1];
		}
	}
}
///////////////////////////////y坐标的刻度/////////////////////////////////////
for($i=0; $i<5; $i++){
	imageline($im,$margin*2.5,$margin*2+($height-$margin*3)/5*$i,$margin*2.5+5,$margin*2+($height-$margin*3)/5*$i,$red);
	if($y_unit=='speed'){
		$min = floor(($max/4*($i+1))/60);
		$sec = ($max/4*($i+1))%60;
		if($sec<10) $sec='0'.$sec;
		$y_str = $min . '"' . $sec;
		imagestring($im,5,$margin,$margin*2+($height-$margin*3)/5*$i,$y_str,$black);
	}else if($y_unit=='time'){
		$hour = floor(($max/4*($i+1))/3600);
		$min = floor((($max/4*($i+1))%3600)/60);
		if($min<10) $min='0'.$min;
			$sec = ($max/4*($i+1))%60;
		if($sec<10) $sec='0'.$sec;
			$y_str = $hour .'"' . $min .'"'. $sec;
		imagestring($im,5,5,$margin*2+($height-$margin*3)/5*(4-$i),$y_str,$black);
	}else if($y_unit=='space'){
		$y_str = number_format(($max/1000)/4*($i+1),2);
		imagestring($im,5,$margin-5,$margin*2+($height-$margin*3)/5*(4-$i),$y_str,$black);
	}
}
imagettftext($im,10,0,5,$margin,$black,$font,$y_unit_str);
//////////////////////////////////////根据坐标值画矩形/////////////////////////////////////////////////
$j = 0;
if($x_unit=='day'){
	for($i=strtotime($x_start); $i<=strtotime($x_end); $i=$i+24*3600){ 
		$string= date('d',$i) . $x_unit_str;
		imagettftext($im,10,0,$margin*2.8+36*($j),$height-$margin+13,$black,$font,$string);	//x坐标的刻度
		foreach($db_arr as $value){
			if($value[0]==date('Y-m-d',$i)){
				if($y_unit=='speed'){
					$yval = ($height-$margin*3)/($max/4*5)*$value[1] + $height-30-($height-$margin*3)/5*6;
					imagefilledrectangle($im,$margin*2.8+36*$j,$yval,$margin*2.8+24+36*$j,$height-$margin,$blue);
				}else{
					$yval = (($height-$margin*3)+$margin*2)-($height-$margin*3)/($max/4*5)*$value[1];
					imagefilledrectangle($im,$margin*2.8+36*$j,$yval,$margin*2.8+24+36*$j,$height-$margin,$blue);
				}
			}
		}
		$j++;
	}
}else if($x_unit=='week'){
	$week_snum = (int)substr($x_start,-2);
	$syear = substr($x_start,0,4);
	$week_enum = substr($x_end,-2);
	for($i=0; $i<=15; $i++){
		$string = $week_snum.$x_unit_str;
		imagettftext($im,10,0,$margin*2.8+36*($j),$height-$margin+13,$black,$font,$string);	//X坐标的刻度
		$week_snum++;
		$week_enum++;
		if($week_snum>52){
			if($week_enum>30){
				$week_snum = 1;
			}
		}
		$week_yw = $syear . '-' . ($week_snum-1);
		foreach($db_arr as $value){
			if($value[0]==$week_yw){
				if($y_unit=='speed'){
					$yval = ($height-$margin*3)/($max/4*5)*$value[1] + $height-30-($height-$margin*3)/5*6;
					imagefilledrectangle($im,$margin*2.8+36*$j,$yval,$margin*2.8+24+36*$j,$height-$margin,$blue);
				}else{
					$yval = (($height-$margin*3)+$margin*2)-($height-$margin*3)/($max/4*5)*$value[1];
					imagefilledrectangle($im,$margin*2.8+36*$j,$yval,$margin*2.8+24+36*$j,$height-$margin,$blue);
				}
			}
		}
		$j++;
	}
}
////////////////////////////////////////平均线////////////////////////////////////////////////////////////////////
$avg_str = chr(0xE5) . chr(0xB9) . chr(0xB3) . chr(0xE5) . chr(0x9D) . chr(0x87) . chr(0xE7) . chr(0xBA) . chr(0xBF);
foreach($db_arr as $value){
	$totalval += $value[1];
}
$totalnum = count($db_arr);
$avg = $totalval/$totalnum;
if($y_unit == 'speed'){
	$yavg = ($height-$margin*3)/($max/4*5)*$avg + $height-30-($height-$margin*3)/5*6;
	$min = floor($avg/60);
	$sec = $avg%60;
	if($sec<10) $sec='0'.$sec;
	$avgstr2 = '(' . $min .'"' . $sec . ')';
	imagettftext($im,8,0,$width-$margin-15,$yavg-3,$green,$font,$avg_str);
	imagestring($im,3,$width-$margin-20,$yavg+1,$avgstr2,$red);
	imageline($im,$margin,$yavg,$width-$margin/2,$yavg,$yellow);
}else{
	if($y_unit == 'space'){
		$avgstr2 = '(' . number_format(($avg/1000),2) . 'Km)';
	}else if($y_unit == 'time'){
		$hour = floor($avg/3600);
		$min = floor(($avg%3600)/60);
		if($min<10) $min = '0' . $min;
		$sec = $avg%60;
		if($sec<10) $sec='0'.$sec;
		$avgstr2 = '(' . $hour . '"' . $min . '"' . $sec . ')';
	}
	$yavg = (($height-$margin*3)+$margin*2)-($height-$margin*3)/($max/4*5)*$avg;
	imagettftext($im,8,0,$width-$margin-20,$yavg-2,$green,$font,$avg_str);
	imagestring($im,3,$width-$margin-35,$yavg+1,$avgstr2,$red);
	imageline($im,$margin,$yavg,$width-$margin/2,$yavg,$yellow);
}
imagegif($im);
imagedestroy($im);
?>
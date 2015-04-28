<?php
	$chk = $_GET['chk'];
	$im = imagecreate(55,24);
	$bgcolor = imagecolorallocate($im,200,200,200);
	for($i=0; $i<4; $i++)
		{
			$str = substr($chk,$i,1);
			$font = rand(4,6);
			$str_x = 5 + $i*12;
			$str_y = rand(2,8);
			$strcolor = imagecolorallocate($im,mt_rand(0,150),mt_rand(0,150),mt_rand(0,150));
			imagestring($im,$font,$str_x,$str_y,$str,$strcolor);
		}
	for($i=0; $i<200; $i++)
		{
			$pixel_color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($im,rand()%95,rand()%95,$pixel_color);
		}
	imagepng($im);
	imagedestroy($im);
?>

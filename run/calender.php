<?php 
	session_start();
	include_once'config.php';
	include_once'conn.php';
	$date = date('Y-m-d');
	$date = substr($date,0,4)+5 . '-' . substr($date,5,2);
	$year=date('Y');
	$month=date('m');
	if(!empty($_GET['selectyear']) && !empty($_GET['selectmonth'])){
		$year = $_GET['selectyear'];
		$month = $_GET['selectmonth'];
	}
	require 'class/select_date.class.php';
	$select= new select_date($date);
	$select_year=$select->select_year('',$year,'onchange="submit();"');
	$select_month = $select->select_month('',$month,'onchange="submit();"');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<script src="js/calender.js" language="javascript"></script>
<title>无标题文档</title>
</head>

<body><input type="button" style="position:absolute; top:170px; left:850px;" value="设置" onclick="location='?thispage=setcalender'" />
	<h1>训练日程表</h1>
	<div id="cal">
		<h2><form><?php echo $select_year . $select_month;?>训练日程表</form></h2>
		<ul>
			<li>星期日</li>
			<li>星期一</li>
			<li>星期二</li>
			<li>星期三</li>
			<li>星期四</li>
			<li>星期五</li>
			<li>星期六</li>
<?php
	if(empty($_GET['selectyear']) && empty($_GET['selectmonth'])){
		$weekday = date('w',mktime(0,0,0,date('m'),1,date('Y')));
		$month_t = date('t',mktime(0,0,0,date('m'),1,date('Y')));
		$last_weekday=date('w',mktime(0,0,0,$month_t,1,date('Y')));
	}else{
		$weekday = date('w',mktime(0,0,0,$_GET['selectmonth'],1,$_GET['selectyear']));
		$month_t = date('t',mktime(0,0,0,$_GET['selectmonth'],1,$_GET['selectyear']));
		$last_weekday=date('w',mktime(0,0,0,$month_t,1,$_GET['selectyear']));
	}
	for($i=0; $i<$weekday; $i++){
		echo '<li class="f12"><span id="mon"></span></li>';
	}
	while($m<$month_t){
		$today = $year.'-'.$month.'-'.++$m;
		$user_id = $_SESSION['id'];
		$item='';
		echo '<li class="f12" style="cursor:hand;" onclick=window.open("result.php?user_id='.$user_id.'&date='.$today.'","newin","scrollbars")><span id="mon">'.$m.'日</span>';
		$sql = "select * from tb_result where user_id='$user_id' and date='$today'";
		$rst = $conn->Execute($sql);
		if($rst->RecordCount()>0){
			$arr = $rst->GetArray();
			echo'<div id="item">';
			foreach($arr as $value){
				//echo'<div>'.$value['item'].'<br/>';
				if($value['space']>1000)
					if($value['space']==21098)
						$space = '半程马拉松';
					else if($value['space']==42195)
						$space=='马拉松';
					else
					$space = $value['space']/1000 . 'km';
				else
					$space = $value['space'].'m';
				$hour = floor($value['result']/3600);
				if($hour==0)
					$hour = '&nbsp;';
				else
					$hour = '&nbsp;'.$hour.'"';
				$min = floor($value['result']%3600/60);
				if($min<10 && $hour=='')
					$min = '0'.$min;
				$sec = $value['result']%60;
				if($sec<10)
					$sec = '0'.$sec;
				$result = $hour.$min .'"'.$sec;
				echo $space.'<br/>&nbsp;&nbsp;'.$result.'<br/>';
			}
			echo'</div>';
		}else{
			$sql = "select item from tb_setcal where user_id='$user_id' and date='$today'";
			$rst = $conn->Execute($sql)or die('err');
			$item = $rst->Fields('item');
			echo"<div id='item'>$item</div>";
		}
		echo '</li>';
		$i++;
	}
?>
		</ul>
		<p style="clear:both; margin:0; padding:0;">&nbsp;</p>
	</div>
</body>
</html>
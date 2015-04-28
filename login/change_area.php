<?php
	header('Content-type:text/html;charset=GB2312');
	include_once'define.php';
	include_once'../adodb/adodb.inc.php';
	$conn = ADONewConnection('mysql');
	$conn->Connect(HOST,SQL_USER,SQL_PWD,DATABASE_ADD);
	$conn->Execute('set names gb2312');
	$sql = 'select * from dic_area';
	$rst = $conn->Execute($sql);
	while($tmp = $rst->GetArray())
		{
			$arr = $tmp;
		}
	$conn->Close();
	$area1 = array();
	$area2 = array();
	$area3 = array();
	foreach($arr as $key=>$value)
		{
			if(strlen($value['area_code']) == 2)
				{
					array_push($area1,$value);
				}
			else if(strlen($value['area_code']) == 4)
				{
					array_push($area2,$value);
				}
			else if(strlen($value['area_code']) == 6)
				{
					array_push($area3,$value);
				}
		}
	$ar1 = $_GET['area1'];
	$ar2 = $_GET['area2'];
	if(!empty($ar1))
		{
			$select_area = "<select name='select_area2' id='select_area2' onchange='change_area2(this.value)'><option value='0'>请选择城市</option>";
			foreach($area2 as $value)
				{
					if(substr($value[0],0,2) == $ar1)
						$select_area .=  '<option value="' . $value[0] . '">' . $value[1] . '</option>"';
				}
			$select_area .= "</select>";
		}
	else if(!empty($ar2))
		{
			$select_area = "<select name='select_area3' id='select_area3'><option value='0'>请选择城市</option>";
			foreach($area3 as $value)
				{
					if(substr($value[0],0,4) == $ar2)
						$select_area .=  '<option value="' . $value[0] . '">' . $value[1] . '</option>"';
				}
			$select_area .= "</select>";
		}
	echo $select_area;
?>
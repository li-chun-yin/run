	<script src="js/select_area.js" language="javascript"></script>
	<script src="js/createxmlhttp.js" language="javascript"></script>
<?php
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
	foreach($arr as $key=>$value)
		{
			if(strlen($value['area_code']) == 2)
				{
					$area1[]= $value;
				}
			else if(strlen($value['area_code']) == 4)
				{
					$area2[]= $value;
				}
			else if(strlen($value['area_code']) == 6)
				{
					$area3[]= $value;
				}
		}
	$select_area1 = "<select name='select_area1' id='select_area1' onchange='change_area1(this.value);'><option value='0'>请选择省份</option>";
	foreach($area1 as $value)
		{
			$select_area1 .=  '<option value="' . $value[0] . '">' . $value[1] . '</option>"';
		}
	$select_area1 .= "</select>";
	$select_area2 = "<span id='area2'><select name='select_area2' id='select_area2' disabled='disabled'><option value='0'>请选择城市</option>";
	foreach($area2 as $value)
		{
			$select_area2 .=  '<option value="' . $value[0] . '">' . $value[1] . '</option>"';
		}
	$select_area2 .= "</select></span>";
	$select_area3 = "<span id='area3'><select name='select_area3' id='select_area3' disabled='disabled'><option value='0'>请选择地区</option>";
	foreach($area3 as $value)
		{
			$select_area3 .=  '<option value="' . $value[0] . '">' . $value[1] . '</option>"';
		}
	$select_area3 .= "</select></span>";
	echo $select_area1.$select_area2.$select_area3;
?>

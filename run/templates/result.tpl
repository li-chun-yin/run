<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{$title}</title>
<script src="js/result.js" language="javascript"></script>
<script src="js/xmlhttp.js" language="javascript"></script>
<link href="css/result.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<form name="result" id="result"><input type="hidden" id="user_id" name="user_id"  value="{$user_id}" />
		<table id="res1">
			<tr>
				<th colspan="2">数据录入</th>
			</tr>
			<tr>
				<td>日期：</td>
				<td>
					<input name="year" id="year" type="text" value="{$year}年" readonly="readonly" style="float:left;"/>
					<div id="resetyear" style="float:left; margin-left:1px;">
						<a class="a1" href="javascript:Setyear1()">&and;</a>
						<a class="a1" href="javascript:Setyear2({$smarty.now|date_format:'%Y'});" style="margin-top:1px;">&or;</a>
					</div>
					{$month}
					{$day}
				</td>
			</tr>
			<tr>
				<td>备注：</td>
				<td><textarea id="remark" name="remark">{$log}</textarea><input type="button" value="保存" onclick="savelog();" /></td>
			</tr>
		</table>
	<hr />
		<table>
			<tr>
				<td>项目名称：</td>
				<td><input name="item" type="text" id="item" size="20" maxlength="200" /></td>
			</tr>
			<tr>
				<td>距离：</td>
				<td><input name="space" type="text" id="space" size="5" maxlength="5" />
				(m)</td>
			</tr>
			<tr>
				<td>成绩（所用时间）：</td>
				<td><input name="result1" type="text" id="result1" size="2" maxlength="2" />
				 小时 <input name="result2" type="text" id="result2" size="2" maxlength="2" />
				  分钟 <input name="result3" type="text" id="result3" size="2" maxlength="2" />
				   秒 </td>
			</tr>
			<tr>
				<td>平均速度：</td>
				<td><input name="speed" type="text" id="speed" size="7" readonly="readonly" style="background-color:#EBEBE4;border:1px solid #7F9DB9;" />
				分/Km</td>
			</tr>
			<tr>
				<td colspan='2'><input type="button" value="添加" onclick="addresult();"/></td>
			</tr>
		</table>
{foreach key=key item=item from=$run_arr}
	<hr />
		<table>
			<tr>
				<td>项目名称：</td>
				<td><input name="item{$key}" type="text" id="item{$key}" value="{$item['item']}" size="20" maxlength="200" /></td>
			</tr>
			<tr>
				<td>距离：</td>
				<td><input name="space{$key}" type="text" id="space{$key}" value="{$item['space']}" size="5" maxlength="5" />
m</td>
			</tr>
			<tr>
				<td>成绩（所用时间）：</td>
				<td><input name="result1{$key}" type="text" id="result1{$key}" value="{$item['hour']}" size="2" maxlength="2" />
				小时
<input name="result2{$key}" type="text" id="result2{$key}" value="{$item['min']}" size="2" maxlength="2" />
分钟
<input name="result3{$key}" type="text" id="result3{$key}" value="{$item['sec']}" size="2" maxlength="2" />
秒 </td>
			</tr>
			<tr>
				<td>平均速度：</td>
				<td><input name="speed{$key}" type="text" id="speed{$key}" style="background-color:#EBEBE4;border:1px solid #7F9DB9;" value="{$item['speed']}" size="7" readonly="readonly"/>
分/Km</td>
			</tr>
			<tr>
				<td colspan="2"><input type="button" value="删除" onclick="delresult({$item['id']});" /><input type="button" value="保存" onclick="updateresult({$item['id']},{$key})" /></td>
			</tr>
		</table>
{/foreach}
	</form>
</body>
</html>

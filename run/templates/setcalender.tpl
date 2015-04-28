<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>{$title}</title>
<script src="js/setcalender.js" language="javascript"></script>
</head>

<body>
	<form name="setcalender" method="post" action="chk_setcalender.php" onsubmit="return setcalender_submit();">
		<h1>{$title}</h1>
		<div id='setcal'>
			<div class="marg" {if $tf == 'T'}style="display:none;"{/if}>{if $tf == 'T'}<input type="hidden" name="set4" id="set4" value="1"/>{/if}
				<p>请选择以下一项，你最近参加过的项目。</p>
				<ul>
					<li><input type="radio" name="set1" value="42195" onclick="dis_f();" />马拉松</li>
					<li><input type="radio" name="set1" value="21098" onclick="dis_f();" />半程马拉松</li>
					<li><input type="radio" name="set1" value="10000" onclick="dis_f();" />10km</li>
					<li><input type="radio" name="set1" value="1" onclick="dis_t();" />我刚刚参加长跑(指以前不经常锻炼、刚开始接触长跑的人）</li>
					<li><input type="radio" name="set1" value="2" onclick="dis_t();" />第一次跑马拉松（从未跑过1万米以上的长跑爱好者选择此项）</li>
					<li>成绩：<input name="hour" type="text" disabled="true" id="hour" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					小时<input name="min" type="text" disabled="true" id="min" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					分钟<input name="sec" type="text" disabled="true" id="sec" style="background:#999999;border:1px solid #7F9DB9;" size="2" maxlength="2" />
					秒</li>
				</ul>
			</div>
			<div class="marg">
				<p>你参加比赛的日期：<input type="text" name="set2" id="set2" onblur="return chk_date();" /> 格式如：1970-01-01<br />如果你是刚刚参加长跑的爱好者，系统将为你生成为期9个月（36周）的训练计划表。<br />如果你是第一次参加马拉松比赛，那么系统将为你生成一个为期6个月（24周）的训练计划表。<br />如果你已经能够轻松跑完10km以上的距离，那么系统将为你生成一个为期3个月（12周）的训练计划表</p>
			</div>
			<div class="marg">
				<p>你参加的比赛项目。</p>
				<ul>
					<li><input type="radio" name="set3" value="42195" />马拉松</li>
					<li><input type="radio" name="set3" value="21098"/>半程马拉松</li>
				</ul>
			</div>
			<div class="marg" style="text-align:center;">
				<input type="hidden" name="id" id="id" value="{$id}" />
				<input type="submit" value="提交" /><input type="reset" value="重写" />
			</div>
		</div>
	</form>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
	<h1>用户信息</h1>
	<ul>
		<li>用户:{$smarty.session.member}</li>
		<li>上月跑量:{$um_space}</li>
		<li>本月跑量:{$m_space}</li>
		<li>上周跑量:{$uw_space}</li>
		<li>本周跑量:{$w_space}</li>
		<li>上月速度：{$umavg_time}</li>		
		<li>本月速度：{$mavg_time}</li>
	</ul>
</body>
</html>

// JavaScript Document
window.onload = function(){
		window.resizeTo(280,320);
		window.moveTo((window.screen.width - 280)/2,(window.screen.height - 320)/2);
		window.focus();
		function $(id)
			{
				return document.getElementById(id);	
			}
/////////////////////////////////////////////////////////////////////////////////////////////验证用户名
		$('user').onkeyup = function ()
			{
				name = $('user').value;
				if(name.match(/^\w+/) && name.length > 2)
					{
						$('chkuser').innerHTML = '<font color=green>注册名符合标准，等待后台验证.....</font>';
						$('c_user').value = '1';
					}
				else if(name.length <= 2)
					{
						$('chkuser').innerHTML = '<font color=red>注册名称必须大于2位</font>';
					}
				else
					{	
						$('chkuser').innerHTML = '<font color=red>必须以字母、数字、或下划线开头</font>';
					}
			}
/////////////////////////////////////////////////////////////////////////////////////////////验证用户名是否重复
	$('user').onblur = function()
		{
			var name = $('user').value;
			if($('c_user').value == '1')
				{
					xmlhttp.open('get','chkuser.php?name='+name,true);
					xmlhttp.onreadystatechange = function()
						{
							if(xmlhttp.readyState == 4)
								{
									if(xmlhttp.status == 200)
										{
											var msg = xmlhttp.responseText;
											if(msg == '1')
												{
													$('chkuser').innerHTML="<font color=green>恭喜您，该用户名可以使用!</font>";
													$('c_user').value = '1';
												}
											else if(msg == '2')
												{
													$('chkuser').innerHTML="<font color=red>用户名被占用！</font>";
													$('c_user').value = '0';
												}
											else
												{
													$('chkuser').innerHTML="<font color=red>"+msg+"</font>";
													$('c_user').value = '0';
												}
										}
								}
							}
					xmlhttp.send(null);
				}
		}
////////////////////////////////////////////////////////////////////////////////////////////////////验证密码
	$('pwd1').onkeyup = function(){
		pwd1 = $('pwd1').value;
		pwd2 = $('pwd2').value;
		if(pwd1.length < 6){
			$('chkpwd1').innerHTML = '<font color=red>密码长度最少需要6位</font>';
			$('c_pwd1').value = '0';
		}else if(pwd1.length >= 6 && pwd1.length < 12){
			$('chkpwd1').innerHTML = '<font color=green>密码符合要求。密码强度：弱</font>';
			$('c_pwd1').value = '1';
		}else if((pwd1.match(/^[0-9]*$/)!=null) || (pwd1.match(/^[a-zA-Z]*$/) != null )){
			$('chkpwd1').innerHTML = '<font color=green>密码符合要求。密码强度：中</font>';
			$('c_pwd1').value = '1';
		}else{
			$('chkpwd1').innerHTML = '<font color=green>密码符合要求。密码强度：高</font>';
			$('c_pwd1').value = '1';
		}
		if(pwd2 != '' && pwd1 != pwd2){
			$('chkpwd2').innerHTML = '<font color=red>两次密码不一致!</font>';
			$('c_pwd2').value = '0';
		}else if(pwd2 != '' && pwd1 == pwd2){
			$('chkpwd2').innerHTML = '<font color=green>密码输入正确</font>';
			$('c_pwd2').value = '1';
		}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////验证确认密码
	$('pwd2').onkeyup = function(){
		pwd1 = $('pwd1').value;
		pwd2 = $('pwd2').value;
		if(pwd1 != pwd2){
			$('chkpwd2').innerHTML = '<font color=red>两次密码不一致!</font>';
			$('c_pwd2').value = '0';
		}else{
			$('chkpwd2').innerHTML = '<font color=green>密码输入正确</font>';
			$('c_pwd2').value = '1';
		}
	}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////验证email
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('chkemail').innerHTML = '<font color=red>错误的email格式</font>';
			$('c_email').value = '0';
		}else{
			$('chkemail').innerHTML = '<font color=green>输入正确</font>';
			$('c_email').value = '1';
		}
	}
	var ie = document.all?true:false; 
		$('weight').onkeyup = spacekey;    //验证键盘按下时所按的键值是否是数字、或者'.'、或者backspace；
		$('weight').onkeydown = spacekey;
		$('weight').onpaste = function (){return false;} //禁止粘贴入字符，以保证文本框正确的格式。
		$('stature').onkeydown = key;
		$('stature').onkeyup = key;
		$('stature').onpaste = function (){return false;}
		$('qq').onkeydown = key;
		$('qq').onkeyup = key;
		$('qq').onpaste = function (){return false;}
		$('tel').onkeydown = key;
		$('tel').onkeyup = key;
	$('tel').onkeyup = function(){
		var num = $('tel').value.length;
		if(num<11 || num >12){
			if(num>=7&&num<=8){
				$('chktel').innerHTML = '<font color=green>格式正确</font>';
				$('c_tel').value = '1';
			}else{
				$('chktel').innerHTML = '<font color=red>电话号码无效</font>';
				$('c_tel').value = '0';
			}
		}else{
			$('chktel').innerHTML = '<font color=green>格式正确</font>';
			$('c_tel').value = '1';
		}
	}
		$('tel').onpaste = function (){return false;}
		
		if(!ie)
			{
				document.captureEvents = (event.keydown|event.keyup);
			}
		function key(e)
			{
				var num = ie?event.keyCode:e.which;	
				if((num>=48 && num <=57)|| (num >= 96 && num <= 105))
					{
						return true;
					}
				else if(num == 8)
					{
						return true;	
					}
				else
					{
						return false;	
					}
			}
		function spacekey(e)
			{
				var num = ie?event.keyCode:e.which;	
				if(num==190 || num==110)
					{
						return $('weight').value.indexOf('.') == -1;	
					}
				else
					{
						return key(e);
					}
			}
}
function settable()
	{
		var text = document['register']['button1'].value;
		if(text=='显示选填信息'){
			document['register']['button1'].value = '隐藏选填信息';
			document.getElementById('table2').style.display="block";
			window.resizeTo(650,500);
			window.moveTo((window.screen.width - 500)/2,(window.screen.height - 500)/2);
		}else if(text == '隐藏选填信息'){
			document['register']['button1'].value = '显示选填信息';
			document.getElementById('table2').style.display="none";
			window.resizeTo(280,320);
			window.moveTo((window.screen.width - 280)/2,(window.screen.height - 320)/2);
		}
	}
function chk_register(){
	if(document['register']['c_user'].value==0||document['register']['c_pwd1'].value==0||document['register']['c_pwd2'].value==0||document['register']['c_email'].value==0||document['register']['c_tel'].value==0)
		return false;
}
function Setday(year,month,day,tag)//控制日期菜单的显示。以根据大月、小月、闰年、显示不同的天数。
	{
		var year = document.register[year].value.substr(0,4);
		var month = document.register[month].value.substr(-1);
		var today = document.register[day].value.substr(-1);
		var arr = new Array('4','6','9','11'); 	//临时用来存放小月的数组
		var total = 31;									//用来控制当月天数的变量。
		var HTML = '<select name="' + day + '" id="' + day +'">';	//该变量是表示具体日期的菜单
		HTML += '<option value=0>请选择</option>';
		if(month == '2')							//控制2月份的天数。
			{
				total =  year%4==0?29:28;
			}
		else										//如果是小月把天数由31改为30，大月不做更改。
			{
				for(var i=0; i<arr.length; i++)
					{
						if(month == arr[i])
							{
								total = 30;				
							}
					}
			}
		for(var i=1; i<=total; i++)					//生成就具体日期的菜单
			{
				if(today == i)
					{
						HTML += '<option value="' + i + '" selected="selected">' + i + '日</option>';	
					}
				HTML += '<option value="' + i + '">' + i + '日</option>';	
			}							
		document.getElementById(tag).innerHTML = HTML + '</select>';//重设日期菜单
	}

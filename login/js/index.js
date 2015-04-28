// JavaScript Document
//window.onload = check_image();
function check_image()
	{
		var chk='';	//此变量为4位验证码的值；
		var letter = "abcdefghijklmnopqrstuvxyz0123456789".toUpperCase();	//包含26个大写英文字母的变量
		for(var i=0; i<4; i++)
			{
				var rand = Math.floor(Math.random()*1000000);	//一个随机数；
				while(rand>35){
					rand = rand/Math.ceil(Math.random()*10);	
				}
				chk += letter.substr(Math.floor(rand),1);
			}
		document['login']['check_h'].value = chk;
		document.getElementById('check_image').innerHTML = '<img src="check_image.php?chk=' + chk +'" alt="' + chk + '" />';	
	}
function chk_login()
	{
		if(document['login']['check_p'].value.toUpperCase() !=document['login']['check_h'].value){
			alert('验证码错误');
			return false;
		}
		if(document['login']['user']=="" || document['login']['pwd']=="" || document['login']['check_p']=="") return false;
	}
function open_foundpwd(){
		var left_x=(window.screen.width - 320)/2;
		var top_y=(window.screen.height - 120)/2;
		window.open('foundpwd.php','newin','width=320,height=120,left='+left_x+',top='+top_y);
}
function open_register(){
		var left_x=(window.screen.width - 280)/2;
		var top_y=(window.screen.height - 320)/2;
		window.open('register.php','newin','scrollbars,width=280,height=320,left='+left_x+',top='+top_y);
}
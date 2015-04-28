// JavaScript Document
if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
}else if(window.ActiveXObject){
	try{
		xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');	
	}catch(e){
		xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');	
	}
}else{
	alert('XMLHttp对象未能实例化');	
}
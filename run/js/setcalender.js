// JavaScript Document
window.onload = function(){
		function $(id){
			return document.getElementById(id);	
		}
		$('set2').onblur = function(){
			if($('set2').value.match(/^\d{4}-\d{1,2}-\d{1,2}$/)){
				return true;
			}else{
				$('set2').value='';
				alert('日期格式错误');
				return false;
			}
		}
		var ie = document.all?true:false; 
		if(!ie){
			document.captureEvents = (event.keydown|event.keyup);
		}
		$('hour').onkeydown = key;
		$('hour').onkeyup = key;
		$('min').onkeydown = key;
		$('min').onkeyup = key;
		$('sec').onkeydown = key;
		$('sec').onkeyup = key;
		function key(e){
			var num = ie?event.keyCode:e.which;	
			if((num>=48 && num <=57)|| (num >= 96 && num <= 105)){
				return true;
			}else if(num == 8){
				return true;	
			}else{
				return false;	
			}
		}
}
function dis_t(){
	document.getElementById('hour').disabled = true;
	document.getElementById('hour').style.background = "#999999";
	document.getElementById('min').disabled = true;
	document.getElementById('min').style.background = "#999999";
	document.getElementById('sec').disabled = true;
	document.getElementById('sec').style.background = "#999999";

}
function dis_f(){
	document.getElementById('hour').disabled = false;
	document.getElementById('hour').style.background = "#FFFFFF";
	document.getElementById('min').disabled = false;
	document.getElementById('min').style.background = "#FFFFFF";
	document.getElementById('sec').disabled = false;
	document.getElementById('sec').style.background = "#FFFFFF";

}


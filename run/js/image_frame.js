// JavaScript Document
function $(tag){
	return document.getElementById(tag);
}
function reloadimage(){
	$('div_im').innerHTML = '<img src="image.php?x_unit=' + $('x_unit').value + '&y_unit=' + $('y_unit').value + '&firstday=' + $('firstday').value +'&lastday='+$('lastday').value + '" />';
}
function weekday(){
	if($('x_unit').value=='week'){
		var url = 'weekday.php?set=week';
	}else if($('x_unit').value=='day'){
		var url = 'weekday.php?set=day';
	}
	setweek(url);
}
function resetday(aord){
	if(aord == 'a'){
		var d1 = $('firstday').value;
	}else if(aord == 'd'){
		var d1 = $('lastday').value;
	}
	if($('x_unit').value=='day'){
		var d2 = new Date(d1.substr(0,4),Number(d1.substr(5,2))-1,d1.substr(8,2));
		if(aord == 'a'){
			d2 = d2.getTime()+15*24*3600*1000; 
		}else if(aord == 'd'){
			d2 = d2.getTime()-15*24*3600*1000;
		}
		if(aord == 'a'){
			$('lastday').value = setday(d2);
		}else if(aord == 'd'){
			$('firstday').value = setday(d2);
		}
		reloadimage();
	}else if($('x_unit').value=='week'){
		if(aord == 'a'){
			var url = 'weekday.php?set=a&d1=' + d1;
		}else if(aord =='d'){
			var url = 'weekday.php?set=d&d1=' + d1;
		}
		setweek(url);
	}
}
function goback(gorb){
	var d1 = $('firstday').value;
	var d2 = $('lastday').value;
	if($('x_unit').value=='day'){
		d1 = new Date(d1.substr(0,4),Number(d1.substr(5,2))-1,d1.substr(8,2));
		d2 = new Date(d2.substr(0,4),Number(d2.substr(5,2))-1,d2.substr(8,2));
		if(gorb == 'b'){
			d1 = d1.getTime() - 24*3600*1000; 
			d2 = d2.getTime() - 24*3600*1000; 
		}else if(gorb =='g'){
			d1 = d1.getTime() + 24*3600*1000; 
			d2 = d2.getTime() + 24*3600*1000; 
		}
		$('firstday').value = setday(d1);
		$('lastday').value = setday(d2);
		reloadimage();
	}else if($('x_unit').value=='week'){
		if(gorb == 'b'){
			var url = 'weekday.php?set=b&d1=' + d1 + '&d2=' + d2;
		}else if(gorb =='g'){
			var url = 'weekday.php?set=g&d1=' + d1 + '&d2=' + d2;
		}
		setweek(url);
	}
}
function setday(day){
	d = new Date(day);
	var year = d.getFullYear() + '年';
	var month = (d.getMonth()+1);
	if(month<10){
		month = '0' + month + '月';	
	}else{
		month += '月';
	}
	var day = d.getDate();
	if(day<10){
		day = '0' + day + '日';	
	}else{
		day += '日';	
	}
	return(year+month+day);
}
function setweek(url){
	xmlhttp.open('GET',url,true);
	xmlhttp.onreadystatechange =function (){
		if(xmlhttp.readyState == '4' && xmlhttp.status == '200'){
			var str = xmlhttp.responseText;
			var snum = str.indexOf('#');
			var str1 = str.slice(0,snum);
			var str2 = str.slice(snum+1);
			$('firstday').value=str1;
			$('lastday').value=str2;
			reloadimage();
		}
	}
	xmlhttp.send(null);
}

function change_area1(area)
	{
		document.getElementById('select_area2').disabled = false;
		document.getElementById('select_area3').disabled = true;
		var url = "change_area.php?area1="+area;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function()
			{
				if(xmlhttp.readyState ==4 && xmlhttp.status == 200)
					{
						document.getElementById('area2').innerHTML = xmlhttp.responseText;
					}
			}
		xmlhttp.send(null);
	}
function change_area2(area)
	{
		var url = "change_area.php?area2="+area;
		xmlhttp.open("GET",url,true);
		xmlhttp.onreadystatechange = function()
			{
				if(xmlhttp.readyState ==4 && xmlhttp.status == 200)
					{
						document.getElementById('area3').innerHTML = xmlhttp.responseText;
					}
			}
		xmlhttp.send(null);
	}

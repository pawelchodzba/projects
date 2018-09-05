
		function odswierzanie() 
		{
		
		var zegarek= new Date();
		
		var dzisiaj = zegarek.getDate();
		var mies = zegarek.getMonth()+1;
		var rok = zegarek.getFullYear();
						
		var sekunda = zegarek.getSeconds();
		if (sekunda<10)  sekunda = "0"+sekunda;
		var min = zegarek.getMinutes();
		if(min<10) min= "0"+min;
		var godz = zegarek.getHours();
		if(godz<10) godz = "0"+godz;
		
		
		
		
		
		
		document.getElementById("godzina").innerHTML =godz+":"+min+":"+sekunda ;
		
		setTimeout("odswierzanie()",1000);
		}
		
		
	
		
		function odswierzanie_cpr() 
		{
		var zegarek= new Date();
	
		
	
		
		
		var sekunda = zegarek.getSeconds();	
		var sekunda_wynik= zegarek.sekunda_wynik;
		sekunda_wynik= 59-sekunda;
		if (sekunda_wynik<10)  sekunda_wynik = "0"+sekunda_wynik;
		
					var min = zegarek.getMinutes();
					var min_minus= 60;
					var min_wynik= zegarek.min_wynik;
					
					if (min>30 )
					min_wynik= (min_minus-(min-30));
					else
						min_wynik=(30-min);
					if(min_wynik<10) min_wynik= "0"+min_wynik;
			
			
			
			//var godz = 17;
		var godz = zegarek.getHours();
		//var godz_dn= 19;
		var godz_wynik=zegarek.godz_wynik;
			
		if (godz >7 && godz<19 &&min>=30)
		godz_wynik=(19-godz-1);
		if (godz >7 && godz<19 && min<30)
		godz_wynik=(19-godz);
		
		if (godz==19 && min<30)
		godz_wynik=0;
		if (godz==19 && min>30)
		godz_wynik=11;
		
		if (godz >19&& godz<24&& min<=30)
		godz_wynik=(24-(godz-7));
		if (godz >19&& godz<24&& min>30)
		godz_wynik=(23-(godz-7));
	
		if (godz >=0&& godz<7&& min<=30)
		godz_wynik=(7-godz);
		if (godz >=0&& godz<7&& min>30)
		godz_wynik=(7-godz-1);
	
		if (godz==7 && min<30)
		godz_wynik=0;
		if (godz==7 && min>30)
		godz_wynik=11;
		
		
		
		
		
		
		if(godz_wynik<10) godz_wynik = "0"+godz_wynik;
		
		
		
		document.getElementById("czas_cpr").innerHTML =godz_wynik+":"+min_wynik+":"+sekunda_wynik;
		
		setTimeout("odswierzanie_cpr()",1000);
		}
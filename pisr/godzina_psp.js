
		function odswierzanie_psp() 
		{
		var zegarek= new Date();
		
			
		
		var sekunda = zegarek.getSeconds();	
		var sekunda_wynik= zegarek.sekunda_wynik;
		sekunda_wynik= 59-sekunda;
		if (sekunda_wynik<10)  sekunda_wynik = "0"+sekunda_wynik;
		
		var min = zegarek.getMinutes();
		var min_wynik= zegarek.min_wynik;
		min_wynik=59-min;
		if (min_wynik<10)  min_wynik = "0"+min_wynik;
		
		
		var godz = zegarek.getHours();	
		var godz_wynik=zegarek.godz_wynik;
		if (godz <24 && godz>=8) godz_wynik = ((23-godz)+8);
		else godz_wynik = (7- godz);
		if(godz_wynik<10) godz_wynik = "0"+godz_wynik;
		
		
		
		document.getElementById("czas_psp").innerHTML =godz_wynik+":"+min_wynik+":"+sekunda_wynik;
		
		setTimeout("odswierzanie_psp()",1000);
		}

		
		
		function teraz() 
		{
		var data= new Date();
		
		var dzisiaj = data.getDate();
		var mies = data.getMonth()+1;
		var rok = data.getFullYear();
		var dzien = data.getDay();
		
		if (dzien==1) dzien="poniedziałek"
		if (dzien==2) dzien="wtorek"
		if (dzien==3) dzien="środa"
		if (dzien==4) dzien="czwartek"
		if (dzien==5) dzien="piątek"
		if (dzien==6) dzien="sobota"
		if (dzien==0) dzien="niedziela"
		
		
		
		if (mies ==9) mies = "wrzesień";
		if (mies ==10) mies = "październik";
		if (mies ==11) mies = "listopad";
		if (mies ==12) mies = "grudzień";
		if (mies ==12) mies = "grudzień";
		if (mies ==1) mies = "styczeń";
		if (mies ==2) mies = "luty";
		if (mies ==3) mies = "marzec";
		if (mies ==4) mies = "kwiecień";
		if (mies ==5) mies = "maj";
		if (mies ==6) mies = "czerwiec";
		if (mies ==7) mies = "lipiec";
		if (mies ==8) mies = "sierpień";
		
		document.getElementById("data").innerHTML =dzien+"  "+ dzisiaj+" "+mies+" "+rok;
		setTimeout("teraz()",1000);
		
		
		
		}
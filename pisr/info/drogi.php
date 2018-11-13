<?php
// session_start();
// if(!isset($_SESSION['zalogowany']))
// {
// 	header('Location: ../../index.php');
// 	exit();
// }

?>
<!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content=""/>
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<link rel="stylesheet" href="style_drogi.css" type= "text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
		<script>$(document).ready(function() { 
	
	$('.tabs a').click(function(){
		$this=$(this);
		$('.panel').hide();
		$('.tabs a.active').removeClass('active');
		$this.addClass('active').blur();
		var panel = $this.attr('href');
		$(panel).fadeIn(250);
		return false;
		});
		$('.tabs li:first a').click();
		});</script>
	
	
	</head>
	<body>
	
<div id="ramka">

	<div id="naglowek"> 
	Drogi
	</div>
	<div class= "tabbePanels">
	<ul class="tabs">
			<li><a href="#panel1">Autostrada</a></li>
			<li><a href="#panel2">Drogi Krajowe</a></li>
			<li><a href="#panel3">Drogi Wojewódzkie</a></li>
			<li><a href="#panel4">Drogi Powiatowe</a></li>
		
	</ul>
	</div>
			<div class="panel" id="panel1">
		<center>
		<table>
		<tr><td><a href ="skype:+4819111?call">19111</a></td><td>INFORMACJA DROGOWA</td></tr>
		</table>
		
		
		
		
		</center>
	
		<div><img src="img/a4_prm.png"/></div>
		<div><img src="img/a4_psp.png"/></div>
		<div><img src="img/a4_policja.png"/></div>
		
		
		
			</div>
	
	
	
	<div class="panel" id="panel2">
	
			<br/>
			
	<center>
		<table>
		
			<tr>	<td>	<a href ="skype:+48178520815?call">178520815</a>	</td>	<td>	Punkt Informacji Drogowej  Oddzial Rzeszów 24 h	</td>	</tr>

		</table>
	</center>
			<table>
		
				<tr>	<td>	Telefon	</td>	<td>	Rejon	</td>	</tr>
			<tr>	<td>	<a href ="skype:+48134365615?call">134365615</a>	</td>	<td>	Krosno	</td>	</tr>
			<tr>	<td>	<a href ="skype:+48163073280?call">163073280</a>	</td>	<td>	Przemyśl	</td>	</tr>
			<tr>	<td>	<a href ="skype:+48134698011?call">134698011</a>	</td>	<td>	Lesko	</td>	</tr>
			<tr>	<td>	<a href ="skype:+48158412213?call">158412213</a>	</td>	<td>	Nisko	</td>	</tr>
			<tr>	<td>	<a href ="skype:+48177110512?call">177110512</a>	</td>	<td>	Rzeszów	</td>	</tr>
					
		</table>
		
		<div id="dk_map"><img src="img/dk_map.png"/></div>


		<div id="map_leg">
			<div class="map k"><p>Rejon w Krośnie</p></div>
			<div class="map r"><p>Rejon w Rzeszowie <br/>z siedzibą OUA Rzeszów</p></div>
			<div class="map l"><p>Rejon w Lesku</p></div>
			<div class="map n"><p>Rejon w NIsku</p></div>
			<div class="map p"><p>Rejon w Przemyślu<br/>z siedzibą OUA Przemyśl</p></div>
		</div>
		</div>	
		


<div class="panel" id="panel3">
	
			<br/>
		<div id="tresc">
					<table>
								<tr>	<th>	Nr drogi	</th>	<th>	Nazwa drogi 	</th>	</tr>
													
						<tr>	<td>	764	</td>	<td>	Kielce – Suków – Raków – Staszów – Połaniec – granica woj. świętokrzyskiego - rzeka Wisła do skrzyżowania z drogą wojewódzką Nr 985  w m. Tuszów Narodowy	</td>	</tr>
						<tr>	<td>	835	</td>	<td>	Lublin-granica woj. lubelskiego -Sieniawa-Przeworsk-Kańczuga-Dynów-Grabownica Starzeńska 	</td>	</tr>
						<tr>	<td>	854	</td>	<td>	Annopol-granica woj. lubelskiego- Antoniów-Gorzyce (przeprawa promowa)	</td>	</tr>
						<tr>	<td>	855	</td>	<td>	Olbięcin- granica woj. lubelskiego- Zaklików-Stalowa Wola  	</td>	</tr>
						<tr>	<td>	856	</td>	<td>	Antoniów-Radomyśl nad Sanem-Dąbrowa Rzeczycka	</td>	</tr>
						<tr>	<td>	857	</td>	<td>	Zaklików-Modliborzyce (do granicy woj. lubelskiego)	</td>	</tr>
						<tr>	<td>	858	</td>	<td>	Zarzecze-Biłgoraj-Zwierzyniec-Szczebrzeszyn (do granica woj. podkarpackiego)	</td>	</tr>
						<tr>	<td>	861	</td>	<td>	Bojanów-Kopki	</td>	</tr>
						<tr>	<td>	863	</td>	<td>	Kopki-Krzeszów-Tarnogród-Cieszanów	</td>	</tr>
						<tr>	<td>	864	</td>	<td>	Nowy Lubliniec-Żuków	</td>	</tr>
						<tr>	<td>	865	</td>	<td>	Jarosław-Oleszyce-Cieszanów-Bełżec	</td>	</tr>
						<tr>	<td>	866	</td>	<td>	Dachnów-Lubaczów-granica państwa	</td>	</tr>
						<tr>	<td>	867	</td>	<td>	Sieniawa-Wola Mołodycka- Oleszyce - Lubaczów-Hrebenne	</td>	</tr>
						<tr>	<td>	869	</td>	<td>	Droga 19- Droga 9	</td>	</tr>
						<tr>	<td>	870	</td>	<td>	Sieniawa-Wiązownica-Jarosław	</td>	</tr>
						<tr>	<td>	871	</td>	<td>	Tarnobrzeg-Grębów-Stalowa Wola	</td>	</tr>
						<tr>	<td>	872	</td>	<td>	rz. Wisła- Baranów San. - Wola Baranowska - Majdan Królewski - Nisko	</td>	</tr>
						<tr>	<td>	875	</td>	<td>	Mielec- Kolbuszowa- Leżajsk	</td>	</tr>
						<tr>	<td>	877	</td>	<td>	Naklik - Leżajsk-Łańcut-Szklary	</td>	</tr>
						<tr>	<td>	878	</td>	<td>	Rzeszów-Dylągówka	</td>	</tr>
						<tr>	<td>	880	</td>	<td>	Jarosław-Pruchnik	</td>	</tr>
						<tr>	<td>	881	</td>	<td>	Sokołów Młp -Łańcut-Kańczuga-Żurawica	</td>	</tr>
						<tr>	<td>	884	</td>	<td>	Przemyśl-Domaradz	</td>	</tr>
						<tr>	<td>	885	</td>	<td>	Przemyśl-Hermanowice-granica państwa	</td>	</tr>
						<tr>	<td>	886	</td>	<td>	Domaradz-Sanok	</td>	</tr>
						<tr>	<td>	887	</td>	<td>	Brzozów-Rymanów - Daliowa	</td>	</tr>
						<tr>	<td>	889	</td>	<td>	Sieniawa-Bukowsko-Szczawne	</td>	</tr>
						<tr>	<td>	890	</td>	<td>	Kuźmina-Krościenko	</td>	</tr>
						<tr>	<td>	892	</td>	<td>	Zagórz-Komańcza	</td>	</tr>
						<tr>	<td>	893	</td>	<td>	Lesko-Cisna	</td>	</tr>
						<tr>	<td>	894	</td>	<td>	Hoczew-Czarna	</td>	</tr>
						<tr>	<td>	895	</td>	<td>	Uherce Mineralne- Myczków	</td>	</tr>
						<tr>	<td>	896	</td>	<td>	Ustrzyki Dln.-Ustrzyki Górne	</td>	</tr>
						<tr>	<td>	897	</td>	<td>	Tylawa-Komańcza-Cisna-Ustrzyki Górne-Wołosate-granica państwa	</td>	</tr>
						<tr>	<td>	982	</td>	<td>	Szczucin-Sadkowa Góra-Jaślany	</td>	</tr>
						<tr>	<td>	983	</td>	<td>	Sadkowa Góra-Mielec	</td>	</tr>
						<tr>	<td>	984	</td>	<td>	Lisia Góra-Radomyśl Wielki - Mielec	</td>	</tr>
						<tr>	<td>	985	</td>	<td>	Nagnajów-Baranów Sandomierski-Mielec-Dębica	</td>	</tr>
						<tr>	<td>	986	</td>	<td>	Tuszyma-Ropczyce-Wiśniowa	</td>	</tr>
						<tr>	<td>	987	</td>	<td>	Kolbuszowa-Sędziszów Młp.	</td>	</tr>
						<tr>	<td>	988	</td>	<td>	Babica- Strzyżów- Wiśniowa- Twierdza-Warzyce	</td>	</tr>
						<tr>	<td>	989	</td>	<td>	Strzyżów-Lutcza	</td>	</tr>
						<tr>	<td>	990	</td>	<td>	Twierdza-Krosno	</td>	</tr>
						<tr>	<td>	991	</td>	<td>	Lutcza-Krosno	</td>	</tr>
						<tr>	<td>	992	</td>	<td>	Jasło-Zarzecze-Nowy Żmigród-Krempna-Świątkowa -Grab-Ożenna – granica państwa	</td>	</tr>
						<tr>	<td>	993	</td>	<td>	Gorlice-Nowy Żmigród-Dukla	</td>	</tr>

					</table>
		</div>
	
	</div>	
	
<div class="panel" id="panel4">
	
			<br/>
		<div>
			
			<table>
			<tr>	<td rowspan="3">	RZESZÓW	</td>		<td>	Obwód Błażowa: Błażowa, Chmielnik, Dynów, Hyżne, część Krasnego i Tyczyna (24h) : 	</td>	<td>	<a href ="skype:+48172290782?call">172290782</a>	</td>	</tr>
											
<tr>					<td>	Obwód Babica: Boguchwała, Lubenia, część Tyczyna, Świlczy i Głogowa Małopolskiego  (24h): 	</td>	<td>	<a href ="skype:+48172772297?call">172772297</a>	</td>	</tr>
											
<tr>					<td>	Obwód Wólka Niedźwiedzka: Kamień, Sokołów, Trzebownisko, część Krasnego, Świlczy i Głogowa Małopolskiego (24h):  , 	</td>	<td>	<a href ="skype:+48177712802?call">177712802</a>	</td>	</tr>
											
<tr>	<td rowspan="2">	BRZOZÓW	</td>		<td>	 (7-15)	</td>	<td>	<a href ="skype:+48134340474?call">134340474</a>	</td>	</tr>
<tr>					<td>	dyż.  (przerwa 22-4)	</td>	<td>	<a href ="skype:+48134340665?call">134340665</a>	</td>	</tr>
											
<tr>	<td rowspan="4">	DĘBICA	</td>		<td>	Sekretariat:(w godz. 7-15:00) 	</td>	<td>	<a href ="skype:+48146803155?call">146803155</a>	</td>	</tr>
<tr>					<td>	Dyrektor	</td>	<td>	<a href ="skype:+48695987501?call">695987501</a>	</td>	</tr>
<tr>					<td>	Obwód Pilzno: Żyraków, Czarna, większa część Pilzna i Dębicy: (w godz. 2-22:00)	</td>	<td>	<a href ="skype:+48146721010?call">146721010</a>	</td>	</tr>
<tr>					<td>	Obwód Brzostek: Brzostek, Jodłowa, mniejsza część Pilzna i Dębicy: 	</td>	<td>	<a href ="skype:+48146830291?call">146830291</a>	</td>	</tr>
											
											
<tr>	<td rowspan="4">	JAROSŁAW	</td>		<td>	 w godz. 7-15	</td>	<td>	<a href ="skype:+48166216449?call">166216449</a>	</td>	</tr>
<tr>					<td>	 (całodobowo)- kier	</td>	<td>	<a href ="skype:+48696484810?call">696484810</a>	</td>	</tr>
<tr>					<td>	Dyr 	</td>	<td>	<a href ="skype:+48694492022?call">694492022</a>	</td>	</tr>
<tr>					<td>	(całodobowo)	</td>	<td>	<a href ="skype:+48797710 686?call">797710 686</a>	</td>	</tr>
											
<tr>	<td>	KOLBUSZOWA	</td>		<td>	(całodobowo) nie potwierdzony	</td>	<td>	<a href ="skype:+48605425068?call">605425068</a>	</td>	</tr>
											
<tr>	<td>	KROSNO	</td>		<td>	 (całodobowo)	</td>	<td>	<a href ="skype:+48134330020?call">134330020</a>	</td>	</tr>
											
<tr>	<td>	LESKO	</td>		<td>	 (w godz. 3-19:00)	</td>	<td>	<a href ="skype:+48134684012?call">134684012</a>	</td>	</tr>
											
<tr>	<td rowspan="2">	LEŻAJSK	</td>		<td>	 (w godz. 4-15:00), 	</td>	<td>	<a href ="skype:+48172421181?call">172421181</a>	</td>	</tr>
<tr>					<td>	dyż.(po godz. 15:00)	</td>	<td>	<a href ="skype:+48606999052?call">606999052</a>	</td>	</tr>
											
<tr>	<td>	LUBACZÓW	</td>		<td>	 (w godz. 4-21:00 w sezonie zimowym 7-15 poza sezonem)	</td>	<td>	<a href ="skype:+48166329998?call">166329998</a>	</td>	</tr>
											
<tr>	<td rowspan="2">	ŁAŃCUT	</td>		<td>	Dyż.(7-15), 	</td>	<td>	<a href ="skype:+48172257448?call">172257448</a>	</td>	</tr>
<tr>					<td>	 PCZK całodobowo	</td>	<td>	<a href ="skype:+48172253177?call">172253177</a>	</td>	</tr>
											
<tr>	<td>	MIELEC	</td>		<td>	 (w godz. 3-23:00)	</td>	<td>	<a href ="skype:+48175839633?call">175839633</a>	</td>	</tr>
											
<tr>	<td>	NISKO	</td>		<td>	 (w godz. 7-15:00)	</td>	<td>	<a href ="skype:+48158415416?call">158415416</a>	</td>	</tr>
											
											
<tr>	<td rowspan="2">	PRZEMYŚL	</td>		<td>	 (w godz. 7-15:30)	</td>	<td>	<a href ="skype:+48166750025?call">166750025</a>	</td>	</tr>
<tr>					<td>	Dyż.  (całodobowo)	</td>	<td>	<a href ="skype:+48166711009?call">166711009</a>	</td>	</tr>
											
<tr>	<td rowspan="2">	PRZEWORSK	</td>		<td>	(w godz. 7-15:00)	</td>	<td>	<a href ="skype:+48166489724?call">166489724</a>	</td>	</tr>
<tr>					<td>	 (w godz. 4-22:00)	</td>	<td>	<a href ="skype:+48166423128?call">166423128</a>	</td>	</tr>
											
<tr>	<td rowspan="2">	ROPCZYCE	</td>		<td>	 (w godz. 7-15:30 biuro)	</td>	<td>	<a href ="skype:+48172228931?call">172228931</a>	</td>	</tr>
<tr>					<td>	lub 	</td>	<td>	<a href ="skype:+48509618383?call">509618383</a>	</td>	</tr>
											
<tr>	<td rowspan="8">	SANOK	</td>		<td>	Mapy i odcinki dróg www.pzd.sanok.biz zakładka zima	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	</tr>
<tr>					<td>	Rejon Sanok, Tarnawa, Bukowsko, Zarszyn strona prawa  	</td>	<td>	<a href ="skype:+48604450507?call">604450507</a>	</td>	</tr>
<tr>					<td>	Rejon Dobra , 	</td>	<td>	<a href ="skype:+48666895206?call">666895206</a>	</td>	</tr>
<tr>					<td>	Zarszyn strona lewa	</td>	<td>	<a href ="skype:+48134674149?call">134674149</a>	</td>	</tr>
<tr>					<td>	 Poraż 	</td>	<td>	<a href ="skype:+48725700614?call">725700614</a>	</td>	</tr>
<tr>					<td>	Rejon Komańcza	</td>	<td>	<a href ="skype:+48134676037?call">134676037</a>	</td>	</tr>
<tr>					<td>	Besko 	</td>	<td>	<a href ="skype:+48134673061?call">134673061</a>	</td>	</tr>
<tr>					<td>	Tyrawa Wołoska	</td>	<td>	<a href ="skype:+48134656931?call">134656931</a>	</td>	</tr>
											
<tr>	<td>	STALOWA WOLA	</td>		<td>	 (całodobowo)	</td>	<td>	<a href ="skype:+48605346509?call">605346509</a>	</td>	</tr>
											
<tr>	<td>	STRZYŻÓW	</td>		<td>	dyż.  (całodobowo) 	</td>	<td>	<a href ="skype:+48172761932?call">172761932</a>	</td>	</tr>
											
<tr>	<td rowspan="3">	TARNOBRZEG	</td>		<td>	 (całodobowo)	</td>	<td>	<a href ="skype:+48158464910?call">158464910</a>	</td>	</tr>
<tr>					<td>	dyż.  (całodobowo) 	</td>	<td>	<a href ="skype:+48692428436?call">692428436</a>	</td>	</tr>
<tr>					<td>	kier. 	</td>	<td>	<a href ="skype:+48692428447?call">692428447</a>	</td>	</tr>
											
<tr>	<td rowspan="3">	USTRZYKI	</td>		<td>	 (7-15)	</td>	<td>	<a href ="skype:+48134612474?call">134612474</a>	</td>	</tr>
<tr>					<td>	Kier. 	</td>	<td>	<a href ="skype:+48606760906?call">606760906</a>	</td>	</tr>
<tr>					<td>	(w godz. 3-21 pon-pt i 3-19 sob i niedz)	</td>	<td>	<a href ="skype:+48795573828?call">795573828</a>	</td>	</tr>

			
			
			
			
			</table>
	
		</div>
	
	</div>	
</div>		
    <a href="file://drogi_krajowe_2.5.xlsm"  TARGET="_blank">drogio</a>
		
	</body>
	</html>
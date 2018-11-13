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
	
	<link rel="stylesheet" href="stylprm.css" type= "text/css"/>
	
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
	
	

<body >

<div id="ramka">

	<div id="naglowek">
		<div id="a999">999</div>
		<div id="logo"><img src="logo.png"width="80px"/></div>
		<div id="glowa" > Państwowe Ratownictwo Medyczne </div>
		<div style= "clear: both;"></div>
	</div>
	
	<div class= "tabbePanels">
		<ul class="tabs">
			<li><a href="#panel1">struktura</a></li>
			<li><a href="#panel2">procedury</a></li>
			<li><a href="#panel3">informacje</a></li>
			<li><a href="#panel4">akty prawne</a></li>
			<li><a href="#panel5"></a></li>
		</ul>

		<div class="panelContainer">
			<div class="panel" id="panel1">
			
			<div class="tab_struk">
				<table>
				<tr><td>  Szpitalny Odział<br/>Ratunkowy </td><td>Jednostka systemu Państwowe Ratownictwo Medyczne (PRM), która niezwłocznie udziela świadczeń opieki zdrowotnej, polegających na wstępnej diagnostyce oraz podjęciu leczenia niezbędnego dla stabilizacji funkcji życiowych osób znajdujących się w stanie nagłego zagrożenia zdrowotnego <a target="_blanc" href="http://www.mz.gov.pl/system-ochrony-zdrowia/panstwowe-ratownictwo-medyczne/szpitalne-oddzialy-ratunkowe/">źródło</a></td><td><img src="icon/sor2.png"/></td></tr>				</table>
				
				<table>
				<tr><td>Izba Przyjęć<br/>Ratunkowy </td><td>Na izbie przyjęć świadczenia opieki zdrowotnej udzielone są w trybie nagłym pacjentowi znajdującemu się w stanie nagłego zagrożenia zdrowotnego. Mogą obejmować również świadczenia, które ze względu na stan zdrowia pacjenta wymagają niezwłocznego podjęcia czynności związanych z diagnostyką i leczeniem<a target="_blanc" href="http://www.nfz.gov.pl/dla-pacjenta/na-ratunek/izby-przyjec/">źródło</a></td><td><img src="icon/ip_samotna2.png"/></td></tr>				</table>
				
				
				<table>
				<tr><td> Zespół Ratownictwa<br/>Medycznego</td><td>Zespoły ratownictwa medycznego (ZRM) to jednostki systemu PRM, udzielające świadczeń wyłącznie osobom w stanie nagłego zagrożenia zdrowotnego w warunkach pozaszpitalnych. <br/><p><strong>Zespoły specjalistyczne</strong>, w skład których wchodzą co najmniej trzy osoby uprawnione do wykonywania medycznych czynności ratunkowych, w tym lekarz systemu oraz pielęgniarka systemu lub ratownik medyczny;<br/></p><p><strong>Zespoły podstawowe</strong>, w skład których wchodzą co najmniej dwie osoby uprawnione do wykonywania medycznych czynności ratunkowych, w tym pielęgniarka systemu lub ratownik medyczny<br/></p><p><strong>Zespoły lotnicze</strong>, w skład których wchodzą co najmniej trzy osoby, w tym co najmniej jeden pilot zawodowy, lekarz systemu oraz ratownik medyczny lub pielęgniarka systemu.</p><a target="_blanc" href="http://www.mz.gov.pl/system-ochrony-zdrowia/panstwowe-ratownictwo-medyczne/zespoly-ratownictwa-medycznego/">źródło</a></td><td>Specjalistyczny<img src="icon/s.png"/><br/><br/>Podstawowy<img src="icon/p.png"/><br/><br/>Lotniczy<img src="icon/lpr.png"/></td></tr>				</table>
				
				
				
				<table>
				<tr><td>  Zintegrowane<br/>Dyspozytornie Medyczne </td><td>Zintegrowana Dyspozytornia Medyczna przyjmuje zgłoszenia z numeru 999 oraz zgłoszenia przekierowane przez operatora numeru alarmowego 112.<br/>Zgłoszenia odbierają dyspozytorzy medyczni, którzy przeprowadzają wywiad medyczny, kwalifikują do przyjęcia zgłoszenia, ustalają priorytety i niezwłocznie dysponują na miejsce zdarzenia zespoły ratownictwa medycznego, najbliższe miejscu zdarzenia. W zależności od sytuacji dyspozytor medyczny udziela instrukji zgłaszającemu.<!--<a target="_blanc" href="">źródło</a>--></td><td><img src="icon/dm.png"/></td></tr>				</table>
						
			</div>
			
			
			
			
			
			
			</div>
			
			
			<div class="panel" id="panel2">

				<center>
				<B>Wykaz procedur</B>
				<br>
				<table class="wykaz_p">
				<tr height="50">
				<td width="100"><a href="Procedury/alergia_1.php" target="tresc">1.<br> Alergia</a></td>
				<td width="100"><a href="Procedury/brzuch_1.php" target="tresc">2.<br> Ból brzucha</a></td>
				<td width="100"><a href="Procedury/glowa_1.php" target="tresc">3.<br> Ból głowy</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/klatka_1.php" target="tresc">4.<br> Ból w klatce piersiowej</a></td>
				<td width="100"><a href="Procedury/kregoslup_1.php" target="tresc">5.<br> Ból kręgosłupa, pleców</a></td>
				<td width="100"><a href="Procedury/ciaza_1.php" target="tresc">6.<br> Ciąża/ poród/ poronienie</td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/cukrzyca_1.php" target="tresc">7.<br> Cukrzyca</a></td>
				<td width="100"><a href="Procedury/drgawki_1.php" target="tresc">8.<br> Drgawki</a></td>
				<td width="100"><a href="Procedury/dusznosc_1.php" target="tresc">9.<br> Duszność</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/krwotok_1.php" target="tresc">10.<br>Krwotok/ krwawienie</a></td>
				<td width="100"><a href="Procedury/lezy_1.php" target="tresc">11.<br>Leży</a></td>
				<td width="100"><a href="Procedury/nieprzytomny.php" target="tresc">12.<br>Nieprzytomny</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/oparzenie_1.php" target="tresc">13.<br>Oparzenie</a></td>
				<td width="100"><a href="Procedury/hipotermia_1.php" target="tresc">14.<br>Oziębienie/ hipotermia</a></td>
				<td width="100"><a href="Procedury/paraliz_1.php" target="tresc">15.<br>Paraliż/ bełkotliwa mowa</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/prad_1.php" target="tresc">16.<br>Porażenie prądem, piorunem</td>
				<td width="100"><a href="Procedury/powieszenie_1.php" target="tresc">17.<br>Powieszenie / Zadzierzgnięcie</td>
				<td width="100"><a href="Procedury/kardio_1.php" target="tresc">18.<br>Problemy kardiologiczne</td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/urazy_1.php" target="tresc">19.<br>Urazy / obrażenia</a></td>
				<td width="100"><a href="Procedury/cisnienie_1.php" target="tresc">20.<br>Wysokie ciśnienie tętnicze</a></td>
				<td width="100"><a href="Procedury/toniecie_1.php" target="tresc">21.<br>Tonięcie</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/komunikacyjny_1.php" target="tresc">22.<br>Wypadek komunikacyjny</a></td>
				<td width="100"><a href="Procedury/psychiczny_1.php" target="tresc">23.<br>Zaburzenia psychiczne</a></td>
				<td width="100"><a href="Procedury/nzk_1.php" target="tresc">24.<br>NZK</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/obce_1.php" target="tresc">25.<br>Zadławienie/ Ciało obce w drogach oddechowych</a></td>
				<td width="100"><a href="Procedury/zatrucie_1.php" target="tresc">26.<br>Zatrucie</a></td>
				<td width="100"><a href="Procedury/zaslabniecie_1.php" target="tresc">27.<br>Zasłabnięcie</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/inne_1.php" target="tresc">28.<br>Inne złe samopoczucie</a></td>
				<td width="100"><a href="Procedury/pediatra_1.php" target="tresc">29.<br>Pacjent pediatryczny</a></td>
				<td width="100"><a href="Procedury/masowe_1.php" target="tresc">30.<br>Zdarzenie masowe</a></td>
				</tr>
				<tr height="50">
				<td width="100"><a href="Procedury/odmowa.php" target="tresc">31.<br>Odmowa przyjecia wezwania</a></td>
				<td width="100"><a href="Procedury/info1.php" target="tresc">informacje<br>ogólne<br>o systemie</a></td>
				<td width="100"><a href="Procedury/start.php" target="tresc">Ogólna procedura przyjecia wezwania</a></td>
				</tr>
				</table>
				</center>



			</div>
			<div class="panel" id="panel3">

					<center>
					
				<div class="dm_tyt">
					<table>
					<caption>DYSPOZYTORNIE MEDYCZNE</caption>
					<tr>	<th>	Miasto	</th>	<th>	 Adres	</th>	<th>	Telefon</a>	</th>	</tr>
					
					<tr>	<td>	Rzeszów	</td>	<td>	  Al. Wyzwolenia 4, 35-201 	</td>	<td>
					<a href ="skype:+48695589964?call"></a>	</td>	</tr>
					<tr>	<td>	Krosno	</td>	<td>	ul. Grodzka 45, 38-400	</td>	<td>	
					<a href ="skype:+48885118999?call"></a>	</td>	</tr>
					<tr>	<td>	Mielec	</td>	<td>	ul. Żeromskiego 22, 39-300	</td>	<td>
					<a href ="skype:+48502455822?call"></a>	</td>	</tr>
					<tr>	<td>	Przemyśl	</td>	<td>	ul. Bohaterów Getta 1, 37-700	</td>	<
					<a href ="skype:+48531111957?call"></a>	</td>	</tr>
					<tr>	<td>	Sanok	</td>	<td>	ul. Witkiewicza 3, 38-500 	</td>	<td>	
					<a href ="skype:+48504099973?call"></a>	</td>	</tr>

					</table>
				</div>
				



				<div class="dm_tyt">
					<table>
					<caption>SZPITALE</caption>
					<tr>	<th>MIasto	</th>	<th>Nazwa, Adres	</th>	<th>	Telefon	</th>	<th>	Telefon	</th><th>	Strona informacyjna</th>	</tr>
					
					<tr>	<td>	Brzozów	</td>	<td>	Szpital Specjalistyczny w Brzozowie Podkarpacki Ośrodek Onkologiczny im. Ks. B.Markiewicza , ul. Bielawskiego 18	</td>	<td>	<a href ="skype:+48134309683?call">134309683</a>	</td>	<td>	<a href ="skype:+48134309688?call">134309688</a>	</td>	<td>	<a href="http://www.szpital-brzozow.pl/szpital-specjalistyczny/oddzialy/szpitalny-oddzial-ratunkowy">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Dębica	</td>	<td>	Zespół Opieki Zdrowotnej, ul. Krakowska 91	</td>	<td>	<a href ="skype:+48146808396?call">146808396</a>	</td>	<td>	<a href ="skype:+48146808397?call">146808397</a>	</td>	<td>	<a href="http://zoz-debica.pl/oddzialy/ip.html">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Jasło	</td>	<td>	Szpital Specjalistyczny , ul Lwowska 22	</td>	<td>	<a href ="skype:+4813 44 37 573?call">13 44 37 573</a>	</td>	<td>	<a href ="skype:+4813 44 37 579?call">13 44 37 579</a>	</td>	<td>	<a href="http://www.szpital.jaslo.pl/pl/str/8/szpitalny-oddzial-ratunkowy-wraz-z-izba-przyjec">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Krosno	</td>	<td>	Wojewódzki Szpital Podkarpacki im. Jana Pawła II , ul. Korczyńska 57	</td>	<td>	<a href ="skype:+48134378559?call">134378559</a>	</td>	<td>	<a href ="skype:+48134378543?call">134378543</a>	</td>	<td>	<a href="http://www.krosno.med.pl/index.php?menu=sor">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Lesko	</td>	<td>	Samodzielny Publiczny Zespół Opieki Zdrowotnej -  Szpital Powiatowy,                                                  ul. Kochanowskiego 2, 38-600 Lesko, ul. Kochanowskiego 2	</td>	<td>	<a href ="skype:+4813 469 65 03?call">13 469 65 03</a>	</td>	<td>	<a href ="skype:+4813 460 82 20?call">13 460 82 20</a>	</td>	<td>	<a href="http://spzozlesko.pl/sor">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Leżajsk	</td>	<td>	Samodzielny Publiczny Zespół Opieki Zdrowotnej, ul. Leśna 22	</td>	<td>	<a href ="skype:+48 (17) 24 04 907?call"> (17) 24 04 907</a>	</td>	<td>	<a href ="skype:+48(17) 24 04 905?call">(17) 24 04 905</a>	</td>	<td>	<a href="http://www.spzoz-lezajsk.pl/?c=mdTresc-cmPokaz-247">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Lubaczów	</td>	<td>	Samodzielny Publiczny Zakład Opieki Zdrowotnej, ul. Mickiewicza 168	</td>	<td>	<a href ="skype:+48(16) 632-81-03?call">(16) 632-81-03</a>	</td>	<td>	<a href ="skype:+48 (16) 632-81-81?call"> (16) 632-81-81</a>	</td>	<td>	<a href="http://www.szpital.lubaczowski.com/kontakt.html">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Mielec	</td>	<td>	Szpital Powiatowy im. Edmunda Biernackiego, ul. Żeromskiego 22	</td>	<td>	<a href ="skype:+4817 78 00 117, 114?call">17 78 00 117, 114</a>	</td>	<td>	<a href ="skype:+48 17 78 00 113, 115?call"> 17 78 00 113, 115</a>	</td>	<td>	<a href="http://www.szpital.mielec.pl/oddzialy/6-sor.html">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Przemyśl	</td>	<td>	Szpital Wojewódzki, ul. Monte Cassino 18	</td>	<td>	<a href ="skype:+48 (16) 677 50 19?call"> (16) 677 50 19</a>	</td>	<td>	<a href ="skype:+48 (16) 677 50 24?call"> (16) 677 50 24</a>	</td>	<td>	<a href="http://www.wszp.pl/index.php?option=com_k2&view=item&layout=item&id=4&Itemid=26">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rzeszów	</td>	<td>	Szpital Wojewódzki Nr 2, ul. Lwowska 60	</td>	<td>	<a href ="skype:+48(17) 86-64-940?call">(17) 86-64-940</a>	</td>	<td>	<a href ="skype:+48(17) 86-64-949?call">(17) 86-64-949</a>	</td>	<td>	<a href="http://www.szpital2.rzeszow.pl/oddzialy/szpitalny-oddzial-ratunkowy-rzeszow.html#tel">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Sanok	</td>	<td>	Samodzielny Publiczny Zespół Opieki Zdrowotnej, ul. 800-lecia 26	</td>	<td>	<a href ="skype:+48013 46 56 258?call">013 46 56 258</a>	</td>	<td>	<a href ="skype:+48013 46 56 155?call">013 46 56 155</a>	</td>	<td>	<a href="http://zozsanok.pl/wp/wp-content/uploads/files/oddzialy.pdf">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Stalowa Wola	</td>	<td>	SP ZZOZ - Powiatowy Szpital Specjalistyczny, ul. Staszica 4	</td>	<td>	<a href ="skype:+4815 84 33 365?call">15 84 33 365</a>	</td>	<td>	<a href ="skype:+48158433127?call">158433127</a>	</td>	<td>	<a href="http://www.szpital-stw.com/kontaktszpital">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Tarnobrzeg	</td>	<td>	Wojewódzki Szpital  im. Zofii z Zamoyskich Tarnowskiej, ul. Szpitalna 1	</td>	<td>	<a href ="skype:+48822 16 99?call">822 16 99</a>	</td>	<td>	<a href ="skype:+48812 33 99?call">812 33 99</a>	</td>	<td>	<a href="http://www.szpitaltbg.pl/index.php?option=com_content&view=article&id=81&Itemid=126">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Przeworsk	</td>	<td>	Samodzielny Publiczny Zakład Opieki Zdrowotnej , ul. Szpitalna 16	</td>	<td>	<a href ="skype:+4816 649 16 18?call">16 649 16 18</a>	</td>	<td>	<a href ="skype:+4816 649 15 00?call">16 649 15 00</a>	</td>	<td>	<a href="http://spzoz-przeworsk.home.pl/autoinstalator/wordpress/?page_id=377">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	 Jarosław	</td>	<td>	Centrum Opieki Medycznej w Jarosławiu , ul. 3 Maja 70	</td>	<td>	<a href ="skype:+48621 30 05?call">621 30 05</a>	</td>	<td>	<a href ="skype:+48624 50 16?call">624 50 16</a>	</td>	<td>	<a href="http://www.comjar.pl/new/images/stories/spis_numerow_COM.pdf">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	 Nisko	</td>	<td>	Samodzielny Publiczny Zespół Zakładów Opieki Zdrowotnej , ul. Kościuszki 1	</td>	<td>	<a href ="skype:+4815 / 8416732?call">15 / 8416732</a>	</td>	<td>	<a href ="skype:+4815 / 8416781?call">15 / 8416781</a>	</td>	<td>	<a href="http://www.szpital-nisko.pl/kontakt-spis_telefonow.html">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Kolbuszowa	</td>	<td>	Samodzielny Publiczny Zespół Opieki Zdrowotnej , Grunwaldzka 4	</td>	<td>	<a href ="skype:+4817 2271 222 . 324?call">17 2271 222 . 324</a>	</td>	<td>	<a href ="skype:+48172271322?call">172271322</a>	</td>	<td>	<a href="http://www.szpital.kolbuszowa.pl/?q=izba-przyjec">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rzeszów	</td>	<td>	Wojewódzki Szpital Specjalistyczny im. Fryderyka Chopina w Rzeszowie , ul. Chopina 2	</td>	<td>	<a href ="skype:+4885-338-83?call">85-338-83</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://www.szpital.rzeszow.pl/kontakt/">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Strzyżów	</td>	<td>	Zespół Opieki Zdrowotnej w Strzyżowie , ul. 700 lecia 1	</td>	<td>	<a href ="skype:+4817 276 11 07 . 301?call">17 276 11 07 . 301</a>	</td>	<td>	<a href ="skype:+4817 276 11 07, 302?call">17 276 11 07, 302</a>	</td>	<td>	<a href="http://www.strzyzowski.pl/szpital-powiatowy-430">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Nowa Dęba	</td>	<td>	Samodzielny Publiczny Zespół Zakładów Opieki Zdrowotnej w Nowej Dębie  , ul. M.C.Skłodowskiej 1a	</td>	<td>	<a href ="skype:+48 15 846 26 51 . 135?call"> 15 846 26 51 . 135</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://zoznowadeba.pl/kontakt.html">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Ustrzyki Dolne	</td>	<td>	Samodzielny Publiczny Zespół Opieki Zdrowotnej w Ustrzykach Dolnych , ul. 29 Listopada 57	</td>	<td>	<a href ="skype:+4813 461 18 71?call">13 461 18 71</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://www.spzoz-ustrzyki.pl/index.php?p=2_7_izba-przyj">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Sędziszów Młp.	</td>	<td>	ZOZ Ropczyce - Szpital Powiatowy w Sędziszowie Młp., ul. Wyspiańskiego 14	</td>	<td>	<a href ="skype:+4817 2220 09?call">17 2220 09</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://www.zozropczyce.pl/index.php/szpital-powiatowy/izba-przyjec">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rzeszów	</td>	<td>	Samodzielny Publiczny Zakład Opieki Zdrowotnej MSW, ul. Krakowska 16            	</td>	<td>	<a href ="skype:+4817 86 43 221?call">17 86 43 221</a>	</td>	<td>	<a href ="skype:+4817 86 43 354?call">17 86 43 354</a>	</td>	<td>	<a href="http://www.szpitalmsw.rzeszow.pl/szpital/izba-przyjec-szpitala">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rzeszów	</td>	<td>	SP ZOZ Nr 1- Szpital Miejski  im. Jana Pawła II, ul. Rycerska 4	</td>	<td>	<a href ="skype:+48(017) 861-10-31. 403-404?call">(017) 861-10-31. 403-404</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://www.spzoz1.rzeszow.pl/telefony.html#k5">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rzeszów	</td>	<td>	 Podkarpackie Centrum Chorób Płuc , ul. Rycerska 2	</td>	<td>	<a href ="skype:+48 (017) 86-11-421.385?call"> (017) 86-11-421.385</a>	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	<a href="http://www.szgichp.pl/index.php?url=kontakt">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Rudna Mała	</td>	<td>	Nowe Techniki Medyczne Szpital Specjalistyczny im. Św. Rodziny Sp. z o.o., 600	</td>	<td>	<a href ="skype:+4817 8 666 700?call">17 8 666 700</a>	</td>	<td>	<a href ="skype:+48503193800?call">503193800</a>	</td>	<td>	<a href="http://www.klinika-rzeszow.pl/kontakt">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	Łańcut	</td>	<td>	Centrum Medyczne Łańcut, ul. Paderewskiego 5	</td>	<td>	<a href ="skype:+4817 224 02 36?call">17 224 02 36</a>	</td>	<td>	<a href ="skype:+4817 224 01 41?call">17 224 01 41</a>	</td>	<td>	<a href="http://www.cm-lancut.pl/asp/pl_start.asp?typ=14&menu=12&strona=1">strona szpitala</a>	</td>	</tr>
					<tr>	<td>	23-300 Janów Lubelski	</td>	<td>	,  149 ul. Zamoyskiego	</td>	<td>	<a href ="skype:+4815 843 66 45?call">15 843 66 45</a>	</td>	<td>	<a href ="skype:+4815 843 66 59?call">15 843 66 59</a>	</td>	<td>	<a href="http://www.szpitaljanowlubelski.pl/index.php/oddziay/272-sor">strona szpitala</a>	</td>	</tr>

					
					</table>
				</div>
				
				
				<div class="dm_tyt">
					<table>
					<caption>LOTNICZE POGOTOWIE RATUNKOWE <a href="http://www.lpr.com.pl/pl/strona-glowna/">Strona LPR</a></caption>
					<tr>	<th>	Filia/Odział	</th>	<th>	Adres	</th>	<th>	Kierownik</th>	<th>	Telefon</th>	</tr>
					
					<tr>	<td>	Filia Białystok	</td>	<td>	ul. Ciołkowskiego 2, 15-602 Białystok	</td>	<td>	pil. Stanisław Iwaszko	</td>	<td>	<a href ="skype:+48509142161?call">509142161</a>	</td>	</tr>
					<tr>	<td>	Filia Bydgoszcz	</td>	<td>	ul. Paderewskiego 1, 86-005 Białe Błota	</td>	<td>	rat. med. Tomasz Magdziak	</td>	<td>	<a href ="skype:+48509142211?call">509142211</a>	</td>	</tr>
					<tr>	<td>	Oddział Gdańsk	</td>	<td>	ul. Szybowcowa 37, 80-298 Gdańsk	</td>	<td>	rat. med. Rafał Szczepański	</td>	<td>	<a href ="skype:+48605885375?call">605885375</a>	</td>	</tr>
					<tr>	<td>	Filia Gliwice	</td>	<td>	ul. Pilotów, 44-100 Gliwice	</td>	<td>	rat. med. Grzegorz Stępień	</td>	<td>	<a href ="skype:+48509142190?call">509142190</a>	</td>	</tr>
					<tr>	<td>	Filia Gorzów Wielkopolski	</td>	<td>	ul. Jana Dekerta 4, 66-400 Gorzów Wielkopolski	</td>	<td>	rat. med. Robert Hełminiak	</td>	<td>	<a href ="skype:+48785662310?call">785662310</a>	</td>	</tr>
					<tr>	<td>	Filii Kielce	</td>	<td>	ul. Jana Pawła II 9a, 26-001 Masłów Pierwszy	</td>	<td>	rat. med. Marek Cuprian	</td>	<td>	<a href ="skype:+48509142176?call">509142176</a>	</td>	</tr>
					<tr>	<td>	Filia Koszalin	</td>	<td>	BAZA SEZONOWA (od 1.06 do 5.09), 76-042 Rosnowo	</td>	<td>	rat. med. Paweł Niemiro	</td>	<td>	<a href ="skype:+48665011496?call">665011496</a>	</td>	</tr>
					<tr>	<td>	Oddział Kraków	</td>	<td>	ul. kpt. M. Medweckiego 1A, 32-083 Balice	</td>	<td>	piel. Marek Maślanka	</td>	<td>	<a href ="skype:+48605885367?call">605885367</a>	</td>	</tr>
					<tr>	<td>	Filia Lublin	</td>	<td>	Lotnisko-Radawiec, 21-030 Motycz	</td>	<td>	pil. Marek Rachubik	</td>	<td>	<a href ="skype:+48509142194?call">509142194</a>	</td>	</tr>
					<tr>	<td>	Filia Łódź	</td>	<td>	ul. Gen. Maczka 36 c, 94-328 Łódź	</td>	<td>	pil. Sławomir Lach	</td>	<td>	<a href ="skype:+48509142185?call">509142185</a>	</td>	</tr>
					<tr>	<td>	Filia Olsztyn	</td>	<td>	ul. Sielska 34 A, 10-802 Olsztyn 	</td>	<td>	piel. Elżbieta Kołodziejczyk	</td>	<td>	<a href ="skype:+48509142201?call">509142201</a>	</td>	</tr>
					<tr>	<td>	Filia Opole	</td>	<td>	ul. Lotniskowa 25, 46-070 Komprachcice	</td>	<td>	rat. med. Mateusz Rak	</td>	<td>	<a href ="skype:+48721230946?call">721230946</a>	</td>	</tr>
					<tr>	<td>	Filia Ostrów Wielkopolski	</td>	<td>	Michałków 1b, 63-410 Ostrów Wielkopolski	</td>	<td>	rat. med. Tomasz Golczyk	</td>	<td>	<a href ="skype:+48721230869?call">721230869</a>	</td>	</tr>
					<tr>	<td>	Filia Płock	</td>	<td>	ul. Bielska 60, 09-400 Płock 	</td>	<td>	rat. med. Michał Dąbrowski	</td>	<td>	<a href ="skype:+48509142245?call">509142245</a>	</td>	</tr>
					<tr>	<td>	Filia Poznań	</td>	<td>	ul. Bukowska 283, 60-189 Poznań 	</td>	<td>	piel. Dariusz Kowalczyk	</td>	<td>	<a href ="skype:+48509142177?call">509142177</a>	</td>	</tr>
					<tr>	<td>	Filia Sanok	</td>	<td>	ul. Biała Góra, 38-500 Sanok  	</td>	<td>	piel. Stefan Zubel	</td>	<td>	<a href ="skype:+48509142180?call">509142180</a>	</td>	</tr>
					<tr>	<td>	Filia Sokołów Podlaski	</td>	<td>	Al. 550-lecia 9, 08-300 Sokołów Podlaski	</td>	<td>	rat. med. Paweł Świniarski	</td>	<td>	<a href ="skype:+48721231009?call">721231009</a>	</td>	</tr>
					<tr>	<td>	Filia Suwałki	</td>	<td>	 ul. Wojczyńskiego 2a, 16-400 Suwałki,	</td>	<td>	rat.med. Zbigniew Dąbrowski	</td>	<td>	<a href ="skype:+48509142210?call">509142210</a>	</td>	</tr>
					<tr>	<td>	Oddział Szczecin	</td>	<td>	Lotnisko Szczecin-Goleniów, 72-100 Goleniów	</td>	<td>	rat. med. Rafał Pajek	</td>	<td>	<a href ="skype:+48665012270?call">665012270</a>	</td>	</tr>
					<tr>	<td>	Oddział Warszawa	</td>	<td>	ul. Księżycowa 5, 01-934 Warszawa	</td>	<td>	rat. med. Łukasz Chalupka	</td>	<td>	<a href ="skype:+48665010470?call">665010470</a>	</td>	</tr>
					<tr>	<td>	Samolotowy Zespół Transportowy	</td>	<td>	ul. Żwirki i Wigury, 00-909 Warszawa	</td>	<td>	mgr inż. pil. Mariusz Kozieł	</td>	<td>	<a href ="skype:+48665011 664?call">665011 664</a>	</td>	</tr>
					<tr>	<td>	Filia Wrocław	</td>	<td>	ul. Skarżyńskiego 19, 54-530 Wrocław	</td>	<td>	piel. Grzegorz Frańczak	</td>	<td>	<a href ="skype:+48509142196?call">509142196</a>	</td>	</tr>
					<tr>	<td>	Filia Zielona Góra	</td>	<td>	ul. Skokowa 17, 66-015 Zielona Góra	</td>	<td>	pil. Paweł Gątkowski	</td>	<td>	<a href ="skype:+48509142178?call">509142178</a>	</td>	</tr>

					
					
					</table>
				</div>

					</center>
			</div>
			<div class="panel" id="panel4">
			
			
			
				<div>
					<table><tr><td><a href="ustawa_prm.pdf">Ustawa o Państwowym Ratownictwie Medycznym</a></td></tr></table>
					<table><tr><td><a href="plan_prm.pdf">Plan działania systemu Pańswowe Ratownictwo Medyczne dla województwa podkarpackiego</a></td></tr></table>
					<table><tr><td><a href="rozp_dysp.pdf">Rozporządzenie Ministra Zdrowia z dnia 10 stycznia 2014 roku procedur przyjmowania wezwań przez dyspozytora medycznego i dysponowania zespołami ratownictwa medycznego</a></td></tr></table>
					<table><tr><td><a href="projekt.pdf">Projekt Ustawy o PRM</a></td></tr></table>
				</div>


			</div>
			<div class="panel" id="panel5">5bla bla bla </div>
		</div>



	</div> 
</div>

</body>



</html>
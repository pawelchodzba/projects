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
	<link rel="stylesheet" href="style_info.css" type= "text/css"/>
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
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
	Bezdomni Telefon: 987
	</div>
	<div class= "tabbePanels">
	<ul class="tabs">
			<li><a href="#panel1">Wykaz miejsc noclegowych</a></li>
			<li><a href="#panel2">Postępowanie</a></li>
		
	</ul>
	</div>
			<div class="panel" id="panel1">
			
			
			
						<table>
						<tr>											
						<th>telefon</a>	</th>		<th>Placówka		</th>	<th>Liczba miejsc</th>
																
					</tr>
						<tr>											
						<td>	<a href ="skype:+48146704471?call">146704471</a>	</td>		<td>	39-200<strong> Dębica </strong>ul. Słoneczna 1 		</td>	<td>	30 stałe/do 40	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48503615227?call">503615227</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta<strong> Dębica</strong>- Schronisko dla bezdomnych kobiet i mężczyzn 39-200 Dębica ul. Św. Brata Alberta 2		</td>	<td>	40 stałe/do 44 (dla mężczyzn) 10 stałe/do 13 (dla kobiet)	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166726081?call">166726081</a>	</td>		<td>	Stowarzyszenie Pomagamy Będącym w Potrzebie - Dom Rodzinny 37-740<strong> Bircza </strong>Kotów 11		</td>	<td>	50 stałych	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48158362151?call">158362151</a>	</td>		<td>	Towarzystwo Pomocy im. Sw. Brata Alberta Gorzyce - schronisko dla kobiet 39-432 <strong>Gorzyce </strong>ul. Sandomierska 84a		</td>	<td>	16 stałe/do 20	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166213576?call">166213576</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta Jarosław- schronisko dla kobiet 37-500 <strong>Jarosław</strong>,ul. Jasna 4		</td>	<td>	35 stałych7do 37	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166214476?call">166214476</a>	</td>		<td>	Fundacja Pomocy Młodzieży im. Jana Pawła II „WZRASTANIE"- schronisko w Jarosławiu dla mężczyzn 37-500<strong> Jarosław</strong> ul. Sanowa 11		</td>	<td>	88 stałych	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48134480240?call">134480240</a>	</td>		<td>	Rzeszowskie Towarzystwo Pomocy im Sw. Brata Alberta - schronisko dla mężczyzn w Jaśle 38-200 <strong>Jasło</strong>, ul. M. Konopnickiej 86		</td>	<td>	40 stałe/ do 45	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48134368390?call">134368390</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta Krosno - schronisko dla mężczyzn 38-400 <strong>Krosno</strong>, ul. Wojska Polskiego 26 		</td>	<td>	15 stałe/ do 25	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48172402401?call">172402401</a>	</td>		<td>	CARITAS Archidiecezji Przemyskiej Oddział LEŻAJSK - noclegownia dla mężczyzn 37-300<strong> Leżajsk </strong>ul. Jarosławska 4		</td>	<td>	28 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48175862252?call">175862252</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta MIELEC - schronisko dla mężczyzn 39-300 <strong>Mielec</strong>, ul. Sandomierska 19		</td>	<td>	21 stałych/ do 31	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166770762?call">166770762</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta Przemyśl - schronisko dla mężczyzn 37-700<strong> Przemyśl,</strong> ul. F. Focha 12		</td>	<td>	70 stałych/ doi 10	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166700093?call">166700093</a>	</td>		<td>	CARITAS Archidiecezji Przemyskiej Dom Matki i Dziecka 37-700<strong> Przemyśl</strong>, ul. Prądzyńskiego 8		</td>	<td>	20 stałe/ do 30	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48166709060?call">166709060</a>	</td>		<td>	CARITAS Archidiecezji Przemyskiej Noclegownia dla kobiet 37-700 <strong>Przemyśl</strong> ul. Kapitulna 1		</td>	<td>	40 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48605277527?call">605277527</a>	</td>		<td>	Schronisko dla Bezdomnych Kobiet Fundacja Pomocy Młodzieży im. Jana Pawła II „Wzrastanie" 37-200 <strong>Przeworsk</strong> ul. Kasztanowa 1		</td>	<td>	12 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48156492186?call">156492186</a>	</td>		<td>	Caritas Diecezji Sandomierskiej - schronisko dla kobiet w Rudniku n/Sanem 37-420<strong> Rudnik n/Sanem </strong>ul. Rzeszowska 35		</td>	<td>	16 stałe/ do 20	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48178521571?call">178521571wew. 26</a>	</td>		<td>	Rzeszowskie Towarzystwo Pomocy im Sw. Brata Alberta - schronisko dla mężczyzn w Rzeszowie 35-006 <strong>Rzeszów</strong>, ul. Styki 21		</td>	<td>	80 stałe/do 120	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48?call"></a>	</td>		<td>	Hostel „Boży Dar" dla bezdomnych mężczyzn Rzeszowskie Towarzystwo Pomocy im. Św. Brata Alberta 35-595<strong> Rzeszów </strong>ul. Krakowska 64 c		</td>	<td>	9 stałe/ do 20	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48178590329?call">178590329</a>	</td>		<td>	Stowarzyszenie „Emaus- Rzeszów" 35-005 <strong>Rzeszów</strong> ul. Batorego 22 		</td>	<td>	8 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48178623091?call">178623091 wew.25</a>	</td>		<td>	Rzeszowskie Towarzystwo Pomocy im Sw. Brata Alberta - schronisko dla kobiet w Racławówce 36-047<strong> Racławówka </strong>132		</td>	<td>	38 stałe/ do 50	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48134642895?call">134642895</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta SANOK - Dom Inwalidy Bezdomnego 38-500<strong> Sanok</strong> ul. Przemyska 24		</td>	<td>	100 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48158421725?call">158421725</a>	</td>		<td>	Towarzystwo Pomocy im Sw. Brata Alberta Stalowa Wola- schronisko dla mężczyzn 37-450<strong> Stalowa Wola</strong>, ul. Jaśminowa 2		</td>	<td>	18 stałe	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48158231767?call">158231767</a>	</td>		<td>	Parafia Rzymsko-Katolicka p.w. Matki Bożej Nieustającej Pomocy w Tarnobrzegu - noclegownia dla mężczyzn 39-400 <strong>Tarnobrzeg</strong> ul. Konstytucji 3 Maja 11		</td>	<td>	75 stałe/ do 90	</td>
																
					</tr>											
					<tr>											
						<td>	<a href ="skype:+48134408494?call">134408494</a>	</td>		<td>	Filia Fundacji „Latarnia" Chrześcijański Dom „Przystań" Wola Piotrowa 34 38-505<strong> Bukowsko</strong>		</td>	<td>	16 stałych	</td>

						
						</table>
			
			
			
			
			
			</div>
	
	
	
	<div class="panel" id="panel2">
	
			<br/>
		<div id="tresc">
			<p>W Wojewódzkim Centrum Zarządzania Kryzysowego (WCZK) Podkarpackiego Urzędu
			Wojewódzkiego w Rzeszowie działa bezpłatna, całodobowa infolinia 987.</p>
			<br/>
			<p>Pod tym numerem można uzyskać informacje o placówkach przygotowanych do przyjęcia osób w sezonie jesienno-zimowym oraz zgłosić potrzebę udzielenia pomocy osobie zagrożonej na terenie województwa podkarpackiego.</p>
			<p>W związku z powyższym operator numerów alarmowych w Centrum Powiadamiania Ratunkowego w Rzeszowie po odebraniu zgłoszenia na numer alarmowy 112 od osoby potrzebującej pomocy lub zgłaszającej potrzebę udzielania pomocy osobie zagrożonej upewnia się z jakiego województwa dzwoni.
			Po otrzymaniu informacji, że osoba dzwoni z terenu województwa podkarpackiego operator numerów alarmowych przełącza osobę dzwoniącą na numer 987. Operator numerów alarmowych po połączeniu się z dyżurnym WCZK informuje o przełączeniu rozmowy.</p>
			W przypadku, kiedy dyżurny z Wojewódzkiego Centrum Zarządzania Kryzysowego nie odbiera połączenia, operator numerów alarmowych, który odebrał zgłoszenie wraca do rozmowy telefonicznej z osobą celem udzielenia jej informacji o placówce, gdzie może uzyskać pomocy, zadając pytanie: z jakiego powiatu dzwoni, miejscowość? W zaistniałej sytuacji operator numerów alarmowych udziela informacji, zgodnie z stanem wolnych oraz zajętych miejsc noclegowych w Schroniskach/Noclegowniach - w załączeniu.<br/>
			
			Wojewódzkie Centrum Zarządzania Kryzysowego po otrzymaniu z Wydziału Polityki Społecznej PU W w Rzeszowie aktualnego stanu wolnych oraz zajętych miejsc noclegowych w Schroniskach/Noclegowniach przekazuje do koordynatora zmiany w Centrum Powiadamiania Ratunkowego w Rzeszowie. Następnie koordynator zmiany aktualny stan wolnych oraz zajętych miejsc noclegowych przekazuje na każde stanowisko operatorskie.<br/>
			
			Mając na uwadze, że do Centrum Powiadamiania Ratunkowego w Rzeszowie wpływają również zgłoszenia z innych województw, operator numerów alarmowych po upewnieniu się, że osoba dzwoni z innego województwa przekazuje jej bezpłatny numer infolinii do instytucji, która udzieli jej wszelkich informacji o placówkach udzielających wsparcia osobom potrzebującym w okresie zimowym 2015/2016 z odpowiedniego województwa (wykaz bezpłatnych infolinii dla bezdomnych w poszczególnych województwach na sezon zimowy 2015/2016* - w załączeniu). Wykaz jest w trakcie aktualizacji przez Ministerstwo Rodziny, Pracy i Polityki Społecznej.
			 <br/>
				Uwagi:
				*Wykaz pozyskany ze strony internetowej Ministerstwa Rodziny, Pracy i Polityki Społecznej.


	
	
	
		</div>
	
	</div>	
</div>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
	
	</html>
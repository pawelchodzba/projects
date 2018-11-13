<!-- <?php
// session_start();
// if(!isset($_SESSION['zalogowany']))
// {
// 	header('Location: ../index.php');
// 	exit();
// }

?> -->


<!DOCTYP html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<tilte></tilte>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<link rel="stylesheet" href="aaa.css" type= "text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCfVuTpUBK6UMvaVSbB2NHO5v3JZcVfkc4&sensor=false" type="text/javascript"></script>
	<script src="lodash.min.js"></script>	
	<script src="przelaczka.js" type="text/javascript"></script> 
	<script src="godzina_mine.js" type="text/javascript"></script> 
	<script src="godzina_cpr.js" type="text/javascript"></script> 
	<script src="godzina_psp.js" type="text/javascript"></script>
	<script src="godzina_prm.js" type="text/javascript"></script>
	<script src="datateraz.js" type="text/javascript"></script>
	<script src="new_map.js" type="text/javascript"></script>
	<script src="prm/sdm_mapa_kategorie.js" type="text/javascript"></script>
<script type="text/javascript" src="info/pt/jquery-3.2.1.min.js"></script>
	
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
	
		
			$('.tabs_drogi a').click(function(){
		$this=$(this);
		$('.panel_drogi').hide();
		$('.tabs_drogi a.active').removeClass('active');
		$this.addClass('active').blur();
		var panel1 = $this.attr('href');
		$(panel1).fadeIn(250);
		return false;
		});
		$('.tabs_drogi li:first a').click();
		
		
		
		var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	
	
	
		
		$('#wylacz').hide();
		
		});
		</script>
		
	
		 </head>

<body onload="mapaStart();  zawartoscOkna();  odswierzanie(); odswierzanie_prm(); odswierzanie_cpr();odswierzanie_psp();teraz(); " >
		
<!-- <a href="../wylog.php">WYLOGUJ</a>	</br>		
<a href="../index.php">MENU GŁÓWNE</a>			 -->
		
		<div id="ramka_map">	
			<input type="button" id="prm_map"value="PRM">
			<input type="button" id="psp_map"value="PSP">
			<input type="button" id="pol_map"value="Policja">
			<input type="button" id="map_start"value="Googlemaps"onclick="mapaStart()">
			
			<script>
$('#psp_map').click(function(){


$('#mapka').load('powiaty_psp.php').css('height','600px');
$('#ramka1').hide();
$('#ramka2').hide();
});


$('#pol_map').click(function(){


$('#mapka').load('powiaty_pol.php').css('height','600px');
$('#ramka1').hide();
$('#ramka2').hide();
});

$('#prm_map').click(function(){


$('#mapka').load('powiaty_prm.php').css('height','600px');
$('#ramka1').hide();
$('#ramka2').hide();
});


$('#map_start').click(function(){
$('#mapka').css('height','522px');	
$('#ramka1').show();
$('#ramka2').show();
});

</script>
		
		
		
		
		</div>			
					<div class="nav" id="blok"><p>vrrfrfrfrf </p></div>	
				
		
		
<div id="ramka">



	<div class="glowa"> 
			
			 Platforma informacyjna CPR w Rzeszowie 
			
	</div>
		
	<div class="glowa">
			<div id="data">----------</div>
			<div id="godzina"> ------------</div>
			
	</div>
		<!--<input type="button"  value="Pełny ekran"  onclick="window.open('multi_mapa.php', 'mapa', 'menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,fullscreen=no,channelmode=no,width=1366,height=768,left=0,top=0')" />-->
	
		<div style= "clear: both;"></div>

	<div class="menu">
	
		<a  href="cpr/cpr.php" target= "_blanck" >
			<div class="cpr">112<br/><img width="95" height="85" src= "cpr.png" style="margin-top:10px;"/>
				<div class ="content_sluzba">
					<div class ="zmiana_za">zmiana za:</div>
					<div id= "czas_cpr" class="odliczanie" >----</div>
					<div id="form_cpr">
						<form>
							<button class="plus" id="usun_cpr"  type="button">X</button>
						</form>
					</div>
				</div>
				<div style= "clear: both;"></div>
				<div id="cpr_"></div>
			</div>
		</a>  

		
		<a  href="prm/prm.php" target= "_blanck" >
			<div class="prm" style="background-color:">999<br/><img width="95" height="85" src= "prm.png" style="margin-top:10px;"/>
				<div class ="content_sluzba">
					<div class ="zmiana_za">zmiana za:</div>
					<div id= "czas_prm" class="odliczanie" >---</div>
					<div id="form_prm">
						<form>
							<button class="plus" id="usun_prm"  type="button">X</button>
						</form>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div id="prm_"></div>
			</div>
		</a>
		
		<div style="clear:both;"></div>
		
		<a  href="psp/psp.php" target= "_blanck" >
			<div class="psp" >998<br/><img width="95" height="85" src= "psp.png" style="margin-top:10px;"/>
				<div class ="content_sluzba">
					<div class ="zmiana_za">zmiana za:</div>
					<div id= "czas_psp" class="odliczanie" >---</div>
					<div id="form_psp">
					<form>
						<button class="plus" id="usun_psp"  type="buttom">X</button>
					</form>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div id="psp_"></div>
			</div>
		</a>
			
			
		<a  href="policja/policja.php"  target= "_blanck" >
			<div class="policja" style="background-color:">997<br/><img width="95" height="85" src= "policja.png" style="margin-top:10px;"/>
				<div class ="content_sluzba">
					<div class ="zmiana_za"></div>
					<div id= "czas_pol" class="odliczanie" ></div>
					<div id="form_pol">
						<form>
							<button class="plus" id="usun_pol"  type="button">X</button>
						</form>
					</div>
				</div>
				<div style= "clear: both;"></div>
				<div id="pol_"></div>
			</div>
		</a>
		
	<div style= "clear: both;"></div>
	
		<a  href="pozostale/pog_energetyczne.php" target= "_blanck" ><div class="inne_sluzby">pogotowie energetyczne</div></a>
		<a  href="pozostale/pog_gazowe.php" target= "_blanck" ><div class="inne_sluzby">Pogotowie gazowe</div></a>
		<a  href="pozostale/pog_wod_kan.php" target= "_blanck"><div class="inne_sluzby">Pogotowie Wodno Kan.</div>
		<a  href="pozostale/wopr.php"  target= "_blanck"><div class="inne_sluzby">WOPR</div></a>
		<a  href="pozostale/gopr.php" target= "_blanck"><div class="inne_sluzby">GOPR</div></a>
		<!--<a  href="pozostale/pck.php" target= "_blanck" ><div class="inne_sluzby">PCK</div></a>
		<a  href="pozostale/lpr.php" target= "_blanck" ><div class="inne_sluzby">LPR</div></a>
		<a  href="pozostale/wczk.php"  target= "_blanck"><div class="inne_sluzby">WCZK</div></a>
		<a  href="pozostale/wojsko.php" target= "_blanck" ><div class="inne_sluzby">Wojsko</div></a>!-->
		<a  href="pozostale/straz_miejska.php" target= "_blanck" ><div class="inne_sluzby">Straż Miejska</div></a>
	
	
	</div>	
	<div class="menu">
	<div id="multi_mapa">nowe okno mapy</div>
		<div class="mapka"
		id="mapka" >   
		<!-- tu  mapa --> 
		</div>
	</div>  
	<script>
	var newMapa= document.getElementById('multi_mapa');
	newMapa.addEventListener('click',function(){
		
		window.open('multi_mapa.php');
	});
	</script>
	
	
	
	
	
	<div id="ramka1">
	
		<div class= "tabbePanels">
				<ul class="tabs">
					 <div class="multi_guzik"> <input type="checkbox" id="multi_prm" onclick="przelacz_prm()"/></div>
					<li><a href="#panel1">PRM</a></li>
					 <div class="multi_guzik"> <input type="checkbox" id="multi_psp" onclick="przelacz_psp()"/></div>
					<li><a href="#panel2">Straż Pożarna</a></li>
					 <div class="multi_guzik"> <input type="checkbox" id="multi_pol" onclick="przelacz_pol()"/></div>
					<li><a href="#panel3">Policja</a></li>
					
					<li><a href="#panel4">CPR</a></li>
					
				</ul>

			<div class="panelContainer">
				<div class="panel" id="panel1">     

					<div id="prmy" class="menu_mapy">
							
						<ol id="menu">
							<li class="dol"><label><input id="zrm" type="checkbox" name="checkbox" onclick="przerysuj('zrm','zrm')" />Zespoły Rat.</label>
							  <ul>
								<li><label><input   id="kat1" type="checkbox"name="checkbox" onclick="przerysuj('kat1','specjalistyczny')" />specjalistyczny</li></label>
								<li><label><input   id="kat4" type="checkbox"name="checkbox" onclick="przerysuj('kat4','podstawowy')" />podstawowy</li></label>
								<li><label><input   id="kat5" type="checkbox"name="checkbox" onclick="przerysuj('kat5','zapasowy')" />zapasowy</li></label>
							  </ul>
							</li>

							<li class="dol"><label><input  id="szpital"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('szpital','szpital')" />Szpitale</label>
							  <ul>
								<li><label><input id="kat3"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('kat3','sor')" /> SOR</li></label>
								<li><label><input id="kat2"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('kat2','ip')" /> IP</li></label>
							  </ul>
							</li>

							<li class="dol"><label><input  id="siedziba_dm"name="checkbox_siedziba_dm" type="checkbox" onclick="przerysuj2d('siedziba_dm','dm')" /> Dysp.Med.</label>
								<ul>
									<li class="prawo"><label><input  id="wszystkie_dm" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('wszystkie_dm','wszystkie_dm')" />Podkarpacie</label>
										<ol>
											<li><label><input  id="rzeszow" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('rzeszow','szary')" />Rzeszów</li></label>
											<li><label><input  id="krosno" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('krosno','zolty')" />Krosno</li></label>
											<li><label><input  id="mielec"checked="checked"  type="checkbox" name="checkbox_dm" onclick="przerysuj2('mielec','czerwony')" />Mielec</li></label>
											<li><label><input  id="sanok" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('sanok','zielone')" />Sanok</li></label>
											<li><label><input  id="przemysl" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('przemysl','niebieski')" /> Przemyśl</li></label>
										</ol>
									</li>
								</ul>
							</li>

							<li class="dol_1">   LPR
							
							
							<ul>	
								<li><label><input   id="lpr"type="checkbox" name="checkbox_lpr" onclick="przerysuj21('lpr','lpr')" />Bazy</li></label>	
							
									<li class="prawo"><label><input id="ladowiska"name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('ladowiska','ladowiska')" />Lądowiska</label>
									  <ol>
											<li><label><input id="szpital24" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('szpital24','noc')" />Całodobowe</li></label>
											<li><label><input id="szpital12" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('szpital12','dzien')" />Dzienne</li></label>
											<li><label><input id="przygodne" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('przygodne','gmin')" />Gminne</li></label>
									  </ol>
									</li>
									 
									
								<li class="prawo"><label><input  id="hems_s"name="checkbox_lpr_s" type="checkbox" onclick="przerysuj3_zasieg60('hems_s','hems_s')" />Sanok</label>
									<ol>
										<li><label><input id="sanok60"name="checkbox_lpr_s" type="checkbox" onclick="przerysuj3_zasieg60('sanok60','zasieg60')" />do 3min</li></label>
										<li><label><input id="sanok130"name="checkbox_lpr_s" type ="checkbox" onclick="przerysuj3_zasieg60('sanok130','zasieg130')" />do 6min</li></label>
									 </ol>
								</li>
									
									<li class="prawo"><label><input id="hems_k"name="checkbox_lpr_k" type="checkbox" onclick="przerysuj3_krakow('hems_k','hems_k')" />Krakow</label>
										<ol>
											<li><label><input id="hems_k_60"name="checkbox_lpr_k" type="checkbox" onclick="przerysuj3_krakow('hems_k_60','zasieg60')" />do 3min</li></label>
											<li><label><input id="hems_k_130"name="checkbox_lpr_k" type ="checkbox" onclick="przerysuj3_krakow('hems_k_130','zasieg130')" />do 6min</li></label>
										</ol>
									</li>
																	
									<li class="prawo"><label><input id="hems_kiel"name="checkbox_lpr_kiel" type="checkbox" onclick="przerysuj3_kielce('hems_kiel','hems_kiel')" />Kielce</label>
										<ol>
											<li><label><input id="hems_kiel_60"name="checkbox_lpr_kiel" type="checkbox" onclick="przerysuj3_kielce('hems_kiel_60','zasieg60')" />do 3min</li></label>
											<li><label><input id="hems_kiel_130"name="checkbox_lpr_kiel" type ="checkbox" onclick="przerysuj3_kielce('hems_kiel_130','zasieg130')" />do 6min</li></label>
										</ol>
									</li>
									
									<li class="prawo"><label><input id="hems_l"name="checkbox_lpr_l" type="checkbox" onclick="przerysuj3_lublin('hems_l','hems_l')" />Lublin</label>
										<ol>
											<li><label><input id="hems_l_60"name="checkbox_lpr_l" type="checkbox" onclick="przerysuj3_lublin('hems_l_60','zasieg60')" />do 3min</li></label>
											<li><label><input id="hems_l_130"name="checkbox_lpr_l" type ="checkbox" onclick="przerysuj3_lublin('hems_l_130','zasieg130')" />do 6min</li></label>
										</ol>
									</li>
								</ul>
							</li>
							
						</ol>
					</div>
				</div>
				
				<div class="panel" id="panel2">

					<div id="pspy" class="menu_mapy">
						<ol id="menu_psp">
							<li class="dol"><label><input id="komenda_psp" type="checkbox" name="checkbox_psp" onclick="przerysuj8('komenda_psp','komenda_psp')" />Komendy</label>
							  <ul>
									<li><label><input   id="woj_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('woj_psp','kws_psp')" />Wojewódzka</li></label>
									<li><label><input   id="miej_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('miej_psp','kms_psp')" />Miejska</li></label>
									<li><label><input   id="pow_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('pow_psp','kps_psp')" />Powiatowa</li></label>
							  </ul>
							</li>
							<li class="dol"><label><input   id="jrg"type="checkbox" onclick="przerysuj9('jrg','jrg')" />JRG</label>
								<ul>
									<li><label><input   id="post_psp" type="checkbox" onclick="przerysuj10('post_psp','post_psp')" />Posterunek PSP</li></label>
									<li><label><input   id="lotnis_psp" type="checkbox" onclick="przerysuj11('lotnis_psp','lotnis_psp')" />Lotniskowa SP</li></label>
								</ul>
							</li>
							<li class="dol"><label><input  id="specjalist"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('specjalist','specjalist')" /> Grupy spec.</label>
								<ul>
									<li><label><input  id="technicze"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('technicze','tech')" /> Techniczna</li></label>
									<li><label><input  id="wysoko"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('wysoko','wys')" /> Wysokościowa</li></label>
									<li><label><input  id="nurkowe"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('nurkowe','nur')" /> Nurkowa</li></label>
									<li><label><input  id="poszuk"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('poszuk','posz')" /> Poszukiwawcza</li></label>
									<li><label><input  id="chem"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('chem','chem')" /> Chemiczna</li></label>
								</ul>
							</li>
							<li class="dol"><label><input  id="osp"name="checkbox_osp" type="checkbox" onclick="przerysuj14('osp','osp')" /> OSP*</label>
								<ul>
									<li><label><input  id="ksrg"name="checkbox_osp" type="checkbox" onclick="przerysuj14('ksrg','KSRG')" /> KSRG</li></label>
									<li><label><input  id="pozos"name="checkbox_osp" type="checkbox" onclick="przerysuj14('pozos','pozos')" />Pozostałe</li></label>
								</ul>
							</li>	
						</ol>
					</div>				
				</div>
				
				<div class="panel" id="panel3">
					<div id="poly" class="menu_mapy">
						<ol id="menu_pol">
							<li class="dol"><label>	<input id="komenda" type="checkbox" name="checkbox_kom" onclick="przerysuj4('komenda','komenda')" />Komendy</label>
							  <ul>
									<li><label><input   id="woj" type="checkbox"name="checkbox_kom" onclick="przerysuj4('woj','kwp')" />Wojewódzka</li></label>
									<li><label><input   id="miej" type="checkbox"name="checkbox_kom" onclick="przerysuj4('miej','kmp')" />Miejska</li></label>
									<li><label><input   id="pow" type="checkbox"name="checkbox_kom" onclick="przerysuj4('pow','kpp')" />Powiatowa</li></label>
							  </ul>
							</li>
									<li><label><input   id="komis"type="checkbox" onclick="przerysuj5('komis','komis')" />Komisariaty</li></label>
									<li><label><input  id="post"type="checkbox" onclick="przerysuj6('post','post')" /> Posterunki</li></label>
									<li><label><input  id="inne" type="checkbox" onclick="przerysuj7('inne','inne')" /> Pozostałe</li></label>
						</ol>
					</div>
				</div>
				
				<div class="panel"id="panel4">
					<div class="menu_mapy">
					<ol id="menu_cpr" >
					<li><label><input   id="cpr_i" type="checkbox"name="checkbox_cpr" onclick="przerysuj20('cpr_i','cpr')" />Centrum Powiadamiania Ratunkowego</li></label>
					</ol>
					</div>
				</div>
				
			</div>
		</div>	
	</div>
	
	
	<div id="ramka2">
	
		<div class= "tabbePanels_2">
				<ul class="tabs_drogi">
					 <div class="multi_guzik">   <input type="checkbox" id="multi_dk" onclick="przelacz_dk()"/></div>
					  <li><a href="#drogi">Drogi</a></li>             
					 <div class="multi_guzik"><input type="checkbox" id="multi_pt" onclick="przelacz_pt()"/></div>  
					 <li><a href="#granice">Podział terytorialny</a></li>	 
				</ul>

			<div class="panelContainer">
				<div class="panel_drogi" id="drogi">     

					<div  id="dky"class="menu_mapy">
							
						<ol class="menu_drogi dk_color">
							<li class="dol"><label><input id="dk" type="checkbox" name="checkbox_dk" onclick="przerysuj15('dk','dk')" />Deogi Krajowe</label>
							  <ul>
								<li><label><input   id="dk77" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk77','dk77')" />77</li></label>
								<li><label><input   id="dk94" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk94','dk94')" />94(4)</li></label>
								<li><label><input   id="dk19" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk19','dk19')" />19</li></label>
								<li><label><input   id="dk9" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk9','dk9')" />9</li></label>
								<li><label><input   id="dk28" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk28','dk28')" />28</li></label>
								<li><label><input   id="dk73" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk73','dk73')" />73</li></label>
								<li><label><input   id="dk84" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk84','dk84')" />84</li></label>
								<li><label><input   id="s19" type="checkbox"name="checkbox_dk" onclick="przerysuj15('s19','s19')" />S19</li></label>
								<li><label><input   id="dk97" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk97','dk97')" />97</li></label>
								
							  </ul>
							</li>

							<li  class="dol"><label><input  id="a4"name="checkbox_a4" type="checkbox" onclick="przerysuj16('a4','a4')" />autostrada A4</label>
							  <ul>
							  	<li id="a4_infra" class="prawo"><label><input id="infra" type="checkbox"name="checkbox_infra" onclick="przerysuj19('infra','infra')"/>Infrastruktura</label>
									<ol>
										<li><label><input  id="wezel"name="checkbox_infra" type="checkbox" onclick="przerysuj19('wezel','wezel')" /> Węzły</li></label>
										<li><label><input  id="pa"name="checkbox_infra" type="checkbox" onclick="przerysuj19('pa','pa')" /> Przejazdy awaryjne</li></label>
										<li><label><input  id="wyj"name="checkbox_infra" type="checkbox" onclick="przerysuj19('wyj','wyj')" /> Wjazdy awaryjne</li></label>
										<li><label><input  id="mop"name="checkbox_infra" type="checkbox" onclick="przerysuj19('mop','mop')" /> mop</li></label>
									</ol>
								</li>
							 </ul>
							</li>
							
							<li class="dol"><label><input  id="woj"name="checkbox_woj" type="checkbox" onclick="przerysuj20('woj','woj')" />Drogi wojewódzkie</label>
							  <ul> </ul>
							</li>
						</ol>
					</div>
				</div>
				
				<div class="panel_drogi" id="granice">
					<div  id="pty"class="menu_mapy">
						<ol  class="menu_drogi">
							<li class="etykiety"><label><input id="granica"name="checkbox_gran" type="checkbox" onclick="przerysuj17('granica','gran')" /> Granice</label>
								<ul>
									<li><label><input  id="gran_woj"  checked="checked" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_woj','gran_woj')" />Województw</li></label>
									<li><label><input   id="gran_pow" checked="checked" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_pow','gran_pow')" />Powiatów</li></label>
									<li><label><input  id="gran_gmin" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_gmin','gran_gmin')" />Gmin</li></label>
								</ul>
							</li>

							<li class="etykiety" ><label><input  id="etyk"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('etyk','etyk')" /> Etykiety</label>
							    <ul>
									<li><label><input id="ety_woj"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_woj','ety_woj')" />Województw</li></label>
									<li><label><input id="ety_pow"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_pow','ety_pow')" />Powiatów</li></label>
									<li><label><input id="ety_gmin"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_gmin','ety_gmin')" />gmin</li></label>
								</ul>
							</li>
						</ol>
					</div>				
				</div>
			</div>
		
		</div>
	</div>
		
		<div style= "clear: both;"></div>
	
	<div id= "infodol">
	
		<a  href="info/drogi.php" target= "_blanck" style="color:white;"><div class="info">Drogi</div></a>
		<a  href="info/pt/podzial_teryt.php" target= "_blanck" style="color:white;"><div class="info">podział terytorialny</div></a>
		<a  href="info/przejscia_gran.php"  target= "_blanck"style="color:white;"><div class="info">przejścia graniczne</div></a>
		<a  href="info/sluzba_zdrowia.php" target= "_blanck" style="color:white;"><div class="info">służba zdrowia</div></a>
		<a  href="info/bezdomni.php" target= "_blanck" style="color:white;"><div class="info">bezdomni</div></a>
		<a  href="info/zwierzeta.php" target= "_blanck" style="color:white;"><div class="info">zwierzęta</div></a>
		<a  href="info/awaria_sieci_tel.php"  target= "_blanck"style="color:white;"><div class="info">awaria sieci telfonicznej</div></a>
		<a  href="info/awaria_wind.php"  target= "_blanck"style="color:white;"><div class="info">awaria wind</div></a>
		<a  href="info/tel_zaufania.php" target= "_blanck" style="color:white;"><div class="info">telefony zaufania</div></a>
	</div>
	
	
	
		
	
	
</div>		
		
	
	
				
	
	<div style= "clear: both;"></div>
	
	<!--------------------------------------formularz----------------------------------->
	

		<div id="caly">
			<div id="form_tresc">
						<form action="">
							<!--<input type="text" id='message'>-->
							<textarea id='message' rows="4"></textarea>
							<br/>
							<input type="button" id='send' value="Wyślij">
						</form>	

						<form>
							<input type="button" id='usun' value="Usuń">
						</form>	
			
			</div>		 

			<div id="form_tyt">
				<div id="tekst">wyślij info.</div>
			</div>
		</div>
	 
	<!--------------------------------------------------Help------------------------------>		
		<div id="help">
			<div id="help_inner">
				<form>
					<input type="button" id="help" value="HELP" >
				</form>
			</div>
	
		<div id="end_help"class="end_help invisable">
				 <form action="">
					<input type="button_w" id="wylacz_w"  value="wyłącz">
				</form>
		</div>	
	</div>
		
		<div id="help_alarm"class="help_alarm invisable">
				<img src="alarm.png"/>
				<div id="alarm_o" class="alarm_o"><img src="alarm_o.png"/></div>
		</div>
		
		<div id="help_name"class="help_name invisable">
	 		<p>chodzbaP</p>
		
		</div>
	
		<audio id="graj"class="graj" src="alarm.wav"  loop></audio>
		
<!------------------------------------------------Awaria---------------------------->	


		<div id="awaria">
		
				<div id="tresc_a">
					<div id="radio_a">

						<input type="radio" name="sluzby" id="cpr_a"/>CPR
						<input type="radio" name="sluzby" id="prm_a"/>PRM
						<input type="radio" name="sluzby" id="psp_a"/>PSP				
						<input type="radio" name="sluzby" id="pol_a"/>Policja
						<input type="radio" name="sluzby" id="inne_a"/>Inne
					</div>
					<div id="form_a">
						<form>
							<textarea id="awaria_tekst" cols="50" rows="4" ></textarea>
							<input type="button" id='awaria_wys' value="wyślij"/>
						</form>	
					</div>
				</div>
				
				<div id="tyt_a">AWARIA</div>
		</div>

<div id="awaria_inne">
	<div id="form_ine">
	<form>
			<button class="plus" id="usun_ine"  type="button">X</button>
		</form>
	</div>
<div id="ine_"></div>
	
</div>


<script>



let button=document.getElementById('awaria_wys');

button.addEventListener('click',function(){
let awaria_text=document.getElementById('awaria_tekst').value;
let sluzby=	document.getElementsByName('sluzby');
var  newDiv= document.createElement('div');
if(sluzby[0].checked){
	newDiv.id='cpr_awaria';
	newDiv.classList.add('cpr_awaria');
	var cprDiv=document.getElementById('cpr_');
	cprDiv.appendChild(newDiv);
	document.getElementById('form_cpr').style.display="block";
}else if(sluzby[1].checked){
		newDiv.id='prm_awaria';
		newDiv.classList.add('cpr_awaria');
		var prmDiv=document.getElementById('prm_');
		prmDiv.appendChild(newDiv);
		document.getElementById('form_prm').style.display="block";
}else if(sluzby[2].checked){
		newDiv.id='psp_awaria';
		newDiv.classList.add('cpr_awaria');
		var pspDiv=document.getElementById('psp_');
		pspDiv.appendChild(newDiv);
		document.getElementById('form_psp').style.display="block";
}else if(sluzby[3].checked){
		newDiv.id='pol_awaria';
		newDiv.classList.add('cpr_awaria');
		var polDiv=document.getElementById('pol_');
		polDiv.appendChild(newDiv);
		document.getElementById('form_pol').style.display="block";
}else if(sluzby[4].checked){
		newDiv.id='ine_awaria';
		var ineDiv=document.getElementById('ine_');
		ineDiv.appendChild(newDiv);
		document.getElementById('form_ine').style.display="block";
			
		}else{alert('zaznacz służbę')}
		
	newDiv.innerHTML=awaria_text;
	
	
})

let us_cpr=document.getElementById('usun_cpr');
us_cpr.addEventListener('click',function(e){
e.preventDefault();
var cprDiv=document.getElementById('cpr_');
		var newDiv=document.getElementById('cpr_awaria');
		cprDiv.removeChild(newDiv);
		var liczDiv= cprDiv.getElementsByTagName('div');
				if (!liczDiv.length){
				document.getElementById('form_cpr').style.display='none';
			};
	
	
	
})
let us_prm=document.getElementById('usun_prm');
us_prm.addEventListener('click',function(e){
e.preventDefault();
var prmDiv=document.getElementById('prm_');
		var newDiv=document.getElementById('prm_awaria');
		prmDiv.removeChild(newDiv);
		
		var liczDiv= prmDiv.getElementsByTagName('div');
		if (!liczDiv.length){
				document.getElementById('form_prm').style.display='none';
			};


})

let us_psp=document.getElementById('usun_psp');
us_psp.addEventListener('click',function(e){
e.preventDefault();

	var pspDiv=document.getElementById('psp_');
		var newDiv=document.getElementById('psp_awaria');
		pspDiv.removeChild(newDiv);
		
		var liczDiv= pspDiv.getElementsByTagName('div');
		if (!liczDiv.length){
				document.getElementById('form_psp').style.display='none';
			};




})


let us_pol=document.getElementById('usun_pol');
us_pol.addEventListener('click',function(e){
e.preventDefault();
var polDiv=document.getElementById('pol_');
		var newDiv=document.getElementById('pol_awaria');
		polDiv.removeChild(newDiv);
		
		var liczDiv= polDiv.getElementsByTagName('div');
		if (!liczDiv.length){
				document.getElementById('form_pol').style.display='none';
			};


})

let us_inne=document.getElementById('usun_ine');
us_inne.addEventListener('click',function(){
	
	
		var ineDiv=document.getElementById('ine_');
		var newDiv=document.getElementById('ine_awaria');
		ineDiv.removeChild(newDiv);
		
		var liczDiv= ineDiv.getElementsByTagName('div');
		if (!liczDiv.length){
				document.getElementById('form_ine').style.display='none';
			};
	
	
	
})


let help=document.getElementById('help');
help.addEventListener('click', function(){
	document.getElementById('help_alarm').classList.remove('invisable');
	document.getElementById('help_name').classList.remove('invisable');
	document.getElementById('end_help').classList.remove('invisable');
	let graj= document.getElementsByTagName('audio')[0].play();
});
	let help_end=document.getElementById('end_help');
	help_end.addEventListener('click', function(e){
	e.stopPropagation();
	document.getElementById('help_alarm').classList.add('invisable');
	document.getElementById('help_name').classList.add('invisable');
	document.getElementById('end_help').classList.add('invisable');
	document.getElementsByTagName('audio')[0].pause();

//	
})
		

let send=document.getElementById('send');
send.addEventListener('click',function(){
let area= document.getElementById('message').value;	
let block=document.getElementById('blok');
block.style.display='block';
block.innerHTML='<p>'+area+'</p>';
//alert(area);
})
let usun=document.getElementById('usun');
usun.addEventListener('click',function(){
	
let block=document.getElementById('blok');
block.style.display='none';
block.innerHTML='';

})
	
</script>		
</body>

</html>
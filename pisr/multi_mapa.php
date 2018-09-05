
<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}

?>


<!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content="Konsolidacja i przepływ informacji wśród służb biorących udział w akcjach ratowniczyczych na podkarpaciu"/>
	<meta name="keywords" content="podkarpacie, 112, 999, 998, 997, policja, straż pożarna, pogotowie ratunkowe, bezpieczeństwo">
	
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<link rel="stylesheet" href="mapa_style.css" type= "text/css"/>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCfVuTpUBK6UMvaVSbB2NHO5v3JZcVfkc4&sensor=false" type="text/javascript"></script> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
	<script src="prm/sdm_mapa_kategorie.js" type="text/javascript"></script>
	<script src="przelaczka.js" type="text/javascript"></script> 
	 
	
		 </head>

<body onload="mapaStart();" >
<div id="localizer"class="localizer">
	<div id="napis" class="okno"></div>
	<div id="dlug" class="okno"><a href="../wylog.php">WYLOGUJ</a></div> 
	 <div id="szer" class="okno"><a href="../index.php">MENU GŁÓWNE</a></div>
		
	
</div>
<script>
	
	var local=document.getElementById("localizer");
	local.addEventListener('click',getLoc,false);
	</script>




<div class="caly top_prm">
	<div class="blok1">
		<div id="prmy" class="blok_na_zawartosc">
		<div class="przerwa"></div>	
		
				<div class="grupa">
						<div id="prm_zrm" class="ptaszek_ak  prm"><input id="zrm" type="checkbox" name="checkbox" onclick="przerysuj('zrm','zrm')" />Zespoły Ratownictwa<br/>Medycznego</div>
							
						<div id="prm_s" class="ptaszek prm akapit"><input   id="kat1" type="checkbox"name="checkbox" onclick="przerysuj('kat1','specjalistyczny')" />Specjalistyczne</div>
					
						<div id="prm_p"  class="ptaszek prm"><input   id="kat4" type="checkbox"name="checkbox" onclick="przerysuj('kat4','podstawowy')" />Podstawowe</div>
						
						<div  id="prm_z"  class="ptaszek prm"><input   id="kat5" type="checkbox"name="checkbox" onclick="przerysuj('kat5','zapasowy')" />Zapasowe</div>
				</div>
				
			<div class="przerwa"></div>																						
			<div class="grupa" >
				<div id="prm_sz"   class="ptaszek_ak prm"><input  id="szpital"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('szpital','szpital')" />Szpitale</div>
				<div id="prm_so"   class="ptaszek prm"><input id="kat3"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('kat3','sor')" />	Szpitalne Oddziały<br/>Ratunkowe</div>
				<div  id="prm_i"  class="ptaszek prm"><input  id="kat2"name="checkbox_szpit" type="checkbox" onclick="przerysuj1('kat2','ip')" />Izby Przyjęć</div>
			</div>
				
				<div class="przerwa"></div>
			<div class="grupa" >
				<div id="prm_dm"   class="ptaszek_ak prm"><input     id="siedziba_dm"name="checkbox_siedziba_dm" type="checkbox" onclick="przerysuj2d('siedziba_dm','dm')" />Zintegowane<br/>Dyspozytornie Medyczne</div>
				<div id="prm_dm_o"   class="ptaszek_ak prm"><input id="wszystkie_dm" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('wszystkie_dm','wszystkie_dm')" />Obszar obsługiwany<br/>przez ZDM</div>
					 
				<div  id="prm_rz"  class="ptaszek prm"><input  id="rzeszow" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('rzeszow','szary')" />Rzeszów</div>
				<div id="prm_kr"   class="ptaszek prm"><input  id="krosno" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('krosno','zolty')" />Krosno</div>
				<div id="prm_pr"   class="ptaszek prm"><input 	id="przemysl" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('przemysl','niebieski')" />Przemyśl</div>
				<div  id="prm_sa"  class="ptaszek prm"><input  id="sanok" checked="checked" type="checkbox" name="checkbox_dm"onclick="przerysuj2('sanok','zielone')" />	Sanok</div>
				<div id="prm_mi"   class="ptaszek prm"><input  id="mielec" checked="checked" type="checkbox"name="checkbox_dm" onclick="przerysuj2('mielec','czerwony')" />	Mielec</div>
			</div>
			<div class="przerwa"></div>
			<div class="grupa" >
					<div id="lpr_b"   class="ptaszek_ak prm"><input   id="lpr"type="checkbox" name="checkbox_lpr" onclick="przerysuj21('lpr','lpr')" />Bazy Lotniczego<br/> Pogotowia Ratunkowego</div>
						
			
					<div id="lpr_s"     class="ptaszek_ak prm"><input  id="hems_s"name="checkbox_lpr_s" type="checkbox" onclick="przerysuj3_zasieg60('hems_s','hems_s')" />Lotnicze Pogotowie<br/>Ratunkowe Sanok</div>
							
					<div  id="lpr_s3"     class="ptaszek prm"><input id="sanok60"name="checkbox_lpr_s" type="checkbox" onclick="przerysuj3_zasieg60('sanok60','zasieg60')" />Zasięg w gotowości<br/>do 3minut (60km)</div>
					<div id="lpr_s6"    class="ptaszek prm"><input id="sanok130"name="checkbox_lpr_s" type ="checkbox" onclick="przerysuj3_zasieg60('sanok130','zasieg130')" />Zasięg w gotowości<br/>do 6minut (130km)</div>
						
			
					<div id="lpr_k"     class="ptaszek_ak prm"><input id="hems_k"name="checkbox_lpr_k" type="checkbox" onclick="przerysuj3_krakow('hems_k','hems_k')" />Lotnicze Pogotowie<br/>Ratunkowe Kraków</div>
							
					<div id="lpr_k3"     class="ptaszek prm"><input id="hems_k_60"name="checkbox_lpr_k" type="checkbox" onclick="przerysuj3_krakow('hems_k_60','zasieg60')" />Zasięg w gotowości<br/>do 3minut (60km)</div>
					<div id="lpr_k6"     class="ptaszek prm"><input id="hems_k_130"name="checkbox_lpr_k" type ="checkbox" onclick="przerysuj3_krakow('hems_k_130','zasieg130')" />Zasięg w gotowości<br/>do 6minut (130km)</div>
						
			
					<div  id="lpr_kie"   class="ptaszek_ak prm"><input id="hems_kiel"name="checkbox_lpr_kiel" type="checkbox" onclick="przerysuj3_kielce('hems_kiel','hems_kiel')" />Lotnicze Pogotowie<br/>Ratunkowe Kielce</div>
					<div id="lpr_kie3"     class="ptaszek prm"><input id="hems_kiel_60"name="checkbox_lpr_kiel" type="checkbox" onclick="przerysuj3_kielce('hems_kiel_60','zasieg60')" />Zasięg w gotowości<br/>do 3minut (60km)</div>
					<div id="lpr_kie6"     class="ptaszek prm"><input id="hems_kiel_130"name="checkbox_lpr_kiel" type ="checkbox" onclick="przerysuj3_kielce('hems_kiel_130','zasieg130')" />Zasięg w gotowości<br/>do 6minut (130km)</div>
							
			
					<div  id="lpr_l"    class="ptaszek_ak prm"><input id="hems_l"name="checkbox_lpr_l" type="checkbox" onclick="przerysuj3_lublin('hems_l','hems_l')" />Lotnicze Pogotowie<br/>Ratunkowe Lublin</div>
								
					<div id="lpr_l3"     class="ptaszek prm"><input id="hems_l_60"name="checkbox_lpr_l" type="checkbox" onclick="przerysuj3_lublin('hems_l_60','zasieg60')" />Zasięg w gotowości<br/>do 3minut (60km)</div>
					<div  id="lpr_l6"     class="ptaszek prm"><input id="hems_l_130"name="checkbox_lpr_l" type ="checkbox" onclick="przerysuj3_lublin('hems_l_130','zasieg130')" />Zasięg w gotowości<br/>do 6minut (130km)</div>
								
				
					<div  id="lpr_lad"     class="ptaszek_ak prm"><input id="ladowiska"name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('ladowiska','ladowiska')" />Lądowiska</div>

					<div  id="lpr_lad24"     class="ptaszek prm"><input id="szpital24" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('szpital24','noc')" />Przyszpitalne<br/>całodobowe</div>
					<div  id="lpr_lad12"     class="ptaszek prm"><input id="szpital12" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('szpital12','dzien')" />Przyszpitalne<br/>dzienne</div>
					<div  id="lpr_lad_g"     class="ptaszek prm"><input id="przygodne" name="checkbox_ladowiska" type="checkbox" onclick="przerysuj3('przygodne','gmin')" />Gminne</div>
									
			</div>
			<div class="przerwa"></div>
		</div>
	</div>
	<div class="blok2">
		<div class="uchwyt prm">PRM</div><div class="multi_ptaszek prm"><input type="checkbox" id="multi_prm" onclick="przelacz_prm()"/></div>
	</div>
</div>


		<div class="caly top_psp">
			<div class="blok1">
				<div id="pspy" class="blok_na_zawartosc">
				<div class="przerwa"></div>	
						<div class="grupa">
						
								<div id="psp_k" class="ptaszek_ak psp"><input id="komenda_psp" type="checkbox" name="checkbox_psp" onclick="przerysuj8('komenda_psp','komenda_psp')" />Komendy</div>
							
								<div id="psp_w"  class="ptaszek psp"><input   id="woj_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('woj_psp','kws_psp')" />Wojewódzka</div>
								<div id="psp_m"  class="ptaszek psp"><input   id="miej_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('miej_psp','kms_psp')" />Miejskie</div>
								<div id="psp_p"  class="ptaszek psp"><input   id="pow_psp" type="checkbox"name="checkbox_psp" onclick="przerysuj8('pow_psp','kps_psp')" />Powiatowe</div>
						
						</div>
						
					<div class="przerwa"></div>																						
						<div class="grupa" >
							<div id="psp_j"  class="ptaszek_ak psp"><input   id="jrg"type="checkbox" onclick="przerysuj9('jrg','jrg')" />Jednostki<br/>Ratowniczo Gaśnicze</div>
						</div>
						
						<div class="przerwa"></div>
					<div class="grupa" >
								<div id="psp_pos"  class="ptaszek_ak psp"><input   id="post_psp" type="checkbox" onclick="przerysuj10('post_psp','post_psp')" />Posterunek</div>
							
					</div>
					<div class="przerwa"></div>
					<div class="grupa" >
							<div id="psp_l"  class="ptaszek_ak psp"><input   id="lotnis_psp" type="checkbox" onclick="przerysuj11('lotnis_psp','lotnis_psp')" />Lotniskowa<br/>Straż Pożarna</div>
							
					</div>
					
					<div class="przerwa"></div>
					<div class="grupa" >
								<div id="psp_s"  class="ptaszek_ak psp"><input  id="specjalist"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('specjalist','specjalist')" />Grupy <br/>specjalistyczne	</div>
								
									<div id="psp_t"  class="ptaszek psp"><input  id="technicze"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('technicze','tech')" />ratownictwa <br/>technicznego</div>
									<div id="psp_wys"  class="ptaszek psp"><input  id="wysoko"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('wysoko','wys')" />ratownictwa <br/>wysokościowego</div>
									<div id="psp_n"  class="ptaszek psp"><input  id="nurkowe"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('nurkowe','nur')" />ratownictwa <br/>wodno-nurkowego</div>
									<div id="psp_posz"  class="ptaszek psp"><input  id="poszuk"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('poszuk','posz')" />poszukiwawczo-ratownicza</div>
									<div id="psp_ch"  class="ptaszek psp"><input  id="chem"name="checkbox_specjalist" type="checkbox" onclick="przerysuj12('chem','chem')" />ratownictwa <br/>chemiczno-ekolog.</div>
									
							
					</div>
					<div class="przerwa"></div>
					<div class="grupa" >
								<div id="psp_o"  class="ptaszek_ak psp"><input  id="osp"name="checkbox_osp" type="checkbox" onclick="przerysuj14('osp','osp')" />Ochotnicza<br/>Straż Pożarna</div>
								
								<div id="psp_ksrg"  class="ptaszek psp"><input  id="ksrg"name="checkbox_osp" type="checkbox" onclick="przerysuj14('ksrg','KSRG')" />Należace do KSRG</div>
								<div id="psp_inne"  class="ptaszek psp"><input  id="pozos"name="checkbox_osp" type="checkbox" onclick="przerysuj14('pozos','pozos')" />Pozostałe</div>
								
					</div>
					<div class="przerwa"></div>
				</div>
			</div>
			<div class="blok2">
				<div class="uchwyt psp tytul_psp">Straż<br/>Pożarna</div><div class="multi_ptaszek psp"><input type="checkbox" id="multi_psp" onclick="przelacz_psp()"/></div>
			</div>
		</div>

		<div class="caly top_pol">
			<div class="blok1">
				<div id="poly" class="blok_na_zawartosc">
				<div class="przerwa"></div>	
						<div class="grupa">
							<div id="pol_k" class="ptaszek_ak pol"><input id="komenda" type="checkbox" name="checkbox_kom" onclick="przerysuj4('komenda','komenda')" />Komendy	</div>
							
								<div id="pol_w"  class="ptaszek  pol"><input   id="woj" type="checkbox"name="checkbox_kom" onclick="przerysuj4('woj','kwp')" />Wojewódzka</div>
								<div id="pol_m" class="ptaszek  pol"><input   id="miej" type="checkbox"name="checkbox_kom" onclick="przerysuj4('miej','kmp')" />Miejskie</div>
								<div id="pol_p"  class="ptaszek  pol"><input   id="pow" type="checkbox"name="checkbox_kom" onclick="przerysuj4('pow','kpp')" />Powiatowe</div>
						
						</div>
					<div class="przerwa"></div>																						
						<div class="grupa" >
							<div id="pol_komis"  class="ptaszek_ak  pol"><input   id="komis"type="checkbox" onclick="przerysuj5('komis','komis')" />Komisariaty</div>
							
						</div>
						<div class="przerwa"></div>
					<div class="grupa" >
								<div id="pol_pos"  class="ptaszek_ak  pol"><input  id="post"type="checkbox" onclick="przerysuj6('post','post')" />Posterunki</div>
							
					</div>
					<div class="przerwa"></div>
					<div class="grupa" >
							<div id="pol_inne"  class="ptaszek_ak  pol"><input  id="inne" type="checkbox" onclick="przerysuj7('inne','inne')" />Pozostałe</div>
							
					</div>
					<div class="przerwa"></div>
				</div>
			</div>
			<div class="blok2">
			<div class="uchwyt pol">Policja</div><div class="multi_ptaszek pol"><input type="checkbox" id="multi_pol" onclick="przelacz_pol()"/></div>
			</div>
		</div>		
		
	<div class="caly top_cpr">
		<div class="blok1">
			<div class="blok_na_zawartosc">
						<div class="przerwa"></div>	
				<div class="grupa">
							<div id="cpr" class="ptaszek_ak cpr"><input   id="cpr_" type="checkbox"name="checkbox_cpr" onclick="przerysuj20('cpr_','cpr')" />Centra <br/>Powiadamiania Ratunkowego</div>
																	
				</div>										
						
			</div>
		</div>
		<div class="blok2">
			<div class="uchwyt cpr">CPR</div><div class="multi_ptaszek_pt_dk cpr"><input   id="cpr_2" type="checkbox" /></div>
		</div>
	</div>	
	
	
	<div class="caly top_dk">
			<div class="blok1">
				<div id="dky" class="blok_na_zawartosc">
					<div class="przerwa"></div>	
						<div class="grupa">
								<div id="dk_dk" class="ptaszek_ak a4"><input id="dk" type="checkbox" name="checkbox" onclick="przerysuj15('dk','dk')" />Deogi Krajowe</div>
								
								<div id="dk_77"  class="ptaszek_dk">77<div><input   id="dk77" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk77','dk77')" /></div></div>
								<div id="dk_94" class="ptaszek_dk">94<div><input   id="dk94" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk94','dk94')" /></div></div>
								<div id="dk_19"  class="ptaszek_dk">19<div><input   id="dk19" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk19','dk19')" /></div></div>
								<div id="dk_9"  class="ptaszek_dk">9<div><input   id="dk9" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk9','dk9')" /></div></div>
								<div id="dk_28"  class="ptaszek_dk">28<div><input   id="dk28" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk28','dk28')" /></div></div>
								<div id="dk_s19"  class="ptaszek_dk">S19<div><input   id="s19" type="checkbox"name="checkbox_dk" onclick="przerysuj15('s19','s19')" /></div></div>
								<div id="dk_73"  class="ptaszek_dk">73<div><input   id="dk73" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk73','dk73')" /></div></div>
								<div id="dk_84"  class="ptaszek_dk">84<div><input   id="dk84" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk84','dk84')" /></div></div>
								<div id="dk_97"  class="ptaszek_dk">97<div><input   id="dk97" type="checkbox"name="checkbox_dk" onclick="przerysuj15('dk97','dk97')" /></div></div>
					
						</div>
						<div class="przerwa"></div>
						<div class="grupa">
								<div id="a4_a4" class="ptaszek_ak a4"><input  id="a4"name="checkbox_a4" type="checkbox" onclick="przerysuj16('a4','a4')" />A4 (Jezdnia)	</div>
												
								
								<div  id="a4_i" class="ptaszek_ak a4"><input id="infra" type="checkbox"name="checkbox_infra" onclick="przerysuj19('infra','infra')"/>Infrastruktura</div>
							
								<div  id="a4_wez" class="ptaszek a4"><input  id="wezel"name="checkbox_infra" type="checkbox" onclick="przerysuj19('wezel','wezel')" />Węzły</div>
								<div id="a4_pa"  class="ptaszek a4"><input  id="pa"name="checkbox_infra" type="checkbox" onclick="przerysuj19('pa','pa')" />Przejazdy awaryjne</div>
								<div  id="a4_wyj" class="ptaszek a4"><input  id="wyj"name="checkbox_infra" type="checkbox" onclick="przerysuj19('wyj','wyj')" />Wjazdy awaryjne</div>
								<div  id="a4_mop" class="ptaszek a4"><input  id="mop"name="checkbox_infra" type="checkbox" onclick="przerysuj19('mop','mop')" />Punkty obsługi podróżnego</div>
							
						</div>	
				</div>	
							
			</div>
			
			
			<div class="blok2">
				<div class="uchwyt dk_tytul">Drogi</div><div class="multi_ptaszek_pt_dk dk"><input type="checkbox" id="multi_dk" onclick="przelacz_dk()"/></div>
			</div>
	</div>	

	<div class="caly top_pt">
			<div class="blok1">
				<div id="pty" class="blok_na_zawartosc">
					<div class="przerwa"></div>	
						<div class="grupa">
							<div id="pt_g" class="ptaszek_ak pt"><input id="granica"name="checkbox_gran" type="checkbox" onclick="przerysuj17('granica','gran')" />Granice	</div>
							
								<div id="pt_gw"  class="ptaszek pt"><input checked="checked" id="gran_woj" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_woj','gran_woj')" />Województw</div>
								<div id="pt_gp"  class="ptaszek pt"><input checked="checked" id="gran_pow" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_pow','gran_pow')" />Powiatów</div>
								<div id="pt_gg"  class="ptaszek pt"><input  id="gran_gmin" type="checkbox" name="checkbox_gran"onclick="przerysuj17('gran_gmin','gran_gmin')" />Gmin</div>
						
						</div>
						<div class="przerwa"></div>

						<div class="grupa">
								<div id="pt_e"  class="ptaszek_ak pt"><input  id="etyk"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('etyk','etyk')" />Etykiety</div>

								<div id="pt_ew"  class="ptaszek pt"><input id="ety_woj"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_woj','ety_woj')" />Województw</div>
								<div id="pt_ep"  class="ptaszek pt"><input id="ety_pow"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_pow','ety_pow')" />Powiatów</div>
								<div id="pt_eg"  class="ptaszek pt"><input id="ety_gmin"name="checkbox_etyk" type="checkbox" onclick="przerysuj18('ety_gmin','ety_gmin')" />Gmin</div>
							</div>	
				</div>
			</div>
		<div class="blok2">
			<div class="uchwyt pt_tytul">Podział<br/>terytorialny</div><div class="multi_ptaszek_pt_dk pt"><input type="checkbox" id="multi_pt" onclick="przelacz_pt()"/></div>
		</div>
	</div>	
	
	
	<script>
	
/*------------------------------------------------------pt------------------------*/	

var pt= document.getElementById('pt_g');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('granica');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj17('granica','gran')	;
})


var pt= document.getElementById('pt_gw');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('gran_woj');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj17('gran_woj','gran_woj')	;
})


var pt= document.getElementById('pt_gp');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('gran_pow');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj17('gran_pow','gran_pow')	;
})


var pt= document.getElementById('pt_gg');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('gran_gmin');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj17('gran_gmin','gran_gmin')	;
})


var pt= document.getElementById('pt_e');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('etyk');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj18('etyk','etyk')	;
})


var pt= document.getElementById('pt_ew');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('ety_woj');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj18('ety_woj','ety_woj');
})


var pt= document.getElementById('pt_ep');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('ety_pow');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj18('ety_pow','ety_pow')	;
})


var pt= document.getElementById('pt_eg');
pt.addEventListener('click',function przelacz(){
	
	var pt = document.getElementById('ety_gmin');
	if (!pt.checked)
	pt.checked=true;
else pt.checked=false;
przerysuj18('ety_gmin','ety_gmin')	;
})


	
	
/*-------------------------------------------------------a4--------------------------*/		

var a4= document.getElementById('a4_a4');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('a4');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
przerysuj16('a4','a4')	;
})
	
var a4= document.getElementById('a4_i');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('infra');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
przerysuj19('infra','infra')	;
})
	
	var a4= document.getElementById('a4_wez');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('wezel');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
przerysuj19('wezel','wezel')	;
})
	
	var a4= document.getElementById('a4_pa');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('pa');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
przerysuj19('pa','pa')	;
})
	
	var a4= document.getElementById('a4_wyj');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('wyj');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
przerysuj19('wyj','wyj')	;
})
	
	var a4= document.getElementById('a4_mop');
a4.addEventListener('click',function przelacz(){
	
	var a4 = document.getElementById('mop');
	if (!a4.checked)
	a4.checked=true;
else a4.checked=false;
	przerysuj19('mop','mop');
})
	
		
	
/*-------------------------------------------------------dk--------------------------*/	

var dk= document.getElementById('dk_dk');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk','dk')	;
})


var dk= document.getElementById('dk_77');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk77');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk77','dk77')	;
})


var dk= document.getElementById('dk_94');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk94');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk94','dk94')	;
})


var dk= document.getElementById('dk_19');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk19');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk19','dk19')	;
})

var dk= document.getElementById('dk_9');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk9');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk9','dk9')	;
})



var dk= document.getElementById('dk_28');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk28');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk28','dk28')	;
})

var dk= document.getElementById('dk_s19');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('s19');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('s19','s19')	;
})


var dk= document.getElementById('dk_73');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk73');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk73','dk73')	;
})


var dk= document.getElementById('dk_84');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk84');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk84','dk84')	;
})

var dk= document.getElementById('dk_97');
dk.addEventListener('click',function przelacz(){
	
	var dk = document.getElementById('dk97');
	if (!dk.checked)
	dk.checked=true;
else dk.checked=false;
przerysuj15('dk97','dk97')	;
})

	
/*-------------------------------------------------------cpr---------------------------*/	

var cpr= document.getElementById('cpr');
cpr.addEventListener('click',function przelacz(){
	
	var cpr = document.getElementById('cpr_');
	if (!cpr.checked)
	cpr.checked=true;
else cpr.checked=false;
przerysuj20('cpr_','cpr')	;
})
	

	
/*-------------------------------------------------------pol-----------------------------*/	

var pol = document.getElementById('pol_k');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('komenda');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj4('komenda','komenda')	;
})
	

var pol = document.getElementById('pol_w');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('woj');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj4('woj','kwp')	;
})
	

var pol = document.getElementById('pol_m');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('miej');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj4('miej','kmp')	;
})
	

var pol = document.getElementById('pol_p');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('pow');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj4('pow','kpp')	;
})
	

var pol = document.getElementById('pol_komis');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('komis');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
	przerysuj5('komis','komis');
})
	

var pol = document.getElementById('pol_pos');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('post');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj6('post','post')	;
})
	

var pol = document.getElementById('pol_inne');
pol.addEventListener('click',function przelacz(){
	
	var pol = document.getElementById('inne');
	if (!pol.checked)
	pol.checked=true;
else pol.checked=false;
przerysuj7('inne','inne');
})
	
	
/*--------------------------------------------------------psp-----------------------------*/	

var psp = document.getElementById('psp_k');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('komenda_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj8('komenda_psp','komenda_psp');
})


var psp = document.getElementById('psp_w');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('woj_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj8('woj_psp','kws_psp')			;
})

var psp = document.getElementById('psp_m');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('miej_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj8('miej_psp','kms_psp')		;
	
})
var psp = document.getElementById('psp_p');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('pow_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj8('pow_psp','kps_psp');
	
})
var psp = document.getElementById('psp_j');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('jrg');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj9('jrg','jrg');
			
})
var psp = document.getElementById('psp_pos');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('post_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj10('post_psp','post_psp')		;
			
})
var psp = document.getElementById('psp_l');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('lotnis_psp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj11('lotnis_psp','lotnis_psp')		;
			
})
var psp = document.getElementById('psp_s');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('specjalist');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj12('specjalist','specjalist')		;
			
})
var psp = document.getElementById('psp_t');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('technicze');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj12('technicze','tech')			;
			
})
var psp = document.getElementById('psp_wys');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('wysoko');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj12('wysoko','wys')			;
			
})
var psp = document.getElementById('psp_n');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('nurkowe');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj12('nurkowe','nur')			;
			
})
var psp = document.getElementById('psp_posz');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('poszuk');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
		przerysuj12('poszuk','posz')	;
})
var psp = document.getElementById('psp_ch');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('chem');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj12('chem','chem')		;
			
})
var psp = document.getElementById('psp_o');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('osp');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj14('osp','osp')		;
})
var psp = document.getElementById('psp_ksrg');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('ksrg');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
	przerysuj14('ksrg','KSRG')		;
			
})
var psp = document.getElementById('psp_inne');
psp.addEventListener('click',function przelacz(){
	
	var psp = document.getElementById('pozos');
	if (!psp.checked)
	psp.checked=true;
else psp.checked=false;
przerysuj14('pozos','pozos')		;
})

/*--------------------------------------------------------prm-----------------------------*/	
var zrm = document.getElementById('prm_zrm');
zrm.addEventListener('click',function przelacz(){
	
	var zrm = document.getElementById('zrm');
	if (!zrm.checked)
	zrm.checked=true;
else zrm.checked=false;
przerysuj('zrm','zrm');
})


var zrm = document.getElementById('prm_s');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('kat1');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj('kat1','specjalistyczny');
})



var zrm = document.getElementById('prm_p');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('kat4');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj ('kat4','podstawowy')   ;
})


var zrm = document.getElementById('prm_z');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('kat5');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj('kat5','zapasowy')    ;
})



var zrm = document.getElementById('prm_sz');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('szpital');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj1  ('szpital','szpital')  ;
})




var zrm = document.getElementById('prm_so');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('kat3');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj1  ('kat3','sor')  ;
})



var zrm = document.getElementById('prm_i');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('kat2');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj1('kat2','ip')    ;
})



var zrm = document.getElementById('prm_dm');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('siedziba_dm');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2d ('siedziba_dm','dm')    ;
})



var zrm = document.getElementById('prm_dm_o');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('wszystkie_dm');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2('wszystkie_dm','wszystkie_dm')  ;
})



var zrm = document.getElementById('prm_rz');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('rzeszow');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2 ('rzeszow','szary')   ;
})



var zrm = document.getElementById('prm_kr');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('krosno');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2('krosno','zolty')    ;
})



var zrm = document.getElementById('prm_pr');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('przemysl');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2 ('przemysl','niebieski')   ;
})



var zrm = document.getElementById('prm_sa');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('sanok');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2 ('sanok','zielone')   ;
})



var zrm = document.getElementById('prm_mi');
zrm.addEventListener('click',function przelacz(){
	
	var s = document.getElementById('mielec');
	if (!s.checked)
	s.checked=true;
else s.checked=false;
przerysuj2 ('mielec','czerwony')    ;
})


var lpr = document.getElementById('lpr_b');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('lpr');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
      przerysuj21('lpr','lpr')    ;
})



var lpr = document.getElementById('lpr_s');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_s');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
  przerysuj3_zasieg60('hems_s','hems_s')   ;
})


var lpr = document.getElementById('lpr_s3');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('sanok60');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
    przerysuj3_zasieg60('sanok60','zasieg60')  ;
})


var lpr = document.getElementById('lpr_s6');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('sanok130');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_zasieg60('sanok130','zasieg130')  ;
})


var lpr = document.getElementById('lpr_k');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_k');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_krakow('hems_k','hems_k')     ;
})


var lpr = document.getElementById('lpr_k3');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_k_60');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
przerysuj3_krakow ('hems_k_60','zasieg60') ;
})


var lpr = document.getElementById('lpr_k6');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_k_130');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_krakow('hems_k_130','zasieg130')     ;
})


var lpr = document.getElementById('lpr_kie');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_kiel');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_kielce('hems_kiel','hems_kiel')     ;
})


var lpr = document.getElementById('lpr_kie3');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_kiel_60');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_kielce('hems_kiel_60','zasieg60')     ;
})


var lpr = document.getElementById('lpr_kie6');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_kiel_130');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
    przerysuj3_kielce('hems_kiel_130','zasieg130')  ;
})


var lpr = document.getElementById('lpr_l');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_l');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
  przerysuj3_lublin('hems_l','hems_l')    ;
})


var lpr = document.getElementById('lpr_l3');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_l_60');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_lublin('hems_l_60','zasieg60')     ;
})


var lpr = document.getElementById('lpr_l6');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('hems_l_130');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3_lublin('hems_l_130','zasieg130')  ;
})


var lpr = document.getElementById('lpr_lad');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('ladowiska');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3('ladowiska','ladowiska') ;
})


var lpr = document.getElementById('lpr_lad24');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('szpital24');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3('szpital24','noc') ;
})


var lpr = document.getElementById('lpr_lad12');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('szpital12');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3('szpital12','dzien')     ;
})


var lpr = document.getElementById('lpr_lad_g');
lpr.addEventListener('click',function przelacz(){
	
	var hems = document.getElementById('przygodne');
	if (!hems.checked)
	hems.checked=true;
else hems.checked=false;
 przerysuj3('przygodne','gmin')     ;
})




	</script>
	
	
	
	
	
	
	

<div id="mapka"></div>
</body>
</html>
		
		 
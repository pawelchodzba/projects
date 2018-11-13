
<?php
// session_start();
// if(!isset($_SESSION['zalogowany']))
// {
// 	header('Location: ../index.php');
// 	exit();
// }

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Zodiak rezerwacja sal</title>
		<link type="text/css" href="css/pepper-grinder/jquery-ui-1.8.21.custom.css" rel="stylesheet" />
		<link type="text/css" href="st_l.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		
		
</head>
<body >
<!-- <a href="../wylog.php">WYLOGUJ</a>	</br>	</br>		
<a href="../index.php">MENU GŁÓWNE</a> -->

<div id="content_all">
		<div id="content_calendar">
				<div id="input_box"></div>
			
					<div id="data_box">	
					<button id="mies_minus"><<</button>
					<div id="data_month"></div>
					<div id="data_year"></div>
					<button id="mies_plus">>></button>
				</div>
				<div id = "tabelka"></div>
		
			<div class="tooltip" id="tip1">------------</div>
		</div>
			
			<!---------------------------------------------------------------------sale svg------------------------------------>
			
		<div id="content_svg">
			<div id="box_info">
				<div id ="name"></div>
				<div id="info"></div>
				<div id="img" class="img"></div>
			</div>
	
			<div id="svg">
				<svg width ="1900" height="2400">
				
				<!-- <rect  x="0" y="0" width="1900" height="2400" fill="yellow"/> -->
				
				<!-------------------------------------sztnia 2---------------------------------------->
				<g id="s_cloakroom_6" class="sale_all">
				<rect  class="rect" x="20" y="450" width="125" height="350" />
				<circle class="center" cx="82" cy="625" r="1"/>
				<text class="text" x="270" y="460">
					<tspan x="65" dy="45">s</tspan>
					<tspan x="65" dy="45">z</tspan>
					<tspan x="65" dy="45">a</tspan>
					<tspan x="65" dy="45">t</tspan>
					<tspan x="65" dy="45">n</tspan>
					<tspan x="65" dy="45">i</tspan>
					<tspan x="65" dy="45">a</tspan>
				</text>
					</g>
				<!--------------------------------------wc 3--------------------------------------->
				<g id="s_wc_7" class="sale_all">
				<rect  class="rect" x="545" y="350" width="100" height="200" />
				<!-- <circle class="center" cx="595" cy="450" r="1"/> -->
				<text class="text" x="560" y="467" textLength="75">wc</text>
					</g>				
				<!---------------------------------------schody 4-------------------------------------->
				<g id="s_stairway_8" class="sale_all">
				<rect  class="rect" x="345" y="550" width="450" height="250" />
				<!-- <circle class="center" cx="570" cy="675" r="1"/> -->
				<text class="text" x="470" y="692" textLength="200">schody</text>
					</g>
				<!-------------------------------------------------8---------------------------->
				<rect  class="rect" x="1045" y="2200" width="100" height="75" />
				<!-- <circle class="center" cx="1095" cy="2237" r="20"/> -->
				<!----------------------------------------------bar 9------------------------------->
				<g id="s_bar_9" class="sale_all">
				<rect  class="rect" x="795" y="1650" width="200" height="150" />
				<!-- <circle class="center" cx="895" cy="1725" r="1"/> -->
				<text class="text" x="845" y="1742" textLength="100">BAR</text>
					</g>
				<!----------------------------------------------------10------------------------->
				<rect  class="rect" x="995" y="1650" width="150" height="150" />
				<!-- <circle class="center" cx="1070" cy="1725" r="20"/> -->
					</g>
				<!--------------------------------------------------schody-----11---------------------->
				<g id="s_stairway_10"  class="sale_all">
				<rect  class="rect" x="1295" y="2025" width="300" height="250" />
				<circle class="center" cx="1445" cy="2150" r="1"/>
				<text class="text" x="1345" y="2167" textLength="200">schody</text>
					</g>
				<!----------------------------------------------WC 14------------------------------->
				<g id="s_wc_11" class="sale_all">
				<rect  class="rect" x="1320" y="1300" width="275" height="275" />
				<!-- <circle class="center" cx="1457" cy="1437" r="1"/> -->
				<text class="text" x="1420" y="1454" textLength="75">wc</text>
					</g>
				<!--------------------------------------------------kierownik 15--------------------------->
				<g id="s_boss_12"  class="sale_all">
				<rect  class="rect" x="1140" y="1300" width="180" height="200" />
				<!-- <circle class="center" cx="1230" cy="1400" r="1"/> -->
				<text x="1150" y="1417" textLength="170" font-size="40" fill="white">kierownik</text>
					</g>
				<!-------------------------------------------------------szatnia 16---------------------->
				<g id="s_cloakroom_13"  class="sale_all">
				<rect  class="rect" x="895" y="1300" width="250" height="150" />
				<!-- <circle class="center" cx="1020" cy="1375" r="1"/> -->
				<text class="text" x="920" y="1392" textLength="200">szatnia</text>
				<rect  class="doors" x="10" y="645" width="20" height="150"/>
					</g>
				
				
				
				
				<g id="s_big_0"  class="sale_all">
				<rect  class="rect" x="20" y="800" width="775" height="700" />
				<circle class="circle" cx="407" cy="1150" r="50"/>
				<text class="text_nr" x="385" y="1167">1</text>
				<text class="text" x="307" y="1050" textLength="200">SALA</text>
				<text class="text" x="307" y="1250" textLength="200">duża 1</text>
				<rect  class="doors" x="195" y="790" width="100" height="20"/>
				<rect  class="doors" x="785" y="1300" width="20" height="150"/>
					</g>
				
				<g id="s_big_1" class="sale_all">
				<rect  class="rect" x="20" y="1500" width="775" height="700" />
				<circle class="circle" cx="387" cy="1850" r="50"/>
				<text class="text_nr" x="365" y="1867">2</text>
				<text class="text" x="287" y="1750" textLength="200">SALA</text>
				<text class="text" x="287" y="1950" textLength="200">duża 2</text>
				<rect  class="doors" x="785" y="1500" width="20" height="150"/>
					</g>
				
				<rect  class="doors" x="20" y="1485" width="112" height="30"/>
				<rect  class="doors" x="132" y="1485" width="112" height="30"/>
				<rect  class="doors" x="244" y="1485" width="112" height="30"/>
				
				<circle  cx="407" cy="1505" r="44" fill="black"/>
				
				<rect  class="doors" x="459" y="1485" width="112" height="30"/>
				<rect  class="doors" x="571" y="1485" width="112" height="30"/>
				<rect  class="doors" x="683" y="1485" width="112" height="30"/>
				
				<g  id="s_kitchen_2" class="sale_all">
				<rect class="rect" x="795" y="1800" width="350" height="400" />
				<circle class="circle" cx="970" cy="2000" r="50"/>
				<text class="text_nr" x="948" y="2017">3</text>
				<text class="text" x="870" y="1900" textLength="200">SALA</text>
				<text class="text" x="845" y="2100" textLength="250">kuchnia</text>
				<rect  class="doors" x="1135" y="2080" width="20" height="100"/>
				<rect  class="doors" x="785" y="2080" width="20" height="100"/>
					</g>
				<g  id = "s_midium_3" class="sale_all">
				<rect  class="rect" x="1295" y="1675" width="600" height="350" />		
				<circle class="circle" cx="1595" cy="1850" r="50"/>
				<text class="text_nr" x="1573" y="1867">4</text>
				<text class="text" x="1495" y="1750" textLength="200">SALA</text>
				<text class="text" x="1470" y="1950" textLength="250">średnia</text>
				<rect  class="doors" x="1480" y="1665" width="100" height="20"/>
				<rect  class="doors" x="1285" y="1905" width="20" height="100"/>
					</g>
				<g  id="s_small_4" class="sale_all">
				<rect  class="rect" x="1595" y="1300" width="300" height="376" />
				<circle class="circle" cx="1745" cy="1487" r="40"/>
				<text class="text_nr" x="1723" y="1504">5</text>
				<text class="text" x="1645" y="1387" textLength="200">SALA</text>
				<text class="text" x="1645" y="1587" textLength="200">mała</text>
				<rect  class="doors" x="1585" y="1570" width="20" height="100"/>
					</g>
					
					<g id="s_komi_5" class="sale_all">
				<polygon class="rect" points="20,0 20,450 145,450 345,550 545,550 545,0"/>	
				<circle class="circle" cx="282" cy="225" r="50"/>
				<text class="text_nr" x="260" y="242">6</text>
				<text class="text" x="182" y="142" textLength="200">SALA</text>
				<text class="text" x="132" y="342" textLength="300">kominkowa</text>
				<rect  class="doors" x="160" y="450" width="100" height="20"transform="rotate(25,160,450)"/>
				<rect  class="doors" x="535" y="360" width="20" height="100"/>
					</g>
				<text class= "text" x="1000" y="2350">wejście główne</text>
				<rect  class="doors" x="1145" y="2265" width="150" height="20"/>
				
				
				
				</svg>
			</div>	
		</div>
</div>

<div id='info_title'>
<div></div>
</div>
<!-- <a href="admin/admin.php" target="_blanck">Zaloguj</a> -->
	<script type="text/javascript" src="info_sale.js"></script>
		
	<script type="text/javascript" src="main.js"></script>
	
	<script type="text/javascript" src="form.js"></script>
	
	</body>
</html>



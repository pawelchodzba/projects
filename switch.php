

 <!DOCTYP HTML>
<html lang="pl">

<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: index.php');
	exit();
}

?>


<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content="Konsolidacja i przepływ informacji wśród służb biorących udział w akcjach ratowniczyczych na podkarpaciu"/>
	<meta name="keywords" content="podkarpacie, 112, 999, 998, 997, policja, straż pożarna, pogotowie ratunkowe, bezpieczeństwo">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<link rel="stylesheet" href="styl.css">
	
	
	</head>
	
	<body>
	<div class="all">
	
		<div><h2>Menu główne</h2></div>
	

		<div>
			
			<!-- <div>
				<a href="pisr/pisr.php"><input type="button" value="platforma informacyjna CPR"/></a><br>
				<a href="pisr.pdf" target="_blank">opis</a>
			</div>
			<div>
				<a href="pisr/multi_mapa.php"><input type="button"value="nowe okno mapy" /></a><br>
				<a href="multi_mapa.pdf" target="_blank">opis</a>
			</div> -->
			<div>
				<a href="typehead/autocomplete_1.php"><input type="button"value="kategorie cpr" /></a><br>
				<a href="autocomplete.pdf" target="_blank">opis</a>
			</div>
			<!-- <div>
				<a href="rezerwacja_sal/index.php"><input type="button"value="rezerwacja sal" /></a><br>
				<a href="rezerwacja_sal.pdf" target="_blank">opis</a>
			</div> -->
			<!-- <div>
				<a href="rehabilitacja/index.php"><input type="button"value="oddział szpitalny" /></a><br>
				<a href="rehabilitacja.pdf" target="_blank">opis</a>
			</div> -->
			<div>
				<a href="raport_cpr/index.php"><input type="button"value="raport CPR" /></a><br>
				<a href="raport_cpr.pdf" target="_blank">opis</a>
			</div>
			<div>
				<a href="telephons/index.php"><input type="button"value="telefony do służb" /></a><br>
				<a href="telephons.pdf" target="_blank">opis</a>
			</div>
			<div>
				<a href="http://mistrzostwa-ratownictwa.pl/" target="_blank"><input type="button"value="strona mistrzostw" /></a><br>
				<a href="mistrzostwa.pdf" target="_blank">opis</a>
			</div>
			<div>
				<a href="rescue_link/index.php"><input type="button"value="alarmowe linki" /></a><br>
				<a href="rescue_link.pdf" target="_blank">opis</a>
			</div>
			<!-- <div>
				<a href="doctor-skils/index.html"><input type="button"value="doctor skils" /></a><br>
				
			</div> -->
		</div>
		
		<div>
			<div>
				<a href="https://www.dropbox.com/s/5kxwseaxr3xqlju/mapa%20podkarpacie.pdf?dl=0" target="_blank"><input type="button" value="mapa (GIS)"/></a><br>
				<a href="mapa.pdf" target="_blank">opis</a>
			</div>
			<div>
				<a href="https://www.dropbox.com/s/cdh2tuurvu3gv45/drogi%20krajowe%202.5.xlsm?dl=0" target="_blank"><input type="button" value="drogi krajowe podkarpacie (Excel)"/></a><br>
				<a href="drogi.pdf" target="_blank">opis</a>
			</div>
		</div>

		<div><a href="wylog.php">wyloguj</a></div>
	</div>
	
</body>
</html>




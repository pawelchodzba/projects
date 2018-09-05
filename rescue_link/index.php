<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}

?>
<!DOCTYP html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Paweł Chodźba"/>
	<meta name="keywords" content=""/>
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=McLaren" rel="stylesheet">
	<link type="text/css" href="st_l.css" rel="stylesheet" />
	
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		
	
		
</head>
<body>
<a href="../wylog.php">WYLOGUJ</a>	</br>			
<a href="../index.php">MENU GŁÓWNE</a>
<div id="all">
	<center><h1>EMERGENCY LINK</h1></center>
	<div class="main_view">
	
		<button id ="open_checked">otwórz zaznaczone</button>
		<div class="tab">
			<div class="title"> <div>zaznacz</div><div>tytuł</div> <div>opis</div> <div></div>  </div>
			<div id="link" class="row"></div>
		</div>
		<button id ="save_setting">zapisz zaznaczone</button>
	</div>

	<div id="wrap_log"class="log" >
		<input  id="login">
		<input  id="haslo" type="password">
		<button id ="log">zaloguj</button>
		<button id ="wylog">wyloguj</button>
		<div id="alert"></div>
	</div>

	<div id="form_save"class="form_admin"></div>

</div>	
	
	<script src="promise.js"></script>
	<script src="create_row.js"></script>
	<script src="log.js"></script>
	<script src="send_link.js"></script>
</body>
</html>



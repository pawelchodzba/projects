<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}
?>



 <!DOCTYP HTML>
<html lang="pl">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>medikopter</title>
		<link type="text/css" href="../st_l.css" rel="stylesheet" />
		<link type="text/css" href="styl.css" rel="stylesheet" />
		<link type="text/css" href="jquery-ui.css" rel="stylesheet" />
		
		</head>
<body>
<h2>pacjenci zaplanowani</h2>

<a href="../main.php"><button id="up">powrót do strony głównej</button></a>
<div class="wrap_search">Wyszukaj:
	<div class="search">
		<div id="tab" class="typeAhead"><input type="text" value='pacjent'></div>
		<div><input type="text" id="datepicker" value='data przyjęcia'></div>
		<button id="disp_block"> pokaż wszystkich</button>
	</div>
</div>

<div id="window_all"></div>
<div id="wraper_form"></div>
<div id="mod_list_plan"></div>
<div id="content_all"></div>

<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<script> $( function() { $( "#datepicker" ).datepicker(); } );  </script>
<script src="reception/autocomplete.js"></script>
<script>$('#window_all').load('./content_show_rec.php',function(){init_auto_comlete();});</script>
<script src="reception/reception.js"></script>
<script src="../form.js"></script>
<script src="reception/form_action.js"></script>
<script src="reception/sort.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</body>
</html>

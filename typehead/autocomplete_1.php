<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}

?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset ="utf-8"/>
<tilte></tilte>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="author" content="Paweł Chodźba"/>
<link rel="stylesheet" href="autocomplit.css" type= "text/css"/>
<script src="./jq-ac/lib/jquery.js" type="text/javascript"></script><script src="./jq-ac/lib/jquery.dimensions.js" type="text/javascript"></script>
<script src="./jq-ac/jquery.autocomplete.js" type="text/javascript"></script>
  <script type="text/javascript">
$(document).ready(
   function (){
     $("input#kat").autocomplete("jq_rekomendacja.php",{width: 600,max: 80,selectFirst: false,	cacheLength:2,minLength:3});
	 
	$("input#kat").result(function(event,arr_urzadz,formatted){
	if(arr_urzadz){
		$("#grupa").html(arr_urzadz[1]);
		$("#fakultatywna").html(arr_urzadz[2]);
		$("#wiodaca").html(arr_urzadz[3]);
		var grupa =document.getElementById('grupa').innerHTML;
		if (grupa!="")
		document.getElementById('schowaj').style.display='block';
		document.getElementById('clear').style.display='block';
		
		var fakul =document.getElementById('fakultatywna').innerHTML;
		var wiod =document.getElementById('wiodaca').innerHTML;
		if (fakul!=""||wiod!="")
		document.getElementById('powiadomienie').style.display='block';
		
		
		
	}
});
	 
});

</script>
</head>
<body>
<a href="../wylog.php">WYLOGUJ</a>	</br>	</br>		
<a href="../index.php">MENU GŁÓWNE</a>	
<div id="ramka">

		<div id="kat_podkat">Kategoria.podkategoria</div>
		<form action="" method="post" name="ankieta">
			<input id="kat" name="urzadzenia" type="text" /> 

			<center><input id="clear" type="submit" value="Wyczyść" /></center>
		</form>


	<div id="schowaj">
		<center><div class="linia"><div class="pyt">Rekomendowane pytania</div></div></center>

		<div id="grupa"></div>
	</div>	
		
		
	<div id="powiadomienie">
			<center><div class="linia"><div class="pyt"> Powiadamiane służby</div></div></center>
			<div class="sluzby" >Wiodąca</div>
			<div class="sluzby">Pomocnicza</div>
			
			<div style="clear:both"></div>
			
			<div class="sluzby" id="wiodaca"></div>
			<div class="sluzby" id="fakultatywna"></div>
			
	</div>	


</div>

</body>


</html>
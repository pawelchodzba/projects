<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../../index.php');
	exit();
}

?>
<!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content=""/>
	<link rel="stylesheet" href="style_pozost.css" type= "text/css"/>
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
		
	
	</head>
	<body>
	
<div id="ramka">

	<div id="naglowek"> 
Wodne Ochotnicze Pogotowie Ratunkowe
	</div>
	
			
			
				<center>
			
						<table><caption>Polańczyk</caption>
					
					<tr><td>	<a href ="skype:+48134666164?call">134666164</a>	</td></tr>
						</table>
		
			</center>
		
			
</div>
	
	
	
	</body>
	
	</html>
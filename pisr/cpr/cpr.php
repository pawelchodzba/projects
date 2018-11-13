
<!-- <?php
// session_start();
// if(!isset($_SESSION['zalogowany']))
// {
// 	header('Location: ../../index.php');
// 	exit();
// }

?> -->

<!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content=""/>
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	
	<link rel="stylesheet" href="stylcpr.css" type= "text/css"/>
	
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
		
		<div id="logo"><img src="logo.png"/></div>
		<div id="glowa" > Centrum Powiadamiania Ratunkowego </div>
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
			<div class="panel" id="panel1"><br/>
			
			
				<div id="tytul">Siedziba Centrum Powiadamiania Ratunkowego znajduje się w Rzeszowie na ulicy Gruwaldzkiej 15 w pokoju numer 18.
				Podlega pod wydział Bezpieczeństwa i Zarządzania Kryzysowego.</div>
				
				
				<table>
				<tr>	<td>	Dyrektor Wydziału: Piotr Skworzec<br/>zk@rzeszow.uw.gov.pl<br/>nr pokoju: 711 	</td>	<td>	<a href ="skype:+48178671917?call">178671917</a>	</td>	</tr>
				<tr>	<td>	Zastępca Dyrektora: Jakub Dzik<br/>zk@rzeszow.uw.gov.pl<br/>nr pokoju: 711 	</td>	<td>	<a href ="skype:+48178671917?call">178671917</a>	</td>	</tr>
				<tr>	<td>	Kierownik CPR: Ewelina Czenczek<br/><br/>	</td>	<td>	brak
				<!-- <a href ="skype:+48602225206?call">602225206</a> -->
				</td>	</tr>
				<tr>	<td>	Zastępca Kierownika CPR: Bogusław Broda<br/><br/>	</td>	<td>	<a href ="skype:+48783934484?call"></a>	</td>	</tr>


				</table>
			
			</div>
			
				
			
	<div class="panel" id="panel2"><br/>
			
</div>

</body>



</html>
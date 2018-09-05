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
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	
	<link rel="stylesheet" href="stylpsp.css" type= "text/css"/>
	
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
		<div id="a999">998</div>
		<div id="logo"><img src="logo.png"width="55px"height="60px"/></div>
		<div id="glowa" > Straż Pożarna </div>
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
			<div class="panel" id="panel1">


				<table>
				<tr><td> Komenda </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><p> Wojewódzka<img src="icon/kws.png"/></p><p>Miejska<img src="icon/kms.png"/></p><p>Powiatowa<img src="icon/kps.png"/></p></td></tr>				</table>
				<table>
	
		
				
				<tr><td> Jednostka Ratowniczo<br/>Gaśnicza </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><img src="icon/jrg.png"/></td></tr>
				</table>	
				
				<table>
				
				<tr><td>Posterunek  </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><img src="icon/post_psp.png"/></td></tr>				</table>


				<table>
				<tr><td> Lotniskowa Straż <br/> Pożarna </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><img src="icon/lotnis_psp.png"/></td></tr>				</table>
				
					<table>
				<tr><td>Grupa Specjalistyczna  </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><p>Chemicznego<img src="icon/chem.png"/></p><p>Nurkowego<img src="icon/nur.png"/></p><p>Wysokościowego<img src="icon/wys.png"/></p><p>Poszukiwawcza<img src="icon/posz.png"/></p>Technicznego<p><img src="icon/tech.png"/></p></td></tr>				</table>
				
					<table>
				<tr><td> Ochotnicza<br/>Straż Pożarna </td><td>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<a target="_blanc" href="">źródło</a></td><td><p>Należące do KSRG<img src="icon/KSRG.png"/></p><p>Pozostałe<img src="icon/pozos.png"/></p></td></tr>				</table>

			</div>
			
			<div class="panel" id="panel2">2bla bla bla </div>
			<div class="panel" id="panel3">3bla bla bla </div>
			<div class="panel" id="panel4">4bla bla bla </div>
			<div class="panel" id="panel5">5bla bla bla </div>
		</div>



	</div> 
</div>

</body>



</html>
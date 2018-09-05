<?php
// session_start();

// 	if ((!isset($_SESSION['zalogowany'])))
// 	 {
// 	 header('Location: index.php');
//  exit();
// 	}

?>
 <!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content="ZODIAK"/>
	<meta name="keywords" content="zodiak">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	<link type="text/css" href="styl_admin.css" rel="stylesheet" />
	<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
	
	</head>
	
	<body>

	<div class= "tabbePanels">
		<ul class="tabs">
		<li><a href="#panel1">Edycja</a></li>
		<li><a href="records.php">Nowy rekord</a></li>
	</ul>
	<a href="wylog.php">"WYLOGUJ"</a>	
	<div class="panelContainer">
					<div class="panel" id="panel1">
						<!-- <div class="content_top"> -->
							<!-- <div id="user_log">Użytkownik: <//?php echo $_SESSION['log_name']; ?></div> -->
							
							
							<!-- <div class="filtr">
							<span>Filtruj:</span>
								Miesiąc:<select id="month">
									<option ></option>
									<option value=1>styczeń</option>
									<option value=2>luty</option>
									<option value=3>marzec</option>
									<option value=4>kwiecień</option>
									<option value=5>maj</option>
									<option value=6>czerwiec</option>
									<option value=7>lipiec</option>
									<option value=8>sierpień</option>
									<option value=9>wrzesień</option>
									<option value=10>październik</option>
									<option value=11>listopad</option>
									<option value=12>grudzień</option>
								</select>
								Numer sali:<select id="sala">
									<option ></option>
									<option value=1>1</option>
									<option value=2>2</option>
									<option value=3>3</option>
									<option value=4>4</option>
									<option value=5>5</option>
									<option value=6>6</option>
								</select>
								
								<input id="for_new"  type="button"value="sortuj od najnowszych"/>
							</div> -->
					
							
						<div id="content_tab"><!------------ table ----------------></div>	
						
					
						
					</div>
				</div>
				
				<div class="panel" id="panel2">
					<div id="new_record_content"></div>
				
				</div>
</div>
	<script>$(document).ready(function() { 
	
	$('.tabs a').click(function(){
		$this=$(this);
		$('.panel').hide();
		$('.tabs a.active').removeClass('active');
		$this.addClass('active').blur();
		var panel = $this.attr('href');
		$(panel).fadeIn(250);
		//return false;
		});
		$('.tabs li:first a').click();
		});
		</script>
		
<script type="text/javascript" src="sort.js"></script>
</body>
</html>





<?php
session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
	header('Location: switch.php');
	exit();
	}

?>

 <!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<tilte><tilte/>
	<meta name="description" content="Konsolidacja i przepływ informacji wśród służb biorących udział w akcjach ratowniczyczych na podkarpaciu"/>
	<meta name="keywords" content="podkarpacie, 112, 999, 998, 997, policja, straż pożarna, pogotowie ratunkowe, bezpieczeństwo">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<meta name="author" content="Paweł Chodźba"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styl.css">
</head>
	
	<body>
<div class="container">	
	<header>
		<h4>Witam na stronie prezentującej projekty.</h4>
		<p>Nazywam się Paweł Chodźba od 2 lat uczę się programować. <br>
		Przedstawione aplikacje są wynikiem procesu uczenia się,
			i należy je w ten sposób traktować (kolejnoć jest chronologiczna). </p>
	</header>
	
	<div class="row">
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="pisr/pisr.php" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Platforma </button></a>
			<a href="opis/opis-pdf/pisr.pdf" target="_blank">Opis</a>
			<a href="https://github.com/pawelchodzba/pisr">Github</a> 
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="pisr/multi_mapa.php" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Mapa </button></a>
			<a href="opis/opis-pdf/multi_mapa.pdf" target="_blank">Opis</a>
			<a href="https://github.com/pawelchodzba/pisr">Github</a> 
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="rezerwacja_sal/index.php" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Rezerwacja sal </button></a>
			<a href="opis/opis-pdf/rezerwacja_sal.pdf" target="_blank">Opis</a>
			<a href="https://github.com/pawelchodzba/rezerwacja-sal">Github</a> </div>
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="rehabilitacja/main.php" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Oddział szpitalny </button></a>
			<a href="opis/opis-pdf/rehabilitacja.pdf" target="_blank">Opis</a>
			<a href="https://github.com/pawelchodzba/oddzial-szpitalny">Github</a> 
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="doctor-skils/index.html" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Doctor skils </button></a>
			<a href="#" target="_blank">Opis</a>
			<a href="https://github.com/pawelchodzba/doctor-skills">Github</a> 
		</div>
		<div class="col-sm-6 col-md-4 col-xl-3 project">
			<a href="clientlist/index.html" target= "_blank"><button class="btn btn-secondary btn-lg btn-block">Lista klientów</button></a>
			<a href="opis/opis-pdf/lista-klientow.pdf">Opis</a>
			<a href="https://github.com/pawelchodzba/lista-klientow">Github</a> 
		</div>
	</div>
	<div class="form">Projekty dostępne po zalogowaniu
			<form action="a.php" method="post">
				<div>
					<label>login<input type="text" name="login" class="form-control form-control-sm"/></label>
				</div>
				<div>
					<label>haslo<input type="password" name="haslo" class="form-control form-control-sm"/></label>
				</div>
				<div>
					<label><input type="submit" value="zaloguj się" class="btn btn-success btn-block"/></label> 
				</div>
			</form>
			<div>
				<?php
					if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
				?>
			</div>
	</div>
</div>
		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>




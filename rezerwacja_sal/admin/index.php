
<?php
// session_start();

// 	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
// 	{
// 	header('Location: admin.php');
// 	exit();
// 	}

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
	
	</head>
	
	<body>
	Zodiak<br/><br/>
	
	<form action="a.php" method="post">
	
	
	login<br/><input type="text" name="login"/> <br/>
    haslo<br/><input type="password" name="haslo"/> <br/><br/>
	<input type="submit" value="zaloguj się"/>
	
	</form>
	
	<?php

		if(isset($_SESSION['blad']))		echo $_SESSION['blad'];

?>

</body>
</html>




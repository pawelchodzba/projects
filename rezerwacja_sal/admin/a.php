
<?php
session_start();

if((!isset($_POST['login']))|| (!isset($_POST['haslo'])))
{
	header('Location:index.php');
	exit();
}

require_once "../lacznosc_rezerwacja.php";	
	
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno!=0)
{
	echo "ERROR".$polaczenie->connect_errno;
}
	
else
{
	
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	//$_SESSION['log_name']=$login;
	
	
		
	$login= htmlentities($login, ENT_QUOTES, "UTF-8");
	$haslo= htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
				
			if	($wynik= $polaczenie->query(sprintf("SELECT * FROM uprawnieni WHERE logi='%s' AND has ='%s'",
					mysqli_real_escape_string($polaczenie,$login),
					mysqli_real_escape_string($polaczenie,$haslo))))
				{
					$ilu_uprawnionych=$wynik->num_rows;
				if ($ilu_uprawnionych>0)
				{
					$_SESSION['zalogowany']= true;
					$wiersz=$wynik->fetch_assoc();
					$logi = $wiersz['logi'];
					
					unset($_SESSION['blad']);
					$wynik->close();
					header('Location: admin.php');
					
				}	else{
					
				$_SESSION ['blad'] = '<span style ="color:red"> Nieprawidłowy login lub hasło</span>';
				header('Location:index.php');
					
				}
				}
				
			$polaczenie->close();	
}
			


?>

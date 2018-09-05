
<?php
session_start();

 if(!$json=json_decode($_POST['php'],true)){ echo 'must be type json file';exit();};

	//if((!isset($_POST['login']))|| (!isset($_POST['haslo'])))
	//{
		//echo 'nie ma post';
		//header('Location:index.php');
	//	exit();
	//}

	require_once "lacznosc_link.php";	
		
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name)	;

	if ($polaczenie->connect_errno!=0)
	{
		echo "ERROR".$polaczenie->connect_errno;
	}
		
	else{

	
	
	$login = $json['login'];
	$haslo = $json['haslo'];
	//$login = $_POST['login'];
	//$haslo = $_POST['haslo'];
	//$_SESSION['log_name']=$login;
	
	
	

	
	$login= htmlentities($login, ENT_QUOTES, "UTF-8");
	$haslo= htmlentities($haslo, ENT_QUOTES, "UTF-8");

				
			if	($wynik= $polaczenie->query(sprintf("SELECT * FROM users WHERE login='%s' AND haslo ='%s'",
					mysqli_real_escape_string($polaczenie,$login),
					mysqli_real_escape_string($polaczenie,$haslo))))
				{
					
					$ilu_uprawnionych=$wynik->num_rows;
						if ($ilu_uprawnionych>0)
						{
						
						$wiersz=$wynik->fetch_assoc();
						
						$logi = $wiersz['login'];
						$checked=$wiersz['checked'];
						$admin=$wiersz['admin'];
						$id=$wiersz['id'];
						$_SESSION['zalogowany']=true;
						///unset($_SESSION['blad']);
						$wynik->close();
						//header('Location: index.php');
						
						print_r(json_encode([$logi,$checked,$admin,$id]));
						
					}	else{
				
				print_r(json_encode(false)) ;
				//header('Location:index.php');
					
				}
				}
				
			$polaczenie->close();	
}
			


?>

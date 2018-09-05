
<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

if(isset($_GET['id'])&& is_numeric($_GET['id'])){
	$id=$_GET['id'];
	if($stmt=$polaczenie->prepare("DELETE FROM pacjenci  WHERE id= ? LIMIT 1")){
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}else{echo 'Błąd zapytania';}
	$polaczenie->close();
	header('Location: show_rec.php');
}else{
	header('Location: show_rec.php');
}


	
	
$polaczenie->close();
?>


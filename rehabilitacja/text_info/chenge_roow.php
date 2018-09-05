<?php


session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: index.php');
	exit();
}

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

if(isset($_GET['nfz_roow'])){
	if(is_numeric($_GET['nfz_roow'])){
	$roow=$_GET['nfz_roow'];
	$sql=$polaczenie->prepare("UPDATE  nfz SET roow=?");
	$sql->bind_param('i',$roow);
	$sql->execute();
	$sql->close();
	
	$sql_nfz=$polaczenie->query("SELECT * FROM nfz ");
	$nfz=mysqli_fetch_array($sql_nfz);
	echo $_SESSION['roow']=$nfz['roow'];
	$sql_nfz->close();
	
	}else{echo'wartość musi btyć cyfrą';}
}else{echo 'błąd wartości';}
 
?>
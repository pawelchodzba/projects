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

if(isset($_GET['nfz_roz'])){
	if(is_numeric($_GET['nfz_roz'])){
	$roz=$_GET['nfz_roz'];
	$sql=$polaczenie->prepare("UPDATE  nfz SET roz=?");
	$sql->bind_param('i',$roz);
	$sql->execute();
	$sql->close();
	
	$sql_nfz=$polaczenie->query("SELECT * FROM nfz ");
	$nfz=mysqli_fetch_array($sql_nfz);
	echo $_SESSION['roz']=$nfz['roz'];
	$sql_nfz->close();
	
	}else{echo'wartość musi btyć cyfrą';}
}else{echo 'błąd wartości';}
 
?>
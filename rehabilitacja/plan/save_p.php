<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

if(isset($_POST['data'])){
	$data=$_POST['data'];
	
	$name= strip_tags($data['name']);
	$diagnosis= strip_tags($data['diagnosis']);
	$date= strip_tags( $data['date']);
	$check_date= strip_tags($data['check_date']);
	$sex_send=strip_tags($data['sex_send']);
	
	$sql=$polaczenie->prepare("INSERT  plan (nazwa,rozpoz,sex,data,check_date) VALUES (?,?,?,?,?)");
	$sql->bind_param('ssiss',$name,$diagnosis,$sex_send,$date,$check_date);
	$sql->execute();
	$sql->close();
}else{
	echo'błąd';
}

?>
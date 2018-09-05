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

$sql=$polaczenie->query("SELECT price_nfz FROM data_count");
$tab_rec=[];
while($one_record=mysqli_fetch_array($sql)){
$rec=$one_record['price_nfz'];
array_push($tab_rec,$rec);	
}

$sum=array_sum($tab_rec);

$_SESSION['bilans_wypisow']=$sum;
echo 'Bilans od 16-10-2017:</br> <spam>'.$sum.' zł</spam></br>  (na podstawie wypisów) ';
$sql->close();	






?>
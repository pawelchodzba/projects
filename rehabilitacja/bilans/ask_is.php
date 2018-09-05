<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}
include 'count_nfz.php';

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$sql=$polaczenie->query("SELECT  data,check_date,nfz FROM pacjenci ");

$p=computed($sql);
$_SESSION['bilans_biezacy']=$p;
echo 'Bilans bieżący:</br> <spam>'.$p.' zł</spam></br> ';
?>


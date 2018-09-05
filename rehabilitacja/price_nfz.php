<?php 

require_once "./lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$sql_nfz=$polaczenie->query("SELECT * FROM nfz ");
$nfz=mysqli_fetch_array($sql_nfz);
$_SESSION['rop']=$nfz['rop'];
$_SESSION['roow']=$nfz['roow'];
$_SESSION['roo']=$nfz['roo'];
$_SESSION['rozw']=$nfz['rozw'];
$_SESSION['roz']=$nfz['roz'];
$sql_nfz->close();
?>


<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
if (isset($_GET['id'])){
$id =$_GET['id'];
$price_nfz =$_GET['price_nfz'];
$day_long =$_GET['day_long'];
$day_nfz =$_GET['day_nfz'];
$date_now=new DateTime();
$date_now=$date_now->format('d-m-Y');

$sql_patient=$polaczenie->query("SELECT nazwa,rozpoz,data,check_date,sex,walk,nfz FROM pacjenci  WHERE id_luzka='$id' ");
$patient=mysqli_fetch_array($sql_patient);
echo' Pacjent '.$patient['nazwa'].' został usunięty';
$rozpoz=$patient['rozpoz']; 
$data=$patient['data']; 
$check_date=$patient['check_date']; 
$sex=$patient['sex']; 
$walk=$patient['walk']; 
$nfz=$patient['nfz']; 




 
 $sql_save=$polaczenie->prepare("INSERT data_count (rozpoz ,data,check_date,sex,walk,nfz,data_now,price_nfz,day_long,day_nfz ) VALUES(?,?,?,?,?,?,?,?,?,?)");
$sql_save->bind_param('sssiiissii',$rozpoz,$data,$check_date,$sex,$walk,$nfz,$date_now,$price_nfz,$day_long,$day_nfz);
$sql_save->execute();
$sql_save->close();

$sql=$polaczenie->prepare("DELETE  FROM pacjenci  WHERE id_luzka=? LIMIT 1");
$sql->bind_param('s',$id);
$sql->execute();
$sql->close();
}else {echo 'błąd';}
?>
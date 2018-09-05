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
$id_luzka= strip_tags($data['id_luzka']);
//$nr_sali= strip_tags( $data['nr_sali']);
//$id_sali= strip_tags($data['id_sali']);
$diagnosis= strip_tags($data['diagnosis']);
$description= strip_tags($data['description']);
$date= strip_tags( $data['date']);
$week_1= strip_tags($data['week_1']);
$week_2= strip_tags($data['week_2']);
$week_3= strip_tags($data['week_3']);
$week_4= strip_tags($data['week_4']);
$week_5= strip_tags($data['week_5']);
$check_date= strip_tags($data['check_date']);
$sex_send=strip_tags($data['sex_send']);
$walk_send= strip_tags($data['walk_send']);
$nfz_send= strip_tags($data['nfz_send']);


 $sql=$polaczenie->prepare("UPDATE  pacjenci SET nazwa=?, rozpoz=?, opis=?, data=?, week_1=?, week_2=?, week_3=?, week_4=?, week_5=?, check_date=?,sex=?,walk=?,nfz=? WHERE id_luzka=? ");

 $sql->bind_param('ssssssssssiiis',$name,$diagnosis,$description,$date,$week_1 , $week_2,$week_3,$week_4,$week_5,$check_date,$sex_send,$walk_send,$nfz_send,$id_luzka);

  
 
$sql->execute();
$sql->close();
			
echo 'Dane pacjenta '.$name.' zostały zaktualizowane';
}else{
	echo'błąd';
}



?>
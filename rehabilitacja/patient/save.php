<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
if(isset($_POST['data'])){
$data=$_POST['data'];
$check_date= strip_tags($data['check_date']);
include 'data_week.php';

$name= strip_tags($data['name']);
$name_tab=[$name];
print_r(json_encode($name_tab));
//));
$id_luzka= strip_tags($data['id_luzka']);
$nr_sali= strip_tags( $data['nr_sali']);
$id_sali= strip_tags($data['id_sali']);
$diagnosis= strip_tags($data['diagnosis']);
$description= strip_tags($data['description']);
$date= strip_tags( $data['date']);
//$week_1= strip_tags($data['week_1']);
$week_1= $week1;
$week_2= $week2;
$week_3= $week3;
$week_4= $week4;
$week_5= $week5;

$sex_send=strip_tags($data['sex_send']);
$walk_send= strip_tags($data['walk_send']);
$nfz_send= strip_tags($data['nfz_send']);

$sql=$polaczenie->prepare("INSERT  pacjenci (nazwa, id_luzka, nr_sali, id_sali, rozpoz, opis, data, week_1, week_2, week_3, week_4, week_5, check_date,sex,walk,nfz) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$sql->bind_param('ssissssssssssiii',$name,$id_luzka ,$nr_sali, $id_sali,$diagnosis,$description,$date,$week_1 , $week_2,$week_3,$week_4,$week_5,$check_date,$sex_send,$walk_send,$nfz_send);

$sql->execute();
$sql->close();
//print_r($tab_friday);			
}else{
	echo'błąd';
}

?>
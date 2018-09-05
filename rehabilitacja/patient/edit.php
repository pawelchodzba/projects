<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
if(isset($_POST['id'])){

$id =$_POST['id'];

 $sql=$polaczenie->prepare("SELECT *  FROM pacjenci  WHERE id_luzka=?");

 $sql->bind_param('s',$id);

$sql->execute();
$sql->bind_result($id_,$name,$id_luzka ,$nr_sali, $id_sali,$diagnosis,$description,$date,$week_1 , $week_2,$week_3,$week_4,$week_5,$check_date,$sex_send,$walk_send,$nfz_send);
$sql->fetch();
$tab=[$name,$id_luzka,$nr_sali,$id_sali,$diagnosis,$description,$date,$week_1,$week_2,$week_3,$week_4,$week_5,$check_date,$sex_send,$walk_send,$nfz_send];

$b=json_encode($tab);
print_r($b);
$sql->close();
}else{
	echo'błąd';
}

?>
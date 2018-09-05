<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}

require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$id =$_GET['id'];
// $id ='s_2_1';

 $sql=$polaczenie->prepare("SELECT id_luzka  FROM pacjenci  WHERE id_luzka=?");

 $sql->bind_param('s',$id);

$sql->execute();
$sql->bind_result($id_luzka);
$sql->fetch();
echo $id_luzka;

//$a=implode(',',$tab);
// $b=json_encode($tab);
// print_r($b);
$sql->close();

?>
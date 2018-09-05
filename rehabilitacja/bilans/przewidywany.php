<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}
if (isset($_SESSION['bilans_wypisow'])&&isset($_SESSION['bilans_biezacy'])){
echo 'Bilans przewidywany:<br> <spam>';
echo $_SESSION['bilans_wypisow']+$_SESSION['bilans_biezacy'];
echo ' zł</spam><br> ';
}else{
	//header('Location:../index.php');
	echo"";
}

?>


<?php

session_start();
require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");


	
	$sql_p=$polaczenie->query("SELECT id_luzka FROM pacjenci ");
	$patient="";
	while($patients= mysqli_fetch_array($sql_p)){
		$patient++;
	};
	
	echo $patient;
	
	$sql_p->close();

 
?>
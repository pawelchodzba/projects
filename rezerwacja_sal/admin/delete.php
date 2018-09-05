<?php
session_start();

// 	if ((!isset($_SESSION['zalogowany'])))
// 	 {
// 	 header('Location: index.php');
//  exit();
// 	}


include('../lacznosc_rezerwacja.php');
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
$mysqli->set_charset("utf8");

if(isset($_GET['id'])&& is_numeric($_GET['id'])){
	
$id =$_GET['id'];
	
	
	if($stmt =$mysqli->prepare("DELETE FROM sala_1 WHERE id=? LIMIT 1 ")){
		
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$stmt->close();
	}else{
		echo 'Błąd zapytania';
	}
	
	$mysqli->close();
	header("location: admin.php");
	
}else{
	header("location: admin.php");
}



?>

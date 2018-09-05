<?php
session_start();

if(!isset($_SESSION['zalogowany'])){exit();}
	else{
			require_once "./lacznosc_link.php";
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			$polaczenie->set_charset("utf8");


			$all=json_decode($_POST['php'],true);
			print_r($id_checkboxes=$all['check']);
			$id_user=$all['user_id'];

			$sql=$polaczenie->prepare("UPDATE users SET checked=? WHERE id=? ");

			 $sql->bind_param('si',$id_checkboxes,$id_user);
			 $sql->execute();
			 $sql->close();
	}
		

?>
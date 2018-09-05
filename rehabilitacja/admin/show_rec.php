
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>medikopter</title>
		
		<link type="text/css" href="styl.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		</head>
<body>
<h2>pacjenci zapisani</h2>
<button><a href="../main.php">powrót do strony głównej</a></button>
<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}



require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
if($result=$polaczenie->query("SELECT * FROM pacjenci ORDER BY id DESC")){
	
	if($result->num_rows >0){
		echo"<table>";
		echo"<tr><th>ID</th><th>pacjent</th><th>rozpoznanie</th><th>data </br>przyjęcia</th><th>planowana </br>data</br>wypisu</th><th>płeć</th><th>sprawność</th><th> kategoria</br>nfz</th><th>1 tydzień</th><th>2 tydzień</th><th>3 tydzień</th><th>4 tydzień</th><th>5 tydzień</th><th>edytuj</th><th>usuń</th></tr>";
		while ($row=$result->fetch_object()){
			echo"<tr>";
			echo"<td>" . $row->id ."</td>";
			echo"<td>" . $row->nazwa ."</td>";
			echo"<td>" . $row->rozpoz ."</td>";
			echo"<td>" . $row->data ."</td>";
			echo"<td>" . $row->check_date ."</td>";
			echo"<td>" . $row->sex ."</td>";
			echo"<td>" . $row->walk ."</td>";
			echo"<td>" . $row->nfz ."</td>";
			echo"<td>" . $row->week_1 ."</td>";
			echo"<td>" . $row->week_2 ."</td>";
			echo"<td>" . $row->week_3."</td>";
			echo"<td>" . $row->week_4 ."</td>";
			echo"<td>" . $row->week_5 ."</td>";
			
			echo"<td> <a href='records.php?id=" .$row->id. " '>Edytuj</a></td>";
			echo"<td> <a href='delete.php?id=" .$row->id. " '>Usuń</a></td>";
			
			echo"</tr>";
		}
			
		echo"</table>";
			
	}else{echo 'Brak rekordów';}
	
	
}else{echo "Błąd: ".$polaczenie->error;}
$polaczenie->close();
?>


</body>
</html>

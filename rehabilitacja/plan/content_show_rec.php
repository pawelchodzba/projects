
<?php



require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");


if($result=$polaczenie->query("SELECT * FROM plan ORDER BY id DESC")){
	
	if($result->num_rows >0){
		echo"<table>";
	
	echo"<tr><th>ID</th><th>pacjent</th><th>rozpoznanie</th><th>data </br>przyjęcia</th><th>planowana </br>data</br>wypisu</th><th>płeć</th></tr>";
		
		while ($row=$result->fetch_object()){
			$sex=$row->sex==0 ? "K" :"M";
			echo"<tr data-row=".$row->id.">";
			echo"<td >" . $row->id ."</td>";
			echo"<td>" . $row->nazwa ."</td>";
			echo"<td>" . $row->rozpoz ."</td>";
			echo"<td>" . $row->data ."</td>";
			echo"<td>" . $row->check_date ."</td>";
			echo"<td>" . $sex ."</td>";
						
			echo"<td> <a href='records.php?id=" .$row->id. " '>Edytuj</a></td>";
			echo"<td> <a href='delete.php?id=" .$row->id. " '>Usuń</a></td>";
			echo"<td ><a href='#up'><button  data-nr_row=".$row->id.">zapisz pacjenta </button></a></td>";
			
			echo"</tr>";
		}
			
		echo"</table>";
			
	}else{echo 'Brak rekordów';}
	
	
}else{echo "Błąd: ".$polaczenie->error;}
$polaczenie->close();
?>


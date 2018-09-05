<?php


session_start();
// if(!isset($_SESSION['zalogowany']))
// {
	// header('Location: index.php');
	// exit();
// }

require_once "../lacznosc_rezerwacja.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$sql=$polaczenie->query("SELECT  nfz FROM pacjenci ");
$result=[0,0,0,0,0];	
while($one_record=mysqli_fetch_array($sql)){;

	$nfz=$one_record['nfz'];
	if($nfz==1){$result[0]++;}
	else if($nfz==2){$result[1]++;}
	else if($nfz==3){$result[2]++;}
	else if($nfz==4){$result[3]++;}
	else if($nfz==5){$result[4]++;}
	else{return;}
}
print_r(json_encode($result));
//$sum=array_sum($tab_rec);

$sql->close();	






?>
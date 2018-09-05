
<?php
session_start();

require_once "lacznosc_rezerwacja.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$month=$_GET['month'];
$year=$_GET['year'];
$sala=$_GET['sala'];

$sql=$polaczenie->query("SELECT od_h,do_h,dey FROM sala_1 WHERE month='$month' AND sala='$sala' AND year='$year' ORDER BY od_h");


$tab=[];
while($title_cols=mysqli_fetch_array($sql)){
	
array_push( $tab,$title_cols['od_h'] ,$title_cols['do_h'],$title_cols['dey']);
}
//echo json_encode($tab);





//print_r($tab);
//$tab_2=[];
foreach($tab as $key=>$value ){
	
	echo $value.'_';
}
//echo  $month;
//echo  $year;
//print_r($tab);
//echo $tab[2];
//$user=$title_cols['user'];
//for ($i;=0;$i<count($tab);$i++){
	
	
	
//}
//print_r($tab)  //$user;






?>

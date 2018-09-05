
<?php

session_start();

if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../../../index.php');
	exit();
}

require_once "lacznoscGmin.php";
$polaczenie_gmin = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie_gmin->set_charset("utf8");


$powiat_gmin= $_SESSION['powiat'];
$id_gmin=$_GET['id_gmin'];

$sql_gmin=$polaczenie_gmin->query("SELECT x_g,y_g FROM $powiat_gmin WHERE nazwa='$id_gmin'");

echo'<svg id="svgwielobok"width="1000" height="1000">';  
echo '<polygon id="rze"class="pow_g"points="';

while($one_gmin=mysqli_fetch_array($sql_gmin)){
	$x_g=$one_gmin['x_g'];
	$y_g=$one_gmin['y_g'];
	 $x_y_g= $x_g.",".$y_g." ";
print_r($x_y_g);}
	
echo'"fill="url(#lg_p)"/>';	






echo '</svg>'; 

?>

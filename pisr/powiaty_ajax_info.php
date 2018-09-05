
<?php


session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}





require_once "../lacznoscBaza.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
$pow=$_GET['id_php'];
// $pow='kjhg';
//echo $pow;

$sql=$polaczenie->query("SELECT*FROM info WHERE alias='$pow'");

$one_rows=mysqli_fetch_array($sql);

echo '<p>'.$one_rows['nazwa'].'</p>';
echo '<hr/>';
echo '<p>'.$one_rows['adres'].'</p>';
echo '<hr/>';
echo '<p>'. 'tel: '.$one_rows['tel'].'</p>';
echo '<hr/>';
echo '<p>'.$one_rows['www'].'</p>';
echo '<hr/>';
echo '<p>'.$one_rows['email'].'</p>';

//print_r ($one_rows);
?>

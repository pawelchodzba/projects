<?php


require_once "./lacznosc_link.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");


$sql=$polaczenie->query("SELECT *  FROM link");

$arr=[];
while($link=mysqli_fetch_array($sql)){
	$object=(object)[
		'id'=>$link['id'],
		'title'=>$link['title'],
		'url'=>$link['url'],
		'description'=>$link['description'],
	];

array_push($arr,$object);	

}
print_r(json_encode($arr));

?>
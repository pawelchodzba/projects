<?php
session_start();
// if(!isset($_SESSION['zalogowany']))
// {header('Location:../index.php');
// exit();}


require_once "./lacznosc_link.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

	if(isset($_GET['url'])&&isset($_GET['description'])&&isset($_GET['title'])){
	$url=$_GET['url'];
	$description=$_GET['description'];
	$title=$_GET['title'];

	$title=strip_tags($title);
	$url=strip_tags($url);
	$description=strip_tags($description);

	$sql=$polaczenie->prepare("INSERT  link (title,url,description) VALUES (?,?,?)");
	$sql->bind_param('sss',$title,$url,$description);

	$sql->execute();
	$sql->close();
			
	}else{
		echo 'error data ajax';
	}
?>
<?php

session_start();
if(!$json=json_decode($_POST['php'],true)){ echo 'must be type json file';exit();};
require_once "./lacznosc_link.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$id=$json['id'];
$sql=$polaczenie->prepare("DELETE  FROM link  WHERE id=? LIMIT 1");
$sql->bind_param('i',$id);
$sql->execute();
$sql->close();

?>
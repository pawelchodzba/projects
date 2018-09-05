<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");




function create_form($nazwa='',$rozpoz='',$data='',	$check_date='', $error='',$id=''){ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link type="text/css" href="styl.css" rel="stylesheet" />
		<!-- <script type="text/javascript" src="jquery-3.2.1.min.js"></script> -->
		</head>
<body>

<?php if($error !=' '){
	echo "<div style='color:red; padding: 5px'>".$error ."</div>";
	} ?>

<form action="" method="post">
<div>
	<input type="hidden" name="id" value="<?php echo $id;  ?>" />
	<p><lebel>pacjent </label><input type="text" name="nazwa" value="<?php echo $nazwa;  ?>" /></p>
	<p><lebel>Rozpoznanie  </label><input type="text" name="rozpoz" value="<?php echo $rozpoz;  ?>" /></p>
	<p><lebel> Data przyjęcia </label><input type="text" name="data" value="<?php echo $data;  ?>" /></p>
	<p><lebel>	Data wypisu  </label><input type="text" name="check_date" value="<?php echo $check_date;  ?>" /></p>

	
	
	<input type="submit" name="submit" value="wyślij"/>
	</form>
</div>




<h2>baza pacjentów</h2>
</body>
</html>	
<?php }

if(isset($_GET['id'])){

	if(isset($_POST['submit'])){
	
		if(is_numeric($_POST['id'])){
			$id=$_POST['id'];
			$nazwa=htmlentities($_POST['nazwa'],ENT_QUOTES);
			$rozpoz=htmlentities($_POST['rozpoz'],ENT_QUOTES);
			$data=htmlentities($_POST['data'],ENT_QUOTES);
			$check_date=htmlentities($_POST['check_date'],ENT_QUOTES);
					
		
			if($rozpoz==''||$data==''||$check_date==''||$nazwa==''){
			$error="wypełnij wszystkie pola";
			create_form($nazwa,$rozpoz,$data,$check_date,$error,$id);
			
			}else if(!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$data)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$check_date)){
			$error="Wpisz prawidłowy format daty";
			create_form($nazwa,$rozpoz,$data,$check_date,$error,$id);
		
		}else{
			if($stmt =$polaczenie->prepare("UPDATE plan SET nazwa=?, rozpoz=?,data=?,check_date=? WHERE id=? ")){
				$stmt->bind_param('ssssi',$nazwa,$rozpoz,$data,$check_date,$id);
				$stmt->execute();
				$stmt->close();
				//
			}else{echo 'Błąd zapytania';}
				header ("location:show_rec.php");
		
		}
		
	}
	
	
	}else{

		if(is_numeric($_GET['id'])&&$_GET['id']>0){
		
		$id=$_GET['id'];
		if($stmt =$polaczenie->prepare("SELECT nazwa,rozpoz,data,check_date,id FROM plan WHERE id= ? ")){
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$stmt->bind_result($nazwa,$rozpoz,$data,$check_date,$id);
			$stmt->fetch();
			create_form($nazwa,$rozpoz,$data,$check_date,null,$id);
			$stmt->close();
			
		}else { echo 'Błąd zapytania';}
		
		
	}else{ header ("location :show_rec.php");}

}
	
}else{

	
}

	
?>


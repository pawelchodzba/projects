<?php

session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");




function create_form($rozpoz='',$data='',	$check_date='',	$sex='',	$walk='',	$nfz='',	$data_now='',	$price_nfz='',	$day_long='',	$day_nfz='',$error='',$id=''){ ?>
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
	<p><lebel>Rozpoznanie  </label><input type="text" name="rozpoz" value="<?php echo $rozpoz;  ?>" /></p>
	<p><lebel> Data przyjęcia </label><input type="text" name="data" value="<?php echo $data;  ?>" /></p>
	<p><lebel>	Data wypisu  </label><input type="text" name="check_date" value="<?php echo $check_date;  ?>" /></p>
	<p><lebel> Płeć </label><input type="text" name="sex" value="<?php echo $sex;  ?>" /></p>
	<p><lebel>Sprawność  </label><input type="text" name="walk" value="<?php echo $walk;  ?>" /></p>
	<p><lebel> Kategoria NFZ </label><input type="text" name="nfz" value="<?php echo $nfz;  ?>" /></p>
	<p><lebel> Data usunięcia </label><input type="text" name="data_now" value="<?php echo $data_now;  ?>" /></p>
	<p><lebel> ryczałt za pobyt </label><input type="text" name="price_nfz" value="<?php echo $price_nfz;  ?>" /></p>
	<p><lebel> dni pobytu </label><input type="text" name="day_long" value="<?php echo $day_long;  ?>" /></p>
	<p><lebel> Dni wliczone w ryczałt </label><input type="text" name="day_nfz" value="<?php echo $day_nfz;  ?>" /></p>
	
	<input type="submit" name="submit" value="wyślij"/>
	</form>
</div>




<h2>Statystyka oddziału</h2>
</body>
</html>	
<?php }

if(isset($_GET['id'])){

	if(isset($_POST['submit'])){
	
		if(is_numeric($_POST['id'])){
		$id=$_POST['id'];
		$rozpoz=htmlentities($_POST['rozpoz'],ENT_QUOTES);
		$data=htmlentities($_POST['data'],ENT_QUOTES);
		$check_date=htmlentities($_POST['check_date'],ENT_QUOTES);
		$sex=htmlentities($_POST['sex'],ENT_QUOTES);
		$walk=htmlentities($_POST['walk'],ENT_QUOTES);
		$nfz=htmlentities($_POST['nfz'],ENT_QUOTES);
		$data_now=htmlentities($_POST['data_now'],ENT_QUOTES);
		$price_nfz=htmlentities($_POST['price_nfz'],ENT_QUOTES);
		$day_long=htmlentities($_POST['day_long'],ENT_QUOTES);
		$day_nfz=htmlentities($_POST['day_nfz'],ENT_QUOTES);
		$rozpoz=htmlentities($_POST['rozpoz'],ENT_QUOTES);
		
		if($rozpoz==''||$data==''||$check_date==''||	$sex==''||$walk==''||$nfz==''||$data_now==''){
		$error="wypełnij wszystkie pola";
		create_form($rozpoz,$data,$check_date,$sex,	$walk,$nfz,$data_now,$price_nfz,	$day_long,$day_nfz,$error,$id);
		}else if(!preg_match('/^[0-9]{1,}$/',$price_nfz)||!preg_match('/^[0-9]{1,}$/',$day_long)||!preg_match('/^[0-9]{1,}$/',$day_nfz)){
			$error="Musi być liczba";
			create_form($rozpoz,$data,$check_date,$sex,	$walk,$nfz,$data_now,$price_nfz,	$day_long,	$day_nfz,$error,$id);	
		}else if (!preg_match('/^[0-1]$/',$sex)||!preg_match('/^[0-1]$/',$walk)){
			$error='Musi być liczba "0" lub "1" ';
			create_form($rozpoz,$data,$check_date,$sex,	$walk,$nfz,$data_now,$price_nfz,	$day_long,	$day_nfz,$error,$id);	
		}else{
			if($stmt =$polaczenie->prepare("UPDATE data_count SET rozpoz= ?,data= ?,	check_date= ?,	sex= ?,	walk= ?,	nfz= ?,	data_now= ?,	price_nfz= ?,	day_long= ?,	day_nfz= ? WHERE id=? ")){
				$stmt->bind_param('sssiiissiii',$rozpoz,$data,$check_date,$sex,$walk,$nfz,$data_now,$price_nfz,$day_long,$day_nfz,$id);
				$stmt->execute();
				$stmt->close();
				//
			}else{echo 'Błąd zapytania';}
				header ("location:show_rec.php");
		
		}
		//header ("location:show_rec.php");
	}
	
	
	}else{

		if(is_numeric($_GET['id'])&&$_GET['id']>0){
		
		$id=$_GET['id'];
		if($stmt =$polaczenie->prepare("SELECT *  FROM data_count WHERE id= ? ")){
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$stmt->bind_result($id,$rozpoz,$data,$check_date,$sex,	$walk,$nfz,$data_now,$price_nfz,	$day_long,	$day_nfz);
			$stmt->fetch();
			create_form($rozpoz,$data,$check_date,$sex,	$walk,$nfz,$data_now,$price_nfz,	$day_long,	$day_nfz,null,$id);
			$stmt->close();
			
		}else { echo 'Błąd zapytania';}
		
		
	}else{ header ("location :show_rec.php");}

}
	
//create_form(null,null,null,null,null,null,null,null,null,null,null,$_GET['id'])	;
	
}else{
	

	//header ("location:show_rec.php");
	
}

	
?>


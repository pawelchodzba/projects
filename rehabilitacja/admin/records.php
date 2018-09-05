<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");




function create_form($nazwa='',$rozpoz='',$data='',	$check_date='', $week_1='',$week_2='',$week_3='',$week_4='',$week_5='',$nfz='',$error='',$id=''){ ?>
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
	<p><lebel>	tydzień 1  </label><input type="text" name="week_1" value="<?php echo $week_1; ?>" /></p>
	<p><lebel>	tydzień 2  </label><input type="text" name="week_2" value="<?php echo $week_2;  ?>" /></p>
	<p><lebel>	tydzień 3  </label><input type="text" name="week_3" value="<?php echo $week_3;  ?>" /></p>
	<p><lebel>	tydzień 4  </label><input type="text" name="week_4" value="<?php echo $week_4;  ?>" /></p>
	<p><lebel>	tydzień 5  </label><input type="text" name="week_5" value="<?php echo $week_5;  ?>" /></p>
	<p><lebel> Kategoria NFZ </label><input type="text" name="nfz" value="<?php echo $nfz;  ?>" /></p>
	
	
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
			$week_1=htmlentities($_POST['week_1'],ENT_QUOTES);
			$week_2=htmlentities($_POST['week_2'],ENT_QUOTES);
			$week_3=htmlentities($_POST['week_3'],ENT_QUOTES);
			$week_4=htmlentities($_POST['week_4'],ENT_QUOTES);
			$week_5=htmlentities($_POST['week_5'],ENT_QUOTES);
			$nfz=htmlentities($_POST['nfz'],ENT_QUOTES);
	
		
		
			if($rozpoz==''||$data==''||$check_date==''||$nfz==''||$nazwa==''){
			$error="wypełnij wszystkie pola";
			create_form($nazwa,$rozpoz,$data,$check_date,$week_1,$week_2,$week_3,$week_4,$week_5,$nfz,$error,$id);
			
			}else if(!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$data)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$check_date)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$week_1)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$week_2)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$week_3)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$week_4)||!preg_match('/^[0-3][0-9]-[0-1][0-9]-[2][0][1-2][7-9]$/',$week_5)){
			$error="Wpisz prawidłowy format daty";
			create_form($nazwa,$rozpoz,$data,$check_date,$week_1,$week_2,$week_3,$week_4,$week_5,$nfz,$error,$id);
		
		}else if (!preg_match('/^[1-5]$/',$nfz)){
			$error='Musi być liczba od 1 do 5 ';
			create_form($nazwa,$rozpoz,$data,$check_date,$week_1,$week_2,$week_3,$week_4,$week_5,$nfz,$error,$id);
						
		}else{
			if($stmt =$polaczenie->prepare("UPDATE pacjenci SET nazwa=?, rozpoz=?,data=?,check_date=?, week_1=?,week_2=?,week_3=?,week_4=?,week_5=?,nfz=?	 WHERE id=? ")){
				$stmt->bind_param('sssssssssii',$nazwa,$rozpoz,$data,$check_date, $week_1,$week_2,$week_3,$week_4,$week_5,$nfz,$id);
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
		if($stmt =$polaczenie->prepare("SELECT nazwa,rozpoz,data,check_date, week_1,week_2,week_3,week_4,week_5,nfz ,id FROM pacjenci WHERE id= ? ")){
			$stmt->bind_param("i",$id);
			$stmt->execute();
			$stmt->bind_result($nazwa,$rozpoz,$data,$check_date,$week_1,$week_2,$week_3,$week_4,$week_5,$nfz,$id);
			$stmt->fetch();
			create_form($nazwa,$rozpoz,$data,$check_date,$week_1,$week_2,$week_3,$week_4,$week_5,$nfz,null,$id);
			$stmt->close();
			
		}else { echo 'Błąd zapytania';}
		
		
	}else{ header ("location :show_rec.php");}

}
	
//create_form(null,null,null,null,null,null,null,null,null,null,null,$_GET['id'])	;
	
}else{
	

	//header ("location:show_rec.php");
	
}

	
?>


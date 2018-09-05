

<?php

session_start();

// 	if ((!isset($_SESSION['zalogowany'])))
// 	 {
// 	 header('Location: index.php');
//  exit();
// 	}


include('../lacznosc_rezerwacja.php');
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
$mysqli->set_charset("utf8");


function create_form($error_year='',$error_sala='',$error_month='',$error_day="",$name_client='', $day='',$month='',$year='',$od='',$do='',$sala='',$tel='',$email='',$opis='',$status='',$error='',$id =''){?>
	

<DOCTYPE html>
	<html>
		<head>
		<link type="text/css" href="styl_admin.css" rel="stylesheet" />
			<title><?php if($id !='' ){echo "Edytuj";}else{echo "DODAJ";}?></title>
			<meta charset="UTF-8"/>
		</head>
		<body>
			<div class="form_position">
		<!-- <h5>Użytkownik:<//?php echo $_SESSION['log_name']; ?></h5> -->
		<h4><?php if($id !='' ){echo "Edytuj";}else{echo '<a href="admin.php">Widok edycji</a></br></br>';echo "DODAJ NOWY WPIS";}?></h4>
		
		<?php if($error !=''){
			echo '<div id="complete_empty">'. $error ."</div>";
				}	?>
				
				<form action="" method="post">
				
					<div >
						<?php if($id !=''){?>
							<input type="hidden" name="id" value="<?php  echo $id;?>"/>
							<p>  ID: <?php  echo $id; ?></p>
						<?php } ?>
							
						<p><label> Nazwa klienta</label> <input type="text" name="name_client" value="<?php echo  $name_client;  ?>"/></p>
						<p><label>Dzień </label> <input type="text" name="day" value="<?php echo  $day;  ?>"/><?php echo  $error_day;?></p>
						<p><label>MIesiąc</label> <input type="text" name="month" value="<?php echo $month;   ?>"/><?php echo  $error_month;?></p>
						<p><label>Rok</label> <input type="text" name="year" value="<?php echo $year ; ?>"/><?php echo $error_year;?></p>
						<p><label>Od godziny</label> <input type="text" name="od" value="<?php echo  $od ; ?>"/></p>
						<p><label>Do godziny</label> <input type="text" name="do" value="<?php echo  $do ; ?>"/></p>
						<p><label>Numer sali</label> <input type="text" name="sala" value="<?php echo  $sala ; ?>"/><?php echo  $error_sala;?></p>
						<p><label>Telefon</label> <input type="text" name="tel" value="<?php echo $tel  ; ?>"/></p>
						<p><label>Email</label> <input type="text" name="email" value="<?php echo $email  ; ?>"/></p>
						<p><label>Opis</label> <input type="text" name="opis" value="<?php echo $opis ;  ?>"/></p>
						<p><label>Status</label> <input type="text" name="status" value="<?php echo $status ;  ?>"/></p>
						
						<input type="submit" name="submit" value="wyślij"/>
			
					</div>
				</form>
			</div>	
		</body>
	</html>

<?php }
$data=date("Y-m-d");

if (isset($_GET['id'])){
	////////////////////////////////////////////////////////////EDYCJA/////////////////////////////////////////////////////////////////////
		if(isset($_POST['submit'])){
			if(is_numeric($_POST['id'])){
				$id=$_POST['id'];
				$name_new= htmlentities($_POST['name_client'], ENT_QUOTES);
				$day_new= htmlentities($_POST['day'], ENT_QUOTES);
				$month_new= htmlentities($_POST['month'], ENT_QUOTES);
				$year_new= htmlentities($_POST['year'], ENT_QUOTES);
				$od_new= htmlentities($_POST['od'], ENT_QUOTES);
				$do_new= htmlentities($_POST['do'], ENT_QUOTES);
				$sala_new= htmlentities($_POST['sala'], ENT_QUOTES);
				$tel_new= htmlentities($_POST['tel'], ENT_QUOTES);
				$email_new= htmlentities($_POST['email'], ENT_QUOTES);
				$opis_new= htmlentities($_POST['opis'], ENT_QUOTES);
				$status_new= htmlentities($_POST['status'], ENT_QUOTES);
				$error_day="";
				$error_month="";
				$error_sala="";
				$error_year='';
				
				include 'valid.php';
					$od_concat_0= chenge_char_od_do($od_new);
					$od_new=$od_concat_0;
					$do_concat_0= chenge_char_od_do($do_new);
					$do_new=$do_concat_0;
				
				 if($valid=valid($name_new,$day_new,$month_new,$year_new,$od_new,$do_new,$sala_new,$tel_new, $email_new,$opis_new,$status_new)){
					$error_day=$valid[0];
					$error_month=$valid[1];
					$error_sala=$valid[2];
					$error=$valid[3];
					$error_year=$valid[4];
						create_form($error_year,$error_sala,$error_month,$error_day,$name_new,$day_new,$month_new,$year_new,$od_new,$do_new,$sala_new,$tel_new, $email_new,$opis_new,$status_new,$error,$id);
				}
				
				
				else{
					
						// if($stmt=$mysqli->prepare("UPDATE  sala_1 SET data=?, user=? ,opis=?,status=?,client_name=?,tel=?,email=?,year=?,month=?,dey=?,od_h=?,do_h=?,sala=? WHERE id=?")){
						// $stmt->bind_param("sssssssiiissii",$data,"Admin",$opis_new,$status_new,$name_new,$tel_new,$email_new,$year_new,$month_new,$day_new,$od_new,$do_new,$sala_new,$id);;
						// $stmt->execute();
						// $stmt->close();
					
						// }else{echo 'Błąd zapytania';}
						
					
					header('location:../index.php');
				}
			}
			
		}else{	
			if (is_numeric($_GET['id'])&& $_GET['id'] >0){
					$error_day="";
					$error_month="";
					$error_sala="";
					$error_year='';
					$id=$_GET['id'];
					if($stmt=$mysqli->prepare("SELECT * FROM sala_1 WHERE id=?")){
						$stmt->bind_param("i",$id);
						$stmt->execute();
						
						$stmt->bind_result($id,$_user,$opis_new,$status_new,$name_new,$tel_new,$email_new,$year_new,$month_new,$day_new,$od_new,$do_new,$sala_new,$data);
						
						$stmt->fetch();
						create_form($error_year,$error_sala,$error_month,$error_day,$tel_new,$od_new,$day_new,$month_new,$do_new,$sala_new,$data,$email_new,$year_new,$status_new,$name_new,null,$id);
					
						$stmt->close();
						//echo $_user;
					}else{
						echo 'Błąd zapytania';
					}
					
				}else{
						header('location:../index.php');
				}
	      }
}else{
////////////////////////////////////////////////////////////////////////////////////////////////NOWY REKOrD/////////////////////////////////////////////////////
	if (isset ($_POST['submit'])){
		
		$name_new= htmlentities($_POST['name_client'], ENT_QUOTES);
		$day_new= htmlentities($_POST['day'], ENT_QUOTES);
		$month_new= htmlentities($_POST['month'], ENT_QUOTES);
		$year_new= htmlentities($_POST['year'], ENT_QUOTES);
		$od_new= htmlentities($_POST['od'], ENT_QUOTES);
		$do_new= htmlentities($_POST['do'], ENT_QUOTES);
		$sala_new= htmlentities($_POST['sala'], ENT_QUOTES);
		$tel_new= htmlentities($_POST['tel'], ENT_QUOTES);
		$email_new= htmlentities($_POST['email'], ENT_QUOTES);
		$opis_new= htmlentities($_POST['opis'], ENT_QUOTES);
		$status_new= htmlentities($_POST['status'], ENT_QUOTES);
		$error_day="";
		$error_month="";
		$error_sala="";
		$error_year='';
		
		include 'valid.php';
		
		$od_concat_0= chenge_char_od_do($od_new);
		$od_new=$od_concat_0;
		$do_concat_0= chenge_char_od_do($do_new);
		$do_new=$do_concat_0;
		
		if($valid=valid($name_new,$day_new,$month_new,$year_new,$od_new,$do_new,$sala_new,$tel_new, $email_new,$opis_new,$status_new)){
		$error_day=$valid[0];
		$error_month=$valid[1];
		$error_sala=$valid[2];
		$error=$valid[3];
		$error_year=$valid[4];
		create_form($error_year,$error_sala,$error_month,$error_day,$name_new,$day_new,$month_new,$year_new,$od_new,$do_new,$sala_new,$tel_new, $email_new,$opis_new,$status_new,$error);
			
		}else{
			$admin="Admin";
			if($stmt=$mysqli->prepare("INSERT sala_1 (opis,status,client_name,tel,email,year,month,dey,od_h,do_h,sala,user,data) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)")){
			$stmt->bind_param("sssssiiississ",$opis_new,$status_new,$name_new,$tel_new,$email_new,$year_new,$month_new,$day_new,$od_new,$do_new,$sala_new,$admin,$data);
			$stmt->execute();
			$stmt->close();
			}else{
				echo 'błąd zapytania';
			}
		header('location:../index.php');
		}
	} else{
		
		create_form();
	}
}
$mysqli->close();



?>


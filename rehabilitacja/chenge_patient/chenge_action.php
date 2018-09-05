<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");


if(isset($_POST['patient_1'] )&& isset($_POST['patient_2'])){
	$main_patient=$_POST['patient_1'];
	$second_patient=$_POST['patient_2'];

		$sql_0=$polaczenie->prepare("SELECT *  FROM pacjenci  WHERE id_luzka=? LIMIT 1" );
		$sql_0->bind_param('s',$main_patient);
		$sql_0->execute();
		$sql_0->bind_result($id0=null,$name_0,$id_luzka_0,$nr_sali_0,$id_sali_0,$diagnosis_0,$description_0,$date_0,$week_1_0, $week_2_0,$week_3_0,$week_4_0,$week_5_0,$check_date_0,$sex_0,$walk_0,$nfz_0);
		$sql_0->fetch();
		$sql_0->close();
		
		$sql_2=$polaczenie->prepare("DELETE  FROM pacjenci  WHERE id_luzka=? LIMIT 1");
		$sql_2->bind_param('s',$main_patient);
		$sql_2->execute();
		$sql_2->close();

		$sql=$polaczenie->prepare("SELECT *  FROM pacjenci  WHERE id_luzka=? LIMIT 1" );
		$sql->bind_param('s',$second_patient);
		$sql->execute();
		$sql->bind_result($id=null,$name,$id_luzka,$nr_sali,$id_sali,$diagnosis,$description,$date,$week_1 , $week_2,$week_3,$week_4,$week_5,$check_date,$sex,$walk,$nfz);
		$sql->fetch();
		$sql->close();
		
		if($id_luzka){
			
			$sql_1=$polaczenie->prepare("DELETE  FROM pacjenci  WHERE id_luzka=? LIMIT 1");
			$sql_1->bind_param('s',$second_patient);
			$sql_1->execute();
			$sql_1->close();	
				
			$sql_3=$polaczenie->prepare("INSERT  pacjenci (nazwa, id_luzka, nr_sali, id_sali, rozpoz, opis, data, week_1, week_2, week_3, week_4, week_5, check_date,sex,walk,nfz) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$sql_3->bind_param('ssissssssssssiii',$name,$main_patient,$nr_sali_0,$id_sali_0,$diagnosis,$description,$date,$week_1 , $week_2,$week_3,$week_4,$week_5,$check_date,$sex,$walk,$nfz);
			$sql_3->execute();
			$sql_3->close();	
			
			$sql_4=$polaczenie->prepare("INSERT  pacjenci (nazwa, id_luzka, nr_sali, id_sali, rozpoz, opis, data, week_1, week_2, week_3, week_4, week_5, check_date,sex,walk,nfz) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$sql_4->bind_param('ssissssssssssiii',$name_0,$second_patient,$nr_sali,$id_sali,$diagnosis_0,$description_0,$date_0,$week_1_0, $week_2_0,$week_3_0,$week_4_0,$week_5_0,$check_date_0,$sex_0,$walk_0,$nfz_0);
			$sql_4->execute();
			$sql_4->close();
		
		}else{
			
			$sale=explode('_',$second_patient);
			$nr_sal=$sale[1];
			$id_sali_='s_'.$nr_sal;
				
			$sql_4=$polaczenie->prepare("INSERT  pacjenci (nazwa, id_luzka, nr_sali, id_sali, rozpoz, opis, data, week_1, week_2, week_3, week_4, week_5, check_date,sex,walk,nfz) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$sql_4->bind_param('ssissssssssssiii',$name_0,$second_patient,$nr_sal,$id_sali_,$diagnosis_0,$description_0,$date_0,$week_1_0, $week_2_0,$week_3_0,$week_4_0,$week_5_0,$check_date_0,$sex_0,$walk_0,$nfz_0);
			$sql_4->execute();
			$sql_4->close();
		
	};

}

?>
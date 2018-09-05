<?php




require_once "../lacznosc_rezerwacja.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$id_=$_GET['id'];



		
/////////s_4_5
/////////s_4
$id_split=	substr_count($id_,'_');
list($s,$nr_sali)=explode('_',$id_);
		
	if	($s=='s'&&$id_split==2){
	$sql=$polaczenie->query("SELECT nazwa,check_date,rozpoz,opis,data,nfz FROM pacjenci WHERE id_luzka='$id_'");
	
		$one_patient=mysqli_fetch_array($sql);
		if($name=$one_patient['nazwa']){
			$date_end=$one_patient['check_date'];
			if(!$date_end){$date_end='nieokreślono';}
			echo'<div class="into_text_info" >';	
				echo '<div class="name_center">'.$name=$one_patient['nazwa'].'</div>';
				echo '<div class="">Rozpoznanie:</div>';
				echo	'<div class="diag_desc">'.$diagnosis=$one_patient['rozpoz'].'</div>';
				echo '<div class="">Opis:</div>';
				echo	'<div class="diag_desc">'.$description=$one_patient['opis'].'</div>';
			
				echo '<div class="content_text">';
					echo '<div class="name_p">Przyjęcie</div>';
					echo	'<div class="date_end">'.$date_start=$one_patient['data'].'</div>';
				echo' </div>';	
				echo '<div class="content_text">';
					echo '<div class="name_p">Wypis </div>';
					echo	'<div class="date_end">'.$date_end.'</div>';
				echo' </div>';		
			echo' </div>';	
		}else{
			
			echo '<div class="into_text_info name_center">Łóżko wolne</div>';
		}
		
		
	}else{
		$sql=$polaczenie->query("SELECT nazwa,check_date,rozpoz,opis,data,nfz FROM pacjenci WHERE id_sali='$id_'");
			if($s=='s'&&$id_split==1){
		
		
				echo'<div class="into_text_info" >';
					echo'<div class="nr_sali" >Sala nr: '.$nr_sali.'</div>';
					echo'<div class="content_text"> ';
					
						echo'<div class="date_end_t title" >Wypis</div>';
					echo' </div>';
					
					
					while($patient=mysqli_fetch_array($sql)){
						
						echo'<div class="content_text"> ';
						$name_p=$patient['nazwa'];
						$dat_p=$patient['check_date'];
							if(!$dat_p){$dat_p="nieokreślono";}
						$patient=new chory($name_p,$dat_p);
						$patient->show_info();
						echo' </div>';
					};
					echo'</div>';
				}
	}
	
	
		class chory{
			
			
			function __construct($name,$date_end){
				
				$this->name=$name;
				$this->date_end=$date_end;
				
			}
			
				
				public	$name;
				public	$date_end;
			
			
				public	function show_info(){
					
					echo'<div class="name_p ">'.$this->name.'</div>';
					echo'<div class="date_end" >'.$this->date_end.'</div>';
				
				}
			
				
		}

	//echo $id_;
		$sql->close();	






?>
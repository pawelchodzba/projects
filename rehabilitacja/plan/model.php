<?php
	
class connect{
	
	function connect_bd(){
					
	require "../lacznosc_rezerwacja.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$polaczenie->set_charset("utf8");
	return $polaczenie;
	}	
	
}

	
	
	class get_data_unix extends connect{
					
				private $format = "d-m-Y";
				
				 function get_data_patient_is(){
						$polaczenie= $this->connect_bd();
						$sql=$polaczenie->query("SELECT data,sex,check_date FROM pacjenci");
					
						$reception_is_patient_women=[];
						$discharge_is_patient_women=[];
						
						$discharge_is_patient_men=[];
						$reception_is_patient_men=[];
						
						while($bring_date=mysqli_fetch_array($sql)){
							if($bring_date['sex']==0){
							array_push($reception_is_patient_women,DateTime::createFromFormat($this->format,$bring_date['data']));
							array_push($discharge_is_patient_women,DateTime::createFromFormat($this->format,$bring_date['check_date']));
							}
							
							if($bring_date['sex']==1){
							array_push($reception_is_patient_men,DateTime::createFromFormat($this->format,$bring_date['data']));
							array_push($discharge_is_patient_men,DateTime::createFromFormat($this->format,$bring_date['check_date']));
							}	
						 }
						return $tab_all_patient_is=[$reception_is_patient_women,$discharge_is_patient_women,$reception_is_patient_men,$discharge_is_patient_men];
					}		
					
				function get_data_plan(){
					
					$polaczenie=$this->connect_bd();
					$sql=$polaczenie->query("SELECT data,sex,check_date FROM plan");
					
						$reception_plan_women=[];
						$discharge_plan_women=[];
						
						$discharge_plan_men=[];
						$reception_plan_men=[];
						
					while($bring_date=mysqli_fetch_array($sql)){
						if($bring_date['sex']==0){
						array_push($reception_plan_women,DateTime::createFromFormat($this->format,$bring_date['data']));
						array_push($discharge_plan_women,DateTime::createFromFormat($this->format,$bring_date['check_date']));
						}
						if($bring_date['sex']==1){
						array_push($reception_plan_men,DateTime::createFromFormat($this->format,$bring_date['data']));
						array_push($discharge_plan_men,DateTime::createFromFormat($this->format,$bring_date['check_date']));
						}
					}
					return $tab_all_patient_is=[$reception_plan_women,$discharge_plan_women,$reception_plan_men,$discharge_plan_men];
				}
	}
			
		











		
	class Too_list_patient extends connect{
		
			function get_patient_is(){
				$tab_is=[];
				$polaczenie=$this->connect_bd();
				$sql=$polaczenie->query("SELECT nazwa,rozpoz,data,check_date,sex FROM pacjenci");
				while($bring_date=mysqli_fetch_array($sql)){
					array_push($tab_is,$bring_date['nazwa'],$bring_date['rozpoz'],DateTime::createFromFormat('d-m-Y',$bring_date['data']),DateTime::createFromFormat('d-m-Y',$bring_date['check_date']),$bring_date['sex']);
					}
				return $tab_is;
				}
				
				function get_patient_plan(){
				$tab_plan=[];
				$polaczenie=$this->connect_bd();
				$sql=$polaczenie->query("SELECT nazwa,rozpoz,data,check_date,sex FROM plan");
				while($bring_date=mysqli_fetch_array($sql)){
					array_push($tab_plan,$bring_date['nazwa'],$bring_date['rozpoz'],DateTime::createFromFormat('d-m-Y',$bring_date['data']),DateTime::createFromFormat('d-m-Y',$bring_date['check_date']),$bring_date['sex']);
				}
				return $tab_plan;
				}
				
	}	
	
	



	class Raport_all extends connect{
		
			function get_patient_is(){
				$name=[];
				$rozpoz=[];
				$date=[];
				$check_date=[];
				$sex=[];
				$polaczenie=$this->connect_bd();
				$sql=$polaczenie->query("SELECT * FROM pacjenci");
				while($bring_date=mysqli_fetch_array($sql)){
					array_push($name,$bring_date['nazwa']);
					array_push($rozpoz,$bring_date['rozpoz']);
					array_push($date,$bring_date['data']);
					array_push($check_date,$bring_date['check_date']);
					array_push($sex,$bring_date['sex']);
					
					}
					
				return $tab_is=[$name,$rozpoz,$date,$check_date,$sex];
				}
				
			function get_patient_plan(){
				
				$name=[];
				$rozpoz=[];
				$date=[];
				$check_date=[];
				$sex=[];
				
				
				
				$polaczenie=$this->connect_bd();
				$sql=$polaczenie->query("SELECT * FROM plan");
				while($bring_date=mysqli_fetch_array($sql)){
					array_push($name,$bring_date['nazwa']);
					array_push($rozpoz,$bring_date['rozpoz']);
					array_push($date,$bring_date['data']);
					array_push($check_date,$bring_date['check_date']);
					array_push($sex,$bring_date['sex']);	
				}
				return $tab_plan=[$name,$rozpoz,$date,$check_date,$sex];
				}
				
	}



?>
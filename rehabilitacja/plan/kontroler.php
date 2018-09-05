<?php



include 'model.php';

			class computed{
				
				function __construct($tab_patient_is,$tab_plan){
					$this->tab_patient_is=$tab_patient_is;
					$this->tab_plan=$tab_plan;
				}
					private $tab_patient_is;
					private $tab_plan;
			
		function discharge_women(){
			return $discharge=[$this->tab_patient_is[1],$this->tab_plan[1]];
		}
		function discharge_men(){
			return $discharge=[$this->tab_patient_is[3],$this->tab_plan[3]];	
		}
		function reception_women(){
			return $reception=[$this->tab_patient_is[0],$this->tab_plan[0]];	
		}
		function reception_men(){
			return $reception=[$this->tab_patient_is[2],$this->tab_plan[2]];	
		}
		
	}
	
	class count_range{
		 function __construct($date_start){
		 $this->date_start=$date_start;
		 }
		 
		function range_day_discharge($discherge_array){
				$count_="";
				$discharge_int="";
				$date_before=clone $this->date_start;
				$discharge=$date_before->modify('-7day');
				
				for($i=0;$i<=count($discherge_array)-1;$i++){
					foreach($discherge_array[$i] as $v){
						if($v<=$this->date_start && $v>=$date_before){$count_++;}
						if($v->format('dmY')==$this->date_start->format('dmY')){$discharge_int++;}
					}
				}
				
				return $result=[$count_,$discharge_int];
		}
		
		function range_day_reception ($reception_array){
				$date_after=clone $this->date_start;
				$discharge=$date_after->modify('+6 day');
				$count_="";
				$reception_int='';
					for($i=0;$i<=count($reception_array)-1;$i++){
						foreach($reception_array[$i] as $v){
							if($v>=$this->date_start && $v<=$date_after){$count_++;}
							if($v->format('dmY')==$this->date_start->format('dmY')){$reception_int++;}
					}
				}
				return $result=[$count_,$reception_int];
			
			}	
	
		function counter_people($array_start,$array_end){
			$counter_="";
			 for($i=0;$i<=1;$i++){
			 $len_arr=count($array_start[$i]);
		
				 for($j=0;$j<$len_arr;$j++){
					if($array_start[$i][$j]<$this->date_start && $array_end[$i][$j]>$this->date_start ){
						if($array_end[$i][$j]->format('dmy')==$this->date_start ->format('dmy')){continue;}
					$counter_++;}
					else if($array_start[$i][$j]->format('dmy')==$this->date_start ->format('dmy')){$counter_++;}
				 }
			}
		  return $counter_;
		}
		
		 	
}

?>
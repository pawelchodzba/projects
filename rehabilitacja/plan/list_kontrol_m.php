<?php


include 'model.php';
include 'set_date.php';
					
					
////////////////////////kontroler/////////////////////////

class Kontroler_list{
	function __construct( Too_list_patient $arrays){
		if($arrays){
			$this->arrays=$arrays;
		}else{
			return;
		}
		
		
		}
	
	private $arrays;
	
	function chunk_plan (){
		return	$array_chunk_plan=array_chunk($this->arrays->get_patient_plan(),5);
		
		}
	
	function chunk_is (){
		return $array_chunk_is=array_chunk($this->arrays->get_patient_is(),5);
		}
	
}	
		
	class computed_patient{
		function __construct($date){
			$this->date_=$date;
		}
		
	function execute($tabs){
		
			$tab_days=[$d_0=[],$d_1=[],$d_2=[],$d_3=[],$d_4=[],$d_5=[],$d_6=[],$d_7=[],$d_8=[],$d_9=[],$d_10=[],$d_11=[],$d_12=[],$d_13=[],$d_14=[],$d_15=[],$d_16=[],$d_17=[],$d_18=[],$d_19=[],$d_20=[],$d_21=[],$d_22=[],$d_23=[],$d_24=[],$d_25=[],$d_26=[],$d_27=[],$d_28=[],$d_29=[],$d_30=[],$d_31=[],$d_32=[],$d_33=[],$d_34=[],$d_35=[]];
			
			$len_days=$this->date_->d_diff();	
			$len_aray=count($tabs);	
			$iteratio_day=$this->date_->d_start_end()[0];
		
			for($i=0;$i<=$len_days;$i++){
			  $iteratio_day->modify('+1 day');
				for($j=0;$j<$len_aray;$j++){
					if($tabs[$j]){
						if ($tabs[$j][2]<$iteratio_day&&$tabs[$j][3]>$iteratio_day){
							if($tabs[$j][3]->format('dmy')==$iteratio_day->format('dmy')){continue;}
							
							$tab_sort=[$tabs[$j][0],$tabs[$j][1],$tabs[$j][2]->format('d-m-Y'),$tabs[$j][3]->format('d-m-Y'),$tabs[$j][4]];
							array_push($tab_days[$i],$tab_sort);
							
					}else if($tabs[$j][2]->format('dmy')==$iteratio_day->format('dmy')){
							$tab_sort=[$tabs[$j][0],$tabs[$j][1],$tabs[$j][2]->format('d-m-Y'),$tabs[$j][3]->format('d-m-Y'),$tabs[$j][4]];
							array_push($tab_days[$i],$tab_sort);
					}
				}
			}
		}	
			return $tab_days;	
	}
}



?>
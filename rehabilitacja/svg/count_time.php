<?php


function week_query($sql_week){
			$week=[];
			$data_now=new DateTime();
			$format = "d-m-Y";
			$data_n= $data_now->getTimestamp();
			$t_sex_walk=[];
			$t_name=[];
			$t_d_end=[];
	while ($tab_week=mysqli_fetch_array($sql_week) ) {
		
			$id=$tab_week['id_luzka'];
			
			$week_1=DateTime::createFromFormat($format, $tab_week['week_1']);
			$week_2=DateTime::createFromFormat($format, $tab_week['week_2']);
			$week_3=DateTime::createFromFormat($format, $tab_week['week_3']);
			$week_4=DateTime::createFromFormat($format, $tab_week['week_4']);
			$week_5=DateTime::createFromFormat($format, $tab_week['week_5']);
			
			$day_end=DateTime::createFromFormat($format, $tab_week['check_date']);					
			
			
			$week_1=$week_1->getTimestamp();
			$week_2=$week_2->getTimestamp();
			$week_3=$week_3->getTimestamp();
			$week_4=$week_4->getTimestamp();
			$week_5=$week_5->getTimestamp();
		
			 array_push($week,$id,$week_1,$week_2,$week_3,$week_4,$week_5);
			 
			 $sex=$tab_week['sex'];
			 $walk=$tab_week['walk'];
			 array_push($t_sex_walk,$id,$sex,$walk);
			  $name=$tab_week['nazwa'];
			 array_push($t_name,$id,$name);
			 if ($day_end){
			if($data_now->format($format)==$day_end->format($format)){
				array_push($t_d_end,$id);
			}
				
			}else{}
			  
		 }	;	
		 
		
		$split_week=array_chunk ($week,6,false);
			
			$tab_week_1=[];
			$tab_week_2=[];
			$tab_week_3=[];
			$tab_week_4=[];
			$tab_week_5=[];
			
	for($i=0;$i<count($split_week);$i++){
		$one_week=$split_week[$i];
		
				$id_one_week=$one_week[0];
			
				if ($data_n<=$one_week[1]){
					array_push($tab_week_1,$id_one_week);
								
				}else if($data_n<=$one_week[2]&&$data_n>$one_week[1]){
					array_push($tab_week_2,$id_one_week);
					
				}else if($data_n<=$one_week[3]&&$data_n>$one_week[2]){
					array_push($tab_week_3,$id_one_week);
					
				}else if($data_n<=$one_week[4]&&$data_n>$one_week[3]){
					array_push($tab_week_4,$id_one_week);
					
				}else if($data_n>$one_week[4]){
					array_push($tab_week_5,$id_one_week);
				}
			
		}
		 $tab_week_all_id=[];
		 array_push($tab_week_all_id,$tab_week_1,$tab_week_2,$tab_week_3,$tab_week_4,$tab_week_5,$t_sex_walk,$t_name,$t_d_end);
		 return $tab_week_all_id;	

};



?>
<?php

//include 'view_list.php';
//include 'list_kontrol_m.php';

class day_raport_v{
					
				
				function show_html($discharge_women,$discharge_men,$reception_women,$reception_men,$women,$men,$i,$date){
					
					$patient_all=$men+$women;
					$discharge_all=$discharge_women[1]+$discharge_men[1];
					$reception_all=$reception_women[1]+$reception_men[1];
					if ($patient_all==0){$patient_all="";}
					if ($discharge_all==0){$discharge_all="";}
					if ($reception_all==0){$reception_all="";}
					
						echo '<div class="day_vertical">';	
						 echo '<div class="wraper_day_raport">';	
							 echo '<div class="day_raport bck_c0">'.$patient_all.'</div>';  
							 echo '<div class="day_raport bck_c1">'.$women.'</div>';  
							 echo '<div class="day_raport bck_c2">'.$men.'</div>'; 
							 echo '<div class="day_raport bck_c3" data-nr=" '.$i.' " data-date="'.$date.'">'.$discharge_all.'</div>';		
							 echo '<div class="day_raport bck_c4" title="discharge_women"data-nr=" '.$i.' " data-date="'.$date.'">'.$discharge_women[1].'</div>';		
							 echo '<div class="day_raport bck_c5" title="discharge_men"data-nr=" '.$i.' " data-date="'.$date.'">'.$discharge_men[1].'</div>';		
							 echo '<div class="day_raport bck_c6" data-nr=" '.$i.' " data-nr="'.$date.'">'.$reception_all.'</div>';		
							 echo '<div class="day_raport bck_c7" title="reception_women"data-nr=" '.$i.' " data-date="'.$date.'">'.$reception_women[1].'</div>';		
							 echo '<div class="day_raport bck_c8" title="reception_men"data-nr=" '.$i.' " data-date="'.$date.'">'.$reception_men[1].'</div>';		
						 echo '</div>';  
						echo '</div>';  
							
				}
			}
						



?>
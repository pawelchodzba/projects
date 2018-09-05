<?php

			class raport_weekend{
		
					function freedays($discharge_women,$discharge_men,$reception_women,$reception_men){
							
						if (($discharge_women[0]+$discharge_men[0])>=($reception_women[0]+$reception_men[0])){$freeday_alarm="alarm_p";}else{$freeday_alarm='';}
					
					echo '<div class="wraper_freeday">';
						echo '<div class=" care_ok" '.$freeday_alarm.'>';
							echo '<div class="freeday_two">Wypisów<br/>'.($discharge_women[0]+$discharge_men[0]);
								echo'<div class="wraper_sex">';
									echo '<div class="women_men">K:'.$discharge_women[0].'</div>';
									echo '<div class="women_men">&nbsp; M:'.$discharge_men[0].'</div>';
								echo '</div>';	
							echo'</div>';
							echo '<div class="freeday_two">Przyjęć<br/>'.($reception_women[0]+$reception_men[0]);
								echo'<div class="wraper_sex">';
									echo '<div class="women_men">K:'.$reception_women[0].'</div>';
									echo '<div class="women_men">&nbsp; M:'.$reception_men[0].'</div>';
								echo '</div>';
							echo'</div>';
						echo '</div>';	
					echo '</div>';	
								
						}
					}
				


?>
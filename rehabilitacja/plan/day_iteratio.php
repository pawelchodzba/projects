<?php
include 'day_raport_v.php';
//include 'list_kontrol_m.php';
	class iteratio_day {
					
			function __construct($date_start ,$amount_day){
				
				$this->date_start=$date_start;
				$this->amount_day=$amount_day;
			}
					
					private $date_start;
					private $amount_day;
					
				function render_day(){
					
							$date_now=new DateTime();
							$model=new get_data_unix();
							$patient_is=$model->get_data_patient_is();
							$patient_plan=$model->get_data_plan();
							$count=new computed($patient_is,$patient_plan);
							$free_days=free_days_into_year::get_tab ($this->date_start->format('Y'));
								echo'<div wraper_title>';
								echo '<div class="title title_0">Pacjentów</div>';			
								echo '<div class="title title_1">K</div>';			
								echo '<div class="title title_2">M</div>';			
								echo '<div class="title title_3">Wypisy</div>';			
								echo '<div class="title title_4">K</div>';			
								echo '<div class="title title_5">M</div>';			
								echo '<div class="title title_6">Przyjęcia</div>';			
								echo '<div class="title title_7">K</div>';			
								echo '<div class="title title_8">M</div>';			
											
								echo'</div>';		
							for($i=0;$i<=$this->amount_day;$i++){
								$this->date_start->modify('+1 day');
								$nr_day=$this->date_start->format ('w');
								
								$count_range=new count_range($this->date_start);
								$discharge_women=$count_range->range_day_discharge($count->discharge_women());
								$discharge_men=$count_range->range_day_discharge($count->discharge_men());
								$reception_women=$count_range->range_day_reception($count->reception_women());
								$reception_men=$count_range->range_day_reception($count->reception_men());
								
								
								$amount_men=$count_range->counter_people($count->reception_men(),$count->discharge_men());
								$amount_women=$count_range->counter_people($count->reception_women(),$count->discharge_women());
								
							
								if($nr_day==5){
										////////////widget raport_freeday////////////////////////////////////////////////////
									$view_week=new raport_weekend();
									$view_week->freedays($discharge_women,$discharge_men,$reception_women,$reception_men);
									}
								//////////////widget raport_DAY//////////////////////////////////////////////////////////////////////
							$day_raport=new day_raport_v();
							$day_raport->show_html($discharge_women,$discharge_men,$reception_women,$reception_men,$amount_women,$amount_men,$i,$this->date_start->format ('d-m-Y'));
								///////////////////////////////////one day////////////////////////////////////////////////
							$this->show_one_day($nr_day,$free_days,$date_now,$i);
							/////////////////////beetwin_month/////////////////////
							if($this->date_start->format('d')==1){
								$this->add_beetwin();
							}
							
					}
				}
			function show_one_day($nr_day,$free_days,$date_now,$i){
							$class_list=$this->chenge_class($nr_day,$free_days,$date_now);
							$days_name=['ND','PN','WT','ŚR','CZ','PT','SB'];
							
						echo '<div class=" '.$class_list[0].' ">';
							echo '<div id="'.$this->date_start->format ('d-m-Y').'"  data-nr=" '.$i.' " class="day_name">'.$this->date_start->format ('d').'<br>'.$days_name[$nr_day].'</div>';
						echo'</div>';
			}	
			
			
			function chenge_class($nr_day,$free_days,$date_now){
					if(in_array($this->date_start->format ('d-m'),$free_days)||$nr_day==0||$nr_day==6){$classes="week_c";}else{$classes="normal_day";}
					//if($this->date_start->format('d')==1){$beetwin_month='beetwin_month';}else{$beetwin_month="";}
					if($this->date_start->format('d-m-Y')==$date_now->format('d-m-Y')){$classes='day_now';}
				return $class_list=[$classes];
			}
			function add_beetwin(){
				
						$month_name=['styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień'];
								if($month_pl=$this->date_start->format('m')-2<0){$month_pl=11;}else{$month_pl=$this->date_start->format('m')-2;}
								
								
							echo'<div id="wraper_beetwin">';
								echo '<div id="before_beetwin" class="beetwin_month">'.$month_name[$month_pl].'</div>';
								echo '<div id="after_beetwin" class="beetwin_month">'.$month_name[$this->date_start->format('m')-1].'</div>';
							echo'</div>';
				
			}
							
}
		



?>
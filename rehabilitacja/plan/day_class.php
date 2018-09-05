<?php


class day {
	
	function __construct($m,$y){

	$this->month=$m;
	$this->year=$y;
	}
	
	private $m;
	private $y;

			function show_day(){
				
				$date=new DateTime('0-'.$this->month.'-'.$this->year);	
				
				$days_name=['ND','PN','WT','ŚR','CZ','PT','SB'];
				$month_name=['styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień'];
				
				$free_days=free_days_into_year::get_tab ($this->year);
				
			echo '<div id="calendar"  class="calendar">';				
				echo '<div id="month_c"  class="month_c">' .$month_name[($this->month)-1]. '</div>';				
				echo '<div id="year_c"  class="year_c">' .$this->year. '</div>';				
					$how_days="";
				while($how_days<=$this->month){
					
					$date->modify('+1 day');
					$date->format ('d-m-Y');
					$nr_day=$date->format ('w');
					$how_days=$date->format ('m');
					
						if($how_days==$this->month){
							if(in_array($date->format ('d-m'),$free_days)||$nr_day==0||$nr_day==6){$classes="week_c";}else{$classes="normal_day";}
							
							echo '<div class=" '.$classes.' " id=" '.$date->format ('d-m-Y').' ">';
								echo '<div class="day_nr">'.$date->format ('d').'</div>';
								echo '<div class="day_name">'.$days_name[$nr_day].'</div>';
							echo'</div>';
						
						}
					}
		echo'</div>';	
				}
			}	

			
			
			
	class free_days_into_year {
		
		public static function get_tab ($year){
					$d=['01-01','06-01','01-05','03-05','15-08','01-11','11-11','25-12','26-12'];
					//$year= date('Y');
					array_push($d,$easter = date('d-m', easter_date($year)));
					$date_ = strtotime( $easter. '-' . $year);											
					array_push($d,date('d-m', strtotime('+1 day', $date_)));											
					array_push($d,date('d-m', strtotime('+49 day', $date_)));											
					array_push($d,date('d-m', strtotime('+60 day', $date_))); 	
				
				return $d;
			}
		
		
		
		}
	


			
			
$m=4;
$y=2019;
$day=new day($m,$y);
$day->show_day();




?>
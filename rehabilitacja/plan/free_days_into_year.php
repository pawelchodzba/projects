<?php

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




?>
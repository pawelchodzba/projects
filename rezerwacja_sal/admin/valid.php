<?php




function valid($name_new,$day_new,$month_new,$year_new,$od_new,$do_new,$sala_new,$tel_new, $email_new,$opis_new,$status_new){
		$date=new DateTime();
		$data_year=$date->format('Y');
	$valid_tab=[$_day='',$_month='',$_sala='',$_error="",$_year=''];
	$flag=false;	
	
		if(!is_numeric($day_new)||$day_new<=0||$day_new>31){
						$valid_tab[0]=' wpisz prawidłowy dzień miesiąca';
						$flag=true;	
					};
			
		if(!is_numeric($month_new)||$month_new<=0||$month_new>12){
					$valid_tab[1]=' wpisz prawidłowy numer miesiąca';
					$flag=true;
									
				}
		if(!is_numeric($sala_new)||$sala_new<=0||$sala_new>6){
					$valid_tab[2]=' wpisz prawidłowy numer sali';
					$flag=true;
									
				}	
				
		if($name_new=='' || $day_new=='' || $month_new=='' || $year_new=='' || $od_new=='' || $do_new=='' || $sala_new=='' || $tel_new=='' || $email_new=='' || $opis_new=='' || $status_new=='' ){
				$valid_tab[3]=' wpisz wszystkie pola';	
					$flag=true;
		}
				
		if(!is_numeric($year_new)||$year_new>$data_year+1||$year_new<$data_year-1){
		
					$valid_tab[4]=' wpisz prawidłowy format roku (rrrr)';
					$flag=true;
									
				}			
				if ($flag){
					return $valid_tab;
				}else {return false;}
	
}	
	
function chenge_char_od_do($od)
{
	if($od){	
		$first_char=str_split($od)[0];
		$two_char=str_split($od)[1];
		
			if (is_numeric($first_char)&&!is_numeric($two_char)&&$first_char>0){
				$od="0".$od;
				return $od;
			
			}else{
				return $od;
			}
		
		
	}else{return;}
}	

?>

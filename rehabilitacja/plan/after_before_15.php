<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: index.php');
	exit();
}


include 'view_week.php';
include 'free_days_into_year.php';
include 'day_iteratio.php';
include 'kontroler.php';
include 'set_date.php';
//include 'day_raport_v.php';

class Calendar_basic {
			function show_day(Set_date $data_obj){
				$date_start=$data_obj->d_start_end()[0];
				$day_by_day=new iteratio_day($date_start,$data_obj->d_diff());
				$month_name=['styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień'];
				
				echo'<div class="wraper_month" >';
					echo '<button id="month_minus" class="chenge_month"><<<<</button>';				
					echo '<div class="month_c">' .$month_name[($date_start->format('m'))-1]. '</div>';	
					echo '<div id="year_c"  class="year_c">' .$data_obj->d_start_end()[0]->format('Y'). '</div>';
					echo '<div class="month_c">' .$month_name[($data_obj->d_start_end()[1]->format('m'))-1]. '</div>';
					echo '<button id="month_plus" class="chenge_month">>>>></button>';	
				
				echo '</div>';	
				echo '<div id="calendar"  class="calendar">';
					echo '<div class="wraper_days">';	
						$day_by_day->render_day();
					echo'</div>';	
				echo'</div>';	
				}
			}				
///////////////////////////////////////////////////////////////////////////////////////		
if(isset($_GET['date_unix'])&&is_numeric($_GET['date_unix'])){

$day=new Set_date($_GET['date_unix']);
$d=new Calendar_basic();
$d->show_day($day);	
}else{
	echo 'Błąd wprowadzonej daty (mnusi być czas unix)';
}

?>
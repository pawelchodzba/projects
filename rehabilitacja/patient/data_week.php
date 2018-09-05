<?php

$tab_friday=[];
for($i=0;count($tab_friday)<6;$i++){
	//$date=DateTime::createFromFormat('d-m-Y',$check_date);
	$date = new DateTime();	
	$dat_iteratio=$date->modify('+'.$i.'day');
	$day= $dat_iteratio->format('l');
		if($day=='Friday'){
			$day_data=$dat_iteratio->format('d-m-Y');
		array_push( $tab_friday,$day_data);
		}
	
}


//count($tab_friday);
$data_=new DateTime();
$data_now=$data_->format('d-m-Y');
array_push($tab_friday,$data_now);	
if(in_array($check_date,$tab_friday)){
	$week1=$tab_friday[1];
}else{$week1=$check_date;}
//echo$name;
//$week0=$tab_friday[0];

$week2=$tab_friday[2];
$week3=$tab_friday[3];
$week4=$tab_friday[4];
$week5=$tab_friday[5];

print_r(json_encode($tab_friday));
?>
<?php


function computed($sql){
$format = "d-m-Y";
$price_all=[];
while($tab=mysqli_fetch_array($sql)){
	$nfz=$tab['nfz'];
	$data_start =DateTime::createFromFormat($format,$tab['data']);
	$data_end=DateTime::createFromFormat($format,$tab['check_date']);
	
	 $day_pay=count_free_day($data_start,$data_end);	
	 $price_nfz=count_nfz_category($nfz,$day_pay);
	 array_push($price_all,$price_nfz);
		}							


return array_sum($price_all);
}

function count_free_day($data_start,$data_end){
	
$tab_day_free=tab_free_d_into_year();
				$day_free='';
				$day_all=$data_start->diff($data_end)->days;///day all///
					for($i=0;$i<$day_all;$i++){
						$data_start->modify('+1 day');///iteratio self///
						$day= $data_start->format('l');///day name//
						$d_free=$data_start->format('d-m');//this same format into tabele///
							if($day=='Sunday'||in_array($d_free,$tab_day_free)){//check day free//
								$day_free++;
							}
						}
	
	return $day_all -$day_free-1;
}

function tab_free_d_into_year(){

$d=['01-01','06-01','01-05','03-05','15-08','01-11','11-11','25-12','26-12'];
$year= date('Y');
array_push($d,$easter = date('d-m', easter_date($year)));
$date = strtotime( $easter. '-' . $year);											
array_push($d,date('d-m', strtotime('+1 day', $date)));											
array_push($d,date('d-m', strtotime('+49 day', $date)));											
array_push($d,date('d-m', strtotime('+60 day', $date))); 											
	return $d;
}

function count_nfz_category($nfz,$day_pay){
	
$tab_category=[$_SESSION['rop'],$_SESSION['roow'],$_SESSION['roo'], $_SESSION['rozw'],$_SESSION['roz']];
$price='';
	for($i=1;$i<6;$i++){
		if($nfz==$i){
			$price=$tab_category[$i-1]*($day_pay-1);
			break;
		}
	}
	
	return $price;
}
	
?>


<?php




include 'class_sex_walk.php';

function go_to_class($points){
	$w= new sex_w($points);
	$w->show_itiems();
	
}

function show_items($t_s_w,$t_id_x_y){
//print_r($t_s_w);
echo $t_s_w[0];
//print_r($t_s_w);
//var_dump($t_s_w);
//$t_s_w=array_shift($t_s_w);
@$licz=sizeof($t_s_w);
for($z=0;$z<$licz;$z=$z+3){
		for($q=0;$q<count($t_id_x_y);$q=$q+4){
		
		if ($t_s_w[$z]==$t_id_x_y[$q]){
			
		$x_s_w=$t_id_x_y[$q+1];
		$y_s_w=$t_id_x_y[$q+2];
		$vertical=$t_id_x_y[$q+3];
		
		    /////////sex////
			if($t_s_w[$z+1]==0){
			women($x_s_w,$y_s_w);
			}else{
			men($x_s_w,$y_s_w);
			}
			////////////walk////
			if(!$t_s_w[$z+2]==0){
		//	echo	$vertical;
			walk($x_s_w,$y_s_w,$vertical);
			}else{
			//	echo	$vertical;	
			dont_walk($x_s_w,$y_s_w,$vertical);
			}
}}}}	
	Function women($x_s_w,$y_s_w)	{
			
		$radiany=[0.087,	0.174,	0.261,	0.349,	0.436,	0.523,	0.610,	0.698,	0.785,	0.872,	0.959,	1.047,	1.134,	1.221,	1.308,	1.396,	1.483,	1.570,	1.658,	1.745,	1.832,	1.919,	2.007,	2.094,	2.181,	2.268,	2.356,	2.443,	2.530,	2.617,	2.705,	2.792,	2.879,	2.967,	3.054,	3.141,	3.228,	3.316,	3.403,	3.490,	3.577,	3.665,	3.752,	3.839,	3.926,	4.014,	4.101,	4.188,	4.276,	4.363,	4.450,	4.537,	4.625,	4.712,	4.799,	4.886,	4.974,	5.061,	5.148,	5.235,	5.323,	5.410,	5.497,	5.585,	5.672,	5.759,	5.846,	5.934,	6.021,	6.108,	6.195,	6.283,
		];
		$x=$x_s_w+9;
		$y=$y_s_w+9;
		 $r=5;

		$string='';
		for($i=0;$i<count($radiany);$i++){
		$x_a=sin($radiany[$i])*$r+$x;	
		$y_a=cos($radiany[$i])*$r+$y;
		$string=$string.$x_a.",".$y_a." ";
		}

		$points=' " '.$string.' " ';
			go_to_class($points);			
			}
	
function men($x_s_w,$y_s_w){
	
		$x1=$x_s_w+9;$y1=$y_s_w+4;
		$x2=$x_s_w+4;$y2=$y_s_w+15;
		$x3=$x_s_w+14;$y3=$y_s_w+15;
		
		$points=' " ' .$x1.','.$y1.' '.$x2.','.$y2.' '.$x3.','.$y3.' '.$x1.','.$y1.' " ';
		go_to_class($points);
};
function walk($x_s_w,$y_s_w,$v){
	
	if($v=='true'){
		$x1=$x_s_w+9;$y1=$y_s_w+25;
		$x2=$x_s_w+9;$y2=$y_s_w+38;	
		}else{
		$x1=$x_s_w+30;$y1=$y_s_w+2;
		$x2=$x_s_w+30;$y2=$y_s_w+16;	
		}
		
		$points= ' " '.$x1.','.$y1.' '.$x2.','.$y2.' " ';
		go_to_class($points);
}

function dont_walk($x_s_w,$y_s_w,$v){
	

	
	if($v=='true'){
			$x1=$x_s_w+2;$y1=$y_s_w+30;
			$x2=$x_s_w+15;$y2=$y_s_w+30;
		}else{
			$x1=$x_s_w+25;$y1=$y_s_w+9;
			$x2=$x_s_w+36;$y2=$y_s_w+9;
		}
		
			$points=' " '. $x1.','.$y1.' '.$x2.','.$y2.' " ';
			go_to_class($points);
}	

?>
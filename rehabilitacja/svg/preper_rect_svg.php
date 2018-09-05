<?php




include 'class_svg.php';
include 'sex_walk.php';


 function preper_rect ($id,$class,$x,$y,$w,$h){
	 $sala= new sala($id,$class,$x,$y,$w,$h);
	 $sala->show_sala(); 	
	 }


function loop_rect_control($l_sql,$tab_week){

	$t_id_x_y=[];
	$t_s_w=$tab_week[5];	 
	$t_d_end=$tab_week[7];	 

			while ($item_rect=mysqli_fetch_array($l_sql) ) {
			
			$id=$item_rect['id'];
			$class_sql=$item_rect['class'];
				if(preg_match('/^[s][_][0-9]{1,}[_][0-9]$/',$id)){
				$chenge_class=chenge_class($id,$tab_week,$t_d_end);
					if($chenge_class){
						$class=$chenge_class;
					}else{$class=$class_sql;}
				}else{$class=$class_sql;}
						
				//$vertical=$item_rect['vertical'];		
						
			$x=$item_rect['x'];
			$y=$item_rect['y'];
			$vertical=$item_rect['vertical'];
			
			 if($vertical=='true'){
			 $h=$item_rect['w'];
			$w=$item_rect['h'];
			}else{
			$w=$item_rect['w'];
			$h=$item_rect['h'];	
			}
		
			array_push($t_id_x_y,$id,$x,$y,$vertical);
			preper_rect($id,$class,$x,$y,$w,$h);
			 
		 }	
		
		 show_items($t_s_w,$t_id_x_y);
	}



function sala_into_view($items_sql,$items_sql_l,$width_svg,$height_svg,$tab_week){
	
			$rate=0.384;
			$rects=mysqli_fetch_array($items_sql);
			$id_s=$rects['id'];
			$class_s=$rects['class'];
		 
			 $w_s=$rects['w']/$rate;
			 $h_s=$rects['h']/$rate;
			 $x_s=($width_svg/2)-($w_s/2);
			 $y_s=($height_svg/2)-($h_s/2);
			 $x_s_l=$rects['x'];
			 $y_s_l=$rects['y'];
			 
			preper_rect($id_s,$class_s,$x_s,$y_s,$w_s,$h_s);
			
			$t_name=$tab_week[6];
			$name='';
			$t_d_end=$tab_week[7];
		while ($one_luzko=mysqli_fetch_array($items_sql_l)) {

			$id_l=$one_luzko['id'];
		
			
				$class_sql=$one_luzko['class'];
			if(preg_match('/^[s][_][0-9]{1,}[_][0-9]$/',$id_l)){
				$chenge_class=chenge_class($id_l,$tab_week,$t_d_end);
				if($chenge_class){
					$class_l=$chenge_class;
				}else{$class_l=$class_sql;}
			}else{$class_l=$class_sql;}	
				
			if($vertical=$one_luzko['vertical']=='true'){
				$w_l=$one_luzko['h']/$rate;
				$h_l=$one_luzko['w']/$rate;
			}else{
					$w_l=$one_luzko['w']/$rate;
					$h_l=$one_luzko['h']/$rate;
			}
				
			
		
			$x_l=($one_luzko['x']- $x_s_l)/$rate+$x_s;
			$y_l=($one_luzko['y']-$y_s_l)/$rate+$y_s;
			
		preper_rect($id_l,$class_l,$x_l,$y_l,$w_l,$h_l);	
		
		for($u=0;$u<count($t_name);$u=$u+2){
			
			if($id_l==$t_name[$u]){
				$patient=$t_name[$u+1];
				$name=$patient;
				$y_=$y_l+25;
				$x_l=$x_l+5;
				if(strlen($name)<=9){
					
					
					echo'<text class="name_svg" x='.$x_l.' y= '.$y_.'  font-family="Verdena" font-size="20" >'.$name.'</text>';
					
				 }
				else{
					$name_spl=str_split($name,9);
					$y_=$y_l+20;
					echo'<text class="name_svg" x='.$x_l.' y= '.$y_.'  font-family="Verdena" font-size="20" >';
					echo '<tspan x='.$x_l.' >'.$name_spl[0].'</tspan>';
					echo '<tspan x='.$x_l.' dy="20">'.$name_spl[1].'</tspan>';
					echo'</text>';
				}
				
			}
		}
		
					
		};
}
function chenge_class($id,$tab_week,$t_d_end){
	$class_week='';
	$d_end='';
	for($z=0;$z<count($t_d_end);$z++){
		if($id==$t_d_end[$z]){
			$d_end=' d_end';
		}
	}
	for($i=0;$i<5;$i++){
				$one_week=$tab_week[$i];
						for($j=0;$j<count($one_week);$j++){
							if($id==$one_week[$j]){
								$class_week='week'.$i;
								}
						}
					
				};
				$class=$class_week.$d_end;
		return $class;
		
}


?>
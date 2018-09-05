<?php



function svg_property($flag){
	
	if($flag){
		$width=400;
		$height=300;
		$class='svg_view';
		$id='svg_view';
	return $tab=[$width,$height,$class,$id];
	}else{
		$width=941;
		$height=260;
		$class='svg_control';
		$id='svg_control';
	return $tab=[$width,$height,$class,$id];	
	}
}
?>
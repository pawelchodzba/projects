<?php


class sala {

			public function __construct( $id,$clas,$x,$y,$width,$height){
				$this->id=$id;
				$this->clas=$clas;
				$this->x=$x;
				$this->y=$y;
				$this->width=$width;
				$this->height=$height;
				
			}

				public	$id;
				public	$clas;
				public	$x;
				public	$y;
				public	$width;
				public	$height;

				
			public	function show_sala (){
				
				
				echo '<rect id="'.$this->id.'" class="'.$this->clas.'"x="'.$this->x.'"y="'.$this->y.'"width="'.$this->width.'"height="'.$this->height.'"/>';	
			
				}
			
				
}




?>
<?php


class sex_w {

			public function __construct($points){
				$this->points=$points;
		
				}
				public $points;
			
			public	function show_itiems (){
					
			echo '<polyline class="sex" points='  .$this->points.'  />';	
			
				}
				
}




?>
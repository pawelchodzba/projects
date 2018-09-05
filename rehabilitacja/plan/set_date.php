<?php

class Set_date {
	
	function __construct($d){
	$this->d=$d;
	}
	private $d;

		function d_obj(){
			$d_=new DateTime();
			return $d_->setTimestamp($this->d);
		}
		function d_start_end(){
			$d_obj=$this->d_obj();
			$date__=clone $d_obj;
			return $d_start_end=[$d_obj->modify('-18 day'),$date__->modify('+18 day')];
		}
		function d_diff(){
			$d_s_e=$this->d_start_end();
			return $d_s_e[0]->diff($d_s_e[1])->format('%a')-1;
			
		}
	}	



?>
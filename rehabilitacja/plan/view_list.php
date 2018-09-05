<?php

include 'list_kontrol_m.php';
	
	class rewind_client{
		function __construct($computed,$kontrol){
			$this->computed=$computed;
			$this->kontrol=$kontrol;
			}
		function bind_array(){
		print_r(json_encode([$this->computed->execute($this->kontrol->chunk_is ()) ,$this->computed->execute($this->kontrol->chunk_plan())]));
		}
	}	
		
	
// $unix=1512588063;	

$unix=$_GET['date_unix'];	
$date_obj=new Set_date($unix);	
			
$model_list=new Too_list_patient();					
$kontrol=new Kontroler_list($model_list);
$computed=new computed_patient($date_obj);
$rewind=new rewind_client($computed,$kontrol);
$rewind->bind_array();

?>
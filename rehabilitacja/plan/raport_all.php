<?php


include 'model.php';
//$name=$_POST[];
	
class Raport{
	
	public function get_data($tab){
		$class_td="padding:2px";
		//$class_td="color:red";
	
		
		$cell="";
			for ($i=0;$i<count(($tab->get_patient_plan()[0]));$i++){
				if($sex=$tab->get_patient_plan()[4][$i]==0)	{$sex='K';}else{$sex='M';}
			$cell=$cell.'<tr style="background-color:pink"> <td  style='.$class_td.'>'.$tab->get_patient_plan()[0][$i].'</td> <td>'.$tab->get_patient_plan()[1][$i].'</td> <td>'.$tab->get_patient_plan()[2][$i].'</td><td>'.$tab->get_patient_plan()[3][$i].'</td><td>'.$sex.'</td></tr>';
			};
		$html='<div><table><tbody><tr> <th>name</th><th>diagnosis</th><th>date start</th><th>date end</th><th>sex</th><tr>'.$cell.'</tbody></table></div>';
		return $html;
		
	}
	
}



class Send_mail{
	
	function __construct($array_mails){
		$this->array_mails=$array_mails;
		foreach($this->array_mails as $mail){
			
			if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
				echo'Nieprawidłowy adres email: '. $mail;
				array_pop($this->array_mails);
			}else{
				array_pop($this->array_mails);
				array_push($this->array_mails,$mail);
				
				}
		}
	
	}
	
	
	function send ($html){
		
			foreach($this->array_mails as $mail){
				$this->charset($mail,'00000','11111',$html,'33333333333');
				
				
			}
		
		
		}
	function charset($mail,$from_user,$subject, $message,$from_email){
	  $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
      $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

      $headers = "From: $from_user <$from_email>\r\n". 
               "MIME-Version: 1.0" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 

			//return mail($mail, $subject, $message, $headers); 
			// print_r($message);
		
	}
}

$data= new Raport_all();
$raport=new Raport();

$mails=new Send_mail(['pawelchodzba@op.pl']);
$mails->send($raport->get_data($data));




?>
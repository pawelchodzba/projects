
<?php
$sala=$_GET['sala'];
$od=$_GET['o_d'];
$do=$_GET['d_o'];
$day=$_GET['day'];
$month=$_GET['month_int'];
$year=$_GET['year'];
$name=$_GET['name'];
$tel=$_GET['tel'];
$mail=$_GET['mail'];
$opis=$_GET['opis'];

$error_flag=true;

//echo'<div id="error">';
if(!$sala||!$od ||!$do||!$day||!$month|| !$year|| !$name|| !$tel||!$mail){
//echo $sala;
	echo 'Uzupełnij pole: ';
	if (!$sala){$error_flag=false;
	echo 'nr sali, ';
	}
	if (!$od){$error_flag=false;
	echo 'od godz. ,';
	}
	if (!$do){$error_flag=false;
	echo 'do godz. ,';
	}
	if (!$day){$error_flag=false;
	echo 'Dzień ,';
	}
	if (!$month){$error_flag=false;
	echo 'Miesiąc, ';
	}
	if (!$year){$error_flag=false;
	echo 'Rok, ';
	}
	if (!$name){$error_flag=false;
	echo 'Imię nazwisko, ';
	}
	if (!$tel){$error_flag=false;
	echo 'Tel, ';
	}
	if (!$mail){$error_flag=false;
	echo 'Email, ';
	}
}
if($mail && ! filter_var($mail, FILTER_VALIDATE_EMAIL)){$error_flag=false;
	echo 'Email musi mieć prawidłowy format, '; 
}
if($tel && ! preg_match('^[0-9]{9}$^',$tel)){$error_flag=false;
	echo 'Telefon musi mieć prawidłowy format(9 cyfr), '; 
}
// echo $sala;
// if($sala && ! preg_match('^[1-6]{1}$^',$sala)){$error_flag=false;
	// echo 'Numer sali od 1 do 6, '; 
// }

// if($day && ! preg_match('^[1-31]$^',$day)){$error_flag=false;
	// echo 'Podaj prawidłowy dzień miesiąca '; 
// }

///////////////////////////send////////////////////////////////////////////
if ($error_flag){
	$to='pawelchodzba@op.pl';
	$subject='wynajecie_sali';
	$headers='From: pawul0n@op.pl';
	$message= 'Sala nr: '.$sala.'</br>W dniu: '.$day.'/'.$month.'/'.$year.'</br>od godziny: '.$od.' do godziny: '.$do.'</br>'.$name.'</br>Telefon: '.$tel.'</br>Email: '.$mail.'</br> Opis:</br>'.$opis;
	//$mail_send=mail($to,$subject,$message,$headers);
	//echo 'W';
	//print_r(json_decode(false));
	$tab=["Wyslano"];

	$b=json_encode($tab);
	print_r($b);
	//echo $mail_send;
}else {
	
}
//echo'</div>';

?>

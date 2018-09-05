<?php

session_start();


require_once "../lacznosc_rezerwacja.php";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$id_=$_GET['id'];

$sql=$polaczenie->query("SELECT check_date,data,nfz FROM pacjenci WHERE id_luzka='$id_'");

if(isset($id_)){

					$id_split=	substr_count($id_,'_');
					list($s,$nr_sali)=explode('_',$id_);
					if	($s=='s'&&$id_split==2){
						
								$one_nfz=mysqli_fetch_array($sql);
							
						
							$date = new DateTime();
								$format = "d-m-Y";
								$date_begin =DateTime::createFromFormat($format, $one_nfz['data']);
								$date_close =DateTime::createFromFormat($format,$one_nfz['check_date']);
								$nfz_kat =$one_nfz['nfz'];
								
							
								if($date_begin&&$date_close){	


								
											$now =new DateTime();
											
											
											
											$day_to_exit=$now->diff($date_close)->days;
												if($now>$date_close){$day_to_exit=0;}
											$diff=$date_begin->diff($date_close)->days;
											$day_free=0;
											$d=['01-01','06-01','01-05','03-05','15-08','01-11','11-11','25-12','26-12'];
											$year= date('Y');
											array_push($d,$easter = date('d-m', easter_date($year)));
											$date = strtotime( $easter. '-' . $year);
											array_push($d,date('d-m', strtotime('+1 day', $date)));
											array_push($d,date('d-m', strtotime('+49 day', $date)));
											array_push($d,date('d-m', strtotime('+60 day', $date)));
											
												for($i=0;$i<$diff;$i++){
												$date_begin =DateTime::createFromFormat($format, $one_nfz['data']);
												$dat_iteratio=$date_begin->modify('+'.$i.'day');
												$day= $dat_iteratio->format('l');
												$d_free= $dat_iteratio->format('d-m');
														//if($day=='Sunday'||in_array($d_free,$d)){
														//$day_free++;
														//}
												}
												
												
												
												
											if(!isset($_SESSION['rop'])){$rop=100;}else{$rop=$_SESSION['rop'];}
											if(!isset($_SESSION['roow'])){$roow=200;}else{$roow=$_SESSION['roow'];}											
											if(!isset($_SESSION['roo'])){$roo=180;}else{$roo=$_SESSION['roo'];}
											if(!isset($_SESSION['rozw'])){$rozw=140;}else{$rozw=$_SESSION['rozw'];}
											if(!isset($_SESSION['roz'])){$roz=110;}else{$roz=$_SESSION['roz'];}
																						
											if	($nfz_kat==1){
												$price=$rop;
												$nfz_desc="Rehabilitacja ogólnoustrojowa przewlekła (ROP)";
											}
											if	($nfz_kat==2){
												$price=$roow;
												$nfz_desc="Rehabilitacja ogólnoustrojowa narządu ruchu po leczeniu operacyjnym z chorobami współistniejącymi(ROOW)";
											}if	($nfz_kat==3){
												$price=$roo;
												$nfz_desc="Rehabilitacja ogólnoustrojowa narządu ruchu po leczeniu operacyjnym bez chorób współistniejących (ROO) ";
											}if	($nfz_kat==4){
												$price=$rozw;
												$nfz_desc="Rehabilitacja ogólnoustrojowa narządu ruchu po leczeniu zachowawczym z chorobami współistniejącymi(ROZW)";
											}if	($nfz_kat==5){
												$price=$roz;
												$nfz_desc="Rehabilitacja ogólnoustrojowa narządu ruchu po leczeniu zachowawczym bez chorób współistniejących(ROZ) ";
											}	
												
								
	echo'<div class="into_text_info" >';	
		
		echo'<div class="name_center" >Kategria NFZ</div>';
		echo	'<div class="diag_desc font">'.$nfz_desc.'</div>';
		echo '<div class="content_text">';
			echo'<div class="name_p">przewidywany ryczałt za pobyt</div>';
			echo '<div id="price_nfz" class="date_end"> '.$date_sum=($i-$day_free-1)*$price.' zł</div>';
		echo	'</div>';
			echo '<div class="content_text">';
			echo'<div class="name_p">W sumie dni pobytu</div>';
			echo '<div id="day_long" class="date_end"> '.$diff.' </div>';
		echo	'</div>';
		echo '<div class="content_text">';
			echo'<div class="name_p">Dni wliczne w ryczałt</div>';
			echo '<div id="day_nfz" class="date_end"> '.($i-$day_free-1).' </div>';
		echo	'</div>';
		echo '<div class="content_text">';
			echo'<div class="name_p">Dni pozostałe do wypisu</div>';
			echo '<div class="date_end"> '.$day_to_exit.' </div>';
		echo	'</div>';
		
	echo	'</div>';

		
								}else{}				
						}else{}
				}else{}
			$sql->close();	






?>
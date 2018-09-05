<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{	header('Location:../index.php');
exit();}


require_once "../lacznosc_rezerwacja.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");
$id_=$_GET['id'];

include 'preper_rect_svg.php';
include 'svg_property.php';
include 'count_time.php';


$sql_week=$polaczenie->query("SELECT id_luzka,week_1,week_2,week_3,week_4,week_5,sex,walk,nazwa,check_date FROM pacjenci");	
$tab_id_busy=week_query($sql_week);
//print_r($tab_id_busy);
//$bring_tab=bring_tab($tab_id_busy);
if (isset($id_)){
		$tab_svg_property=svg_property(true);
		$width_svg=	$tab_svg_property[0];
		$height_svg=$tab_svg_property[1];
		$class_svg=	$tab_svg_property[2];
		$id_svg=	$tab_svg_property[3];
		echo '<svg class= " '.$class_svg.' " id=" '.$id_svg.' " width =" '.$width_svg.' " height=" '.$height_svg.' ">';
		
		$sql=$polaczenie->query("SELECT id,class,x,y,w,h,vertical FROM sale WHERE id='$id_' AND action='true'   LIMIT 1");
		
		$sql_l=$polaczenie->query("SELECT id,class,x,y,w,h,vertical FROM luzka WHERE id_sali='$id_' AND view='true' ");
		$tab=sala_into_view($sql,$sql_l,$width_svg,$height_svg,$tab_id_busy);
	
}else{
		$tab_svg_property=svg_property(false);
		$width_svg=	$tab_svg_property[0];
		$height_svg=	$tab_svg_property[1];
		$class_svg=	$tab_svg_property[2];
		$id_svg=	$tab_svg_property[3];
		echo '<svg class= " '.$class_svg.' " id=" '.$id_svg.' " width =" '.$width_svg.' " height=" '.$height_svg.' ">';	

		$sql=$polaczenie->query("SELECT id,class,x,y,w,h,vertical FROM sale");
		loop_rect_control($sql,null);	
		// loop_rect_control($sql);	
					
		$sql_l=$polaczenie->query("SELECT id,class,x,y,w,h,vertical FROM luzka  WHERE view='true'");	
		loop_rect_control($sql_l,$tab_id_busy);	
		// loop_rect_control($sql_l);	
	include 'text_title_svg.php';
	
		
	
	
}



echo '</svg>';




?>
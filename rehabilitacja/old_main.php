<?php 
session_start();
 
if(!isset($_SESSION['zalogowany']))
{
	header('Location: index.php');
	exit();
}
include './price_nfz.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>medikopter</title>
		
		<link type="text/css" href="st_l.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		</head>
<body >

	<div id="content_all">
	
			<div class="wylog"><a href="wylog.php">wyloguj</a></div>
			 
			<div class="windows_all">
					<div class="name_legend title_l">Legenda</div>
					<div class="windows_up" id= "legend">	
						<div class="wraper_rect">
							<div class="rec_legend rect_l"></div><div class="tex_lengend">Łóżko wolne</div><div style="clear:both"></div>
							<div class="rec_legend week0"></div><div class="tex_lengend">1 tydzień</div><div style="clear:both"></div> 
							<div class="rec_legend week1"></div><div class="tex_lengend">2 tydzień</div><div style="clear:both"></div>
							<div class="rec_legend week2"></div><div class="tex_lengend">3 tydzień</div><div style="clear:both"></div>
							<div class="rec_legend week3"></div><div class="tex_lengend">4 tydzień</div><div style="clear:both"></div>
							<div class="rec_legend week4"></div><div class="tex_lengend">5 tydzień</div><div style="clear:both"></div>
						</div>
						<div class="wraper_itiem">
							<div class="itiem_legend women"></div><div class="tex_lengend">Kobieta</div><div style="clear:both"></div>
							<div class="itiem_legend men"></div><div class="tex_lengend">Mężczyzna</div><div style="clear:both"></div>
							<div class="itiem_legend walk_l"></div><div class="tex_lengend">Pacjent chodzący</div><div style="clear:both"></div>
							<div class="itiem_legend dont_walk"></div><div class="tex_lengend">Pacjent leżacy</div><div style="clear:both"></div>
						</div>
					</div>
					<div class="windows_up" id= "window_info"><!----view svg info------></div>
					<div class="windows_up" id= "text_info"><!----text info------></div>	
		</div>
		<div class="all_svg">
			   <div class="interfece">
					<div id="time" class="time"></div>
					<div id="bilans" class="bilans">Bilans </div>
					<div id="real_bilans" class="real_bilans">Bilans realny </div>
					<div id="future_bilans" class="future_bilans">Bilans przewidywany </div>
					<div id="patient_count" class="patient_count"></div>
					 <button class="btn_center" id="plan">plan</button>
					<button class="btn_center" id="statistic"><a href="bilans/show_rec.php">statystyka</a></button>
					 <button class="btn_center" id="chenge_patient">zmiana miejsca</button>
				<div id ="contein_nfz">
						<label>ROP <input tyle="text" id="rop_on_window" value="<?php echo $_SESSION['rop'];?>"></label>
						<label>ROOW <input tyle="text" id="roow_on_window" value="<?php echo $_SESSION['roow'];?>"></label>
						<label>ROO <input tyle="text" id="roo_on_window" value="<?php echo $_SESSION['roo'];?>"></label>
						<label>ROZW <input tyle="text" id="rozw_on_window" value="<?php echo $_SESSION['rozw'];?>"></label>
						<label>ROZ <input tyle="text" id="roz_on_window" value="<?php echo $_SESSION['roz'];?>"></label>
					</div>
			  </div>	
			<div id="svg"><!----view panel control------></div>
			<div id="items_svg"><!--interchange-view panel control--></div>
		</div>
		
	</div>
		<div id="menago" class="menago"><!----form------></div>
	
		<div id="modal_svg" class="modal_svg"><!----chenge patient------></div> 
		<div id="modal_plan" class="modal_svg"><!----plan patient------>
				<div id="list"class="list"></div>
				<div id="form_p"></div>
				<div id="calendar_all" class="calendar_all"></div>
				<div class="tooltip" id="tooltip"></div>
			
		</div> 
			
	
	<a href="admin/show_rec.php">baza admin</a>
	
	

		
	/////////////////////////////////////////tooltip///////////////////////////////////////////////	
			
	
	<script src="main.js"></script>
	<script src="form.js"></script>
	<script src="form_action.js"></script>
	<script src="plan.js"></script>
	<script src="chenge_patient/main_chenge.js"></script>
	<script src="raport_all.js"></script>
</body>
</html>



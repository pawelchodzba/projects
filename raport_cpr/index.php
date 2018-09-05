
<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Centrum Powiadamiania Ratunkowego</title>
	<meta name="author" content="Pawel Chodzba">
	<!-- <link type="text/css" href="st_l.css" rel="stylesheet" /> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet"> -->
		<!-- <script type="text/javascript" src="jquery-3.2.1.min.js"></script>  -->
<style type="text/css">

#all{
	
display:flex;
background-color:#9B9EBB;	
}
#form_all{
width:50%;
height:58cm;

}
#title{
display:flex;
justify-content:center;
text-align:center;
}
#tab{
	width:100%;

}
#tab table{
border-collapse:collapse;
}
#tab table tr th,#tab table tr td{
border:1px solid black;
background-color:white;
}

#tab table th:nth-child(1){
	width:5%;
}
#tab table th:nth-child(2){
	width:40%;
}
#tab table th:nth-child(3){
	width:10%;
}
#tab table th:nth-child(4){
	width:10%;
}
#tab table th:nth-child(5){
	width:40%;
}
#tab table th:nth-child(6){
	width:30%;
	display:none;
}

.class_tr:hover{
	
background-color:red
}
.class_tr input{
font-size:18px;
border:none;
width:100%;
height:22px;

}
@media all and (max-width:900px){ 
	.class_tr input,#tab table tr th{
	font-size:12px;	
	}

}	
@media all and (max-width:770px){ 
	.class_tr input,#tab table tr th{
	font-size:10px;	
	}	

}
.class_tr>td:nth-child(5n+2)>input{


}
.class_tr>td:nth-child(5n+2)>input:hover {
 cursor:pointer;
 background-color:#C35050;
 color:white;
}

.class_tr>td:nth-child(5n+3)>input{

text-align:center;

}
.class_tr>td:nth-child(5n+4)>input{

text-align:center;
}

.class_tr>td:nth-child(5n+4)>input:hover{
 cursor:pointer;
 background-color:#4C8849;
 color:white;
}

.class_tr>td:nth-child(5n+5)>input{
text-align:center;
}
.class_tr>td:nth-child(5n+6)>div{
width:100px;
display:none;
}

.wraper_list>ul,#wrap_dyzurny>ul{
list-style:none;
position:absolute;
transform:translate(-40px,-20px);
}
.wraper_list>ul>li,#wrap_dyzurny>ul>li{
border-bottom:1px solid black;
background-color:white;
letter-spacing:1px;
padding:3px 2px;
width:200px;
}

.wraper_list>ul>li:nth-child(2n+1),#wrap_dyzurny>ul>li:nth-child(2n+1){
background-color:#DEDFDB;
}
.wraper_list>ul>li:hover,#wrap_dyzurny>ul>li:hover{
color:white;
background-color:brown;
cursor:pointer;
}
#dyzurny{
	border:none;
}
#wrap_dyzurny>ul{
transform:translate(70px,-15px);
}

.koordynator{
display:flex;
justify-content:space-around;
}
	
#print,#anuluj button{
	width:100%;	
	font-size:18px;
	letter-spacing:1px;
	}
	
#print:hover,#anuluj  button:hover{
background-color:#B8B8B8;	
cursor:pointer;
	}	
	
	
/*////////////////////////////svg/////////////////*/
#svg{

width:50%;
height:50%;
}
svg{
	position:relative;
	top:180px;
background:-webkit-radial-gradient(circle ,#211E51 1%,#302D65 50%,#47438D);
}


.main_stan{
fill:#5E5C7A;
color:black;
}
.main_stan:hover{
fill:#211E51;
cursor:pointer;
}
.activ_svg{
fill:#51540A;
}
.main_stan text {
	fill:white;
}
.main_stan ellipse,.main_stan rect{
	//fill:white;
	stroke:white;
}

/*//////////////////////////window info////////////////*/
#window_info{
position:relative;
top:188px;
width:100%;
height:10mm;
background:-webkit-radial-gradient(circle ,#211E51 1%,#302D65 50%,#47438D);;
text-align:center;
border-bottom:1px solid white;
font-size:26px;
color:white;
z-index:222;
padding:1px 0;
}

@media all and (max-width:900px){ 
		#window_info{
			height:7mm;
			font-size:14px}
}
/*//////////////////////////print////////////////*/
@media print{
	#svg{
		display:none;
	}	
	#all{
	width:20cm;
	background-color:white;	
	}	
	#form_all{
width:20cm;
}
#tab table th:nth-child(6){
	width:40%;
	display:table-cell;
}
#tab table th:nth-child(5){
	width:10%;
	
}
#tab table th:nth-child(2){
	width:30%;
	
}
	#anuluj{
		display:none;
	}
#print{
		display:none;
	}	
}
</style>	
		
</head>
<body>
		<a href="../wylog.php">WYLOGUJ</a>	</br>	
		<a href="../index.php">MENU GŁÓWNE</a>
<div id="all">
	
	
	

	<div id="form_all">
		<div id="title">
			<p><span  id="nr_r"></span><br>
					Z DYŻURU OPERATORA NUMERÓW ALARMOWYCH W CENTRUM<br>
					POWIADAMIANIA RATUNKOWEGO W RZESZOWIE<br>
					<span id="date"></span>
			</p>
		</div>
			<p>ZK - IV.0444.2.<span id="month">1</span>.2018</p>
			<p>1. Osoby pełniące dyżur:</p>
		
		<div id="tab">
			<table>
				<tbody>
					<tr><th>Lp.</th> <th>Nazwisko Imię</th>  <th>Numer <br>operatora</th>  <th>Numer <br>konsoli<br> dyspozytorskiej<br> (KD)</th>  <th>Godziny<br> pełnienia<br> dyżuru</th>  <th>Podpis operatora</th></tr>
				</tbody>
				
			</table>
			<button id="print">Drukuj</button>
			<div id="anuluj"></div>
			<p>2. Informacja o ilości przyjętych zgłoszeń na numer alarmowy 112.</p>
			<p>2.1. Raporty sporządzane za dany miesiąc przez operatorów pełniących funkcje  koordynatora.</p>
			<p>2.1.1. Raport1_RZE_Zgłoszenia_PR </p> 
			<p>2.1.2. Raport2_RZE_Zgłoszenia_obsł_PR</p>
			<p>2.1.3. Raport3_RZE_Zdarzenia_PR</p>
			<p>2.1.4. Raport4_RZE_Czasy_PR</p>
			<p>2.1.5. Statystyka zbiorcza za dany rok dla CPR (styczeń – grudzień) uzupełniana przez koordynatora na bieżąco co miesiąc według załączonego wzoru - forma elektroniczna.</p>
			<p>2.2. Raporty 2.1.1-2.1.1.4 za poprzedni miesiąc koordynator zmiany sporządza 1 – go dnia danego miesiąca po godz. 13.00 (aktualizacja danych).</p>
			<p>	3. Dane dotyczące  zaistniałych zdarzeń podczas pełnionego dyżuru.</p>
			<p>	3.1. Awarie dotyczące sprzętu na stanowisk operatorskich oraz awarie serwera DGT odnotowujemy w przeznaczonym do tego dzienniku awarii.</p>
			<p>	3.2. Ilość kart do logowania podczas zmiany dyżuru<input value="(stan 57)– 57"/></p>
			<p>3.3. Ilość telefonów komórkowych podczas zmiany dyżuru ( telefony 4, ładowarki 2) – 4/2</p>
			<p>3.4. Sprawdzenie działania i stanu naładowania baterii telefonów komórkowych (każdy piątek do godz.12.00) –</p>
			<p>3.5. Karta dla operatorów numerów alarmowych do wejścia do serwerowni CPR w KM PSP w Rzeszowie <input value="(stan 1) – 1"/></p>
			<p>3.6. Czy wykonano restarty zestawów operatorskich?- tylko zmiana nocna –</p>
			<p>3.7. Zastępstwo podczas dyżuru – nazwisko i imię zastępującego, nazwisko i imię zastępowanego, godziny zastępstwa, przyczyna zastępstwa.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>3.9. Inne zdarzenia – opis.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p id="wrap_dyzurny">3.10 dyżurny zmiany:<input type="text" id="dyzurny"></p>
			<p>4. Stan słowników wyrazów obcych (ogólna liczba 8 szt.) -  8</p>
			<p>5. Informacje dotyczące brakującego wyposażenia.</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			<p>______________________________________________________________________________________</p>
			
			<div class="koordynator">
					<p>Operator realizujący zadania  <br>                                                                     
							koordynatora zmianowego  <br>                                           
							(zdający)
							 <br> <br> ______________________
					</p>   

					<p> Operator realizujący zadania	<br>      
							koordynatora zmianowego<br>      
							(przyjmujący)
							<br> <br> _______________________
					</p>
			</div>
	</div>
	
	</div>
	
	
	<div id="svg">
	<div id="window_info"></div>
		<svg   width="100%"   height="20%"   viewBox="0 0 1052.3622 744.09448"  >
		  
			<text 
				 y="80.28064"
				 x="120.069498"
				  style="font-style:normal;fill:white;font-weight:normal;font-size:32.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:1px;word-spacing:1px;fill-opacity:1;stroke:none;stroke-width:3px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 
				 >Centrum Powiadamiania Ratunkowego w Rzeszowie</text>
		  <g
			
			 transform="translate(0,-308.26772)">
			 
			<g  class="main_stan"
			   id="s_18">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-56.57481"
				 x="526.0686"
				 height="53.149605"
				 id="rect3336-3-7"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227028,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620"
				 y="580.28064"
				 x="12.069498"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:3px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="580.28064"
				   x="12.069498"
				   id="tspan3622"
				   sodipodi:role="line">18</tspan></text>
			</g>
			
			
			<g class="main_stan"
				id="s_14">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-137.02626"
				 x="769.28082"
				 height="53.149605"
				 id="rect3336-3-40"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-7"
				 y="818.76971"
				 x="95.793488"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="818.76971"
				   x="95.793488"
				   id="tspan3622-8"
				   sodipodi:role="line">14</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_10">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-190.19591"
				 x="769.19153"
				 height="53.149605"
				 id="rect3336-3-055"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-8"
				 y="820.22815"
				 x="151.3336"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="820.22815"
				   x="151.3336"
				   id="tspan3622-86"
				   sodipodi:role="line">10</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_12">
			  <rect
				 width="124.01575"
				 y="893.24274"
				 x="12.947476"
				 height="53.149605"
				 id="rect3336-3-05"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-73"
				 y="902.87109"
				 x="63.909351"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="902.87109"
				   x="63.909351"
				   id="tspan3622-6"
				   sodipodi:role="line">12</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_11">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-190.10663"
				 x="893.25403"
				 height="53.149605"
				 id="rect3336-3-1"
				 style="fill-rule:evenodd;stroke-opacity:1" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-5"
				 y="936.41443"
				 x="152.105"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="936.41443"
				   x="152.105"
				   id="tspan3622-4"
				   sodipodi:role="line">11</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_9">
			  <rect
				 width="124.01575"
				 y="844.47821"
				 x="323.12085"
				 height="53.149605"
				 id="rect3336-3-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-4"
				 y="855.29443"
				 x="390.7634"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="855.29443"
				   x="390.7634"
				   id="tspan3622-0"
				   sodipodi:role="line">9</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_5">
			  <rect
				 width="124.01575"
				 y="844.48389"
				 x="570.18024"
				 height="53.149605"
				 id="rect3336-3-37"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-83"
				 y="854.60693"
				 x="648.21832"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="854.60693"
				   x="648.21832"
				   id="tspan3622-69"
				   sodipodi:role="line">5</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_7">
			  <rect
				 width="123.02901"
				 y="897.64136"
				 x="447.13623"
				 height="52.16288"
				 id="rect3336"
				 style="fill-rule:evenodd;stroke-width:0.98672509;stroke-opacity:1" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-2"
				 y="907.88812"
				 x="511.49084"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="907.88812"
				   x="511.49084"
				   id="tspan3622-9"
				   sodipodi:role="line">7</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_8">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-447.13675"
				 x="897.64008"
				 height="53.149605"
				 id="rect3336-3-09"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-732"
				 y="938.82556"
				 x="422.76343"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="938.82556"
				   x="422.76343"
				   id="tspan3622-08"
				   sodipodi:role="line">8</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_6">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-623.32031"
				 x="897.65308"
				 height="53.149605"
				 id="rect3336-3-8"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-6"
				 y="936.76306"
				 x="604.21826"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="936.76306"
				   x="604.21826"
				   id="tspan3622-2"
				   sodipodi:role="line">6</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_13">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-394.1691"
				 x="623.56653"
				 height="53.149605"
				 id="rect3336-3-38"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-71"
				 y="675.51349"
				 x="360.21786"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="675.51349"
				   x="360.21786"
				   id="tspan3622-64"
				   sodipodi:role="line">13</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_17">
			  <rect
				 transform="scale(-1,-1)"
				 width="124.01575"
				 y="-623.57037"
				 x="-394.15912"
				 height="53.149605"
				 id="rect3336-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-55"
				 y="589.23242"
				 x="331.49057"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="589.23242"
				   x="331.49057"
				   id="tspan3622-88"
				   sodipodi:role="line">17</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_15">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-678.45483"
				 x="623.56653"
				 height="53.149605"
				 id="rect3336-3-4"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-0"
				 y="669.0401"
				 x="651.96594"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="669.0401"
				   x="651.96594"
				   id="tspan3622-28"
				   sodipodi:role="line">15</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_16">
			  <rect
				 transform="scale(-1,-1)"
				 width="124.01575"
				 y="-623.55487"
				 x="-749.31866"
				 height="53.149605"
				 id="rect3336-3-4-3"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-62"
				 y="589.3139"
				 x="691.04974"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="589.3139"
				   x="691.04974"
				   id="tspan3622-06"
				   sodipodi:role="line">16</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_3">
			  <rect
				 width="124.01575"
				 y="831.89948"
				 x="766.99664"
				 height="53.149605"
				 id="rect3336-3-0"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-26"
				 y="845.021"
				 x="847.38489"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="845.021"
				   x="847.38489"
				   id="tspan3622-1"
				   sodipodi:role="line">3</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_2">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-944.15808"
				 x="760.99677"
				 height="53.149605"
				 id="rect3336-3-9"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			 
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-57"
				 y="809.04706"
				 x="934.80914"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="809.04706"
				   x="934.80914"
				   id="tspan3622-97"
				   sodipodi:role="line">2</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_4">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-891.01361"
				 x="884.99512"
				 height="53.149605"
				 id="rect3336-3-33"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-3"
				 y="933.49762"
				 x="878.24048"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="933.49762"
				   x="878.24048"
				   id="tspan3622-27"
				   sodipodi:role="line">4</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="s_1">
			  <rect
				 width="124.01575"
				 y="885.00299"
				 x="890.99841"
				 height="53.149605"
				 id="rect3336-3-5"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.97227027,1.0285206)"
				 sodipodi:linespacing="125%"
				 id="text3620-34"
				 y="893.63452"
				 x="975.94995"
				 style="font-style:normal;font-weight:normal;font-size:26.10185432px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="893.63452"
				   x="975.94995"
				   id="tspan3622-7"
				   sodipodi:role="line">1</tspan></text>
			</g>
			
			<g class="main_stan"
			   id="szkoleniowe_19">
			  <rect
				 transform="matrix(0,1,-1,0,0,0)"
				 width="124.01575"
				 y="-1023.7177"
				 x="461.7829"
				 height="53.149605"
				 id="rect3336-3-7-0"
				 style="fill-rule:evenodd;stroke-opacity:0.5" />
			
			  <text
				 transform="scale(0.93740973,1.0667694)"
				 sodipodi:linespacing="125%"
				 id="text3620-47"
				 y="493.25537"
				 x="1046.7433"
				 style="font-style:normal;font-weight:normal;font-size:20.31489754px;line-height:125%;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill-opacity:1;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
				 xml:space="preserve"><tspan
				   y="493.25537"
				   x="1046.7433"
				   id="tspan3622-3"
				   sodipodi:role="line">szk</tspan></text>
			</g>
		  </g>
		</svg>
		
		
	</div>
	
	
	
</div>
<script>
let data={"ona":[
{"name":"Nowak Magdalena","nr_o":"9","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"H","default_s":""}, 
{"name":"Kowalski Krzysztof","nr_o":"10","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"B","default_s":""}, 
{"name":"Wiśniewski Gotkowski","nr_o":"52","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"J","default_s":""}, 
{"name":"Dąbrowski Krzysztof","nr_o":"21","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"D","default_s":""}, 
{"name":"Lewandowski Ewelina","nr_o":"1","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"A","default_s":""}, 
{"name":"Wójcik Sabina","nr_o":"22","godz":['7:30-19:30','19:30-7:30'],"nr_g":"0","char_g":"0","default_s":""}, 
{"name":"Kamiński Paweł","nr_o":"23","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"C","default_s":""}, 
{"name":"Kowalczyk Mateusz","nr_o":"70","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"L","default_s":"3"}, 
{"name":"Zieliński Karolina","nr_o":"59","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"C","default_s":""}, 
{"name":"Szymański Mateusz","nr_o":"58","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"C","default_s":""}, 
{"name":"Woźniak Małgorzata","nr_o":"25","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"F","default_s":""}, 
{"name":"Kozłowski Joanna","nr_o":"26","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"D","default_s":""}, 
{"name":"Jankowski Przemysław","nr_o":"31","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"F","default_s":""}, 
{"name":"Wojciechowski Tomasz","nr_o":"27","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"E","default_s":""}, 
{"name":"Kwiatkowski Elżbieta","nr_o":"48","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"I","default_s":""}, 
{"name":"Kaczmarek Łukasz","nr_o":"15","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"E","default_s":""}, 
{"name":"Mazur Magdalena","nr_o":"60","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"K","default_s":""}, 
{"name":"Krawczyk Agata","nr_o":"2","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"A","default_s":""}, 
{"name":"Piotrowski Aneta","nr_o":"64","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"M","default_s":""}, 
{"name":"Grabowski Anna","nr_o":"11","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"G","default_s":""}, 
{"name":"Nowakowski Grzegorz","nr_o":"28","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"F","default_s":""}, 
{"name":"Pawłowski Anna","nr_o":"29","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"F","default_s":"6"}, 
{"name":"Michalski Wiktor","nr_o":"30","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"G","default_s":""}, 
{"name":"Nowicki Paweł","nr_o":"62","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"L","default_s":""}, 
{"name":"Adamczyk Mateusz","nr_o":"32","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"D","default_s":""}, 
{"name":"Dudek Piotr","nr_o":"3","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"A","default_s":""}, 
{"name":"Zając Klaudia","nr_o":"35","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"D","default_s":""}, 
{"name":"Wieczorek Artur","nr_o":"18","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"C","default_s":""}, 
{"name":"Jabłoński Jakub","nr_o":"61","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"Ł","default_s":""}, 
{"name":"Król Natalia","nr_o":"34","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"H","default_s":""}, 
{"name":"Majewski Kamil","nr_o":"51","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"H","default_s":""}, 
{"name":"Olszewski Monika","nr_o":"4","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"B","default_s":""}, 
{"name":"Jaworski Ewelina","nr_o":"36","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"G","default_s":""}, 
{"name":"Wróbel Karol","nr_o":"12","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"Ł","default_s":""}, 
{"name":"Malinowski Marcin","nr_o":"37","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"E","default_s":""}, 
{"name":"Pawlak Karolina","nr_o":"17","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"C","default_s":""}, 
{"name":"Witkowski Maria","nr_o":"5","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"B","default_s":""}, 
{"name":"Walczak Tomasz","nr_o":"6","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"A","default_s":""}, 
{"name":"Stępień Daniel","nr_o":"65","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"F","default_s":""}, 
{"name":"Górski Katarzyna","nr_o":"56","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"K","default_s":""}, 
{"name":"Rutkowski Paweł","nr_o":"53","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"K","default_s":""}, 
{"name":"Michalak Monika","nr_o":"19","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"H","default_s":""}, 
{"name":"Sikora Grzegorz","nr_o":"7","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"A","default_s":""}, 
{"name":"Ostrowski Jakub","nr_o":"66","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"B","default_s":""}, 
{"name":"Baran Aneta","nr_o":"39","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"E","default_s":""}, 
{"name":"Duda Wojciech","nr_o":"57","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"L","default_s":""}, 
{"name":"Szewczyk Marek","nr_o":"41","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"I","default_s":""}, 
{"name":"Tomaszewski Wojciech","nr_o":"40","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"I","default_s":""}, 
{"name":"Pietrzak Ewelina","nr_o":"67","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"L","default_s":""}, 
{"name":"Marciniak Mariusz","nr_o":"42","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"H","default_s":"5"}, 
{"name":"Wróblewski Magdalena","nr_o":"20","godz":['7:30-19:30','19:30-7:30'],"nr_g":"0","char_g":"0","default_s":""}, 
{"name":"Zalewski Aneta","nr_o":"63","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"G","default_s":""}, 
{"name":"Jakubowski Szymon","nr_o":"49","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"I","default_s":"7"}, 
{"name":"Jasiński Cezary","nr_o":"16","godz":['7:30-19:30','19:30-7:30'],"nr_g":"5","char_g":"J","default_s":""}, 
{"name":"Zawadzki Krzysztof","nr_o":"8","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"B","default_s":"1"}, 
{"name":"Sadowski Sabina","nr_o":"43","godz":['7:30-19:30','19:30-7:30'],"nr_g":"3","char_g":"J","default_s":""}, 
{"name":"Bąk Dorota","nr_o":"44","godz":['7:30-19:30','19:30-7:30'],"nr_g":"1","char_g":"E","default_s":""}, 
{"name":"Chmielewski Tomasz","nr_o":"45","godz":['7:30-19:30','19:30-7:30'],"nr_g":"2","char_g":"G","default_s":""}, 
{"name":"Włodarczyk Żaneta","nr_o":"72","godz":['7:30-19:30','19:30-7:30'],"nr_g":"4","char_g":"K","default_s":""}, 
{"name":"Borkowski Marcin","nr_o":"73","godz":['7:30-19:31','19:30-7:31'],"nr_g":"2","char_g":"I","default_s":""}

]}
document.getElementById('print').onclick=function(){window.print()};var Input=function(){function a(b,c,d){this.select_el=b,this.controll=c,this.delault_v=d,this.input,this.values,this.Tr,this.Html,this.last_inp,this.last_id_inp}return a.prototype.init_focus=function(){var b=this.select_el.querySelectorAll('#tab tr>td:nth-child(5n+2)>input'),_iteratorNormalCompletion=!0,_didIteratorError=!1,_iteratorError=void 0;try{for(var d,c=b[Symbol.iterator]();!(_iteratorNormalCompletion=(d=c.next()).done);_iteratorNormalCompletion=!0)el=d.value,el.addEventListener('focus',this.activInput.bind(this))}catch(f){_didIteratorError=!0,_iteratorError=f}finally{try{!_iteratorNormalCompletion&&c.return&&c.return()}finally{if(_didIteratorError)throw _iteratorError}}this.last_id_inp=el.id},a.prototype.init_dyz=function(){this.select_el.addEventListener('focus',this.activInput.bind(this))},a.prototype.activInput=function(b){console.log(),this.input==b.target||(this.input=b.target,this.add_obj_(),b.target.addEventListener('keyup',this.getValue.bind(this)),this.Html.select_el(this.input))},a.prototype.cls_tr_go=function(){this.Tr&&this.Tr.tab_refere()},a.prototype.set_Html=function(b){this.Html=b},a.prototype.no_duble=function(b){this.controll.no_duble(b)},a.prototype.add_obj_=function(){this.input.value&&this.controll.add_obj(this.input.value)},a.prototype.getValue=function(b){this.controll.fetch_value(this.values=b.target.value)},a.prototype.setValue=function(b){return'string'==typeof b?this.input.value=b:void(this.input.value='')},a}(),Controll=function(){function a(c,d,f){this.obj_array=c,this.html=d,this.char_len=f,this.string,this.Obj_duble_start={},this.constans_data}return a.prototype.switch_=function(){if(Array.isArray(this.obj_array))this.Serch_array();else this.search_obj()},a.prototype.default_duble=function(c){var d=c.map(function(f){return f.name});this.no_duble(d)},a.prototype.no_duble=function(c){var d=[];for(var f in this.obj_array.ona)-1==c.indexOf(this.obj_array.ona[f].name)&&d.push(this.obj_array.ona[f]);this.obj_array.ona=d},a.prototype.constans_data=function(c){this.constans_data=c},a.prototype.add_obj=function(c){for(var d in this.constans_data.ona)this.constans_data.ona[d].name===c&&this.obj_array.ona.push(this.constans_data.ona[d])},a.prototype.search_obj=function(){var c=[],d=[],f=new RegExp(this.string,'gi');for(var h in this.obj_array.ona)f.exec(this.obj_array.ona[h].name)&&(c.push(this.obj_array.ona[h].name),d.push(this.obj_array.ona[h].nr_g));this.send_array(c,d)},a.prototype.fetch_value=function(c){this.string=c,this.switch_()},a.prototype.Serch_array=function(){var c=this.obj_array.filter(function(d){if(this.string.length>=this.char_len){var f=new RegExp(this.string,'gi');return f.exec(d)}}.bind(this));this.send_array(c,null)},a.prototype.send_array=function(c,d){this.html.dowland(c,d)},a}(),Create_html=function(){function a(){this.wraper,this.list,this.Inp,this.Search,this.Row,this.result_value,this.nr_row,this.no_duble=[],this.Raport_}return a.prototype.select_el=function(b){this.nr_row=b.id,this.wraper=document.querySelector('#wrap_'+this.nr_row)},a.prototype.dowland=function(b,c){this.behavior_list(b,c)},a.prototype.behavior_list=function(b,c){if(b.length){if(this.list)this.list.remove(),this.create(b,c);else if(!this.list)this.create(b,c);else return;}else if(!b.length)if(this.list)this.list.remove();else if(!this.list)return},a.prototype.create=function(b,c){var d=document.createElement('ul');b.map(function(f,h){var j=document.createElement('li'),k=document.createElement('span');k.textContent=c[h],j.appendChild(k),j.textContent=f,d.appendChild(j)}),this.list=d,this.show()},a.prototype.show=function(){this.wraper.appendChild(this.list),this.Events_list()},a.prototype.Events_list=function(){this.list.addEventListener('click',this.mouseClick.bind(this)),this.list.addEventListener('mouseover',this.mouseOver.bind(this)),this.list.addEventListener('mouseleave',this.mouseLeave.bind(this))},a.prototype.removeEvent=function(){this.list.removeEventListener('mouseover',this.mouseOver),this.list.removeEventListener('click',this.mouseClick),this.list.removeEventListener('mouseleave',this.mouseLeave)},a.prototype.get_obj_inp=function(b){this.Inp=b},a.prototype.get_Raport_=function(b){b&&(this.Raport_=b)},a.prototype.get_obj_search=function(b){b&&(this.Search=b)},a.prototype.next_row=function(b){b&&(this.Row=b)},a.prototype.mouseClick=function(b){this.fixt_value(b),this.removeEvent(),this.clear_list(),this.rewind_search(),this.create_row(),this.set_no_duble(b),this.Raport_&&this.Raport_.count_ona()},a.prototype.mouseOver=function(b){this.fixt_value(b)},a.prototype.mouseLeave=function(){this.Inp.setValue(this.Inp.values),this.removeEvent(),this.clear_list()},a.prototype.fixt_value=function(b){b.target.matches('li')&&(this.result_value=this.Inp.setValue(b.target.textContent))},a.prototype.set_no_duble=function(b){this.no_duble.push(b.target.textContent),this.Inp.no_duble(this.no_duble)},a.prototype.rewind_search=function(){this.Search&&this.Search.string_get(this.result_value,this.nr_row)},a.prototype.create_row=function(){this.Inp.last_id_inp==this.nr_row&&this.Row.one_row(this.nr_row,null)},a.prototype.clear_list=function(){this.list.remove()},a}(),Search=function(){function a(b,c){this.data=b,this.index_result=c,this.owners_s_default=[],this.arr_result_obj=[],this.string,this.Date}return a.prototype.string_get=function(b,c){this.string=b,this.nr_row=c,this.search_result()},a.prototype.search_result=function(){var b=this.Date.get_nigth();for(var c in b=b?1:0,this.data.ona)if(this.data.ona[c].name==this.string){var _data$ona$_i=this.data.ona[c],d=_data$ona$_i.name,f=_data$ona$_i.nr_o,h=_data$ona$_i.godz,j=_data$ona$_i.nr_g,k=_data$ona$_i.char_g,l=_data$ona$_i.default_s;this.set_result(h[b],f);break}},a.prototype.set_result=function(b,c){var d=document.querySelector('#tr_'+this.nr_row);d.querySelector('#nr_o_'+this.nr_row).value=c,d.querySelector('#godz_'+this.nr_row).value=b,d.querySelector('#nr_s_'+this.nr_row).dataset.nr_o=c},a.prototype.search_zmiany=function(b){var c=b.get_zmiana_activ();for(var d in this.data.ona)this.data.ona[d].nr_g==c&&(this.arr_result_obj.push(this.data.ona[d]),this.data.ona[d].default_s&&this.owners_s_default.push(this.data.ona[d]));return this.arr_result_obj},a.prototype.result_array=function(b,c){this.Date=b;var h,d=this.search_zmiany(b),f=b.get_nigth();for(var j in d){f=f?1:0;var _array_obj_result$_i=d[j],k=_array_obj_result$_i.name,o=_array_obj_result$_i.nr_o,l=_array_obj_result$_i.godz,m=_array_obj_result$_i.default_s;c.one_row(j,[k,o,l[f],m]),h=j}c.one_row(+h+1,null)},a.prototype.owners_s=function(){return this.owners_s_default},a.prototype.get_ona_now=function(){return this.arr_result_obj},a}(),Create_row=function(){function a(b){this.el=b,this.Inp}return a.prototype.one_row=function(b,c){var d='',f='',h='',j='';b||(b=0),c&&(d=c[0],f=c[1],h=c[3],j=c[2]),b++;var k='<td>'+b+'</td><td id="wrap_'+b+'" class="wraper_list"><input id="'+b+'" value="'+d+'"></td><td><input  id="nr_o_'+b+'" value="'+f+'" disabled="true" ></td><td><input  id="nr_s_'+b+'" disabled="true" value="'+h+'" data-nr_o="'+f+'"></td> <td><input  id="godz_'+b+'" value="'+j+'"></td><td><div></div></td>';this.fixt_row(k,b,f)},a.prototype.fixt_row=function(b,c){var f=document.createElement('tr');f.id='tr_'+c,f.classList.add('class_tr'),f.innerHTML=b,this.el.appendChild(f),this.Inp.init_focus()},a.prototype.refresch=function(b){this.Inp=b},a}(),Date_work=function(){function a(){this.date=new Date,this.year=this.date.getFullYear(),this.day=this.date.getDate(),this.month=this.date.getMonth()+1,this.zmiana_activ,this.night,this.nr_raport}return a.prototype.iteratio=function(){for(var b=new Date(2018,2,30,7,30),c=b.getTime(),d=-1,f=176,h=['1','2','3','1','4','3','5','4','2','5'];c<=this.date.getTime();)f++,d++,d>=h.length&&(d=0),c+=4.32e7,this.zmiana_activ=h[d];0!=d%2&&(this.night=!0),this.nr_raport=f,this.show_nr_r(),this.show_date()},a.prototype.get_zmiana_activ=function(){return this.zmiana_activ},a.prototype.get_nigth=function(){return this.night},a.prototype.show_nr_r=function(){document.querySelector('#nr_r').textContent='RAPORT '+this.nr_raport+'/'+this.year},a.prototype.show_date=function(){var b;if(this.night){var c=new Date(new Date().setDate(new Date().getDate()-1)),d=new Date(new Date().setDate(new Date().getDate()+1)),f=this.date.getHours();b=19>f?'W DNIU '+c.getDate()+'/'+this.day+'.'+(c.getMonth()+1)+'.'+c.getFullYear()+' r.':'W DNIU '+this.day+'/'+d.getDate()+'.'+this.month+'.'+this.year+' r.'}else b='W DNIU '+this.day+'.'+this.month+'.'+this.year+' r.';document.querySelector('#date').textContent=b,document.querySelector('#month').textContent=this.month},a}();function copyData(a){return JSON.parse(JSON.stringify(a))}var Data_copy=copyData(data),array=function(){var a=[];for(var b in data.ona)a.push(data.ona[b].name);return a},date=new Date_work;date.iteratio();var search=new Search(data,[0,2]),row_=new Create_row(document.querySelectorAll('#tab>table>tbody')[0]),html=new Create_html(document.querySelector('#tab')),html_dyz=new Create_html(document.querySelector('#wrap_dyzurny')),controll=new Controll(data,html,1),controll_dyz=new Controll(Data_copy,html_dyz,1),inp=new Input(document.querySelector('#form_all'),controll,'pierwszy'),inp_dyz=new Input(document.querySelector('#dyzurny'),controll_dyz,'pierwszy');inp_dyz.init_dyz(),inp.set_Html(html),inp_dyz.set_Html(html_dyz),html.get_obj_inp(inp),html_dyz.get_obj_inp(inp_dyz),html.get_obj_search(search),html.next_row(row_),row_.refresch(inp),search.result_array(date,row_),controll.default_duble(search.get_ona_now()),controll.constans_data(Data_copy),inp.init_focus();var Raport_=function(){function a(){this.subscribers=[],this.tbody=document.querySelectorAll('#tab>table>tbody')[0],this.input,this.btn=document.createElement('button'),this.Row,this.name}return a.prototype.addObserwer=function(b){this.subscribers.push(b)},a.prototype.send_remove_owner=function(b,c){this.subscribers.map(function(d){d.remove_owner(b,c)})},a.prototype.execute_send=function(){var b=this;this.subscribers.map(function(c){c.onMessagePosted(b)})},a.prototype.addClick=function(){this.tbody.addEventListener('click',this.chenge_obj_inp.bind(this))},a.prototype.get_nr_op=function(){var b=this.tbody.querySelectorAll('tr>td:nth-child(5n+2)>input'),c=[],_iteratorNormalCompletion2=!0,_didIteratorError2=!1,_iteratorError2=void 0;try{for(var f,d=b[Symbol.iterator]();!(_iteratorNormalCompletion2=(f=d.next()).done);_iteratorNormalCompletion2=!0)nr_o=f.value,nr_o.value&&c.push(nr_o.value)}catch(h){_didIteratorError2=!0,_iteratorError2=h}finally{try{!_iteratorNormalCompletion2&&d.return&&d.return()}finally{if(_didIteratorError2)throw _iteratorError2}}return c},a.prototype.chenge_obj_inp=function(b){var f,c=b.target,d=this.subscribers[0].Raport,h=c.id.split('_')[2]||null,j=Number.isInteger(parseInt(c.id))||null;if(h)f=h;else if(j)f=c.id;else return;var k=this.tbody.querySelectorAll('#tr_'+f+' input')[0].value||null;if(!d&&k&&c.dataset.nr_o)this.input=c,this.name=k,this.inputs_disabled(!0),this.input.disabled=!1,this.anuluj(),this.execute_send();else if(!d&&j){this.input=c;var l=this.tbody.querySelector('#tr_'+this.input.id),m=l.querySelectorAll('input'),o=m[2].value;m[0].value&&l.querySelectorAll('td')[0].textContent&&(this.send_remove_owner(o,m[0].value),l.remove()),this.count_ona()}else return},a.prototype.count_ona=function(){var b=this.tbody.querySelectorAll('tr>td:first-child');Array.prototype.map.call(b,function(c,d){return c.innerHTML=d+1}),b[b.length-1].innerHTML=''},a.prototype.get_input_all=function(){this.iteratio_input_all(this.tbody.querySelectorAll('tr>td>input'))},a.prototype.iteratio_input_all=function(b){var c=[];for(i=0;i<b.length;i+=4)c.push([b[i].value,b[i+1].value,b[i+2].value,b[i+3].value])},a.prototype.inputs_disabled=function(b){var c=this.tbody.querySelectorAll('input'),_iteratorNormalCompletion3=!0,_didIteratorError3=!1,_iteratorError3=void 0;try{for(var f,d=c[Symbol.iterator]();!(_iteratorNormalCompletion3=(f=d.next()).done);_iteratorNormalCompletion3=!0)input=f.value,input.disabled=b}catch(h){_didIteratorError3=!0,_iteratorError3=h}finally{try{!_iteratorNormalCompletion3&&d.return&&d.return()}finally{if(_didIteratorError3)throw _iteratorError3}}},a.prototype.add_disabled=function(){var b=this.tbody.querySelectorAll('tr>td:nth-child(5n+4)>input'),c=this.tbody.querySelectorAll('tr>td:nth-child(5n+3)>input');this.iteratio_disabled(b),this.iteratio_disabled(c)},a.prototype.iteratio_disabled=function(b){var _iteratorNormalCompletion4=!0,_didIteratorError4=!1,_iteratorError4=void 0;try{for(var d,c=b[Symbol.iterator]();!(_iteratorNormalCompletion4=(d=c.next()).done);_iteratorNormalCompletion4=!0)input=d.value,input.disabled=!0}catch(f){_didIteratorError4=!0,_iteratorError4=f}finally{try{!_iteratorNormalCompletion4&&c.return&&c.return()}finally{if(_didIteratorError4)throw _iteratorError4}}},a.prototype.anuluj=function(){var b=this;this.btn.addEventListener('click',function(){b.inputs_disabled(!1),b.add_disabled(),b.anuluj_cls(),b.subscribers[0].Raport=null,b.subscribers[2].show_info('')}),this.btn.textContent='Anuluj';var c=document.querySelector('#anuluj');c.appendChild(this.btn)},a.prototype.anuluj_cls=function(){this.btn.remove()},a}(),Controll_=function(){function a(b){this.constans_data=b,this.Owners={},this.Raport,this.default_s}return a.prototype.onMessagePosted=function(b){this.Raport=b},a.prototype.set_default_own=function(b){this.Owners.ona=b},a.prototype.foward_nr_s=function(b){this.owner_if_exist(),this.add_owner(b),this.Raport.input.value=b,this.Raport.input=!1,this.Raport.anuluj_cls(),this.Raport=!1},a.prototype.add_owner=function(b){for(var c in this.constans_data.ona)if(this.constans_data.ona[c].nr_o==this.Raport.input.dataset.nr_o){var d=this.Owners.ona.push(this.constans_data.ona[c]);this.Owners.ona[d-1].default_s=b}},a.prototype.owner_if_exist=function(){for(var b in this.Owners.ona)this.Owners.ona[b].nr_o==this.Raport.input.dataset.nr_o&&(this.set_default_s(this.Owners.ona[b].default_s),this.Owners.ona.splice(b,1))},a.prototype.get_default_s=function(){return this.default_s},a.prototype.set_default_s=function(b){this.default_s=b},a.prototype.iteratio_Owners=function(b){for(var c in this.Owners.ona)if(this.Owners.ona[c].default_s===b){var _Owners$ona$_i=this.Owners.ona[c],d=_Owners$ona$_i.name,f=_Owners$ona$_i.nr_o,h=_Owners$ona$_i.godz,j=_Owners$ona$_i.nr_g,k=_Owners$ona$_i.char_g,l=_Owners$ona$_i.default_s;return[d,f,h,j,k,l]}},a.prototype.remove_owner=function(b){var d=this;b&&this.Owners.ona.map(function(f,h){f.default_s==b&&d.Owners.ona.splice(h,1)})},a}(),Window_info_=function(){function a(){}return a.prototype.onMessagePosted=function(b){this.show_info('Przypisz stanowisko dla: '+b.name)},a.prototype.remove_owner=function(b,c){var d=this;this.show_info('Wypisano operatora: '+c),setTimeout(function(){d.show_info('')},2e3)},a.prototype.show_info=function(b){document.querySelector('#window_info').textContent=b},a}(),SVG_=function(){function a(b,c){this.Raport,this.Controll_=b,this.Window_info_=c,this.svg_el=document.querySelectorAll('svg g g')}return a.prototype.onMessagePosted=function(b){this.Raport=b},a.prototype.start=function(){this.action(),this.MouseClick()},a.prototype.check_busy=function(b){var c=this.Controll_.iteratio_Owners(b);return c},a.prototype.action=function(){var _iteratorNormalCompletion5=!0,_didIteratorError5=!1,_iteratorError5=void 0;try{for(var c,b=this.svg_el[Symbol.iterator]();!(_iteratorNormalCompletion5=(c=b.next()).done);_iteratorNormalCompletion5=!0){var d=c.value,f=d.id.split('_')[1],h=this.check_busy(f);h&&(this.mouseOver(d,f),this.mouseLeave(d),this.chenge_fill(h[5]))}}catch(j){_didIteratorError5=!0,_iteratorError5=j}finally{try{!_iteratorNormalCompletion5&&b.return&&b.return()}finally{if(_didIteratorError5)throw _iteratorError5}}},a.prototype.mouseOver=function(b,c){var d=this;b.addEventListener('mouseover',function(){var f=d.Controll_.iteratio_Owners(c);f&&!d.Controll_.Raport&&d.Window_info_.show_info(f[0])})},a.prototype.mouseLeave=function(b){var c=this;b.addEventListener('mouseleave',function(){c.Controll_.Raport||c.Window_info_.show_info('')})},a.prototype.chenge_fill=function(b){document.querySelector('#s_'+b).classList.add('activ_svg')},a.prototype.remove_fill=function(b){document.querySelector('#s_'+b).classList.remove('activ_svg')},a.prototype.MouseClick=function(){var b=this;Array.from(this.svg_el,function(c){return c.addEventListener('click',function(){var d=c.id.split('_')[1];b.check_busy(d)||b.Controll_.Raport&&(b.Controll_.foward_nr_s(d),b.Controll_.get_default_s()&&b.remove_fill(b.Controll_.get_default_s()),b.Raport.inputs_disabled(!1),b.Raport.add_disabled(),b.action())})})},a.prototype.remove_owner=function(b){b&&(this.remove_fill(b),this.action(!1))},a}(),control=new Controll_(Data_copy);control.set_default_own(search.owners_s());var window_info=new Window_info_,svg=new SVG_(control,window_info);svg.start();var raport=new Raport_;raport.addObserwer(control),raport.addObserwer(svg),raport.addObserwer(window_info),raport.addClick(),html.get_Raport_(raport);
</script>

</body>
</html>



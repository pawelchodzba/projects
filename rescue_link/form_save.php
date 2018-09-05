<?php
session_start();

if(!isset($_SESSION['zalogowany'])){exit();}
	else{
		
			echo'<div>Tytuł<input  id="title"></div>';
			echo'<div>Opis<input  id="send_description"></div>';
			echo'<div>Adres url<input  id="send_link"></div>';
			echo'<button id ="send">dodaj link</button>';	
		
	}

	
	
?>
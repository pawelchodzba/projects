
let input_box= document.getElementById('input_box');
function form (sal,day_int){

	

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////form/////////////////////////////////////////////////
	////////error/////////////////
let error= document.createElement('div');
	error.setAttribute('id','error');
 input_box.appendChild(error);
 
 
 
 
 ////////divs/////////////////

let div_label=document.createElement('div');
let div_input=document.createElement('div');
let div_sala=document.createElement('div');
	div_sala.setAttribute('id','div_sala');
let div_name=document.createElement('div');	
	div_name.setAttribute('id','div_name');
	

let div_tel=document.createElement('div');	
	div_tel.setAttribute('id','div_tel');	
let div_mail=document.createElement('div');	
	div_mail.setAttribute('id','div_mail');
let div_opis=document.createElement('div');	
	div_opis.setAttribute('id','div_opis');
	
	div_label.classList.add('time_data');
	div_input.classList.add('time_data');
	input_box.appendChild(div_sala);
	input_box.appendChild(div_label);
	input_box.appendChild(div_input);
	input_box.appendChild(div_name);
	input_box.appendChild(div_tel);
	input_box.appendChild(div_mail);
	input_box.appendChild(div_opis);
	
	////////////////////////////////// sala /////////////////	
	let inp_sala=document.createElement('input');
	inp_sala.setAttribute('id','sala');
	inp_sala.setAttribute('name','sala');
	let sala_label=document.createElement('label');
	sala_label.setAttribute('for','sala');
	sala_label.textContent='sala nr:';
	
	div_sala.appendChild(sala_label);
	div_sala.appendChild(inp_sala);
	
		//////////////////////////////////  od_h /////////////////	
	
let inp_od=document.createElement('input');
	inp_od.setAttribute('id','od');
	inp_od.setAttribute('name','od');
let od_label=document.createElement('label');
	od_label.setAttribute('for','od');
	od_label.textContent='od godz';
	
	div_label.appendChild(od_label);
	div_input.appendChild(inp_od);
	
		////////////////////////////////// do_h /////////////////	
	
let inp_do=document.createElement('input');
	inp_do.setAttribute('id','do');
	inp_do.setAttribute('name','do');
let do_label=document.createElement('label');
		do_label.setAttribute('for','do');
		do_label.textContent='do godz.';
		
		div_label.appendChild(do_label);
		div_input.appendChild(inp_do);
//////////////////////////////////day/////////////////
let inp_day=document.createElement('input');
	inp_day.setAttribute('id','day');
	inp_day.setAttribute('name','day');
let day_label=document.createElement('label');
	day_label.setAttribute('for','day');
	day_label.textContent='Dzień';
	
	div_label.appendChild(day_label);
	div_input.appendChild(inp_day);
	
	/////////////////////////////////month/////////////////	
let inp_month=document.createElement('input');
		inp_month.setAttribute('id','month');
		inp_month.setAttribute('name','month');
let month_label=document.createElement('label');
		month_label.setAttribute('for','month');
		month_label.textContent='Miesiąc';

		div_label.appendChild(month_label);
		div_input.appendChild(inp_month);
		
//////////////////////////////////year/////////////////	
	
let inp_year=document.createElement('input');
	inp_year.setAttribute('id','year');
	inp_year.setAttribute('name','year');
let year_label=document.createElement('label');
		year_label.setAttribute('for','year');
		year_label.textContent='Rok';
	
		div_label.appendChild(year_label);
		div_input.appendChild(inp_year);

		
		////////////////////////////////// name_clent  /////////////////	
	
let inp_name_c=document.createElement('input');
	inp_name_c.setAttribute('id','name_c');
	inp_name_c.setAttribute('name','name_c');
let name_c_label=document.createElement('label');
	name_c_label.setAttribute('for','name_c');
		name_c_label.textContent='Imię Nazwisko';
			
		div_name.appendChild(name_c_label);
		div_name.appendChild(inp_name_c);
		//////////////////////////////////tel/////////////////	
	
let inp_tel=document.createElement('input');
	inp_tel.setAttribute('id','tel');
	inp_tel.setAttribute('name','tel');
let tel_label=document.createElement('label');
		tel_label.setAttribute('for','tel');
		tel_label.textContent='tel';
		
		div_tel.appendChild(tel_label);
		div_tel.appendChild(inp_tel);
	
		////////////////////////////////// mail  /////////////////	
	
let inp_mail=document.createElement('input');
	inp_mail.setAttribute('id','mail');
	inp_mail.setAttribute('name','mail');
let mail_label=document.createElement('label');
		mail_label.setAttribute('for','mail');
		mail_label.textContent='Email';
		
		div_mail.appendChild(mail_label);	
		div_mail.appendChild(inp_mail);
		
	/////////////////////////////////////opis /////////////////	
	
let inp_opis=document.createElement('textarea');
	inp_opis.setAttribute('id','opis');
	inp_opis.setAttribute('name','opis');
let opis_label=document.createElement('label');
		opis_label.setAttribute('for','opis');
		opis_label.textContent='opis';
			
		div_opis.appendChild(opis_label);
		div_opis.appendChild(inp_opis);
		
		
		////////////////////button remove////////////
let div_close= document.createElement('button');
	div_close.setAttribute('id','close');
	div_close.textContent="X";
	div_close.addEventListener('click',remove_form,false);
		input_box.appendChild(div_close);
		
	////////////////////////////////button send /////////////////		
		let send = document.createElement('button');
			send.setAttribute('id','send')
			send.textContent="wyślij";
			send.addEventListener('click',send_user,false);
				input_box.appendChild(send);
		///////////////////////data into form///////////////////		
		document.getElementById('input_box').style.display='block';
		document.body.classList.add('form_tlo');		
		document.getElementById('sala').value=sal;
		document.getElementById('day').value=day_int;
		document.getElementById('month').value=month_int+1;
		document.getElementById('year').value=year;
}



/////////////////////////////ajax///////////////////////////////////////////////////////////////////////////

function send_user(){
	document.getElementById('error').style.display='block';
	
	let  nr_sal= document.getElementById('sala').value,
		o_d= document.getElementById('od').value,
		d_o= document.getElementById('do').value,
		day=document.getElementById('day').value,
		month_int=document.getElementById('month').value,
		year=document.getElementById('year').value,
		name=document.getElementById('name_c').value,
		tel=document.getElementById('tel').value,
		mail=document.getElementById('mail').value,
		opis=document.getElementById('opis').value;
		
		$.get('send_user.php',{
			sala:nr_sal,
			o_d:o_d,
			d_o:d_o,
			day:day,
			month_int:month_int,
			year:year,
			name:name,
			tel:tel,
			mail:mail,
			opis:opis
		},
		function(d){
		try {
			let tab_json=JSON.parse(d);
		if(tab_json[0]=="Wyslano")setTimeout(remove_form,2000);
		} catch (error_) {
			error.textContent=d;
		}
	
			})
	}	
function remove_form(){
	input_box.style.display='none';
	document.body.classList.remove('form_tlo');
	
	let remove_tags=input_box.getElementsByTagName('*');
	
	for(i=0;i<remove_tags.length;i++){
	remove_tags[i].parentNode.removeChild(remove_tags[i]);
	}
	for(i=0;i<remove_tags.length;i++){
	remove_tags[i].parentNode.removeChild(remove_tags[i]);
	}	
	for(i=0;i<remove_tags.length;i++){
	remove_tags[i].parentNode.removeChild(remove_tags[i]);
	}		
	remove_tags[0].parentNode.removeChild(remove_tags[0]);	
		
	 }
	
 
	
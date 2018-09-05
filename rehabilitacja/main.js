

function bilans(){
	$('#real_bilans').load('bilans/ask_is.php');
	$('#bilans').load('bilans/bilans.php');
	//$('#future_bilans').load('bilans/przewidywany.php');
	
	$.get('bilans/day_bilans.php',null,function(arr){
		arr=JSON.parse(arr);
		let result=(document.querySelectorAll('#contein_nfz input')[0].value*arr[0])+(document.querySelectorAll('#contein_nfz input')[1].value*arr[1])+(document.querySelectorAll('#contein_nfz input')[2].value*arr[2])+(document.querySelectorAll('#contein_nfz input')[3].value*arr[3])+(document.querySelectorAll('#contein_nfz input')[4].value*arr[4]);

		document.querySelector('#future_bilans').innerHTML='Bilans dnia <br>'+result;
	})
}
bilans();
	function patient_count (){
		$.get('text_info/count_l.php',null,function(count){
			let l_free=35-count;
			document.getElementById('patient_count').innerHTML='Liczba pacjentów: '+count+'<br>Łóżka wolne: '+l_free;
			}); 
		}
	 patient_count ();
	 
	let price_rop=document.getElementById('rop_on_window');
	  price_rop.addEventListener('blur',function(){
			let nfz_rop=price_rop.value;
			let valid=/^[0-9]{1,}$/;
				if(nfz_rop.match(valid)){
				$.get('text_info/chenge_rop.php',{nfz_rop:nfz_rop},function(nfz){
				});
			}else{modal('Wstaw liczbę całkowitą')};
			  
	  });
	  
	 let price_roow=document.getElementById('roow_on_window');
	  price_roow.addEventListener('blur',function(){
			let nfz_roow=price_roow.value;
			let valid=/^[0-9]{1,}$/;
			if(nfz_roow.match(valid)){
				$.get('text_info/chenge_roow.php',{nfz_roow:nfz_roow},function(nfz){
				});  
			}else{modal('Wstaw liczbę całkowitą')};
	  });

let price_roo=document.getElementById('roo_on_window');
	  price_roo.addEventListener('blur',function(){
			let nfz_roo=price_roo.value;
			let valid=/^[0-9]{1,}$/;
				if(nfz_roo.match(valid)){
				$.get('text_info/chenge_roo.php',{nfz_roo:nfz_roo},function(nfz){
				});  
			}else{modal('Wstaw liczbę całkowitą')};
	  });
let price_rozw=document.getElementById('rozw_on_window');
	  price_rozw.addEventListener('blur',function(){
			let nfz_rozw=price_rozw.value;
			let valid=/^[0-9]{1,}$/;
				if(nfz_rozw.match(valid)){
				$.get('text_info/chenge_rozw.php',{nfz_rozw:nfz_rozw},function(nfz){
				}); 
			}else{modal('Wstaw liczbę całkowitą')};
	  });

let price_roz=document.getElementById('roz_on_window');
	  price_roz.addEventListener('blur',function(){
			let nfz_roz=price_roz.value;
			let valid=/^[0-9]{1,}$/;
				if(nfz_roz.match(valid)){
				$.get('text_info/chenge_roz.php',{nfz_roz:nfz_roz},function(nfz){
				}); 
			}else{modal('Wstaw liczbę całkowitą')};
	  });	  
	  
	
	$('#svg').load('svg/switch.php');
	
	let svg=document.getElementById('svg');
	let items_svg=document.getElementById('items_svg');
	//////////////mouse over svg control//////////////////////////////////
	svg.addEventListener('mouseover',get_data_php,false);
	items_svg.addEventListener('mouseover',get_data_php,false);
	
	
	function get_data_php(e){
		
			let target=e.target;
			let id=target.getAttribute('id');	
			
			if(id){
				let id_split=id.split('_');
			
					if (id){
						if(id_split[0]=='s'&&id_split[2]){
					$.get('text_info/s_form.php',{id:id},function(patient_info){//alert(rect_svg);
					document.getElementById('window_info').innerHTML=patient_info;
					});	
					$.get('text_info/computed_nfz.php',{id:id},function(inf_nfz){//alert(rect_svg);
					document.getElementById('text_info').innerHTML=inf_nfz;
					});
							
						}else if(!id_split[2]&&id_split[0]=='s'){
					$.get('svg/switch.php',{id:id},function(rect_svg){//alert(rect_svg);
					document.getElementById('window_info').innerHTML=rect_svg;
					});
					
					$.get('text_info/s_form.php',{id:id},function(inf_sala){//alert(rect_svg);
					document.getElementById('text_info').innerHTML=inf_sala;
					});
							
							
					}else{return}
			}else {return}
		} else{return}
	}
	////////////click svg control//////////////////////////////////
	svg.addEventListener('click',show_form,false);
	items_svg.addEventListener('click',show_form,false);
	
			function show_form(e){
				
							let target=e.target;
							let id=target.getAttribute('id');
							let id_split=id.split('_')[2];
							
							if(id_split){
								form('menago');
								form_action(id);
							}else{return}
						}
	
		window.addEventListener('load',function(){
			
			function get_timer(){
			let div_time= document.getElementById('time');
			
			let date=new Date();
			let day=date.getDay();
			let dat=date.getDate();
			let month=date.getMonth();
			let year=date.getFullYear();
			
			let hours=date.getHours();
			let minet=date.getMinutes();
			let second=date.getSeconds();
			
			let day_nr=['niedziela','poniedziałek','wtorek','środa','czwartek','piątek','sobota'];
			let month_nr=['styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listoopad','grudzień'];
			day=day_nr[day];
			month=month_nr[month];
			if(minet<10){
				minet="0"+minet
			}
			if(second<10){
			second="0"+second;
			}		
			let data_all=hours+":"+minet+":"+second+ '<br/>'+day+" "+dat+" "+month+" "+year;
			div_time.innerHTML=data_all;
			setTimeout(get_timer,1000);
			}
			get_timer();
		})
		
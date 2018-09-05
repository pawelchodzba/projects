function form_action(id,patient_credential){
//console.log(id);
let Model= (function(){
	
		function Model  (name_,diagnosis_,description,date_,week_1,week_2,week_3,week_4,week_5,check_date_,sex_,move,nfz) {
		sex_=='K' ? sex_=0 : sex_=1;	
		this.name=name_;
		this.diagnosis=diagnosis_;
		this.description=description;
		this.date=date_;
		this.week_1=week_1;
		this.week_2=week_2;
		this.week_3=week_3;
		this.week_4=week_4;
		this.week_5=week_5;
		this.check_date =patient_credential[4];
		this.sex=sex_;
		this.move=move;
		this.nfz=nfz;
		}
		return Model ;
}());	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let View=(function(){
	
		function View(model,controler){
			let self=this;
			let name_txt= document.getElementById('name');
			let diagnosis_txt = document.getElementById('diagnosis');
			let description_txt=  document.getElementById('description');
			let date_txt = document.getElementById('date');
			let week_1_txt = document.getElementById('week_1');
			let week_2_txt = document.getElementById('week_2');
			let week_3_txt = document.getElementById('week_3');
			let week_4_txt = document.getElementById('week_4');
			let week_5_txt = document.getElementById('week_5');

			let send_btn=  document.getElementById('send');
			let get_up_btn =document.getElementById('get_up');
			let abandon_btn= document.getElementById('abandon');
			
				self.controler=controler;
				
			name_txt.value=model.name;
			diagnosis_txt.value=model. diagnosis;
			description_txt.value=model.description;
			date_txt.value=model.date;
			week_1_txt.value=model.week_1;
			week_2_txt.value=model.week_2;
			week_3_txt.value=model.week_3;
			week_4_txt.value=model.week_4;
			week_5_txt.value=model.week_5;
			//////////check_radio_week//////
			let tab_radio=document.getElementsByClassName('radio');
			let tab_week=document.getElementsByClassName('week');
						 for(i=0;i<tab_radio.length;i++){
					 if(tab_week[i].value==model.check_date){
						tab_radio[i].checked=true;
						break;
			 }
			};
			//////////sex//////
				let men=document.getElementById('men');
				let women=document.getElementById('women');
				
				if(model.sex==1){
					men.checked=true;
				}else if(model.sex==0){
					women.checked=true;
				}else{ alert("Błąd wartości sex z BD")}
			
				/////////move//////
					let walk=document.getElementById('walk');
					let not_walk=document.getElementById('not_walk');
				
				if(model.move==1){
					walk.checked=true;
				}else if(model.move==0){
					not_walk.checked=true;
				}else{ alert("Błąd wartości z move BD")}	
				
			let tab_nfz =document.getElementsByName('nfz');
			if(tab_nfz.length<1&&tab_nfz.length>5){
				return;
			}else{
				 tab_nfz[model.nfz-1].checked=true;
				
			}
				
			send_btn.onclick=function(){
				self.save()
			};
			get_up_btn.onclick=function(){
				self.clear();
			};
			abandon_btn.onclick=function(){
				self.clear();
			};
			
		}
		
		
					// function empty_div(){
						
							// Node.prototype.empty = function() {
									// while (this.firstChild) {
									// this.removeChild(this.firstChild);
									// }
								// }
									// let div_parent = document.getElementById('menago');
									// div_parent.empty(); 
						
									// let body=document.getElementsByTagName('body')[0];	
									// body.classList.remove('modal_tlo');
					// }
		
		// View.prototype.clear_div=function(){
						// empty_div();	
						
							
				//}
			
		View.prototype.clear=function(){
			
			show_hide_tlo(false);
			clear_divs(['wraper_form'])
		}
		// $.get('../patient/edit_save.php',{id:id},function(id_luzka){	
		
			// if(id_luzka){
				
				// let price_nfz=document.getElementById('price_nfz').textContent;;
				// price_nfz=price_nfz.split(' ')[1];
				// let day_long=document.getElementById('day_long').textContent;
				// let day_nfz=document.getElementById('day_nfz').textContent;
			
			// $.get('../patient/delete.php',{id:id,price_nfz:price_nfz,day_long:day_long,day_nfz:day_nfz},function(d){
				
								
								 	// $.get('../svg/switch.php',null,function(svg){
											// let svg_control=document.getElementById('items_svg');
											// svg_control.innerHTML=svg;
										
											
									// });
								// let id_class =document.getElementById(id);
								 // id_class.classList.remove('week0', 'week1', 'week2', 'week3', 'week4');
								 // id_class.classList.add('rect_l');
									// bilans();
									// modal(d);
									 // patient_count ();
									 
									// });
			// }
			// empty_div();
		// })
		// }
		
		View.prototype.save=function(){	
		
								let name_txt= document.getElementById('name');
								let diagnosis_txt = document.getElementById('diagnosis');
								let description_txt=document.getElementById('description');
								let date_txt = document.getElementById('date');
								let week_1_txt = document.getElementById('week_1');
							
								let week_2_txt = document.getElementById('week_2');
								let week_3_txt = document.getElementById('week_3');
								let week_4_txt = document.getElementById('week_4');
								let week_5_txt = document.getElementById('week_5');	
									//////////radio conect week//////
								 let tab_radio=document.getElementsByClassName('radio');
								 let tab_week=document.getElementsByClassName('week');
						
									let check_date;
									//let radio_checked;
									for(i=0;i<tab_radio.length;i++){
										if(tab_radio[i].checked){
											check_date=tab_week[i].value;
											//radio_checked=tab_radio[i];
								
											break;
										}
									}
								//	console.log(radio_checked);
										//////////sex//////
									let sex_send;
									let men=document.getElementById('men');
									let women=document.getElementById('women');
									if (men.checked){
										sex_send=1;
									}else if(women.checked){
										sex_send=0;
									}else{alert('zaznacz płeć pacjenta')}
									//////////move//////
										let walk_send;
										let walk=document.getElementById('walk');
										let not_walk=document.getElementById('not_walk');
									if (walk.checked){
										walk_send=1;
									}else if(not_walk.checked){
										walk_send=0;
									}else{ alert('zaznacz sprawność pacjenta')}
									
									///////nfz//////
									let nfz_send;
								let tab_nfz =document.getElementsByName('nfz');
								if(tab_nfz.length<1&&tab_nfz.length>5){
									return;
								}else{
								for(i=0;i<tab_nfz.length;i++){
									if (tab_nfz[i].checked){
										nfz_send=i+1;
											break;
									}
								}
							}
							if(!nfz_send){alert('Zaznacz kategorię NFZ')}
							
						//////////id //////
						
									  let nr_sali=id.split('_')[1];
									  let id_sali="s_"+nr_sali;
									// console.log(week_1_txt.value);
									// console.log(check_date);
									let data={
										
										
										name:name_txt.value,
										id_luzka:id,
										nr_sali:nr_sali,
										id_sali:id_sali,
										diagnosis:diagnosis_txt.value,
										description:description_txt.value,
										date:date_txt.value, 
										week_1:week_1_txt.value,
										week_2:week_2_txt.value, 
										week_3:week_3_txt.value, 
										week_4:week_4_txt.value,
										week_5:week_5_txt.value,
										check_date:check_date,
										sex_send:sex_send,
										walk_send:walk_send,
										nfz_send:nfz_send
										
										};	
										
										//	console.log(data);////save write in form
								this.controler.save(data);
						//////////chenge class///////////////////////////////////////


			};			
								
	
		
		return View;
		 
}()); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

let Controler=(function(){
	
	function Controler(){}
	Controler.prototype.initialize=function(model,view){
	this.model=model;
	this.view=view;
	};
	
			Controler.prototype.save=function(data){
				
				if(data.name&&data.diagnosis&&data.description){
				
					
				
				
				if(!data.check_date){
						modal('wybierz datę wypisu');
					}else{
					
				
						
						
							let valid=/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]((?:19|20)(1[7-9]|2[0-9]))$/;
						if(data.date.match(valid)&&data.week_1.match(valid)&&data.week_2.match(valid)&&data.week_3.match(valid)&&data.week_4.match(valid)&&data.week_5.match(valid)){	
						
						
							let d_start=data.date;
							let d_end=data.check_date;
							let d_s_e=date_start_end(d_start,d_end);
							
							if(d_s_e){
							
								$.post('../patient/save.php',{data:data},function(){
									$.get('./delete.php',{id:patient_credential[0]},function(){
										$('#window_all').load('./content_show_rec.php',function(){init_auto_comlete()});
											
										
											modal(data.name+" został zapisany");
									})
								})
								
								
								show_hide_tlo(false);
								clear_divs(['wraper_form']);
								
								
								
								
							}else{modal(" Data wypisu nie może być wcześniej niż data przyjęcia ")}
						}else{modal(" Wpisz prawidłową datę")}	
							
				}
				
				
			}	else{modal('Wypełnij puste pola')}
					
		}		
			
		
	

	
	
	return Controler; 
}());



														
								let array_week=	patient_credential[4].split('-');					
								let week1=new Date(array_week[2],array_week[1]-1,array_week[0]);
								
								let tab_days=[];
								for(i=1;i<=4;i++){
									let counter=7*1;
									let week=new Date(week1.setDate(week1.getDate()+counter));
									let day=week.getDate();
									let month=week.getMonth()+1;
								
										(day<10) ?day= "0"+day:null;
										(month<10) ?month= "0"+month:null;
										let week_string=day+'-'+month+'-'+week.getFullYear();
										tab_days.push(week_string);
								}
						//	console.log(patient_credential);
							let model=new Model(patient_credential[1],patient_credential[2],'',patient_credential[3],patient_credential[4],tab_days[0],tab_days[1],tab_days[2],tab_days[3],'1',patient_credential[5],'1','1');
							
							let controler=new Controler();
							let view=new View(model,controler);
						
							controler.initialize(model,view);
					//	});
					
		
				}



function	date_start_end(d_s,d_e){
			let flag;
			 let d_s_d=d_s.split("-")[0];
			 let d_s_m=d_s.split("-")[1];
			 let d_s_y=d_s.split("-")[2];
			 
			 let d_e_d=d_e.split("-")[0];
			 let d_e_m=d_e.split("-")[1];
			 let d_e_y=d_e.split("-")[2];
			 
			 let date_s=new Date(d_s_y,d_s_m,d_s_d);
			
			 let date_s_s=date_s.getTime();
			 
			 let date_e=new Date(d_e_y,d_e_m,d_e_d);
			let date_e_e=date_e.getTime();
			 
			 let unix_dat=date_s.getTime();
			if( date_s_s>date_e_e){
				flag=false;
			}else if(unix_dat<0){
				flag=false;
			}else{
				flag=true;
			}
		return flag;
}
// function empty_svg(id_div){
								// id_div.map(function(v){
								// let div_parent = document.getElementById(v);
								// div_parent.empty();
										// })
								// let body=document.getElementsByTagName('body')[0];	
								// body.classList.remove('modal_tlo');
								// }	






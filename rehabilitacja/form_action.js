function form_action(id){		//alert('op');

let Model= (function(){
	
		function Model  (name,diagnosis,description,date,week_1,week_2,week_3,week_4,week_5,check_date,sex,move,nfz) {
			
		this.name = name;
		this.diagnosis =diagnosis ;
		this.description =description ;
		this.date =date ;
		this.week_1 =week_1 ;
		this.week_2 =week_2 ;
		this.week_3 =week_3 ;
		this.week_4 =week_4 ;
		this.week_5 =week_5 ;
		this.check_date =check_date;
		this.sex =sex ;
		this.move =move ;
		this.nfz =nfz ;
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
				self.clear()
			};
			abandon_btn.onclick=function(){
				self.clear_div()
			};
			
		}
		
		
					function empty_div(){
						
							Node.prototype.empty = function() {
									while (this.firstChild) {
									this.removeChild(this.firstChild);
									}
								}
									let div_parent = document.getElementById('menago');
									div_parent.empty(); 
						
									let body=document.getElementsByTagName('body')[0];	
									body.classList.remove('modal_tlo');
					}
		
		View.prototype.clear_div=function(){
						empty_div();	
						
							
				}
			
		View.prototype.clear=function(){
		$.get('./patient/edit_save.php',{id:id},function(id_luzka){	
		
			if(id_luzka){
				
				let price_nfz=document.getElementById('price_nfz').textContent;;
				price_nfz=price_nfz.split(' ')[1];
				let day_long=document.getElementById('day_long').textContent;
				let day_nfz=document.getElementById('day_nfz').textContent;
			
			$.get('./patient/delete.php',{id:id,price_nfz:price_nfz,day_long:day_long,day_nfz:day_nfz},function(d){
				
								
								 	$.get('./svg/switch.php',null,function(svg){
											let svg_control=document.getElementById('items_svg');
											svg_control.innerHTML=svg;
										
											
									});
								let id_class =document.getElementById(id);
								 id_class.classList.remove('week0', 'week1', 'week2', 'week3', 'week4');
								 id_class.classList.add('rect_l');
									bilans();
									modal(d);
									 patient_count ();
									 
									});
			}
			empty_div();
		})
		}
		
		View.prototype.save=function(){	
		
								let name_txt= document.getElementById('name');
								let diagnosis_txt = document.getElementById('diagnosis');
								let description_txt=  document.getElementById('description');
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
									;
								//////////nfz//////
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
								
		

	 // Object.defineProperty(View.prototype,'message',{alert('message');	
			// set:function(message){
				// let divMessage=document.getElementById('legend');
					// divMessage.innerHTML=message;
			// },
			// enumerable :true,
			// configurable: true
		// });
		
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
			
			//let valid=/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]((?:19|20)\d\d)$/;
			let valid=/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]((?:19|20)(1[7-9]|2[0-9]))$/;
			if(data.date.match(valid)&&data.week_1.match(valid)&&data.week_2.match(valid)&&data.week_3.match(valid)&&data.week_4.match(valid)&&data.week_5.match(valid)){
				
				let d_start=data.date;
				let d_end=data.check_date;
				
				 let d_s_e=date_start_end(d_start,d_end);
				// alert(d_s_e)
				 
					if(d_s_e){
				
				this.model.name=data.name;
				this.model.diagnosis=data.diagnosis;
				this.model.description=data.description;
				this.model.date=data.date;
				this.model.week_1=data.week_1;
				this.model.week_2=data.week_2;
				this.model.week_3=data.week_3;
				this.model.week_4=data.week_4;
			
				
				
				
				///////////////////////ajax///save///edit////////////////////////////////
							$.get('./patient/edit_save.php',{id:id},function(id_luzka){				
									let id_div=['svg','menago']
									if(id_luzka){
										$.post('./patient/update.php',{data:data},function(d){
											interchange_svg();
										//	console.log(d);
											modal(d);
											bilans();
										})
									}else{
									$.post('./patient/save.php',{data:data},function(){
											interchange_svg();
											patient_count ();
												modal('Zapisano pacjenta  '+data.name);
													bilans();
												let id_class =document.getElementById(data.id_luzka);
												 id_class.classList.add('week0');	
													
												});
													 
											}
									empty_svg(id_div);	
									});
														
							function interchange_svg(){
								$.get('./svg/switch.php',null,function(svg){
												let svg_control=document.getElementById('items_svg');
												svg_control.innerHTML=svg;
										});
									}
									
							Node.prototype.empty = function(){
							while (this.firstChild) {
							this.removeChild(this.firstChild);
										}
									}	
										
								

					}else{ modal('data wypisu nie może być wcześniej niż data przyjęcia ')}		
				}else{//alert('nie')
					modal('wpisz prawidłowy format daty');
			  }
			}			
		}else{
			modal('wypełnij puste pola');
			//alert('pusto');
		}
		
	};

	
	
	return Controler; 
}());


/////////////////////////////////////////////////////////////////////////////////
	$.get('./patient/edit_save.php',{id:id},function(id_luzka){
				
				if (id_luzka){
						$.post('./patient/edit.php',{id:id},function(d_){
						
							let tab_json=JSON.parse(d_);
							
							let name_from=tab_json[0];
							let id_luzka=tab_json[1];
							let nr_sali=tab_json[2];
							let id_sali=tab_json[3]; 
							let diagnosis_from=tab_json[4];
							let description_from=tab_json[5];
							let date_from=tab_json[6]; 
							let week_1_from=tab_json[7]; 
							let week_2_from=tab_json[8]; 
							let week_3_from=tab_json[9]; 
							let week_4_from=tab_json[10];
							let week_5_from=tab_json[11];
							let check_date_from=tab_json[12]; 
							let sex_from=tab_json[13];
							let walk_from=tab_json[14]; 
							let nfz_from=tab_json[15];
						
						
							let model=new Model(name_from,diagnosis_from,description_from,date_from,week_1_from,week_2_from,week_3_from,week_4_from,week_5_from,check_date_from,sex_from,walk_from,nfz_from);
							
							let controler=new Controler();
							let view=new View(model,controler);
						
							controler.initialize(model,view);
						});
					
		
		
	}else{
		
		$.get('./patient/data_week_reduntatio.php',null,function(date){
			
			let dat_=JSON.parse(date);
			let week1= dat_[1];
			let week2= dat_[2];
			let week3= dat_[3];
			let week4= dat_[4];
			let week5= dat_[5];
			let data_now= dat_[dat_.length-1];
			
			let model=new Model('','','',data_now,week1,week2,week3,week4,week5,week1,'',0,1);
			let controler=new Controler();
			let view=new View(model,controler);
			controler.initialize(model,view);
			
			});
		
		}
		
	});

	
let body=document.getElementsByTagName('body')[0];	
body.classList.add('modal_tlo'); 		
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
function empty_svg(id_div){
								id_div.map(function(v){
								let div_parent = document.getElementById(v);
								div_parent.empty();
										})
								let body=document.getElementsByTagName('body')[0];	
								body.classList.remove('modal_tlo');
								}	






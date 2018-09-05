	let btn_plan=document.getElementById('plan');
	btn_plan.addEventListener('click',plan_action,false);
	
function plan_action(flag_ajax){
			if(flag_ajax){
				btn_action();
			}
			tlo(true);
			 let data_now_=new Date();
			 let data_after=data_now_.getDate();
			 data_now_.setDate(data_after +10);
			 rewind_php(data_now_);
			 
			}
			
function btn_action(){
			 let button_back= new Add_div('button','modal_plan','back_main',null,'Powrót do strony głównej');
			 let btn_bd_list= new Add_div('button','modal_plan','bd_list',null,'Pacjenci zaplanowani');
			 let legend_plan= new Add_div('div','modal_plan','legend_plan','legend_plan','Pacjenci zaplanowani');
			 click_back(button_back);
			 bd_list(btn_bd_list);	
	}
function click_back(button_back){
			button_back.btn_click=function(){
				document.getElementById(this.id).onclick=function(){
				let id_divs=['calendar_all','form_p','list','bd_list','legend_plan'];
				close_form(id_divs);
				tlo(false);
				this.remove();
				document.getElementById('bd_list').remove();
				document.getElementById('legend_plan').remove();
			}
		};
		button_back.btn_click();
	} 
	
function bd_list(btn_bd_list){
				btn_bd_list.btn_click=function(){
				document.getElementById(this.id).onclick=function(){
					window.location.href = "plan/show_rec.php";
				 	this.remove();
			}
		};
		btn_bd_list.btn_click();
	}
	
	
		
function tlo (flag){
		let body=document.getElementsByTagName('body')[0];
		if(flag){
			body.classList.add('modal_tlo');
		}else{
			body.classList.remove('modal_tlo');
		}
	}
	
	let modal_plan=document.getElementById('modal_plan');
	modal_plan.addEventListener('click',plan_patient,false);
	modal_plan.addEventListener('click',date_start,false);
	///////////////////////////////////id check////////////////////////	
function id_chenge(e){
			let id=e.target.getAttribute('id');
			if(id){
			let valid=/^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-]((?:19|20)\d\d)$/;	
			 if(id.match(valid)){
				return [id]; 
				}
			 else if(id==="month_plus"){
					return 1;	 
				 }
			 else if(id==="month_minus"){
					return 2;	 
			 }else{return}
			}else{return false}
		}	
		///////click date start////////
function date_start(e){
			 let id_flag= id_chenge(e);
				if(id_flag.constructor===Array){
				show_form_p();
				form_action_p(id_flag);
				modal_plan.removeEventListener('click',date_start,false);
				modal_plan.d_start=id_flag[0];
				modal_plan.addEventListener('click',date_end,false);
				}
		}
		///////click date end////////
function date_end(e){
			 let id_flag= id_chenge(e);
			if(id_flag.constructor===Array){
				let d_end=e.target.getAttribute('id');
				let d_start=this.d_start;
				let flag=date_start_end( d_start, d_end);
				if(flag){
					document.getElementById('discharge_p').value=d_end;
				}else{modal('data wypisu nie może być wcześniej niż data przyjęcia ')}
			}
		}
		Node.prototype.empty= function(){
				while (this.firstChild) {
			this.removeChild(this.firstChild);
			}	
		}
		
		
		
function clear_divs(divs){
			divs.map(function(div){document.getElementById(div).empty();})	
					}
				
				
				
				
function 	close_form(divs_id){
		clear_divs(divs_id);
		modal_plan.d_start='';
		modal_plan.addEventListener('click',date_start,false);
		modal_plan.removeEventListener('click',date_end,false);
		
	}	


	
	///////////////////////////////////////////////click month///////////////////////
	
 function plan_patient (e){
			 let id_flag= id_chenge(e);
			 
			 if(id_flag===2){
				 chenge_calendar(id_flag);
			 }else if(id_flag===1){
				chenge_calendar(id_flag);
			 }else{return}
			 
		 }
		
 function month_plus_minus(){
		let data_now= new Date();
		let data_chenge=data_now.getDate();
	
		return	 function (flag){
			if(flag===1){
				data_now.setDate(data_chenge +31);
			}else if(flag===2){
				data_now.setDate(data_chenge -31);
				}else if(flag===3){
					console.log(data_now);
				data_now.setDate(data_chenge);
			}else{return}
				let json_all=rewind_php(data_now);
		}
	 }
	 let chenge_calendar=month_plus_minus();
////////////////////////////////////////////////////////////////mouse over///////////////////////
modal_plan.addEventListener('mouseover',show_patient,false);

function show_patient(e){
		let nr_day=parseInt(e.target.getAttribute('data-nr'));
						if(nr_day || nr_day===0){
									let one_day_is=all_data_patient[0][nr_day];
									let one_day_plan=all_data_patient[1][nr_day];
									let title_row=e.target.getAttribute('title');
									let id_flag=id_chenge(e);
							
						/////show list patient////////
								if (id_flag.constructor===Array&&id_flag){
										if(! one_day_is.length && ! one_day_plan.length){return}
										else{
											let amount_people=count_people(one_day_is,one_day_plan);
											let is=show_html(one_day_is,'one_patient_list',amount_people);
											let plan=show_html(one_day_plan,'one_patient_list  is_p',null);	
												show_on(is,plan);
									}						
								}else if(title_row){
									let date=e.target.getAttribute('data-date');
								let rec_is_plan=result_rec(date,title_row,one_day_is,one_day_plan);
								let dis_is_plan=result_dis(date,title_row,all_data_patient[0][nr_day-1],all_data_patient[1][nr_day-1]);
									//console.log(dis_is_plan);
									//
								let html_tool=create_html([rec_is_plan,dis_is_plan]);
							//	console.log(html_tool);
								 tooltip (e,html_tool)	;
									
								}
							}	
						}
////////////////////////////////////list////////////////////////////////////////
						/////counter sex & patient///
	function amount_sex(){
										let women='';
										let all='';
								return function(day_is,day_plan){
										let is= iteratio(day_is);
										let plan=iteratio(day_plan);
											  women=is[0]+plan[0];
												all=is[1]+plan[1];
												let people=[women,all]
												return people;
											}
										}	
function iteratio(array){
										let women_='';
										let day=array.map(function(one_women){
											if (one_women[4]==0){women_++;}
										})	
										let tab=[women_,day.length]
										return tab;
									} 
									let count_people=amount_sex();
					////show html list///
function show_html(one_day_is,classes,people){
									let html_patients='';
									let count_sex='';
									let wraper_list;
									if(people){
										count_sex='<div class="one_patient_list raport_day">Pacjentów:' +people[1]+ '&nbsp &nbsp  Kobiet: ' +people[0]+ ' &nbsp &nbsp Mężczyzn:' +(people[1]-people[0])+ '</div>';	
									}	
									
									let tabs=one_day_is.map(function(one_patient,lp){
											html_patients=html_patients+'<div class=" '+ classes+' "><div>'+(lp+1) +' '+one_patient[0]+'</div><div>'+one_patient[1]+'</div><div>'+one_patient[2]+'</div><div>'+one_patient[3]+'</div></div>';
									})
										wraper_list=html_patients+count_sex;
										return wraper_list;
								  }

function show_on(is,plan){
						let head_list='<div class="one_patient_list head_list"><div>PACJENT</div><div>ROZPOZNANIE</div><div>PRZYJĘCIE</div><div>WYPIS</div></div>';
							document.getElementById('list').innerHTML='<div class="list_all">'+head_list+plan+is+'</div>';
						}
////////////////////////hidden list//////////////////////////////////////////
	modal_plan.addEventListener('mouseout',clear_list,false);
function clear_list(){
						document.getElementById('list').innerHTML='';	
						document.getElementById('tooltip').style.display='none';	
							}
///////////////////////////////////////tooltip/////////////////////////////////////////////////////////////
	function result_rec(date,title_row,array_is_day,array_plan_day){
				let is=[];
				let plan=[];
					if(array_is_day.length){
					if(title_row=="reception_women"){is =compueted_patient( array_is_day,date,0,2);}
					else if(title_row=="reception_men"){is =compueted_patient( array_is_day,date,1,2);}
					//else{return}
					
				}
				if(array_plan_day.length){
					 if(title_row=="reception_women"){plan=compueted_patient(array_plan_day,date,0,2);}
					else if(title_row=="reception_men"){plan=compueted_patient(array_plan_day,date,1,2);}
					}
					let result_is_plan=[is,plan];
					return result_is_plan;		
					
				}
				
	function result_dis(date,title_row,array_is_day,array_plan_day){
			
				let is=[];
				let plan=[];
				if(array_is_day){	
					if(array_is_day.length){
						if(title_row=="discharge_women"){is =compueted_patient(array_is_day,date,0,3);}
						else if(title_row=="discharge_men"){is =compueted_patient( array_is_day,date,1,3)}
			
					
				}
				if(array_plan_day.length){
					if(title_row=="discharge_women"){plan=compueted_patient(array_plan_day,date,0,3);}
					else if(title_row=="discharge_men"){plan=compueted_patient(array_plan_day,date,1,3);}
				
				}
				
				}
				let result_is_plan=[is,plan];
				return result_is_plan;			
			}	
function compueted_patient(is_plan_array,date,sex_index,index_dis_rec){
					let array_result=[];
					for(i=0;i<=is_plan_array.length;i++){
						if(is_plan_array[i]){
							if(is_plan_array[i][4]==sex_index && is_plan_array[i][index_dis_rec]==date){
							array_result.push(is_plan_array[i][0]);
							}
						};
					}
					return array_result;	
				}


		
				
function create_html(array_result){
				let html="";
			array_result.map(function(v){
				v.map(function(v_1,i){
							if(v_1.length){
							let classes="";
							if (i===1){ classes='is_plan';}
								v_1.map(function(one_name){
									html=html+'<div class="tooltip_name ' +classes+' ">'+one_name+'</div>';
								})
							}
						})
					})
			return html;	
			}
			
			
			
		$('.tooltip').hide();
function tooltip (e,html){
				if(html==""){return}
			  let  ttLeft=0, 
				    ttTop=0,
				//	$this=$(this),
					//tip=$('#tooltip'),
					$target=$(e.target),
					trigerPos=$target.offset(),
					scrollTop=$(document).scrollTop(),
					$tool=$('#tooltip'),
					tool_height=$tool.outerHeight(),
					triger_height=$target.outerHeight();
					console.log(html);
					document.getElementById('tooltip').innerHTML=html;
					//ttLeft=trigerPos.left+50;
				//	if(tool_height>80){
					//	ttTop=(trigerPos.top+triger_height-(tool_height/2));
					//}else{
						//ttTop=(trigerPos.top+triger_height+(tool_height/2));
					//}
					
				ttLeft=trigerPos.left-150;
				ttTop=trigerPos.top-80;
				
					$('.tooltip').css({
						left:ttLeft,
						top:ttTop,
						position:'absolute'
						
					}).fadeIn(200)
		}


let all_data_patient="";	 
/////////////////////////////////////////////////////ajax set json array///////////////////////////
function rewind_php(unix){
		
			let date_unix=Math.round(unix.valueOf()/1000);
					$.get('plan/after_before_15.php',{date_unix:date_unix},function(html){
					document.getElementById('calendar_all').innerHTML=html;
						$.get('plan/view_list.php',{date_unix:date_unix},function(data_json){
							all_data_patient=JSON.parse(data_json);	
		})
	})
}

////////////////////////////////////////////////////////////////////////////////////////form action////////////////////////////////////
function form_action_p(id_date){		

let Model= (function(){
	
		function Model  (date) {
		this.date =date ;
		}
		return Model ;
}());	

let View=(function(){
	
		function View(model,controler){
			let self=this;
			let date_txt = document.getElementById('reception_p');
			let send_btn=  document.getElementById('accept_p');
			let get_up_btn =document.getElementById('clear_p');
			
			self.controler=controler;
			date_txt.value=model.date;
						
			send_btn.onclick=function(){
				self.save()
			};
			get_up_btn.onclick=function(){
				self.clear()
			};
		}
		
	  View.prototype.clear=function(){
			close_form(['form_p']);
		}
		
		View.prototype.save=function(){	
		
								let name_txt= document.getElementById('name_p_i');
								let diagnosis_txt = document.getElementById('rozpoz');
								let date_txt = document.getElementById('reception_p');
								let check_date = document.getElementById('discharge_p');
								
									//////////sex//////
									let sex_send;
									let men=document.getElementById('men_p');
									let women=document.getElementById('women_p');
									if (men.checked){
										sex_send=1;
									}else if(women.checked){
										sex_send=0;
									}else{modal('zaznacz płeć pacjenta')}
									 
									let data={
										
										name:name_txt.value,
										diagnosis:diagnosis_txt.value,
										date:date_txt.value, 
										check_date:check_date.value,
										sex_send:sex_send
									};	
										
										this.controler.save(data);
									
			};			

		
		return View;
		 
}()); 

let Controler=(function(){
	
	function Controler(){}
	Controler.prototype.initialize=function(model,view){
	this.model=model;
	this.view=view;
	};
	
	Controler.prototype.save=function(data){
		
		if(data.name&&data.diagnosis&&data.date&&data.check_date){
		
		this.model.name=data.name;
		this.model.diagnosis=data.diagnosis;
		this.model.date=data.date;
		this.model.check_date=data.check_date;
		
			
				$.post('./plan/save_p.php',{data:data},function(){
				plan_action(false);
				chenge_calendar(3);
			})
			
			
			modal('Pacjent '+this.model.name+' został zaplanowany');
				close_form(['form_p']);
		
		
		}else{
			modal('wypełnij puste pola');
			
		}
	};

	return Controler; 
}());
				
						
			let model=new Model(id_date);
			let controler=new Controler();
			let view=new View(model,controler);
						
							controler.initialize(model,view);
			
}
		  
	///////////////////////////////////////////form//////////////////////////////////////////////
			
			function Obj(){
					this.obj_element=this.obj_el();	
					}
			function Obj_add(char_html,parent){
				this.char_html=char_html;
				this.parent=parent;
				Obj.apply(this,arguments);
			}
			function Add_id(char_html,parent,id){
				Obj_add.apply(this,arguments);
				if(id){
					this.id=id;
					this.add_id(this.obj_element);
					}
				}
			function Add_classes(char_html,parent,id,classes){
				Add_id.apply(this,arguments);
				if(classes){
					this.classes=classes;
					this.add_classes(this.obj_element);
					}
				}
			function Add_type(char_html,parent,id,classes,type){
				Add_classes.apply(this,arguments);
				if(type){
					this.type=type;
					
					this.add_type(this.obj_element);
					}
			 }
			function Add_div(char_html,parent,id,classes,text){
				Add_classes.apply(this,arguments);
				if(text){
					this.text=text;
					this.add_text(this.obj_element);
					}		
				}
			function Add_name(char_html,parent,id,classes,type,name){
				Add_type.apply(this,arguments);
				if(name){
					this.name=name;
					this.add_name(this.obj_element);
					}
				}
			function Add_label(char_html,parent,text,for_)	{
				Obj_add.apply(this,arguments);
				this.text=text;
				this.for_=for_;
				this.add_for_(this.obj_element);
				this.add_text(this.obj_element);
			}
		Obj_add.prototype=Obj.prototype;
		Add_id.prototype=Obj.prototype;
		Add_classes.prototype=Obj.prototype;
		Add_type.prototype=Obj.prototype;
		Add_name.prototype=Obj.prototype;
		Add_label.prototype=Obj.prototype;
		Add_div.prototype=Obj.prototype;
		
		 Obj.prototype.obj_el=function(){
			let parent=document.getElementById(this.parent);
			let element=document.createElement(this.char_html);
					parent.appendChild(element);
					return element;
						 }
		Obj_add.prototype.add_id=function(obj_element){obj_element.id=this.id;}
		Obj_add.prototype.add_classes=function(obj_element){obj_element.classList.add(this.classes);}
		Obj_add.prototype.add_type=function(obj_element){obj_element.type=this.type;}
		Obj_add.prototype.add_name=function(obj_element){obj_element.name=this.name;}
		Obj_add.prototype.add_text=function(obj_element){obj_element.textContent=(this.text)}
		Obj_add.prototype.add_for_=function(obj_element){obj_element.htmlFor=this.for_}
		function show_form_p(){	
		let div_all= new Add_div('div','form_p','wraper_form_p','wraper_form_p',null);
		
		let div1= new Add_div('div','wraper_form_p','name_p','pass',null);
			let label1= new Add_label('label','name_p','Pacjent','name_p_i');
			let name= new Add_type('input','name_p','name_p_i',null,'text');
			
		let div2= new Add_div('div','wraper_form_p','rozpoz_','pass',null);
			let label2= new Add_label('label','rozpoz_','Rozpoznanie','rozpoz');
			let rozpoz= new Add_type('input','rozpoz_','rozpoz',null,'text');
		let div3= new Add_div('div','wraper_form_p','_sex','pass',null);	
			let div3_1= new Add_div('div','_sex','_sex_men','into_sex',null);	
				let label3= new Add_label('label','_sex_men','Mężczyzna','men_p');
				let radio_k= new Add_name('input','_sex_men','men_p',null,'radio','sex_p');
			let div3_2= new Add_div('div','_sex','_sex_women','into_sex',null);	
				let label4= new Add_label('label','_sex_women','Kobieta','women_p');
				let radio_m= new Add_name('input','_sex_women','women_p',null,'radio','sex_p');
				document.getElementById('women_p').checked=true;
		let div4= new Add_div('div','wraper_form_p','reception_','pass',null);
			let label5= new Add_label('label','reception_','Data Przyjęcia','reception_p');
			let reception= new Add_type('input','reception_','reception_p',null,'text');
			document.getElementById('reception_p').disabled=true;
		let div5= new Add_div('div','wraper_form_p','_discharge','pass',null);		
			let label6= new Add_label('label','_discharge','Data wypisu','discharge_p');
			let discharge= new Add_type('input','_discharge','discharge_p',null,'text');		
			document.getElementById('discharge_p').disabled=true;
		
	  let div6= new Add_div('div','wraper_form_p','buttons','pass',null);
		let button_accept= new Add_div('button','buttons','accept_p',null,'Zatwierdź');
		let button_anuluj= new Add_div('button','buttons','clear_p',null,'Anuluj');
			
		}

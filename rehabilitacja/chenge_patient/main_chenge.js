
let create=(function(){
					 
		let id_check =function(e){
				let target=e.target;
				let id=target.getAttribute('id');
				let valid=/^[s][_][0-9]{1,}[_][0-9]$/;
				let tab_id=[];
				let class_name=target.className.baseVal;
				if(id){
					if(id.match(valid)){
							if (class_name!='rect_l'){
								tab_id[0]=id;
								tab_id[1]=null;
								return tab_id;
							}else{
								tab_id[0]=null;
								tab_id[1]=id;
								return tab_id;
							}
					
							
					}else{ return;}
				}else{return}
			}	 
						 
				/////////////////////////////////create window///////////////////////////////////////////////////////////////////////// 
				let chenge_main=function(){
					
					let body=document.getElementsByTagName('body')[0];	
					body.classList.add('modal_tlo');
				
					let div_all=new Create_div_window('modal_svg','div_all','div_all','');
					let div_svg=new Create_div_window('modal_svg','div_svg','div_svg','');
					let title_name=new Create_div_window('div_all','title_name','title_name','ZMIEŃ ŁÓŻKO PACJENTA');
					let follow=new Create_div_window('div_all','follow','follow','Wybierz pacjenta');
					let patient_name=new Create_div_window('div_all','patient_name','patient_name','');
								////button clear////
					let div_p_all=document.getElementById('div_all');
					let btn_clear=document.createElement('button');
						btn_clear.id="clear_mod_sv";
						btn_clear.textContent=("Anuluj");
						btn_clear.onclick=function(){modal_end();svg_ch.removeEventListener('click',second_chenge,false);}
					div_p_all.appendChild(btn_clear);
							
								////implement svg////	
					$("#div_svg").load('svg/switch.php');	
					
			
								////events/////
					let patient_text=document.getElementById('patient_name');			
					let svg_ch=document.getElementById('modal_svg');			
								
					svg_ch.addEventListener('mouseover',show_name,false);
					svg_ch.addEventListener('click',first_chenge,false);
										
								////click////			
							function first_chenge(e){												
											let id= id_check(e);
											
											let id_first=id[0];
												if(id_first){
													let flag_c=false;
													let text_follow='Wybierz nowe miejsce dla pacjenta';
														chenge_class(id_first);
														get_name(id_first,flag_c,text_follow);
														svg_ch.removeEventListener('click',first_chenge,false);
														svg_ch.removeEventListener('mouseover',show_name,false);
														svg_ch.patient_=id_first;
														svg_ch.addEventListener('click',second_chenge,false);
														}											
													}	
													
								function second_chenge(e){		
												
												let id= id_check(e);
												let id_first=id[0];
												let id_free=id[1];
												let main_patient=this.patient_;
													if (main_patient===id_first){return;}
													show_btn_save();
													let flag_c=true;
													let text_follow='zatwierdź jeżeli wybór jest prawidłowy';
													let btn_acsept=document.getElementById('save_chenge');
														/////patient as paient///
													if(id_first){
														let id_tab=[main_patient,id_first];
														get_name(id_tab,flag_c,text_follow);
														chenge_class(id_first);
														btn_acsept.patient_1=main_patient;
														btn_acsept.patient_2=id_first;//id_first-second_patient///
														btn_acsept.addEventListener('click',acsept,false);
																
															/////patient as bed free///
													}else if(id_free){
															let id_tab=[main_patient,id_free];	
															get_name(id_tab,flag_c,text_follow);
															chenge_class(id_free);	
															btn_acsept.patient_1=main_patient;
															btn_acsept.patient_2=id_free;////id_free-bed////
															btn_acsept.addEventListener('click',acsept,false);
															}
													
											svg_ch.removeEventListener('click',second_chenge,false);
														////button save////
					
											
											}											
								

								
								function acsept(){
										$.post('./chenge_patient/chenge_action.php',{patient_1:this.patient_1,patient_2:this.patient_2},function(modal_text){
										modal_end();
										interchange_svg();
										})
									}				
									// mouseover///
								function show_name(e){
											
										patient_text.innerHTML="";
												let id= id_check(e);
												if(id){
												if(id[0]){
												let flag_o=false;
												let text_follow= 'Wybierz pacjenta';
												get_name(id[0],flag_o,text_follow)
												}else if(id[1]){patient_text.innerHTML="Łóżko wolne";}
												else{return;}
											}else{return}
								         }
								//////////////////////////show name end follw text///////////
								function get_name(id,flag,text_follow){
										if(!flag)	{
												$.post('./patient/edit.php',{id:id},function(name){
													let name_singel=JSON.parse(name)[0];
														if(name_singel){
															patient_text.innerHTML="Pacjent: "+name_singel;
															}else{patient_text.innerHTML="Łóżko wolne"}
												})
													
											}else{
												
											let main_patient=id[0];
											let second_patient=id[1];
												
												$.post('./patient/edit.php',{id:main_patient},function(name_first){
													$.post('./patient/edit.php',{id:second_patient},function(name_second){
														let patient_2=JSON.parse(name_second)[0];
														let patient_1=JSON.parse(name_first)[0];
														if(patient_2){
																patient_text.innerHTML="Zamiana miejscami pacjentów: "+patient_1+" i "+patient_2;
																}else{
																patient_text.innerHTML="Pacjent "+patient_1+" przeniesiony na sale nr: "	+second_patient.split('_')[1];
															}
														})
													});										}
										document.getElementById('follow').innerHTML=text_follow;	
									}
										
	};
	
	
				//////////////////////////support functions///////////	
					function interchange_svg(){
								$.get('./svg/switch.php',null,function(svg){
												let svg_control=document.getElementById('items_svg');
												svg_control.innerHTML=svg;
										});
									}
					function modal_end(){
									Node.prototype.empty = function() {
										while (this.firstChild) {
										this.removeChild(this.firstChild);
											}
										}
									let div_parent = document.getElementById('modal_svg');
									div_parent.empty();
									let body=document.getElementsByTagName('body')[0];	
									body.classList.remove('modal_tlo');
						}
						
					function show_btn_save()	{
								let div_p_all=document.getElementById('div_all');
								let btn_save=document.createElement('button');
								btn_save.id="save_chenge";
								btn_save.textContent=("zatwierdź");
								div_p_all.appendChild(btn_save);
					}
					
					function chenge_class(id_){
									$('#modal_svg #'+id_).addClass('chenge_check');
							}	
						
				///////////////////////////class///////////////////////
					function Create_div_window(parent,id, classes,text){
							this.parent=parent;
							this.id=id;
							this.classes=classes;
							this.text=text;
							
							this.show_divs=function(){
							 let par_t=document.getElementById(this.parent);
							 let div_=document.createElement('div');
							 div_.id=this.id;
							 div_.classList.add(this.classes);
							 div_.textContent=(this.text);
							 par_t.appendChild(div_);
								return div_;
								}
								
								this.show_divs();
								
							}
				let chenge_p=document.getElementById('chenge_patient');
				chenge_p.addEventListener('click',chenge_main,false);	
			
})();


			

	


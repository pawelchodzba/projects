"use strict";


function Btn(id) {
	
	this.id=id;

	
}

Btn.prototype.getSome=function(b){
//	console.log(b.show);	
	let el_delegation=document.getElementById(this.id);
		 el_delegation.addEventListener('click',b.show,false);
}

const First_step=(function(){
		let self;
			function One (){ 
				 self=this;
			}	
			
		One.prototype.show=function(e){
			
			let target=e.target;
				if(target.nodeName=="BUTTON"){
						let list_value;
						list_value=self.get_list(target);
						$('#mod_list_plan').load('../svg/switch.php');
						const step_two=new Step_two(list_value);
						const two=new Btn('mod_list_plan');
						two.getSome(step_two);
						show_hide_tlo(true);		
						
			  }
			}
	  One.prototype.get_list=function(target){
			
				let list_value=[];
				let list=document.querySelectorAll('table>tbody>tr[data-row="'+target.dataset.nr_row+'"]>td:nth-child(-n+6)');	
					Array.prototype.map.call(list,function(v){
					list_value.push(v.textContent);
				})
			
		 return list_value;
		}		
							
return One;
})()

let Step_two= (function(){
  let self=this;
	function Two(value){
		this.value=value;
		self=this;
		}
		Two.prototype.show=function(e){
				let target =e.target.id;
				let valid=/^s_\d\d*_\d$/;
			if(target.match(valid)){
				self.check_id_l(target);	
				
			}
		
		}
		Two.prototype.check_id_l=function(id){
			$.get('../patient/edit_save.php',{id:id},function(id_luzka){	
				if(id_luzka){return}
					else{
						clear_divs(['mod_list_plan']);
						form('wraper_form');
						//console.log(id_luzka);
						form_action(id,self.value);
						
						//$.get('./delete.php',{id:self.value[0]},function(){})
					}
				})
			}
			
		

	return Two;
})()

const There_step=(function(){
	
	function There(){
		
		
	}
	
	
})()


function show_hide_tlo(flag){
	let body=document.getElementsByTagName('body')[0];	
								
	if(flag){
		body.classList.add('modal_tlo'); 
	}else{
		body.classList.remove('modal_tlo'); 
	}
}



function clear_divs(divs){
	divs.map(function(div){document.getElementById(div).empty();})	
					}


	
Node.prototype.empty= function(){
				while (this.firstChild) {
			this.removeChild(this.firstChild);
			}	
	}



const Show_main=(function(){
	
	function New_page(url,target_into){
	   	this.url=url;
		this.target_into=target_into;
		let self=this;
		this.render(self);
		}
	New_page.prototype.render=function(self){
		$('#'+self.target_into).load(self.url);
		
	}
	
return New_page;

})()

let b=new First_step();
let a=new Btn('window_all');
a.getSome(b);
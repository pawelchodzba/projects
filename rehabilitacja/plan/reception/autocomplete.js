
const init_auto_comlete=function (){

const Input=(function(){

	function Input(select_el,controll,delault_v){
			this.select_el=select_el;
			this.controll=controll;
			this.delault_v=delault_v;
			this.input;
			this.values;
			this.Tr;
			this.Html;
		
			}

	Input.prototype.init_focus=function(){
			this.select_el.addEventListener('focus',this.activInput.bind(this));
					}
	Input.prototype.cls_click=function(){
			this.select_el.addEventListener('click',function(){
				this.value="";
			});
					}	
	Input.prototype.activInput=function(e){
		if(this.input==e.target)return;//cls mullti call
			this.input=e.target;
			e.target.addEventListener('keyup',this.getValue.bind(this));
		
			
		}
	
		

	Input.prototype.cls_tr_go=function(e){
	
		if(!this.Tr)return;
		
		else{
			this.Tr.tab_refere();
			
			}
		
		}
	
	
	Input.prototype.set_Html=function(Html){
		this.Html=Html;
	}
	
	Input.prototype.getValue=function(e){
		this.controll.fetch_value(this.values=e.target.value); 
			//ajax.execute({v:this.value});
	}
	Input.prototype.setValue=function(value_target){
			if(typeof value_target =='string'){
				return	this.input.value=value_target;
			}else {
				
				this.input.value='';
			}
		
	};
	
	return Input;
})();

const Controll=(function(){
	function Controll(obj_array,html,char_len){
		this.obj_array=obj_array;
		this.html=html;
		this.char_len=char_len;
		this.string;
		}
		
	Controll.prototype.switch_=function(){
		if(Array.isArray(this.obj_array)){
					const serch_array=this.Serch_array();
				}else{
					this.search_obj()
			}
		}
		
	Controll.prototype.search_obj=function(){
		let array_result=[];
		let label_result=[];
		let reg_exp=new RegExp(this.string,"gi");
		
			for(let i in this.obj_array.ona){
				if(reg_exp.exec(this.obj_array.ona[i].name)){
					
				array_result.push(this.obj_array.ona[i].name);
				label_result.push(this.obj_array.ona[i].nr_g);
			}
		}
		
				this.send_array(array_result,label_result);
		}
		
		
		
	
	Controll.prototype.fetch_value=function(string){
		this.string=string;
		this.switch_();
	}
	
	Controll.prototype.Serch_array=function(){
			let array_result=this.obj_array.filter(function(v){
				if(this.string.length>=this.char_len){
				let reg_exp=new RegExp(this.string,"gi");
			return reg_exp.exec(v);	
			}else{return}
			}.bind(this));
		
			this.send_array(array_result,null);
		
	}
	Controll.prototype.send_array=function(array,label_result){
		this.html.dowland(array,label_result);
	
	}
	return Controll;
})();

const Create_html=(function(){
	function Get_ele(id){
		this.wraper=id;
		this.list;
		this.Inp;
		this.result_value;
		this.nr_row;
		this.Column;
	}
	Get_ele.prototype.select_el=function(wraper){
				this.wraper=document.querySelector('#wrap_'+this.nr_row);
				
			}
	
	Get_ele.prototype.dowland=function(array,label_result){
		this.behavior_list(array,label_result);
	}
	
	Get_ele.prototype.behavior_list=function(array,label_result){
		
		if(array.length){
				     if(this.list){
					this.list.remove();
					this.create(array,label_result);
				  }else if(!this.list){
				     this.create(array,label_result);
				   }else return;
		}else if(!array.length)
					if(this.list){
						this.list.remove()
						}
					else if(!this.list)return;
		
	}

	Get_ele.prototype.create=function(array,label_result){
		
			let ul=document.createElement('ul');
			array.map(function(v,i){
				let li=document.createElement('li');
				
				li.textContent=(v);
				ul.appendChild(li);
			})
			this.list=ul;
			this.show();
		};
		
	Get_ele.prototype.show=function(){
		
		 this.wraper.appendChild(this.list);
		 this.Events_list();
	}
	
	Get_ele.prototype.Events_list=function(){
		this.list.addEventListener('click',this.mouseClick.bind(this));
		this.list.addEventListener('mouseover',this.mouseOver.bind(this));
		this.list.addEventListener('mouseleave',this.mouseLeave.bind(this));
	}
	Get_ele.prototype.removeEvent=function(e){
		this.list.removeEventListener('mouseover',this.mouseOver);
		this.list.removeEventListener('click',this.mouseClick);
		this.list.removeEventListener('mouseleave',this.mouseLeave);
		}
	
	Get_ele.prototype.get_obj_inp=function(Input){
		this.Inp=Input;
	
	}

	Get_ele.prototype.getCol=function(Column){
		if(!Column)return;
		this.Column=Column;
		}
	Get_ele.prototype.mouseClick=function(e){
		this.fixt_value(e);
		this.removeEvent();
		this.clear_list();
		this.refresh();
		this.column(e)
	}
	Get_ele.prototype.mouseOver=function(e){this.fixt_value(e)}
	Get_ele.prototype.mouseLeave=function(){this.Inp.setValue(this.Inp.values);this.removeEvent();this.clear_list();
	}
	Get_ele.prototype.fixt_value=function(e){
		if(e.target.matches('li'))this.result_value=this.Inp.setValue(e.target.textContent);
		
		}
	
	Get_ele.prototype.column=function(e){
		this.Column.search_val(e);
		}	
	Get_ele.prototype.refresh=function(){
		this.Column.remove_tr();
		}
	
	Get_ele.prototype.clear_list=function(){
		this.list.remove();
		}
			
	
		
	return Get_ele
		
})();



const Column=(function(){
	function Column(tbody){
		console.log()
		this.columns=tbody.querySelectorAll('tr>td:nth-child(9n+2)');
		this.tr=tbody.querySelectorAll('tr');
		this.beack=document.querySelector('#disp_block');
		
		
	}		
	
		Column.prototype.column=function(){
			let arr_valu=[];
			for(td of this.columns){
				 arr_valu.push(td.textContent);
				}
				return  arr_valu;
			}
			
			Column.prototype.search_val=function(e){
			Array.prototype.map.call(this.columns,(v,i)=>{
				if(v.textContent!==e.target.textContent)this.tr[i+1].style.display="none";
				else{return}
				})
			}	
			Column.prototype.init_back=function(){
				this.beack.addEventListener('click',this.remove_tr.bind(this))
			}
			Column.prototype.remove_tr=function(){
				for(tr of this.tr){
					tr.style.display="table-row";
				}
			}
			

	return Column;
})();






let column=new Column(document.querySelectorAll('#window_all>table>tbody')[0]);
let html=new Create_html(document.querySelector('#tab'));
let controll=new Controll(column.column(),html,1);
let inp=new Input(document.querySelectorAll('#tab>input')[0],controll,'pierwszy');
html.getCol(column);
html.get_obj_inp(inp);
inp.init_focus();
inp.cls_click();
column.init_back();
}


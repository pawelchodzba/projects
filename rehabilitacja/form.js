function form(parent){

function Divs(id,char_html,classes,id_parent_div){
	
	this.id=id;
	this.char_html=char_html;
	this.classes=classes;
	this.id_parent_div=id_parent_div;
	
	this.create_element=function(){
			let parent_div=document.getElementById(this.id_parent_div);
			let element=document.createElement(this.char_html);
				 element.setAttribute('id',id);
				 element.classList.add(this.classes);
				 parent_div.appendChild(element);
			return element;
			}
	this.create_element();
	
	};
	/////////////////////////////////////////////
function Inputs (id,char_html,classes,id_parent_div,type,value,inp_name){
	
	Divs.apply(this,arguments);
	this.type=type;	
	this.value=value;	
	this.inp_name=inp_name;	
	this.attr_inputs=function(){
		 let input_one =document.getElementById(id);
			  input_one.setAttribute('type',type);
			  input_one.setAttribute('value',value);
			  input_one.setAttribute('name',inp_name);
		}
		this.attr_inputs();
	}
	///////////////////////////////////
	function Labels (id_parent,text,for_){
		
	this.id_parent=id_parent;
	this.for_=for_;
	this.text=text;
	
	this.create_label=function(){
		 let parent =document.getElementById(this.id_parent);
		 let label=document.createElement('label');
			  label.setAttribute('for',this.for_);
			  label.textContent=(this.text);
			 parent.appendChild(label);
		}
		this.create_label();
	}

Inputs.prototype=Object.create(Divs.prototype);
Inputs.prototype.constructor=Inputs;
//////////////////////////////////////////////////////////////////////////////////////////////
let d_all=new Divs('content_form','div','content_form',parent),

	 child_1=new Divs('child_1','div','child_box','content_form'),
		 up_1=new Divs('up_1','div','up','child_1'),
		 week=new Divs('week','div','week_nfz','child_1'),
			 week_text=new Divs('week_text','div','week_r_t','week'),
			 week_radio=new Divs('week_radio','div','week_r_t','week'),
	d_child_2=new Divs('child_2','div','child_box','content_form'),
		 up_2=new Divs('up_2','div','up','child_2'),
			sex=new Divs('sex','div','sex','up_2'),
			move=new Divs('move','div','move','up_2'),
		 nfz=new Divs('nfz','div','week_nfz','child_2'),
			
	 btn_box=new Divs('btn_box','div','btn_box','content_form'),

////////////////id,char_html,classes,id_parent_div////////////////////
	 label=new Labels('content_form','Pacjent','name'),
 name=new Inputs('name','input','inp_up','content_form','text','','tex_patient'),

	 l_diagnosis=new Labels('up_1','Rozpoznanie','diagnosis'),
 diagnosis=new Inputs('diagnosis','input','inp_up','up_1','text','','tex_up'),
	 l_description=new Labels('up_1','Opis','description'),
 description=new Inputs('description','input','inp_up','up_1','text','','tex_up'),
	 l_date=new Labels('up_1','Data przyjęcia (dd-mm-rrrr)','date'),
 date=new Inputs('date','input','inp_up','up_1','text','','tex_up'),

 week_1=new Inputs('week_1','input','week','week_text','text','','tex_week'),
 week_2=new Inputs('week_2','input','week','week_text','text','','tex_week'),
 week_3=new Inputs('week_3','input','week','week_text','text','','tex_week'),
 week_4=new Inputs('week_4','input','week','week_text','text','','tex_week'),
 week_5=new Inputs('week_5','input','week','week_text','text','','tex_week'),
 
	 l_week_1=new Labels('week_radio','1 tydzień','r_1'),
 week_r_1=new Inputs('r_1','input','radio','week_radio','radio','','radio_week'),
	 l_week_2=new Labels('week_radio','2 tydzień','r_2'),
 week_r_2=new Inputs('r_2','input','radio','week_radio','radio','','radio_week'),
	 l_week_3=new Labels('week_radio','3 tydzień','r_3'),
 week_r_3=new Inputs('r_3','input','radio','week_radio','radio','','radio_week'),
	 l_week_4=new Labels('week_radio','4 tydzień','r_4'),
 week_r_4=new Inputs('r_4','input','radio','week_radio','radio','','radio_week'),
	 l_week_5=new Labels('week_radio','5 tydzień','r_5'),
 week_r_5=new Inputs('r_5','input','radio','week_radio','radio','','radio_week'),

	 l_men=new Labels('sex','męszczyzna','men'),
 men=new Inputs('men','input','gender','sex','radio','','gender'),
	 l_women=new Labels('sex','kobieta','women'),
 women=new Inputs('women','input','gender','sex','radio','','gender'),

	 l_walk=new Labels('move','Chodzi','walk'),
 walk=new Inputs('walk','input','gait','move','radio','','gait'),
	 l_not_walk=new Labels('move','Leży','not_walk'),
 not_walt_k=new Inputs('not_walk','input','gait','move','radio','','gait'),

	 l_nfz_1=new Labels('nfz','ROP','nfz_1'),
 nfz_1=new Inputs('nfz_1','input','nfz','nfz','radio','','nfz'),
	 l_nfz_2=new Labels('nfz','ROOW','nfz_2'),
 nfz_2=new Inputs('nfz_2','input','nfz','nfz','radio','','nfz'),
	 l_nfz_3=new Labels('nfz','ROO','nfz_3'),
 nfz_3=new Inputs('nfz_3','input','nfz','nfz','radio','','nfz'),
	 l_nfz_4=new Labels('nfz','ROZW','nfz_4'),
 nfz_4=new Inputs('nfz_4','input','nfz','nfz','radio','','nfz'),
	 l_nfz_5=new Labels('nfz','ROZ','nfz_5'),
 nfz_5=new Inputs('nfz_5','input','nfz','nfz','radio','','nfz'),

 b_send=new Inputs('send','input','btn_form','btn_box','button','zapisz','btn_form'),
 b_get_up=new Inputs('get_up','input','btn_form','btn_box','button','usuń','btn_form'),
 b_abandon=new Inputs('abandon','input','btn_form','btn_box','button','anuluj','btn_form');
 
 	
 // let modal=new Divs('chie','div','child_box','content_form');
 // let b=Divs.c();
 // console.log(b);
// let d= modal.b();
 
}
function modal(text){
	let div_modal= document.createElement('div');
	div_modal.setAttribute('id','modal');
	div_modal.textContent=text;
	let content=document.getElementById('content_all');
	content.appendChild(div_modal);
	
		setTimeout(un_set,2000);
	
	function un_set(){
	 content.removeChild(div_modal);
	 }
}

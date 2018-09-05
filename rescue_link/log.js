const Log=(function(){


		const reference={
			form:{send_show_btn:document.getElementById('log'),
					input_text:[document.getElementById('login'),document.getElementById('haslo')],
			},
			wylog_btn:document.getElementById('wylog'),
			btn_save_setting:document.getElementById('save_setting'),
			info:document.getElementById('alert'),
			form_save:document.getElementById('form_save'),
			checkboxes_id:function(){
					let id=[...document.querySelectorAll('#link input[type=checkbox]')].map((v)=>{
						if(v.checked)return v.id});
						return id.join();
						
			},
			button_cls:function(){return [...document.querySelectorAll('#link button')]}
			
	};


const show_form=show(1)
reference.form.send_show_btn.addEventListener('click',show_form);
function show(count){

	let counter=0;
	return function(){
			if(++counter>count){
				
				let credential=JSON.stringify({login:reference.form.input_text[0].value,
															 haslo:reference.form.input_text[1].value})
													
			let log_true=	sendPost('a.php',credential).then(data=>{
				data=JSON.parse(data)
					if(data!==false){
						if(data[2]){
							admin.call_user(data);
						}else{user.hide_show(data);}
					}else{
						all.all_client();
						counter=0;
					}
				});
			}else{
				reference.form.input_text.map((v)=>show_hide(v,true));	
			}
		
	}
	
}

function Admin(User,Delete){
	this.User=User;
	this.Delete=Delete;
	
}
	Admin.prototype.call_user=function(data){
		this.User.hide_show(data);
		this.add_form_link();
		this.Delete.add_ev();
	}
	Admin.prototype.add_form_link=function(data){
		getJSON('form_save.php').then((form)=>{
			reference.form_save.innerHTML=form
			send_link();
			});
		
	}
 
function Users(ClientAll){
	this.user_id;
	this.data;
	this.ClientAll=ClientAll;
	
}

	Users.prototype.hide_show=function(data){
		this.data=data;
		
		reference.form.input_text.map((v)=>show_hide(v,false));
		show_hide(reference.form.send_show_btn,false);
		show_hide(reference.wylog_btn,true);
		show_hide(reference.btn_save_setting,true);
		this.refresh();
		this.cls_value();
		this.user_id=parseInt(data[3]);
	}
	Users.prototype.refresh=function(){
		if(!this.data)return;
		
		start(this.data[1],this.data[2]);
				
	}
	Users.prototype.cls_value=function(){
			reference.form.input_text[0].value="";
			reference.form.input_text[1].value="";
	}		
	Users.prototype.anuluj=function(){
		reference.wylog_btn.addEventListener('click',()=>{
			//show_form(1);
			this.ClientAll.all_client();
			getJSON('wylog.php').then(()=>{});
		})	
	}
	Users.prototype.save_checked=function(){
		reference.btn_save_setting.addEventListener('click',()=>{
			let check=reference.checkboxes_id();
		
			check=JSON.stringify({check:check,user_id:this.user_id});
			sendPost('save_checked.php',check).then(data=>{console.log(data)})
		
		})	
	}
	
function Client_all(){}

	Client_all.prototype.all_client=function(){
		show_hide(reference.wylog_btn,false);	
		show_hide(reference.btn_save_setting,false)	;
		show_hide(reference.form.send_show_btn,true);	
		reference.form_save.innerHTML=null;	
		start(null,null);
		
	}
	
function Delete(){
	this.User;
}
	Delete.prototype.add_ev=function(){//console.log(reference.button_cls()[0])
		document.querySelector('#link').onclick=(e)=>{
			let regexp=/\d+/;
			let target=e.target.dataset.nr_row
			if(target){
					if(target.match(regexp))this.delete_ajax(target);
			}
		}
	}
	Delete.prototype.delete_ajax=function(id){
		id=JSON.stringify({id:id});
		sendPost('delete.php',id).then(data=>{
			this.User.refresh()
			})
	}
	Delete.prototype.refresh=function(User){
		this.User=User;
	}
	
const all=new Client_all();
const user=new Users(all);
const cls=new Delete();
all.all_client();
cls.refresh(user);
user.anuluj();
user.save_checked();
const admin=new Admin(user,cls);
reference.form.input_text.map((v)=>show_hide(v,false));

/////////////suport function////////////
function show_hide(obj,visable){
	if(visable)visable='block';
	else{visable='none'}
	obj.style.display=visable;
}

return user;

})()
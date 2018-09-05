
		

function Create_link(Json,wrap,checked,admin){
	 this.Json=Json;
	 this.wrap=wrap;
	 this.wrap.innerHTML=null;
	 this.checked=checked;
	 this.arr_checked;
	 this.admin=admin;
	 if(this.checked)this.arr_checked=this.checked.split(',');
	 } 
			Create_link.prototype.create=function(){
					this.Json.map((v)=>{
					this.create_row(v);
				});
			}
			Create_link.prototype.create_row=function(link){
					let hidden="hidden";
					let checked='checked';
				if(this.admin)hidden="";
				if(this.arr_checked){
					if(this.arr_checked.indexOf(link.id)==-1)checked=false;
			}
			let row='<div class="check_box"><input  type ="checkbox" id="'+link.id+'" '+checked+'></div> <div class="title_link"><a href="'+link.url+'" target="_blank">'+link.title+'</a></div>  <div class="opis">'+link.description+'</div>  <div><button data-nr_row="'+link.id+'" '+hidden+'>usuń</button></div> ';	
					this.append(row)
			}
			Create_link.prototype.append=function(row){
				let div=document.createElement('div');
					div.innerHTML=row;
					this.wrap.appendChild(div);
			} 
			

function Open_checked(){
	 this.Json;
	 this.checkboxes;
	}
	
	 Open_checked.prototype.set_propertys=function(json,checkboxes){
		 this.checkboxes=checkboxes;
		 this.Json=json;
	 }
	
	Open_checked.prototype.iteratio=function(){
		Array.from(this.checkboxes,(checkbox)=>{
			if(checkbox.checked){
				this.Json.map((v)=>{
				  if(v.id==checkbox.id)window.open(v.url) 
				})
			}
		})
	}
	Open_checked.prototype.click=function(){
		let btn=document.querySelector('#open_checked');
		btn.addEventListener('click',()=>this.iteratio());
	}
	
const open_check= new Open_checked();	
		  open_check.click();



		  
function start(checked,admin){
		Promise.all([
		getJSON('edit.php'),
		
		])
		.then(data=>{
			let wrap_link=document.querySelector('#link');
			let arr_json=data.map((v)=>{
				return JSON.parse(v)
			})
			
			new Create_link(arr_json[0],wrap_link,checked,admin).create();
					open_check.set_propertys(arr_json[0],wrap_link.querySelectorAll('input[type=checkbox]'));
			
		})
	}
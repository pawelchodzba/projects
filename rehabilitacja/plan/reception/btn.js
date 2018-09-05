


function btn(id,go) {
	this.id=id;
	this.go=go;

}

btn.prototype.getEl=function(){
	let click_btn=document.getElementById(this.id);
	return	 click_btn;
}
btn.prototype.event_click=function(){
	
	this.getEl().addEventListener('click',go,false);
}
function go(){console.log(this);
	console.log('hlhkl');
}


let a=new btn('reception_patient',go);
a.event_click();


//module.exports=btn;
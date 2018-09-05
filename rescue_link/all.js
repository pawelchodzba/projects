

function send_link(){
	
	let btn=document.getElementById('send');	
	btn.addEventListener('click',send);	
	
function send(){
	let title=document.getElementById('title').value;
	let url=document.getElementById('send_link').value;
	let description=document.getElementById('send_description').value;
	

	
	if(validate(title,url,description))$.get('save.php',{title:title,url:url,description:description},()=>{
	Log.refresh();
	document.getElementById('title').value="";
	document.getElementById('send_link').value="";
	document.getElementById('send_description').value="";
	})	
	

}	

function validate(title,url,description){
	if(title&&url&&description){
		let reg_exp=/https?:\/\//;
		if(url.match(reg_exp))return true;
			else{alert('adres url musi mieć prawidłowy format')}
	}else{alert('wypełnij puste pola')}
}

	
}
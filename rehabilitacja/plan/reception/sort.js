


const Input_date=(function () {
	
function Input_date(){
	//this.Patients_date;
}

	Input_date.prototype.get_value=function(Patients_date){
			document.querySelector("#datepicker").onchange=(e)=>{
				Patients_date.set_Tr();
				Patients_date.iteratio_Tr(e.target.value);
	
	};	
	
	
}	

	return Input_date
})();


const Patients_date=(function () {
	
function Patients_date(Tab){
	this.Tab=Tab;
	this.Tr;
}

	Patients_date.prototype.set_Tr=function(){
		this.Tr=[...this.Tab.querySelectorAll('table tbody tr:not(:first-child)')];
	return this.Tr
	};	
	Patients_date.prototype.iteratio_Tr=function(inp_value){
		this.Tr.map(tr=>{
			tr.style.display="table-row";
		if(!check_date_string(tr.querySelector('td:nth-child(4)').textContent, inp_value)){
			tr.style.display="none";
		}else{}	
		})
	
	};	
	


	return Patients_date;
})();


function check_date_string(date_patient,inp_value){
	
	date_patient=date_patient.split('-');
	inp_value=inp_value.split('/');
	
	if(	date_patient[0]==inp_value[1]&& date_patient[1]==inp_value[0]&& date_patient[2]==inp_value[2]) return true;//day//year/month
		else {return}
	}




const inp_date=new Input_date ();
const patients_date=new Patients_date (document.querySelector('#window_all '));

inp_date.get_value(patients_date);
	

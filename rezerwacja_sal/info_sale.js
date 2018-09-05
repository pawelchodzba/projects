let info_sale={ "sale_tab":[
		
			{
		'nazwa': "Sala duża 1 nr:1",
		'info':"<p>Lorem ipsum dolor sit amet</p>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
			{
		'nazwa': "Sala duża 2 nr:2",
		'info':"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
			{
		'nazwa': "Kuchnia nr:3",
		'info':"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
			{
		'nazwa': "Sala średnia nr:4",
		'info':"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
	
			{
		'nazwa': "Sala mała nr:5",
		'info':"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
			{
		'nazwa': "Sala kominkowa nr:6",
		'info':"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
		'kliknij':"Aby wynająć kliknij"
		},
			{
		'nazwa': "Szatnia",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Toaleta",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Schody",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Bar",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Schody",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Toaleta",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Kierownik",
		'info':"",
		'kliknij':""
		},
			{
		'nazwa': "Szatnia",
		'info':"",
		'kliknij':""
		}
		
		]};
	

	
	
	
		let s_name_nr=document.getElementsByTagName('g');
			for(i=0;i<s_name_nr.length;i++){
				let id= s_name_nr[i].getAttribute('id');
					if(id){
					let new_id=document.getElementById(id);
					s_name_nr[i].addEventListener('mouseover',get_id,false);
					

					
				}
			}
			
			function get_id(){
				

				
				//for(j=0;j<new_tab.length;j++){
				let nr_sali=this.getAttribute('id').split('_')[2];
				document.getElementById('name').innerHTML=info_sale.sale_tab[nr_sali].nazwa;
				
				document.getElementById('info').innerHTML=info_sale.sale_tab[nr_sali].info;
				document.getElementById('img').innerHTML=info_sale.sale_tab[nr_sali].kliknij;
				chenge_class_sal(nr_sali);///hover on one sala///
				}
		function chenge_class_sal(sala)	{
	sala++;
	
	//alert(sala_flag);
	let tab=document.getElementsByTagName('tbody')[0],
		cell =tab.getElementsByTagName('td');
		 for(i=0;i<cell.length;i++){
		
		  let cell_name=cell[i].className;
		  /////////if name class is end char === nr sali///////////
		  	if(cell_name==="cell_"+sala||cell_name==="cell_"+sala+" weekend"){ 
			///////i=== co 7 is this some class/////alert(i);
			cell[i].classList.add('sala_activ');
			cell[i].classList.remove('weekend');
			}
		 }
	}				
				
	window.addEventListener('mouseout',items_leave,false);		
	function	items_leave(){
	
		document.getElementById('name').innerHTML='';
		document.getElementById('info').innerHTML='';
		document.getElementById('img').innerHTML='';
		
		let r_c_v_s =remove_class_vertical_sala();
		
		class_weekend(year,month_int,r_c_v_s);
	}
	function remove_class_vertical_sala(){
		
		let tab=document.getElementsByTagName('tbody')[0],
		cell =tab.getElementsByTagName('td');
		 for(j=0;j<cell.length;j++){
			 cell[j].classList.remove('sala_activ');
			 
		}	
		return tab;
	}

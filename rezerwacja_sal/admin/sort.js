
(function(){
	window.addEventListener('load',create_sql,false);
	let sort_month=document.getElementById('month');	
	let sort_sala=document.getElementById('sala');	
	let sort_new=document.getElementById('for_new');	
		 sort_month.addEventListener('change',create_sql,false);
		 sort_new.addEventListener('click',create_sql,false);
		 sort_sala.addEventListener('change',create_sql,false);
		 
	function create_sql(e){
		
		 let target=e.target;
		 let sql_js;
		 if (target.id==='month'){
		  let month_int=parseInt(this.value);
					if(month_int){
					sql_js="SELECT * FROM sala_1 WHERE month="+month_int+" ORDER BY id DESC";
					ajax_sql(sql_js);
					sort_sala.value=null;
					}else{return}
			}
				else if (target.id==='sala'){
				let sala_int=parseInt(this.value);
					if(sala_int){
					sql_js="SELECT * FROM sala_1 WHERE sala="+sala_int+" ORDER BY id DESC";
					ajax_sql(sql_js);
					sort_month.value=null;
					}else{return}
					
			}	else{
				$('#content_tab').load('tab.php');
				sort_sala.value=null;
				sort_month.value=null;
		}
														
		}
		
		function ajax_sql(sql_js){
		$.get('tab_sort.php',{sql:sql_js},function(data){
			document.getElementById('content_tab').innerHTML=data;
			})	
		}
})();
	



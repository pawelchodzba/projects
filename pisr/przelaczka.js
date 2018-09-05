
	
	/*--------------------------------------------------------------multi guziki-----------------------*/
	
	function przelacz_prm(){
		var prmy=document.getElementById('prmy');
		var inputy= prmy.getElementsByTagName('input');
		var multi_prm =document.getElementById('multi_prm');
		
		if (!multi_prm.checked){
			for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=false;
				}
			}
			else{
					for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=true;
				}	
			}
		przerysuj('zrm','zrm')	
		przerysuj1('szpital','szpital')
		przerysuj2d('siedziba_dm','dm')		
		przerysuj2('wszystkie_dm','wszystkie_dm')
		przerysuj21('lpr','lpr')
		przerysuj3('ladowiska','ladowiska')
		przerysuj3_zasieg60('hems_s','hems_s')
		przerysuj3_krakow('hems_k','hems_k')
		przerysuj3_kielce('hems_kiel','hems_kiel')
		przerysuj3_lublin('hems_l','hems_l')
	}
	
		function przelacz_psp(){
		var pspy=document.getElementById('pspy');
		var inputy= pspy.getElementsByTagName('input');
		var multi_psp =document.getElementById('multi_psp');
		
		if (!multi_psp.checked){
			for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=false;
				}
			}
			else{
					for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=true;
				}	
			}
			
		przerysuj8('komenda_psp','komenda_psp')	
		przerysuj9('jrg','jrg')	
		przerysuj10('post_psp','post_psp')
		przerysuj11('lotnis_psp','lotnis_psp')
		przerysuj12('specjalist','specjalist')
		przerysuj14('osp','osp')
		}
	
		function przelacz_pol(){
		var poly=document.getElementById('poly');
		var inputy= poly.getElementsByTagName('input');
		var multi_poly =document.getElementById('multi_pol');
		
		if (!multi_pol.checked){
			for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=false;
				}
			}
			else{
					for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=true;
				}	
			}
			
			przerysuj4('komenda','komenda')
			przerysuj5('komis','komis')
			przerysuj6('post','post')
			przerysuj7('inne','inne')
		}
		
		
			function przelacz_dk(){
		var dky=document.getElementById('dky');
		var inputy= dky.getElementsByTagName('input');
		var multi_dk =document.getElementById('multi_dk');
		
		if (!multi_dk.checked){
			for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=false;
				}
			}
			else{
					for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=true;
				}	
			}
			
			przerysuj15('dk','dk')
			przerysuj16('a4','a4')
			przerysuj19('infra','infra')
		}
		
		
			function przelacz_pt(){
		var pty=document.getElementById('pty');
		var inputy= pty.getElementsByTagName('input');
		var multi_pt =document.getElementById('multi_pt');
		
		if (!multi_pt.checked){
			for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=false;
				}
			}
			else{
					for(i=0;i<inputy.length;i++)
				{
					inputy[i].checked=true;
				}	
			}
		przerysuj17('granica','gran')	
		przerysuj18('etyk','etyk')
		}

		

		
	
	
	
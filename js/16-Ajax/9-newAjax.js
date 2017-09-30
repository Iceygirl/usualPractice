 function Ajax (Url,Fnsucc,Fnfailed){
	 var oAjax =null;
	 
	 if(window.XMLHttpRequest){
		oAjax = new XMLHttpRequest(); 
	 } else {
		oAjax = new ActiceXObject('Microsoft.XMLHTTP'); 
	 }
	 
	 oAjax.open('GET',Url,true);
	 
	 oAjax.send();
	 
	 oAjax.onreadystatechange = function (){
		if(oAjax.readystate ==4){
		   if(oAjax.status ==200){
			  FnSucc();   
		   } else{
			   if(Fnfailed){
			      Fnfailed(); 
			   }
		   }
		}
	 };
 };

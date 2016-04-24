$(document).ready(function(){
	var level=0;
	var Curr_Parent="";
	var hierarchy=[];
	 
	$("select").on("change",function(){
		
		 Curr_Parent=$(this).val();
		 String(Curr_Parent);
		 hierarchy.push(Curr_Parent);
		 
		 alert(hierarchy[level]);
		 level++;
		 if(level==1)
		 {
		 	$.post("../public_html/php/LoaddropdownL2.php",{LEVEL:hierarchy[0]},function(data){
		 		console.log(data);
		 		$("#ctype").html(data);
		 	});
		 	return false;
		 }
		 else
		 if(level==2)
		 {
		 	$.post("../public_html/php/LoaddropdownL3.php",{LEVEL1:hierarchy[1],LEVEL:hierarchy[0]},function(data){
		 		console.log(data);
		 		$("#cname").html(data);
		 	});
		 }
		 
	});
});

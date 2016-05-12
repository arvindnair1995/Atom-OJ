$(document).ready(function(){
	//var level=0;
	var Curr_Parent="";
	var hierarchy=[];
	var idval=0;
	$("select").on("change",function(){
		 idval=$(this).attr("id");
		 Curr_Parent=$(this).val();
		 String(Curr_Parent);
		 hierarchy[idval]=Curr_Parent;
		 
		 alert(idval);
		 //level++;
		 if(idval==1)
		 {
		 	$.post("../public_html/php/LoaddropdownL2.php",{LEVEL:hierarchy[idval]},function(data){
		 		console.log(data);
		 		$("#2").html(data);
		 		$("#3").html("<option selected disabled>select course type</option>");
		 	});
		 	return false;
		 }
		 else
		 if(idval==2)
		 {
		 	$.post("../public_html/php/LoaddropdownL3.php",{LEVEL1:hierarchy[idval],LEVEL:hierarchy[idval-1]},function(data){
		 		console.log(data);
		 		$("#3").html(data);
		 	});
		 }
		 
	});
});

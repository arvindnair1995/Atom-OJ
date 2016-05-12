$(document).ready(function(){
	$('#coursetype').on("change",function(){
		$.post("../public_html/7createpage.php",{Ctype:$(this).val()});
	});
});

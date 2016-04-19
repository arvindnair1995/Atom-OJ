$(document).ready(function(){
	$('.well-lg').load('7activecourses.php');
	
	$('ul.nav li a').click(function(){
		var page=$(this).attr('href');
		$('.well-lg').load(page +'.php');
		return false;
	});
});

$(document).ready(function(){
	$('.table-responsive').load('19problemset.php');
	
	$('ul.nav li a').click(function(){
		var page=$(this).attr('href');
		$('.table-responsive').load(page + '.php');
		return false;
	});
});

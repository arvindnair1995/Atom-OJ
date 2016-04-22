$(document).ready(function(){
	$('.content').load('adminhome.php');
	$('.sidenav ul.nav li a').click(function(){
		var page=$(this).attr('href');
		$('.content').load(page +'.php',function()
		{
			
		});//load complete function!
		return false;
	 });//click function!
 
 });//ready function!

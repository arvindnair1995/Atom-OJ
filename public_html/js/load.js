$(document).ready(function(){
	$('select').onchange(function(){
		var DATABASE=$(this).attr('name');
		$get('fetch_data.php',{database})
	})
})

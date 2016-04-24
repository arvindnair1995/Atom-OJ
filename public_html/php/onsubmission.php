<script>

	$('form').on('submit',function(){
		var page=$(this).attr('id');
		$.get($(this).attr('action'),$(this).serialize(),function(response){
			$("#MSG").text(response);
			setTimeout(function(){
				//$("#MSG").reset();
				$(".content").load(page+".php");
			},2000);
			
			
		});
		return false;
	});
	
</script>
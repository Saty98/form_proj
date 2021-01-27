

$(document).ready(function () {
	// body...
	$("#form").on("submit",function(e){
		e.preventDefault();
		$.ajax({
			type:"POST",
			url:"form.php",
			data:$(this).serialize(),
			success:function(response){
				if (jQuery.trim(response) == 'ok') {
					$("#form").trigger("reset");
					getData();
				}else{
					alert("there are some error");
				}
			},
				error:function(){
					alert("there are some error");
				}
				
		});
		function getData() {
			// body...
			$.ajax({
				type:"POST",
				url:"fetchdata.php",
				success:function(response){
					$('#getData').html(response);
				},
				error:function(){
					alert("there are some error");
				}
			});
		}	
	});
});
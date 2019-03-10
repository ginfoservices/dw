 
 
 
 
 <!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>
$(document).ready(function(){

	$('#display_error').hide();


	$("#login").submit(function(e){
		e.preventDefault();

$.ajax({
		type: "post",
		url: "{$process}",
		data: $('#login').serialize(),
		dataType: "text",
		success: function (response) {
			
	
	if(response == 'true'){

				window.location.replace('admin.php');

			} 
			else 
			{
												window.location.replace('index.php');

									$('#display_error').alert();

					window.setTimeout(function(){
					$('#display_error').hide();
					}, 2000);


				

			} 
		}
	});


	});
	
	



});
	</script>
	
  </body>
</html>
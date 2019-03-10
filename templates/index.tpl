


<div class="container" id='index'>
<div class="row">
<div class="col-4">

{if $error neq false}
<div class="alert alert-danger" role="alert" id="display_error">{$er_desc}</div>


{/if}
		<form id="login">
			<label for="username">Username</label><input name="username" class="form-control" type="text">
			<label for="password">Password</label><input name="password" class="form-control" type="password">
			<button type="submit" class="btn btn-secondary">Login</button>
		</form>	
</div></div>


</div>






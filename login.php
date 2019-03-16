<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="http://localhost/dw/assets/css/bootstrap.css">


<style>


html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

</head>
  <body>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$table = mysqli_real_escape_string($conn, $_POST['table']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	$query = "SELECT * from {$table} where username='$username'";

	$result = mysqli_query($conn, $query);



	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);

		if (password_verify($password, $row['password'])) {

			if (isset($_POST['remember_me'])) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['cafe_name'] = $row['cafe_name'];
			}

			$_SESSION['username'] = $row['username'];
			$_SESSION['cafe_name'] = $row['cafe_name'];

			header('location: index.php?page=admin');
		} else {

			$_SESSION['error'] = "Login Failed";
			header('location: index.php');
		}
	}
}

?>

<div class="text-center">
    <form class="form-signin" method="post" action="">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Cafe Management <small>Login</small></h1>
        <input type="hidden" name="table" value="settings">
        <label for="username" class="sr-only">Registration Code</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Registration Code" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Keep Me Logged in
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div> 
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="http://localhost/dw/assets/js/jquery-3.3.1.js"></script>
	<script src="http://localhost/dw/assets/js/bootstrap.bundle.js"></script>
	<!-- <script>
	    $(document).ready(function() {
	        $("#login_form").submit(function(e) {
	            $.ajax({
	                type: "post",
	                url: "login.php",
	                data: $("#login_form").serialize(),
	                dataType: "text",
	                success: function(response) {
	                    if (response == "true") {
	                        alert("login success");
	                    } else {
	                        alert("login Failed");
	                    }
	                }
	            });
	        });
	    });
	</script> -->


	</body>

	</html> 
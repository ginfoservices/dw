<?php
include "../../includes/dbconnection.php";


var_dump(select('users',"password"));
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/dw/assets/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <form class="form-signin form-horizontal col-md-12" method="post" action="http://localhost/dw/process.php">
                <h1 class="h2 mb-5 font-weight-bold text-center">Cafe Management <small>Registration</small></h1>
                <input type="hidden" name="form_name" value="users">

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group row">

                            <label for="username" class="col-md-4 ">Username</label>
                            <input class="col-md-8" type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="form-group row">


                            <label for="password" class="col-md-4 ">Password</label>
                            <input class="col-md-8" type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">

                            <label for="firstname" class="col-md-4 ">First name</label>
                            <input class="col-md-8" type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">

                            <label for="lastname" class="col-md-4 ">Last name</label>
                            <input class="col-md-8" type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group row">

                            <label for="email" class="col-md-4 ">Email address</label>
                            <input class="col-md-8" type="text" id="email" name="email" class="form-control" placeholder="Email address" required>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group row">

                            <label for="mobile" class="col-md-4 ">Contact no.</label>
                            <input class="col-md-8" type="text" id="mobile" name="mobile" class="form-control" placeholder="Contact no." required>
                        </div>
                    </div>
                </div>
                <div class="form-group row">


                    <label for="address" class="col-md-2">Street</label>
                    <input class="col-md-3" type="text" id="street" name="street" class="form-control" placeholder="Street" required>


                    <label for="address" class="col-md-1">City</label>
                    <input class="col-md-2" type="text" id="city" name="city" class="form-control" placeholder="City" required>

                    <label for="address" class="col-md-2">Country</label>
                    <select name="country" id="country" class="form-control col-md-2">
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Bangladesh">Bangladesh</option>
                    </select>
                </div>


                <div class="form-group row">
                    <label for="button" class="col-md-2"></label>

                    <button class="btn btn-primary" type="submit">Register</button>
                </div>

                <p class="mt-5 mb-3 text-center text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://localhost/dw/assets/js/jquery-3.3.1.js"></script>
    <script src="http://localhost/dw/assets/js/bootstrap.bundle.js"></script>
  

       
</body>

</html> 
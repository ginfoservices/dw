<?php

require_once 'libs/db.php';
$_SESSION['error'] = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){

if($_POST['username'] != "" && $_POST['password'] != ""){
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$query = "SELECT * FROM user where `username`='$username'";
//	echo $query;
	$result = mysqli_query($conn, $query);
var_dump($result);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		//var_dump($row);
		if($password == $row['password']){
			$_SESSION['username'] = $row['username'];
			$_SESSION['error'] = false;
			echo 'true';
			
		}
		else 
		{
			$_SESSION['error'] = true;
			$_SESSION['er_desc'] = "Password is incorrect, Please try again.";
			echo 'false';
			
		}
	} else {
		$_SESSION['error'] = true;
			$_SESSION['er_desc'] = "Username password combination is invalid";
			echo 'false';
	}
		}
		
	else if($_POST['username'] == "" && $_POST['password'] == "")
	{
		$_SESSION['error'] = true;
			$_SESSION['er_desc'] = "Please fill all fields";
		echo 'false';
		
	}
	else if($_POST['username'] == "")
	{
		$_SESSION['error'] = true;
		$_SESSION['er_desc'] = "Please enter your username";
				echo 'false';
			
	} 
	else if($_POST['password'] == "")
	{
		$_SESSION['error'] = true;
		$_SESSION['er_desc'] = "Please enter your password";
				echo 'false';
				
	}

	
	}



 


?>
<?php 
if(!(session_start())){
	session_start();
}
var_dump($_SESSION);
$conn = mysqli_connect('localhost', 'root', '', 'capstone') or die(mysqli_error($conn));

?>

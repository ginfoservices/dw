<?php
include 'includes/dbconnection.php';


if($_SERVER['REQUEST_METHOD'] == "POST"){
	
}


if($_SERVER["REQEUST_METHOD"] == "GET"){
    $table = $_GET['page'];
    return select($table, '*');
}


?>
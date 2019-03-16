<?php 
if (!session_start()) {
	session_start();
}


//include_once "includes/debug.php";
require_once "includes/dbconnection.php";

require_once "includes/header.php";
require_once "includes/navigation.php";


$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

if ($page != "") {
	include "pages/{$page}.php";
} 


require_once 'includes/footer.php';
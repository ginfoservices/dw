<?php
require_once 'libs/db.php';
require_once ('libs/Smarty.class.php');
$Smarty = new Smarty();

$Smarty->assign('title','Welcome to Smarty');

	$Smarty->assign('myname', array("Rabi Shrestha","Sabi Shrestha", "Nabin Shrestha"));

//var_dump($_SESSION);
$Smarty->display('contactus.tpl');





?>
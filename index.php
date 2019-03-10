<?php

require_once 'libs/db.php';
require_once ('libs/Smarty.class.php');
$Smarty = new Smarty();

$Smarty->assign('title','Welcome to Smarty');
if($_SESSION['error']){
	$Smarty->assign('error', true);
	$Smarty->assign('er_desc', $_SESSION['er_desc']);
}
$Smarty->assign('process', 'process1.php');
//var_dump($_SESSION);

$page = 'index';

$Smarty->assign('title', "weelcome to ".ucfirst($page));

$Smarty->display('header.tpl');
$Smarty->display("{$page}.tpl");
$Smarty->display('footer.tpl');




?>
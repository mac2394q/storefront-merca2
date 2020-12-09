<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH."routeController.php"); 


$route = new route();
//print_r($_POST);
$route->handlerRequest($_POST);
?>
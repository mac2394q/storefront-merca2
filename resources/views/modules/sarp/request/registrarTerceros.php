<?php
header("Access-Control-Allow-Origin: *");
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once($_SERVER['DOCUMENT_ROOT'] . '/erp_sarp/plataforma_merca2/conf.php');
require_once(SERVICES_PATH."tercerosServices.php");
require_once(MODEL_PATH."entity/terceros.php"); 


//Test
$modelTerceros = new terceros();
$modelTerceros->__constructComplete(
    941,
    '1miguel angel claros',
    'Cliente',
    0,
    1,
    'CU202005-01',
    'Direccion Barrio Marandua cll 25c 23-28',
    '+57 305 350 8110',
    'Tulua - Valle del cauca',
    1015,
    75,
    '+57 305 350 8110',
    'mac2394q@gmail.com',
    1,
    '123456789',
    'NIT'
);
tercerosServices::registrarTerceros($modelTerceros);







?>
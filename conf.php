<?php
/*Archivo de configuracion del proyecto */
/* Variables globales*/

 //configuracion en ambiente local:
 $app ="plataforma_merca2";
 $dominio = "http://merca2.cf";
 $dominio_server = "http://merca2.cf";
/* Variables Base de datos*/

$basename="portalxn_erp_sarp";
$dialect="mysql";
$host="192.185.128.14";
$userDatabase="portalxn_admin";
$passDatabase="f11235813";
$directorioNoFoundImage = "http://portalx.net/erp_sarp/plataforma_merca2/vendor/merca2/notfound.png";

/*Variables para facturacion*/
//idProducto/idproducto.jpg
if (!defined('URL_IMAGE_ERP')) define('URL_IMAGE_ERP','http://portalx.net/erp_sarp/viewimage.php?modulepart=product&entity=1&file=%2F');
if (!defined('URL_IMAGE')) define('URL_IMAGE','http://portalx.net/erp_sarp/documents/produit/');


if (!defined('BASENAME')) define('BASENAME',$basename);
if (!defined('HOST')) define('HOST',$host);
if (!defined('USERDATABASE')) define('USERDATABASE',$userDatabase);
if (!defined('PASSDATABASE')) define('PASSDATABASE',$passDatabase);
if (!defined('DIALECT')) define('DIALECT',$dialect);
 /* Rutas para directorios generales  */
 
/***NOTA***/
/*Todas las rutas definidas que terminan en _PATH son para importar o incluir de manera local archivos .php /que no soportan rutas absolutas como lo require ,aunque tengas activado allow_include,con ruta absoluta no permite utilizar alguna clase escrita dentro del archivo .php aunque haya sido incluida.*/
//Todas las rutas definidas que terminan en _SERVER son para importar o incluir archivos de manera extar ,es decir que soporta rutas absolutas.como ejemplo archivos .js , .css , .jpg .ico .png etc.
 /* const */
 //ruta del directorio principal:
 if (!defined('ROOT_PATH')) define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
//define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT'].'/credito'.'/');
//con /
if (!defined('DOMAIN_PATH')) define('DOMAIN_PATH',$dominio.'/');
//con dominio del servidor principal 
if (!defined('SERVER_PATH')) define('SERVER_PATH',$dominio_server.'/');

//ruta del directorio app:
if (!defined('APP_PATH')) define('APP_PATH',ROOT_PATH.'app/');
if (!defined('APP_SERVER')) define('APP_SERVER',DOMAIN_PATH.'app/');
if (!defined('MODEL_PATH')) define('MODEL_PATH',APP_PATH.'model/');
if (!defined('PROVIDERS_PATH')) define('PROVIDERS_PATH', APP_PATH.'providers/');
if (!defined('SERVICES_PATH')) define('SERVICES_PATH', APP_PATH.'providers/services/');
if (!defined('API_PATH')) define('API_PATH', PROVIDERS_PATH.'api/');
if (!defined('DAO_PATH')) define('DAO_PATH', PROVIDERS_PATH.'dao/');
if (!defined('CONTROLLERS_PATH')) define('CONTROLLERS_PATH', APP_PATH.'controllers/');
if (!defined('HELPERS_PATH')) define('HELPERS_PATH', APP_PATH.'helpers/');
if (!defined('LIB_PATH')) define('LIB_PATH', APP_PATH.'lib/');
//ruta del directorio de base de datos:
if (!defined('DATABASE_PATH')) define('DATABASE_PATH',ROOT_PATH.'database/');


//ruta del directorio de recursos:
if (!defined('RESOURCE_PATH')) define('RESOURCE_PATH', ROOT_PATH.'resources/');
if (!defined('RESOURCE_SERVER')) define('RESOURCE_SERVER', DOMAIN_PATH.'resources/');
if (!defined('PUBLIC_PATH')) define('PUBLIC_PATH', RESOURCE_PATH.'public/');
if (!defined('PUBLIC_SERVER')) define('PUBLIC_SERVER', RESOURCE_SERVER.'public/');
if (!defined('CORE_JS_SERVER')) define('CORE_JS_SERVER', PUBLIC_SERVER.'views/platform/global/core/');
if (!defined('VIEW_PATH')) define('VIEW_PATH', RESOURCE_PATH.'views/');
if (!defined('VIEW_SERVER')) define('VIEW_SERVER', RESOURCE_SERVER.'views/');
if (!defined('MODULE_APP_PATH')) define('MODULE_APP_PATH', VIEW_PATH.'modules/');
if (!defined('MODULE_APP_SERVER')) define('MODULE_APP_SERVER', VIEW_SERVER.'modules/');

//rutas del directorio testing
if (!defined('TESTING_PATH')) define('TESTING_PATH', ROOT_PATH.'testing/');
//rutas del directorio vendor

 
 if(!defined('VENDOR_PATH')) define('VENDOR_PATH', ROOT_PATH.'vendor/');
 if(!defined('VENDOR_SERVER')) define('VENDOR_SERVER', DOMAIN_PATH.'vendor/');
 
//RUTAS PERSONALIZADAS:
// if (!defined('FOTO_PATH')) define('FOTO_PATH', ASSETS_SERVER.'fotosEmpleados/');
if (!defined('ICON_PATH')) define('ICON_PATH', VENDOR_SERVER.'/images/ico/favicon.ico');
if (!defined('INDEX_PATH')) define('INDEX_PATH', $dominio);

if (!defined('LOGIN_PATH')) define('LOGIN_PATH', MODULE_APP_SERVER.'sesion/login.php/');
// if (!defined('JS_PATH')) define('JS_PATH', ASSETS_PATH.'cooservipress/js/');
//Ruta de carpeta para documentos
if (!defined('DOCUMENTS_PATH')) define('DOCUMENTS_PATH', ROOT_PATH.'documents/');
if (!defined('DOCUMENTS_SERVER')) define('DOCUMENTS_SERVER', DOMAIN_PATH.'documents/');
if (!defined('notFound')) define('notFound',$directorioNoFoundImage);

//Variables globales
if (!defined('DOCUMENTS_PATH')) define('DOCUMENTS_PATH', ROOT_PATH.'documents/');

if (!defined('ERP')) define('ERP', '/../documents/produit/258/258.jpg');


?>
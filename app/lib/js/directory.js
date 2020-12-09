//importante ROOT_PATH debe contener siempre al final el nombre del directorio principal donde
//esta almacenado el proyecto

//configuracion en ambiente local:
var app = "aes";
var dominio = "http://merca2.cf/";
//var dominio = "http://localhost/credito/";
var dominio_server = "http://merca2.cf/";

//rutas adjuntas :
var routeAppMobile = '';
var routeAppPlatform = dominio + '/resources/views/modules/';
var routeApp = dominio +'/app/routes.php';
var routeAppWebsite = '';


//export
function routesAppPlatform() {
    return routeAppPlatform;
}

function routeRequest() {
    return routeApp;
}

function url(){
    return dominio_server;
}


function routesAppMobile() {
    return routeAppMobile;
}

function routesAppWebsite() {
    return routeAppWebsite;
}
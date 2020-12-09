<?php
require_once(CONTROLLERS_PATH."tercerosController.php"); 
require_once(CONTROLLERS_PATH."categoriasController.php"); 
require_once(CONTROLLERS_PATH."productosController.php"); 
require_once(CONTROLLERS_PATH."sesionController.php"); 
require_once(CONTROLLERS_PATH."pedidosController.php"); 
class route{
    public  function handlerRequest($routeRequest){
        switch ($routeRequest['controller']) {

            case 'sesionController':
                $controller = new sesionController();
                return $controller->handlerController($routeRequest);
            break;
            case 'productosController':
                $controller = new productosController();
                return $controller->handlerController($routeRequest);
            break;
            case 'categoriasController':
                
                $controller = new categoriasController();
                return  $controller->handlerController($routeRequest);
            break;

            case 'tercerosController':
                
                $controller = new tercerosController();
                return  $controller->handlerController($routeRequest);
            break;

            case 'pedidosController':
                
                $controller = new pedidosController();
                return  $controller->handlerController($routeRequest);
            break;
        }
    }
    public  function handlerRedirect($routeView){
        echo  "<script>window.location.replace('".$routeView."');</script> ";
    }
}
?>
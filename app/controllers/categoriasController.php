<?php
require_once(SERVICES_PATH . "categoriasServices.php");
require_once(MODEL_PATH . "entity/categorias.php");
class categoriasController
{
    

    public  function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {

            case 'listadocategorias':
                return $this->listadocategorias($routeRequest);
                break;
        }
    }
   
   

    public  function listadocategorias($routeRequest)
    {
       
       $categoriaServiceObj = new categoriasServices();
       return $categoriaServiceObj->categoriasSubFindAll();
    }

    
}

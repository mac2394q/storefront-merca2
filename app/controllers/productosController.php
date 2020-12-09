<?php
require_once(SERVICES_PATH . "productosServices.php");
require_once(MODEL_PATH . "entity/producto.php");
class productosController
{
    

    public  function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {

            case 'listadoCategoriasProductos':
                return $this->listadoCategoriasProductos($routeRequest);
                break;
            case 'listadoCategoriasProductosBusqueda':
                    return $this->listadoCategoriasProductosBusqueda($routeRequest);
                    break;
            case 'buscarProductoId':
                    return $this->buscarProductoId($routeRequest);
                    break;
        }
    }
   
   

    public  function listadoCategoriasProductos($routeRequest)
    {
       $rowid= $routeRequest['rowid'];
       $limit= $routeRequest['limit'];
       $productosServiceObj = new productosServices();
       return $productosServiceObj->productosCategoriasFindAll($rowid,$limit);
    }

    public  function listadoCategoriasProductosBusqueda($routeRequest)
    {
       $field= $routeRequest['field'];
       $rowid= $routeRequest['rowid'];
       $limit= $routeRequest['limit'];
       $productosServiceObj = new productosServices();
       return $productosServiceObj->productosCategoriasFindAllSearch($field,$rowid,$limit);
    }


    public  function buscarProductoId($routeRequest)
    {
       $rowid= $routeRequest['rowid'];
       $entityProducto = new producto();
       $entityProducto->setCustom($rowid);
       $productosServiceObj = new productosServices();
       return $productosServiceObj->productosBuscarId($entityProducto);
    }

    
}

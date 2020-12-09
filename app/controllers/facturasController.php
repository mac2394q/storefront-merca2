<?php
require_once(SERVICES_PATH . "tercerosServices.php");
require_once(MODEL_PATH . "entity/terceros.php");
class tercerosController
{

    public static function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {
            case 'registrarTerceros':
                return tercerosController::registrarTerceros($routeRequest);
                break;

            case 'listadoTerceros':
                return tercerosController::listadoTerceros($routeRequest);
                break;

            case 'listadoAsignadosTercero':
                return tercerosController::listadoAsignadosTercero($routeRequest);
                break;

            case 'listadoAsignadosTercero':
                return tercerosController::listadoAsignadosTercero($routeRequest);
                break;

            case 'asignarTerceroEmpresario':
                return tercerosController::asignarTerceroEmpresario($routeRequest);
                break;
            case 'desasignarTerceroEmpresario':
                 
                return tercerosController::desasignarTerceroEmpresario($routeRequest);
                break;
            
        }
    }

    public static function registrarTerceros($routeRequest)
    {
       
        $modelTerceros = new terceros();
        $modelTerceros->__constructComplete(
            $routeRequest['rowid'],
            $routeRequest['nom'],
            $routeRequest['name_alias'],
            $routeRequest['parent'],
            $routeRequest['status'],
            $routeRequest['code_client'],
            $routeRequest['address'],
            $routeRequest['zipPhone'],
            $routeRequest['townCity'],
            $routeRequest['fk_departement'],
            $routeRequest['fk_pays'],
            $routeRequest['phone'],
            $routeRequest['email'],
            $routeRequest['siren'],
            $routeRequest['siret'],
            $routeRequest['client']
        );
        return tercerosServices::registrarTerceros($modelTerceros);
    }

    public static function listadoTerceros($routeRequest)
    {
       return tercerosServices::listadoTerceros($routeRequest['filter'],$routeRequest['debug']);
    }

    public static function listadoAsignadosTercero($routeRequest)
    {
        // echo "<pre>"; 
        // print_r($routeRequest);
        // echo "</pre>";
        $modelTerceros = new terceros();
        $modelTerceros->setCustom($routeRequest['id']);
        // echo "<pre>"; 
        // print_r( $modelTercero);
        // echo "</pre>";
        return tercerosServices::listadoAsignadosTercero($routeRequest['parent'],$modelTerceros,$routeRequest['debug']);
    }

    public static function asignarTerceroEmpresario($routeRequest){

        $modelEntity = new terceros();
        $modelEntity->setRowid($routeRequest['idEntity']);
        $modelEntitySigneTo = new terceros();
        $modelEntitySigneTo->setRowid($routeRequest['idEntitySigne']);
        return tercerosServices:: asignarTercero($modelEntity,$modelEntitySigneTo);

    }

    public static function desasignarTerceroEmpresario($routeRequest){
        $modelEntity = new terceros();
        $modelEntity->setRowid($_POST['idEntity']);
        $modelEntitySigneTo = new terceros();
        $modelEntitySigneTo->setRowid($routeRequest['idEntitySigne']);
        return tercerosServices:: asignarTercero($modelEntity,$modelEntitySigneTo);
    }
}

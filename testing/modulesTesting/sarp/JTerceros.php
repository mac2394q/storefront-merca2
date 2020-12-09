<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/terceros.php"); 
require_once(MODEL_PATH."tercerosModel.php"); 
require_once(CONTROLLERS_PATH."routeController.php"); 
 class JTerceros
 {
     public static function registrarTerceros(){

        $_POST['controller'] ='tercerosController';
        $_POST['method']='registrarTerceros';

        $_POST['rowid']=941;
        $_POST['nom']='1miguel angel claros';
        $_POST['name_alias']='Cliente';
        $_POST['parent']=0;
        $_POST['status']=1;
        $_POST['code_client']='CU202005-01';
        $_POST['address']='Direccion Barrio Marandua cll 25c 23-28';
        $_POST['zipPhone']='+57 305 350 8110';
        $_POST['townCity']='Tulua - Valle del cauca';
        $_POST['fk_departement']=1015;
        $_POST['fk_pays']=75;
        $_POST['phone']='+57 305 350 8110';
        $_POST['email']='mac2394q@gmail.com';
        $_POST['siren']=1;
        $_POST['siret']='123456789';
        $_POST['client']='NIT';
        
        return  route::handlerRequest($_POST);
     }

     public static function listadoTerceros(){

        $_POST['controller'] ='tercerosController';
        $_POST['method']='listadoTerceros';
        $_POST['filter']='DESC';
        $_POST['debug']=true;
        return route::handlerRequest($_POST);
        
     }

     public static function listadoAsignadosTercero(){

        $_POST['controller'] ='tercerosController';
        $_POST['method']='listadoAsignadosTercero';
        $_POST['id']=598;
        $_POST['parent']='parent';
        $_POST['debug']=true;
        return  route::handlerRequest($_POST);
        
     }

     public static function asignarTerceroEmpresario(){
        $_POST['controller'] ='tercerosController';
        $_POST['method']='asignarTerceroEmpresario';
        $_POST['idEntity']=598;
        $_POST['idEntitySigne']=648;
        $_POST['debug']=true;
        route::handlerRequest($_POST);
     }

     public static function desasignarTerceroEmpresario(){
        $_POST['controller'] ='tercerosController';
        $_POST['method']='desasignarTerceroEmpresario';
        $_POST['idEntity']=0;
        $_POST['idEntitySigne']=648;
        
        return  route::handlerRequest($_POST);
     }

  
  
    
 }

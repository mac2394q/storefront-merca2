<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(SERVICES_PATH ."tercerosServices.php");
require_once(SERVICES_PATH ."sesionServices.php");
require_once(MODEL_PATH."entity/terceros.php"); 
require_once(MODEL_PATH."tercerosModel.php"); 
require_once(MODEL_PATH."sesionModel.php"); 
require_once(MODEL_PATH."entity/sesion.php"); 
require_once(SERVICES_PATH . "sesionServices.php");
require_once(API_PATH . "adapters/ITercerosSesionAdapter.php");
class tercerosSesionAdapter implements ITercerosSesionAdapter{
    public function registrarAfiliadoSesion($routeRequest){
        /*Model */
        $modelSesion = new sesionModel();
        $modelTerceros = new tercerosModel();
        /*Services */
        $objSesion= new sesionServices();
        $objTerceros = new tercerosServices();
        $objService = new sesionServices();
        /* Entity's*/
        $entitySesion = new sesion();
        $entityTerceros = new terceros();
        $entityTerceros->__constructComplete(
            null,
            $routeRequest['nombre'],
            'CLIENTE MERCA2',
            $routeRequest['codigo'],
            1,
            $this->generarCodigoAfiliado($routeRequest['identificacion']),
            $routeRequest['direccion'],
            $routeRequest['telefono'],
            $routeRequest['ciudad'],
            1101,
            70,
            $routeRequest['telefono2'],
            $routeRequest['email'],
            '',
            $routeRequest['identificacion'],
            ''
        );
        $entitySesion->__constructComplete(
            null,
            $routeRequest['email'],
            $routeRequest['clave'],
            $routeRequest['nombre'],
            $routeRequest['email'],
            null,
            1
        );
        print_r($entitySesion);
        $validacionCC = $objTerceros->validarRowCC($entityTerceros);
        $validacionEmail = $objTerceros->validarRowMail($entityTerceros);
        
        if(count($validacionCC) > 0 ){
            return array(4,"<div class='alert alert-danger mb-3 text-white'>El documento de identificacion ya existe registrado en nuestra plataforma </div>");
        }elseif(count($validacionEmail) > 0){
            return array(3,"<div class='alert alert-danger mb-3 text-white'>EL correo electronico ya existe registrado en nuestra plataforma</div>");
        }else{
            
            $objTerceros->registrarTerceros($entityTerceros); 
            $entitySesion->setfk_soc($objTerceros->lastRowId()[0]['lastidrow']);
            $entitySesion->setrowid($objTerceros->lastRowId()[0]['lastidrow']);
            $objSesion->crearSesion($entitySesion);
            
            return array(2,"<div class='alert alert-success mb-3 text-white'>Afiliado registrado satisfactoriamente ,Revise tu correo acabamos de enviar un confirmacion de registro</div> ",$objTerceros->lastRowId()[0]['lastidrow'],$entityTerceros,$entitySesion);
        }
        
    }
    
    public function retornarObjTercero($rowidSesion){
        $entityTerceros = new terceros();
        $modelTerceros = new tercerosModel();
        $entityTerceros->setcustom($rowidSesion);
        $objTerceros = $modelTerceros->findByCustom('rowid',$entityTerceros);
       
        return $objTerceros = $modelTerceros->arrayOfModelTerceros($objTerceros);
    }
    public function retornarObjSesion($rowidSesion){
        $modelSesion = new sesionModel();
        $entitySesion = new sesion();
        $entitySesion->setcustom($rowidSesion);
        return  $modelSesion-> findByCustom('fk_soc',$entitySesion);
    }
    
    public function generarCodigoAfiliado($identificacion){
        $tamanoIdentifacion =strlen($identificacion);
        $codigo = substr($identificacion,intval($tamanoIdentifacion)-5,intval($tamanoIdentifacion));
        return $codigo;
    }
    
  
}
?>
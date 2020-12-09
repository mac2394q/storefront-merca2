<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."sesionModel.php"); 
class sesionServices{

    
    public function cerrarSesion(){
        $modelSesion = new sesionModel();
        return $modelSesion->cerrarSesion();
    }

    public function lastRowId(){
        $modelSesion = new sesionModel();
        return $modelSesion->lastRowId();
    }

    public function validarSesion($entitySesion){
        $modelSesion = new sesionModel();
        $arrayResulSet = $modelSesion->iniciarSesion($entitySesion);
        if(count($arrayResulSet) > 0 ){
            return $modelSesion->objectOfModelSesion($arrayResulSet);
        }else{
            return false;
        }
    }

    public function crearSesion($entitySesion){
        $modelSesion = new sesionModel();
        return $modelSesion->saveCustom($entitySesion);
       
    }
    
}
<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/terceros.php"); 
require_once(MODEL_PATH."tercerosModel.php"); 

class tercerosService{

    public static function registrarTerceros($model){
        $datasourceObj = new datasourceApi();
        $modelTerceros =new tercerosModel();
        return $modelTerceros->saveCustom($model);
         
    }

    public static function obtenerTerceroId($model){
        $modelTerceros =new tercerosModel();
        return $modelTerceros ->findById($model,true);
    }

    public static function obtenerTerceroCustom($field,$modelTerceros,$debug){
        $modelTerceros =new tercerosModel();
        return $modelTerceros ->findByCustom($field,$modelTerceros,$debug);
    }

    public static function listadoFacturasTercero($id){

    }

    public static function listadoTerceros($filter = 'ASC',$debug = false){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> arrayOfModelList($modelTerceros ->listOfTable());
    }

    public static function asignarTercero($modelEntity,$modelEntitySigneTo){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> updateCustomSigne($modelEntity,$modelEntitySigneTo);

    }

    public static function desasignarTercero($modelEntity,$modelEntitySigneTo){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> updateCustomUnsigne($modelEntity,$modelEntitySigneTo);

    }

    public static function modificarPerfilTercero($model){

    }

    public static function subirFotoPerfil($file){

    }

    public static function listadoAsignadosTercero($id){

    }




}








?>
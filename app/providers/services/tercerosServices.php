<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/terceros.php"); 
require_once(MODEL_PATH."tercerosModel.php"); 


class tercerosServices{

    public  function registrarTerceros($model){
        
        $modelTerceros =new tercerosModel();
        return $modelTerceros->saveCustom($model);
         
    }

    public  function obtenerTerceroId($model){
        $modelTerceros =new tercerosModel();
        return $modelTerceros ->findById($model,true);
    }

    public  function obtenerTipoPerfil($model){
        $modelTerceros =new tercerosModel();
        return $modelTerceros ->tipoPerfil($model);
    }

    public  function obtenerTerceroCustom($field,$modelTerceros,$debug){
        $modelTerceros =new tercerosModel();
        return $modelTerceros ->findByCustom($field,$modelTerceros,$debug);
    }

    // public  function listadoFacturasTercero($id){
    //     $tfa = new tercerosFacturasAdapter();
    //     return $tfa->listFacturasTercerosById($id);

    //}

    public  function listadoTerceros($filter = 'ASC',$debug = false){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> arrayOfModelList($modelTerceros ->listOfTable('rowid',$filter ,$debug ));
    }

    public  function asignarTercero($modelEntity,$modelEntitySigneTo){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> updateCustomSigne($modelEntity,$modelEntitySigneTo);

    }


    public  function modificarPerfilTercero($entity){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> updateEntity($entity);

    }

    public  function lastRowId(){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> lastRowId();
    }
    
    public  function validarRowCC($entityTerceros){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> validarRowCC($entityTerceros);
    }

    public  function validarRowMail($entityTerceros){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> validarRowMail($entityTerceros);
    }

    public  function subirFotoPerfil($file){

    }

    public  function listadoAsignadosTercero($field,$entity,$debug = false){
        $modelTerceros =new tercerosModel();
        return $modelTerceros -> arrayOfModelList($modelTerceros ->findByCustomAll($field,$entity,$debug));

    }


}








?>
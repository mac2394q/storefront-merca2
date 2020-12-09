<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/facturas.php"); 
require_once(MODEL_PATH."facturasModel.php"); 

class facturasServices{

    public static function listadofacturasTercero($entity,$debug){
        $facturasModel =new facturasModel();
        return $facturasModel  -> arrayOfModelList($facturasModel  ->findByCustomAll('rowid',$entity ,$debug ));
    }




}
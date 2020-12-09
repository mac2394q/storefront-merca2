<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/terceros.php"); 
require_once(MODEL_PATH."tercerosModel.php"); 
 class JDatasource{
  
    public static function initDatasource(){
        $datasourceObj = new datasourceApi();
        return $datasourceObj->initDataSource();
    }
    public static function __constructInit(){
        $datasourceObj = new datasourceApi();
        return $datasourceObj->__constructInit("mysql");
    }
    public static function debugQuerySql(){
        $datasourceObj = new datasourceApi();
        return $datasourceObj->debugQuerySql("INSERT INTO tableName ",true);
    }
    public static function queryConstructContextC(){
        
        $datasourceObj = new datasourceApi();
        $modelTerceros = new terceros();
        
      
        $modelTerceros->__constructComplete(
            941,
            '1miguel angel claros',
            'Cliente',
            0,
            1,
            'CU202005-01',
            'Direccion Barrio Marandua cll 25c 23-28',
            '+57 305 350 8110',
            'Tulua - Valle del cauca',
            1015,
            75,
            '+57 305 350 8110',
            'mac2394q@gmail.com',
            1,
            '123456789',
            'NIT'
        );
        $pdoObj=$datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $Query=$datasourceObj->queryConstruct($modelTerceros,$modelTerceros->attributesTable(),$modelTerceros->getTableName(),'C',true);
        return $datasourceObj->executeUpdate($Query,$pdoObj,null,true);
    }

    public static function queryExecutaSaveCustom(){
        
        $datasourceObj = new datasourceApi();
        $entityTerceros = new terceros();
        $entityTerceros->__constructComplete(
            942,
            '2miguel angel claros',
            'Cliente',
            942,
            1,
            'CU202005-02',
            'Direccion Barrio Marandua cll 25c 23-28',
            '+57 305 350 8110',
            'Tulua - Valle del cauca',
            1015,
            75,
            '+57 305 350 8110',
            'mac2394q@gmail.com',
            1,
            '123456789',
            'NIT'
        );
        $modelTerceros = new tercerosModel();
        
        return $modelTerceros->saveCustom($entityTerceros);
    }

    public static function queryExecutaSaveCustomName(){
        
        $datasourceObj = new datasourceApi();
        $entityTerceros = new terceros();
        $entityTerceros->__constructComplete(
            943,
            '4miguel angel claros',
            'Cliente',
            943,
            1,
            'CU202005-03',
            'Direccion Barrio Marandua cll 25c 23-28',
            '+57 305 350 8110',
            'Tulua - Valle del cauca',
            1015,
            75,
            '+57 305 350 8110',
            'mac2394q@gmail.com',
            1,
            '123456789',
            'NIT'
        );
        $modelTerceros = new tercerosModel();
        return $modelTerceros->saveCustomBindingParameterName($entityTerceros);
    }


    public static function queryExecutaSaveCustomParameter(){
        
        $datasourceObj = new datasourceApi();
        $entityTerceros = new terceros();
        $entityTerceros->__constructComplete(
            944,
            '4miguel angel claros',
            'Cliente',
            941,
            0,
            1,
            'CU202005-04',
            'Direccion Barrio Marandua cll 25c 23-28',
            '+57 305 350 8110',
            'Tulua - Valle del cauca',
            1015,
            75,
            '+57 305 350 8110',
            'mac2394q@gmail.com',
            1,
            '123456789',
            'NIT'
        );
        $modelTerceros = new tercerosModel();
        return $modelTerceros->saveCustomBindingParameterSigne($entityTerceros);
    }
 }
?>
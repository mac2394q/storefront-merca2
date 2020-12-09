<?php
require_once(DATABASE_PATH."datasourceApi.php"); 

class facturasModel
{

    public function findById($entity,$debug){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getTableName();
        $idName = $entity->attributesTable()[0][0];
        $sql = "SELECT * FROM ".$table." WHERE ".$idName." = ".$entity->toarrayEntity()[0]."LIMIT 1";
      
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function  findByCustomAll($field,$entity,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getTableName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entity->getCustom()." ";

        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function saveCustom($entity)
    {
        
        $datasourceObj = new datasourceApi();
        $table = $entity->getTableName();
        $sql = "
        INSERT INTO ". $table . "(rowid, ref, ref_ext, ref_client, type, fk_soc, datec, datef, date_valid, paye, tva, total, total_ttc, fk_statut, module_source, fk_account, fk_cond_reglement, fk_mode_reglement, date_lim_reglement, note_private, note_public, multicurrency_total_ht, multicurrency_total_tva, multicurrency_total_ttc) 
        VALUES (
            null
            :ref,
            :ref_ext ,
            :ref_client,
            :type ,
            :fk_soc,
            :datec ,
            :datef ,
            :date_valid, 
            :paye ,
            :tva ,
            :total ,
            :total_ttc ,
            :fk_statut ,
            :module_source ,
            :fk_account ,
            :fk_cond_reglement ,
            :fk_mode_reglement,
            :date_lim_reglement ,
            :note_private,
            :note_public ,
            :multicurrency_total_ht ,
            :multicurrency_total_tva ,
            :multicurrency_total_ttc ,
            )";
            $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
          
        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection, 
            array(
                ':ref'=>$entity->getRef(),
                ':ref_ext'=>$entity->getRef_ext(),
                ':ref_client'=>$entity->getRef_client(),
                ':type'=>$entity->getType(),
                ':fk_soc'=>$entity->getFk_soc(),
                ':datec '=>$entity-> getDatec(),
                ':datef'=>$entity->getDatef(),
                ':date_valid'=>$entity-> getDate_valid(),
                ':paye'=>$entity->getPaye() ,
                ':tva'=>$entity->getTva() ,
                ':total'=>$entity->getTotal(),
                ':total_ttc'=>$entity->getTotal_ttc(),
                ':fk_statut '=>$entity->getfk_statut(),
                ':module_source'=>$entity->getModule_source(),
                ':fk_account'=>$entity->getFk_account(),
                ':fk_cond_reglement'=>$entity->getFk_cond_reglement(),
                ':fk_mode_reglement'=>$entity->getFk_mode_reglement(),
                ':date_lim_reglement'=>$entity->getDate_lim_reglement(),
                ':note_private'=>$entity->getNote_private() ,
                ':note_public'=>$entity->getNote_public(),
                ':multicurrency_total_ht'=>$entity->getMulticurrency_total_ht() ,
                ':multicurrency_total_tva'=>$entity->getMulticurrency_total_ht() ,
                ':multicurrency_total_ttc'=>$entity->getMulticurrency_total_ttc()
            ),
            true);
    }

    // public function arrayOfModelList($resultSet){
    //     if(count($resultSet)>0){
    //         $arrayModel=array();
    //         foreach ($resultSet as $key => $value) {
    //             $objModel = new facturas();
    //             $objModel-> __constructComplete(
    //                 $resultSet[$key]["rowid"],
    //                 $resultSet[$key]["ref"],
    //                 $resultSet[$key]["ref_ext"],
    //                 $resultSet[$key]["ref_client"],
    //                 $resultSet[$key]["type"],
    //                 $resultSet[$key]["fk_soc"],
    //                 $resultSet[$key]["datec"],
    //                 $resultSet[$key]["datef"],
    //                 $resultSet[$key]["date_valid"], 
    //                 $resultSet[$key]["paye"],
    //                 $resultSet[$key]["tva"],
    //                 $resultSet[$key]["total"],
    //                 $resultSet[$key]["total_ttc"],
    //                 $resultSet[$key]["fk_statut"],
    //                 $resultSet[$key]["module_source"],
    //                 $resultSet[$key]["fk_account"],
    //                 $resultSet[$key]["fk_cond_reglement"],
    //                 $resultSet[$key]["fk_mode_reglement"],
    //                 $resultSet[$key]["date_lim_reglement"],
    //                 $resultSet[$key]["note_private"],
    //                 $resultSet[$key]["note_public"],
    //                 $resultSet[$key]["multicurrency_total_ht"],
    //                 $resultSet[$key]["multicurrency_total_tva"],
    //                 $resultSet[$key]["multicurrency_total_ttc"],
    //             );
    //             array_push($arrayModel,$objModel);
    //         }

    //         return $arrayModel;
    //     }else{
    //         return false;
    //     }
    // }

    public function arrayFacturaDetList($arrayFactura){
        // if(count($arrayFactura)>0){
            
        //     foreach ($arrayFactura as $key => $value) {
        //         $arrayFactura[$key]->setCustom($arrayFactura[$key]->getRowid());
        //         $arrayFactura[$key]->$this->findByCustomAll('fk_facture',$arrayFactura[$key],true);
                
        //         // $objModel-> __constructComplete(
        //         //     $resultSet[$key]["rowid"],
        //         //     $resultSet[$key]["ref"],
        //         //     $resultSet[$key]["ref_ext"],
        //         //     $resultSet[$key]["ref_client"],
        //         //     $resultSet[$key]["type"],
        //         //     $resultSet[$key]["fk_soc"],
        //         //     $resultSet[$key]["datec"],
        //         //     $resultSet[$key]["datef"],
        //         //     $resultSet[$key]["date_valid"], 
        //         //     $resultSet[$key]["paye"],
        //         //     $resultSet[$key]["tva"],
        //         //     $resultSet[$key]["total"],
        //         //     $resultSet[$key]["total_ttc"],
        //         //     $resultSet[$key]["fk_statut"],
        //         //     $resultSet[$key]["module_source"],
        //         //     $resultSet[$key]["fk_account"],
        //         //     $resultSet[$key]["fk_cond_reglement"],
        //         //     $resultSet[$key]["fk_mode_reglement"],
        //         //     $resultSet[$key]["date_lim_reglement"],
        //         //     $resultSet[$key]["note_private"],
        //         //     $resultSet[$key]["note_public"],
        //         //     $resultSet[$key]["multicurrency_total_ht"],
        //         //     $resultSet[$key]["multicurrency_total_tva"],
        //         //     $resultSet[$key]["multicurrency_total_ttc"],
        //         // );
        //         // array_push($arrayModel,$objModel);
        //     }

        //     return $arrayModel;
        // }else{
        //     return false;
        // }
    }

    public function updateCustomField($modelEntity,$modelEntitySigneTo)
    {
        
        $datasourceObj = new datasourceApi();
        $table = $modelEntity->getTableName();
        
        $sql = "=>UPDATE ". $table . " SET parent = :rowid where rowid = :parent";
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
          
        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection, 
            array(
            ':parent' => $modelEntitySigneTo->getRowid(),
            ':rowid' => $modelEntity->getRowid(),
            ),
            true);
    }

    



}
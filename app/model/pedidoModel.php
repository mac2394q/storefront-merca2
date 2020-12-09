<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
class pedidoModel
{
    public function findById($entity,$debug){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getTableName();
        $idName = $entity->attributesTable()[0][0];
        $sql = "SELECT * FROM ".$table." WHERE ".$idName." = ".$entity->toarrayEntity()[0]." LIMIT 1";
      
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
    public function  pedidosActuales($entity,$debug=false){
       
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT * FROM `llx_commande` WHERE date_commande = CURDATE() and fk_soc = ".$entity->getCustom()." ORDER BY `llx_commande`.`date_valid` DESC";
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }


    public function  pedidosMes($entity,$debug=false){
       
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT * FROM `llx_commande` 
                         WHERE 
                         fk_soc = ".$entity->getCustom()." AND 
                         YEAR(date_valid) = YEAR(CURRENT_DATE()) AND 
                         MONTH(date_valid) = MONTH(CURRENT_DATE()) 
                         ORDER BY `llx_commande`.`date_valid` DESC";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function  findByCustom($field,$entityProductos,$debug = false){
      
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entityProductos->getName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entityProductos->getCustom()." LIMIT 1";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }


    public function  findByCustomAll($field,$entity,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entity->getCustom()." ";
      
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
    public function consecutivoPedido($debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT MAX(CAST(SUBSTRING(ref FROM 8) AS SIGNED)) as max FROM llx_commande WHERE ref LIKE 'CO____-%' AND entity IN (1) ";
   
        $consecutivo = $datasourceObj->executeQuery($sql,$objConection,null,$debug);
       
        $sec = 'CO'.date("y").date("m")."-00".(intval($consecutivo[0]['max'])+1);
        return $sec;
    }
    public function saveCustom($entity)
    {
        
        $datasourceObj = new datasourceApi();
        $table = $entity->getName();
        // $sql = "
        // INSERT INTO  llx_commande (ref,fk_soc,total_ht, total_ttc, fk_statut, fk_cond_reglement, fk_mode_reglement,fk_shipping_method, multicurrency_total_ht, multicurrency_total_ttc) 
        // VALUES (
        //     :ref,
        //     :fk_soc,
        //     :total_ht ,
        //     :total_ttc ,
        //     :fk_statut ,
        //     :fk_cond_reglement ,
        //     :fk_mode_reglement,
        //     :fk_shipping_method,
        //     :multicurrency_total_ht ,
        //     :multicurrency_total_ttc 
        //     )";
            $sql2 = "
        INSERT INTO  llx_commande (ref,fk_soc,total_ht, total_ttc, fk_statut, fk_cond_reglement, fk_mode_reglement,fk_shipping_method, multicurrency_total_ht, multicurrency_total_ttc,date_commande,date_livraison,fk_availability) 
        VALUES (
            '".$entity->getRef()."',
            ".$entity->getFk_soc().",
            ".$entity->getTotal_ht()." ,
            ".$entity->getTotal_ttc()." ,
            ".$entity->getfk_statut()." ,
            ".$entity->getFk_cond_reglement()." ,
            ".$entity->getFk_mode_reglement().",
            ".$entity->getFk_shipping_method().",
            ".$entity->getMulticurrency_total_ht() ." ,
            ".$entity->getMulticurrency_total_ttc()." ,
            NOW(),
            NOW(),
            1
            )";
   
            $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
          
        return $resultSet = $datasourceObj->executeUpdate(
            $sql2,
            $objConection, 
            array(
                ':ref'=>$entity->getRef(),           
                ':fk_soc'=>$entity->getFk_soc(),
                ':total_ht'=>$entity->getTotal_ht(),
                ':total_ttc'=>$entity->getTotal_ttc(),
                ':fk_statut '=>$entity->getfk_statut(),
                ':fk_cond_reglement'=>$entity->getFk_cond_reglement(),
                ':fk_mode_reglement'=>$entity->getFk_mode_reglement(),
                ':fk_shipping_method'=>$entity->getFk_shipping_method(),
                ':multicurrency_total_ht'=>$entity->getMulticurrency_total_ht() ,
                ':multicurrency_total_ttc'=>$entity->getMulticurrency_total_ttc()
            ),
            false);
    }
    public function arrayOfModelList($resultSet){
        if(count($resultSet)>0){
            $arrayModel=array();
            foreach ($resultSet as $key => $value) {
                $objModel = new pedidos();
                $objModel-> __constructComplete(
                    $resultSet[0]["rowid"],
                    $resultSet[0]["ref"],
                    $resultSet[0]["ref_ext"],
                    $resultSet[0]["ref_client"],
                    $resultSet[0]["fk_soc"],
                    $resultSet[0]["date_creation"],
                    $resultSet[0]["date_valid"],
                    $resultSet[0]["date_commande"],
                    $resultSet[0]["fk_statut"],
                    $resultSet[0]["tva"],
                    $resultSet[0]["total_ht"],

                    $resultSet[0]["total_ttc"],
                    $resultSet[0]["note_private"],
                    $resultSet[0]["note_public"],
                    $resultSet[0]["module_source"],
                    $resultSet[0]["facture"],
                    $resultSet[0]["fk_account"],
                    $resultSet[0]["fk_cond_reglement"],
                    $resultSet[0]["fk_mode_reglement"],
                    $resultSet[0]["date_livraison"],
                    $resultSet[0]["fk_shipping_method"],

                    $resultSet[0]["multicurrency_total_ht"],
                    $resultSet[0]["multicurrency_total_tva"],
                    $resultSet[0]["multicurrency_total_ttc"]
                );
                array_push($arrayModel,$objModel);
            }
            return $arrayModel;
        }else{
            return false;
        }
    }
    public function arrayOfModelListPedidos($resultSet){
        if(count($resultSet)>0){
            $arrayModel=array();
            foreach ($resultSet as $key => $value) {
                $objModel = new pedidos();
                $objModel-> __constructComplete(
                    $resultSet[$key]["rowid"],
                    $resultSet[$key]["ref"],
                    $resultSet[$key]["ref_ext"],
                    $resultSet[$key]["ref_client"],
                    $resultSet[$key]["fk_soc"],
                    $resultSet[$key]["date_creation"],
                    $resultSet[$key]["date_valid"],
                    $resultSet[$key]["date_commande"],
                    $resultSet[$key]["fk_statut"],
                    $resultSet[$key]["tva"],
                    $resultSet[$key]["total_ht"],

                    $resultSet[$key]["total_ttc"],
                    $resultSet[$key]["note_private"],
                    $resultSet[$key]["note_public"],
                    $resultSet[$key]["module_source"],
                    $resultSet[$key]["facture"],
                    $resultSet[$key]["fk_account"],
                    $resultSet[$key]["fk_cond_reglement"],
                    $resultSet[$key]["fk_mode_reglement"],
                    $resultSet[$key]["date_livraison"],
                    $resultSet[$key]["fk_shipping_method"],

                    $resultSet[$key]["multicurrency_total_ht"],
                    $resultSet[$key]["multicurrency_total_tva"],
                    $resultSet[$key]["multicurrency_total_ttc"]
                );
                array_push($arrayModel,$objModel);
            }
            return $arrayModel;
        }else{
            return false;
        }
    }

    


    function lastRowId(){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT (rowid)  as 'lastidrow' FROM `llx_commande` ORDER BY `llx_commande`.`rowid` DESC LIMIT 1";
       
        return $datasourceObj->executeQuery($sql,$objConection,null,false);
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

    public function objectOfModelPedido($resultSet){
      
        $objModel = new pedidos();
        $objModel-> __constructComplete(
                    $resultSet[0]["rowid"],
                    $resultSet[0]["ref"],
                    $resultSet[0]["ref_ext"],
                    $resultSet[0]["ref_client"],
                    $resultSet[0]["fk_soc"],
                    $resultSet[0]["date_creation"],
                    $resultSet[0]["date_valid"],
                    $resultSet[0]["date_commande"],
                    $resultSet[0]["fk_statut"],
                    $resultSet[0]["tva"],
                    $resultSet[0]["total_ht"],
                    $resultSet[0]["total_ttc"],
                    $resultSet[0]["note_private"],
                    $resultSet[0]["note_public"],
                    $resultSet[0]["module_source"],
                    $resultSet[0]["facture"],
                    $resultSet[0]["fk_account"],
                    $resultSet[0]["fk_cond_reglement"],
                    $resultSet[0]["fk_mode_reglement"],
                    $resultSet[0]["date_livraison"],
                    $resultSet[0]["fk_shipping_method"],
                    $resultSet[0]["multicurrency_total_ht"],
                    $resultSet[0]["multicurrency_total_tva"],
                    $resultSet[0]["multicurrency_total_ttc"]
                );
        
        return $objModel;

    }
    
    
}
<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
/**debugQuerySql
 * Description of terceros
 *
 * @author Priceleggan
 */
class tercerosModel
{

    public function saveCustom($modelTerceros)
    {
        
        $datasourceObj = new datasourceApi();
        $table = $modelTerceros->getTableName();
        $sql = "
        INSERT INTO " . $table . " (nom,name_alias,parent,status,code_client,address,zip,town,fk_departement,fk_pays,phone,email,siren,siret,client) 
        VALUES (
            :nom,
            :name_alias,
            :parent,
            :status,
            :code_client,
            :address,
            :zip,
            :town,
            :fk_departement,
            :fk_pays,
            :phone,
            :email,
            :siren,
            :siret,
            1
            )";
            $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
          
        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection, 
            array(
            ':nom' => $modelTerceros->getNom(),
            ':name_alias' => $modelTerceros->getName_alias(),
            ':parent' => $modelTerceros->getParent(),
            ':status' => $modelTerceros->getStatus(),
            ':code_client' => $modelTerceros->getCode_client(),
            ':address' => $modelTerceros->getAddress(),
            ':zip' => $modelTerceros->getZipPhone(),
            ':town' => $modelTerceros->getTownCity(),
            ':fk_departement' => $modelTerceros->getFk_departement(),
            ':fk_pays' => $modelTerceros->getFk_pays(),
            ':phone' => $modelTerceros->getPhone(),
            ':email' => $modelTerceros->getEmail(),
            ':siren' => $modelTerceros->getSiren(),
            ':siret' => $modelTerceros->getSiret()
            ),
            false);
    }

    public function saveCustomBindingParameterName($modelTerceros)
    {

        
        $datasourceObj = new datasourceApi();
        $sql = "INSERT INTO " . $modelTerceros->getTableName() . " VALUES (
        null,
        :nom,
        :name_alias,
        :parent,
        :status,
        :code_client,
        :address,
        :zip,
        :town,
        :fk_departement,
        :fk_pays,
        :phone,
        :email,
        :siren,
        :siret,
        :client
        )";
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        
        $beanConection = $objConection->prepare($sql);
        $beanConection->bindValue(':nom', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindValue(':name_alias', $modelTerceros->getName_alias(), PDO::PARAM_STR);
        $beanConection->bindValue(':parent', $modelTerceros->getParent(), PDO::PARAM_INT);
        $beanConection->bindValue(':status', $modelTerceros->getStatus(), PDO::PARAM_INT);
        $beanConection->bindValue(':code_client', $modelTerceros->getCode_client(), PDO::PARAM_STR);
        $beanConection->bindValue(':address', $modelTerceros->getAddress(), PDO::PARAM_STR);
        $beanConection->bindValue(':zip', $modelTerceros->getZipPhone(), PDO::PARAM_STR);
        $beanConection->bindValue(':town', $modelTerceros->getTownCity(), PDO::PARAM_STR);
        $beanConection->bindValue(':fk_departement', $modelTerceros->getFk_departement(), PDO::PARAM_INT);
        $beanConection->bindValue(':fk_pays', $modelTerceros->getFk_pays(), PDO::PARAM_INT);
        $beanConection->bindValue(':phone', $modelTerceros->getPhone(), PDO::PARAM_STR);
        $beanConection->bindValue(':email', $modelTerceros->getEmail(), PDO::PARAM_STR);
        $beanConection->bindValue(':siren', $modelTerceros->getSiren(), PDO::PARAM_STR);
        $beanConection->bindValue(':siret', $modelTerceros->getSiret(), PDO::PARAM_STR);
        $beanConection->bindValue(':client', $modelTerceros->getclient(), PDO::PARAM_INT);

        
    
        return $beanConection->execute();
    }

    public function saveCustomBindingParameterSigne($modelTerceros)
    {

        $datasourceObj = new datasourceApi();
        $sql = "INSERT INTO " . $modelTerceros->getTableName() . " VALUES (
        null,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?
        )";
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $beanConection = $objConection->prepare($sql);
        $beanConection->bindParam(1, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(2, $modelTerceros->getName_alias(), PDO::PARAM_STR);

        $beanConection->bindParam(3, $modelTerceros->getParent(), PDO::PARAM_INT);
        $beanConection->bindParam(4, $modelTerceros->getStatus(), PDO::PARAM_INT);
        $beanConection->bindParam(5, $modelTerceros->getCode_client(), PDO::PARAM_STR);
        $beanConection->bindParam(6, $modelTerceros->getAddress(), PDO::PARAM_STR);
        $beanConection->bindParam(7, $modelTerceros->getZipPhone(), PDO::PARAM_STR);
        $beanConection->bindParam(8, $modelTerceros->getTownCity(), PDO::PARAM_STR);
        $beanConection->bindParam(9, $modelTerceros->getFk_departement(), PDO::PARAM_INT);
        $beanConection->bindParam(10, $modelTerceros->getFk_pays(), PDO::PARAM_INT);
        $beanConection->bindParam(11, $modelTerceros->getPhone(), PDO::PARAM_STR);
        $beanConection->bindParam(12, $modelTerceros->getEmail(), PDO::PARAM_STR);
        $beanConection->bindParam(13, $modelTerceros->getSiren(), PDO::PARAM_STR);
        $beanConection->bindParam(14, $modelTerceros->getSiret(), PDO::PARAM_STR);
        $beanConection->bindParam(15, $modelTerceros->getclient(), PDO::PARAM_INT);
        return $beanConection->execute();
    }

    public function findById($modelTerceros,$debug){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $modelTerceros->getTableName();
        $idName = $modelTerceros->attributesTable()[0][0];
        $sql = "SELECT * FROM ".$table." WHERE ".$idName." = ".$modelTerceros->toarrayEntity()[0]." LIMIT 1";
        return $datasourceObj->executeQuery($sql,$objConection,null,true);
    }

    public function  findByCustom($field,$modelTerceros,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $modelTerceros->getTableName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$modelTerceros->getCustom()." LIMIT 1";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function  findByCustomAll($field,$modelTerceros,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $modelTerceros->getTableName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$modelTerceros->getCustom()." ";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function  listOfTable($field,$filter = 'ASC',$debug =false){
        $datasourceObj = new datasourceApi();
        $entity = new terceros();
        $table = $entity->getTableName();
        $sql = "SELECT * FROM ".$table." ORDER BY ".$field." ".$filter;
       
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,$debug);
    }

    

    public function arrayOfModelList($resultSet){
        if(count($resultSet)>0){
            $arrayModel=array();
            foreach ($resultSet as $key => $value) {
                $objModel = new terceros();
                $objModel-> __constructComplete(
                    $resultSet[$key]["rowid"],
                    $resultSet[$key]["nom"],
                    $resultSet[$key]["name_alias"],
                    $resultSet[$key]["parent"],
                    $resultSet[$key]["status" ],
                    $resultSet[$key]["code_client"],
                    $resultSet[$key]["address" ],
                    $resultSet[$key]["zipPhone"],
                    $resultSet[$key]["townCity"],
                    $resultSet[$key]["fk_departement"],
                    $resultSet[$key]["fk_pays" ],
                    $resultSet[$key]["phone" ],
                    $resultSet[$key]["email" ],
                    $resultSet[$key]["siren" ],
                    $resultSet[$key]["siret"],
                    $resultSet[$key]["client"]
                );
                array_push($arrayModel,$objModel);
            }

            return $arrayModel;
        }else{
            return false;
        }
    }

    public function arrayOfModelTerceros($resultSet){
      
        $objModel = new terceros();
        $objModel-> __constructComplete(
                    $resultSet[0]["rowid"],
                    $resultSet[0]["nom"],
                    $resultSet[0]["name_alias"],
                    $resultSet[0]["parent"],
                    $resultSet[0]["status" ],
                    $resultSet[0]["code_client"],
                    $resultSet[0]["address" ],
                    $resultSet[0]["zip"],
                    $resultSet[0]["town"],
                    $resultSet[0]["fk_departement"],
                    $resultSet[0]["fk_pays" ],
                    $resultSet[0]["phone" ],
                    $resultSet[0]["email" ],
                    $resultSet[0]["siren" ],
                    $resultSet[0]["siret"], 
                    $resultSet[0]["client"]
                   
        );
        return $objModel;
    }

    public function updateCustomSigne($modelEntity,$modelEntitySigneTo)
    {
        
        $datasourceObj = new datasourceApi();
        $table = $modelEntity->getTableName();
        
        $sql = "UPDATE " . $table . " SET parent = :rowid where rowid = :parent";
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

    public function updateEntity($entity){
        $datasourceObj = new datasourceApi();
        $table = $entity->getTableName();
        $sql = "update " . $entity->getTableName() . " 
            set = :set,
            name_alias = :name_alias,
            parent = :parent,
            status = :status,
            code_client = :code_client,
            address = :address,
            zip = :zip,
            town = :town,
            fk_departement = :fk_departement,
            fk_pays = :fk_pays,
            phone = :phone,
            email = :email,
            siren = :siren,
            siret = :siret,
            client = :client
            ";
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection, 
            array(
                ":rowid" => $entity->getRowid(),
                ":nom" => $entity->getNom(),
                ":name_alias" => $entity->getName_alias(),
                ":parent" => $entity->getParent(),
                ":status" => $entity->getStatus(),
                ":code_client" => $entity->getCode_client(),
                ":address" => $entity->getAddress(),
                ":zipPhone" => $entity->getZipPhone(),
                ":townCity" => $entity->getTownCity(),
                ":fk_departement" => $entity->getFk_departement(),
                ":fk_pays" => $entity->getFk_pays(),
                ":phone" => $entity->getPhone(),
                ":email" => $entity->getEmail(),
                ":siren" => $entity->getSiren(),
                ":siret" => $entity->getSiret(),
                ":client" => $entity->getclient()
            ),
            false);

    }

    public function validarRowCC($entity){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = 'SELECT llx_societe.siret 
                FROM `llx_societe` 
                WHERE llx_societe.siret = "'.$entity->getSiret().' " limit 1'  ;

        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,false);
    }

    public function validarRowMail($entity){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = 'SELECT llx_societe.email 
                FROM `llx_societe` 
                WHERE llx_societe.email = "'.$entity->getEmail().'" limit 1'  ;
                
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,false);
    }

    function lastRowId(){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT (rowid)  as 'lastidrow' FROM `llx_societe` ORDER BY `llx_societe`.`rowid` DESC LIMIT 1";
       
        return $datasourceObj->executeQuery($sql,$objConection,null,true);
    }


    function tipoPerfil($entity){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT * FROM `llx_categorie_societe` 
                         join llx_societe on(llx_societe.rowid=llx_categorie_societe.fk_soc) 
                         where llx_societe.rowid =".$entity->getRowid() ;
       
        return $datasourceObj->executeQuery($sql,$objConection,null,true);
    }


}

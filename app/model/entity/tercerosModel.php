<?php

/**
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
        INSERT INTO " . $table . " (:rowid,nom,name_alias,parent,status,code_client,address,zip,town,fk_departement,fk_pays,phone,email,siren,siret,client) 
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
            :client
            )";
        return $resultSet = $datasourceObj->executeUpdate($sql, array(

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
            ':siret' => $modelTerceros->getSiret(),
            ':client' => $modelTerceros->getClient()
        ));
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
        $beanConection->bindParam(':nom', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':name_alias', $modelTerceros->getNom(), PDO::PARAM_STR);

        $beanConection->bindParam(':parent', $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(':status', $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(':code_client', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':address', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':zip', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':town', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':fk_departement', $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(':fk_pays', $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(':phone', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':email', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':siren', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':siret', $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(':client', $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->execute();
    }

    public function saveCustomBindingParameterSigne($modelTerceros)
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
        $beanConection->bindParam(1, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(2, $modelTerceros->getNom(), PDO::PARAM_STR);

        $beanConection->bindParam(3, $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(4, $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(5, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(6, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(7, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(8, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(9, $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(10, $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->bindParam(11, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(12, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(13, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(14, $modelTerceros->getNom(), PDO::PARAM_STR);
        $beanConection->bindParam(15, $modelTerceros->getNom(), PDO::PARAM_INT);
        $beanConection->execute();
    }
}

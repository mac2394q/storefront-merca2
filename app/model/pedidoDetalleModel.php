<?php
require_once(DATABASE_PATH . "datasourceApi.php");

class pedidoDetalleModel
{



    public function consecutivoPedido($debug = false)
    {
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());

        $sql = "SELECT MAX(CAST(SUBSTRING(ref FROM 8) AS SIGNED)) as max FROM llx_commande WHERE ref LIKE 'CO____-%' AND entity IN (1) ";
        $consecutivo = $datasourceObj->executeQuery($sql, $objConection, null, $debug);
        $sec = 'CO' . date("y") . date("m") . "-00" . (intval($consecutivo) + 1);
        return $sec;
    }

    public function saveCustom($entity)
    {

        $datasourceObj = new datasourceApi();

        $sql = "
        INSERT INTO llx_commandedet( `fk_commande`,  `fk_product`,  `description`,   `qty`,  `price`,
        `subprice`, `total_ht`, `total_ttc`,`multicurrency_subprice`, `multicurrency_total_ht`, 
        `multicurrency_total_ttc`)
        VALUES (
            :fk_commande, 
            :fk_product,
            :description,
            :qty, 
            :price, 
            :subprice,
            :total_ht, 
            :total_ttc,
            :multicurrency_subprice, 
            :multicurrency_total_ht,
            :multicurrency_total_ttc
            );";
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());

        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection,
            array(
                ':fk_commande' => $entity->getFk_commande(),
                ':fk_product' => $entity->getFk_product(),
                ':description' => $entity->getDescription(),
                ':qty' => $entity->getQty(),
                ':price' => $entity->getPrice(),
                ':subprice' => $entity->getSubprice(),
                ':total_ht' => $entity->getTotal_ht(),
                ':total_ttc' => $entity->getTotal_ttc(),
                ':multicurrency_subprice' => $entity->getMulticurrency_subprice(),
                ':multicurrency_total_ht' => $entity->getMulticurrency_total_ht(),
                ':multicurrency_total_ttc' => $entity->getMulticurrency_total_ttc()
            ),
            false
        );
    }


    public function  findByCustomAll($field, $entity, $debug = false)
    {
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getName();
        $sql = "SELECT * FROM " . $table . " WHERE " . $field . " = " . $entity->getCustom() . " ";

        return $datasourceObj->executeQuery($sql, $objConection, null, $debug);
    }

    public function arrayDetalleFacturaList($array)
    {
        if (count($array) > 0) {
            foreach ($array as $key => $value) {
                $entityCategoriasSub = new pedidosDetalle();
                $entityCategoriasSub->setCustom($array[$key]->getRowid());
                $arrayDataSet = $this->findByCustomAll('fk_commande', $entityCategoriasSub, true);
                if (count($arrayDataSet) > 0) {
                    $array[$key]->setCountSubCategorias(count($arrayDataSet));
                    $array[$key]->setArraySubCategorias($this->arrayOfModelList($arrayDataSet));
                }
            }
            return $array;
        } else {
            return false;
        }
    }


    public function detalleListPedido($objPedido)
    {
        $entityCategoriasSub = new pedidosDetalle();
        $entityCategoriasSub->setCustom($objPedido->getRowid());

        $arrayDataSet = $this->findByCustomAll('fk_commande', $entityCategoriasSub, true);
        $objPedido->setCountSubCategorias(count($arrayDataSet));
        $objPedido->setArraySubCategorias($this->arrayOfModelList($arrayDataSet));
        return $objPedido;
    }

    public function arrayOfModelList($resultSet)
    {
        if (count($resultSet) > 0) {
            $arrayModel = array();
            foreach ($resultSet as $key => $value) {
                $objModel = new pedidosDetalle();
                $objModel->__constructComplete(
                    $resultSet[$key]["rowid"],
                    $resultSet[$key]["fk_commande"],
                    $resultSet[$key]["fk_product"],
                    $resultSet[$key]["description"],
                    $resultSet[$key]["tva_tx"],
                    $resultSet[$key]["qty"],
                    $resultSet[$key]["price"],
                    $resultSet[$key]["subprice"],
                    $resultSet[$key]["total_ht"],
                    $resultSet[$key]["total_tva"],
                    $resultSet[$key]["total_ttc"],
                    $resultSet[$key]["product_type"],
                    $resultSet[$key]["rang"],
                    $resultSet[$key]["multicurrency_subprice"],
                    $resultSet[$key]["multicurrency_total_ht"],
                    $resultSet[$key]["multicurrency_total_tva"],
                    $resultSet[$key]["multicurrency_total_ttc"]
                );
                array_push($arrayModel, $objModel);
            }
            return $arrayModel;
        } else {
            return false;
        }
    }
}

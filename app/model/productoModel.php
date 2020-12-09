<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
class productoModel
{
    public function  findByCustom($field,$entityProductos,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entityProductos->getName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entityProductos->getCustom()." LIMIT 1";
       
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }

    public function  listOfTable($field = "ORDER BY rowid",$filter = 'ASC',$limit,$debug =false){
        $datasourceObj = new datasourceApi();
        $entity = new producto();
        $table = $entity->getName();
        $sql = "SELECT * FROM ".$table." ".$field." ".$filter." LIMIT ".$limit;
       
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,$debug);
    }

    public function  listOfTableCategorias($field = "ORDER BY rowid",$rowidCategorias,$filter = 'ASC',$limit,$debug =false){
        $datasourceObj = new datasourceApi();
        $entity = new producto();
        $table = '
        SELECT
        llx_product.rowid as rowid,
        llx_product.ref as ref,
        llx_product.datec as datec,
        llx_product.label as label,
        llx_product.description,
        llx_product.price,
        llx_product.price_ttc,
        llx_product.price_min,
        llx_product.price_min_ttc,
        llx_product.price_base_type,
        llx_product.tva_tx,
        llx_product.stock,
        llx_product.fk_default_warehouse,
        llx_product.cost_price
        FROM llx_product
        join llx_categorie_product on(llx_product.rowid=llx_categorie_product.fk_product) 
        join llx_categorie on(llx_categorie.rowid=llx_categorie_product.fk_categorie) ';
        $sql = "  ".$table."  WHERE llx_categorie.rowid=".$rowidCategorias." ".$field." ".$filter." LIMIT ".$limit;
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,$debug);
    }

    public function  listOfTableCategoriasSearch($field ,$order = "ORDER BY rowid",$rowidCategorias,$filter = 'ASC',$limit,$debug =false){
        $datasourceObj = new datasourceApi();
        $entity = new producto();
        $table = '
        SELECT
        llx_product.rowid as rowid,
        llx_product.ref as ref,
        llx_product.datec as datec,
        llx_product.label as label,
        llx_product.description,
        llx_product.price,
        llx_product.price_ttc,
        llx_product.price_min,
        llx_product.price_min_ttc,
        llx_product.price_base_type,
        llx_product.tva_tx,
        llx_product.stock,
        llx_product.fk_default_warehouse,
        llx_product.cost_price
        FROM llx_product
        join llx_categorie_product on(llx_product.rowid=llx_categorie_product.fk_product) 
        join llx_categorie on(llx_categorie.rowid=llx_categorie_product.fk_categorie) ';
        $categoryQuery = '';
        if($rowidCategorias != 0){
            $categoryQuery = "llx_categorie.rowid=".$rowidCategorias." AND";
        }
        $sql = "  ".$table."  WHERE ".$categoryQuery." ( llx_product.label LIKE '%".$field."%' OR llx_product.ref LIKE '%".$field."%' )".$order." ".$filter." LIMIT ".$limit;
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,$debug);
    }

    public function  findByCustomAll($field,$entity,$limit,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entity->getCustom()." LIMIT ".$limit;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
  
    public function arrayOfModelList($resultSet){
        if(count($resultSet)>0){
            $arrayModel=array();
            foreach ($resultSet as $key => $value) {
                $objModel = new producto();
                $objModel-> __constructComplete(
                    $resultSet[$key]["rowid"],
                    $resultSet[$key]["ref"],
                    $resultSet[$key]["datec"],
                    $resultSet[$key]["label"],
                    $resultSet[$key]["description"],
                    $resultSet[$key]["price"],
                    $resultSet[$key]["price_ttc"],
                    $resultSet[$key]["price_min"],
                    $resultSet[$key]["price_min_ttc"],
                    $resultSet[$key]["price_base_type"],
                    $resultSet[$key]["tva_tx"],
                    $resultSet[$key]["stock"],
                    $resultSet[$key]["fk_default_warehouse"],
                    $resultSet[$key]["cost_price"]
                );
               
                array_push($arrayModel,$objModel);
            }
            return $arrayModel;
        }else{
            return false;
        }
    }

    public function objectOfModelProducto($resultSet){
        
        $objModel = new producto();
        $objModel-> __constructComplete(
            $resultSet[0]["rowid"],
            $resultSet[0]["ref"],
            $resultSet[0]["datec"],
            $resultSet[0]["label"],
            $resultSet[0]["description"],
            $resultSet[0]["price"],
            $resultSet[0]["price_ttc"],
            $resultSet[0]["price_min"],
            $resultSet[0]["price_min_ttc"],
            $resultSet[0]["price_base_type"],
            $resultSet[0]["tva_tx"],
            $resultSet[0]["stock"],
            $resultSet[0]["fk_default_warehouse"],
            $resultSet[0]["cost_price"]
        );
        
        return $objModel;

    }
    
}
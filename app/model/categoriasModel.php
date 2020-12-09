<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
class categoriasModel
{
    public function  findByCustom($field,$modelCategorias,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $modelCategorias->getTableName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$modelCategorias->getCustom()." and type = 0 LIMIT 1";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
    public function  listOfTable($field = "ORDER BY rowid",$filter = 'ASC',$debug =false){
        $datasourceObj = new datasourceApi();
        $entity = new categorias();
        $table = $entity->getName();
        $sql = "SELECT * FROM ".$table." where type = 0  ".$field." ".$filter;
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$datasourceObj->datasourceMysql($datasourceObj->initDataSource()),null,$debug);
    }
    public function  findByCustomAll($field,$entity,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $entity->getName();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$entity->getCustom()." and type = 0  ";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
  
    public function arrayOfModelList($resultSet){
        if(count($resultSet)>0){
            $arrayModel=array();
            foreach ($resultSet as $key => $value) {
                $objModel = new categorias();
                $objModel-> __constructComplete(
                    $resultSet[$key]["rowid"],
                    $resultSet[$key]["fk_parent"],
                    $resultSet[$key]["label"],
                    $resultSet[$key]["description"],
                    $resultSet[$key]["type"]
                );
               
                array_push($arrayModel,$objModel);
            }
            return $arrayModel;
        }else{
            return false;
        }
    }
    public function arrayCategoriasSubList($array){
        if(count($array)>0){
            foreach ($array as $key => $value) {
                $entityCategoriasSub = new categorias();
                $entityCategoriasSub->setCustom($array[$key]->getRowid());
                $arrayDataSet=$this->findByCustomAll('fk_parent',$entityCategoriasSub,true);
                if(count($arrayDataSet)>0){
                    
                    $array[$key]->setCountSubCategorias(count($arrayDataSet));
                    $array[$key]->setArraySubCategorias($this->arrayOfModelList($arrayDataSet));
                    
                }
            }
            
            return $array;
        }else{
            return false;
        }
    }
}
<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/categorias.php"); 
require_once(MODEL_PATH."categoriasModel.php"); 
class categoriasServices{
    public function categoriasFindAll(){
        $modelCategorias = new categoriasModel();
        return $modelCategorias->listOfTable('ORDER BY rowid','ASC',true);
    }
    public function categoriasSubFindAll(){
     
        $modelCategorias = new categoriasModel();
        $categorias =$modelCategorias->listOfTable('ORDER BY label','ASC');
        $arrayObj =  $modelCategorias->arrayOfModelList($categorias);
        return $modelCategorias->arrayCategoriasSubList($arrayObj);
    }
}
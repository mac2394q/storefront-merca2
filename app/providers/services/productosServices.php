<?php
require_once(DATABASE_PATH."datasourceApi.php"); 
require_once(MODEL_PATH."entity/producto.php"); 
require_once(MODEL_PATH."productoModel.php"); 
class productosServices{

    public function productosCategoriasFindAll($rowid,$limit){
        $modelProductos = new productoModel();
        $arrayModel = $modelProductos->listOfTableCategorias('ORDER BY llx_product.rowid',$rowid,'ASC',$limit);
        return $modelProductos->arrayOfModelList($arrayModel);
    }

    public function productosCategoriasFindAllSearch($field ,$rowid,$limit){
        $modelProductos = new productoModel();
        $arrayModel = $modelProductos->listOfTableCategoriasSearch($field ,'ORDER BY llx_product.rowid',$rowid,'ASC',$limit);
        if(count($arrayModel)>1){
            return $modelProductos->arrayOfModelList($arrayModel);
        }else{
            return false;
        }
        
    }

    public function productosBuscarId($entityProducto){
        $modelProductos = new productoModel();
        $arrayModel = $modelProductos->findByCustom('rowid',$entityProducto);
        
        return $modelProductos->objectOfModelProducto($arrayModel);
    }
    
}
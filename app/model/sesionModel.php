<?php 
require_once(DATABASE_PATH."datasourceApi.php"); 
class sesionModel
{
    function cerrarSesion(){
        $status = false;
        unset($_SESSION['idsesion'] );
        unset($_SESSION['nombre'] );
        unset($_SESSION['correo'] );
        unset($_SESSION['direccion'] );
        unset($_SESSION['telefono'] );
        unset($_SESSION['telefono2'] );
        unset($_SESSION['identificacion']);
        session_destroy();
        if(count($_SESSION)<1){ $status = true;}
        return $status;
    }
   
    function iniciarSesion($modelSesion){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "
        SELECT llx_user.rowid,llx_user.login,llx_user.pass,llx_user.firstname,llx_user.email,llx_user.fk_soc,llx_user.statut 
        FROM llx_user 
        WHERE llx_user.login='".$modelSesion->getlogin()."' AND llx_user.pass = '".$modelSesion->getpass()."'";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,true);
    }
    public function  findByCustom($field,$modelSesion,$debug = false){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $table = $modelSesion->getNameTable();
        $sql = "SELECT * FROM ".$table." WHERE ".$field." = ".$modelSesion->getcustom()." LIMIT 1";
        //echo $sql;
        return $datasourceObj->executeQuery($sql,$objConection,null,$debug);
    }
    function lastRowId(){
        $datasourceObj = new datasourceApi();
        $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
        $sql = "SELECT rowid as lastRowId FROM llx_user ORDER BY `llx_user`.`rowid` DESC LIMIT 1";
        return $datasourceObj->executeQuery($sql,$objConection,null,true);
    }
    public function saveCustom($modelSesion)
    {
        $datasourceObj = new datasourceApi();
        $table = $modelSesion->getNameTable();
        $sql = "
        INSERT INTO " . $table . " (rowid,login,pass,firstname,email,fk_soc,statut) 
        VALUES (
            :rowid,
            :login,
            :pass,
            :firstname,
            :email,
            :fk_soc,
            :statut
            )";
            $objConection = $datasourceObj->datasourceMysql($datasourceObj->initDataSource());
            $values = array(
            ':rowid' => $modelSesion->getrowid(),
            ':login' => $modelSesion->getlogin(),
            ':pass' => $modelSesion->getpass(),
            ':firstname' => $modelSesion->getnameuser(),
            ':email' => $modelSesion->getemail(),
            ':fk_soc' => $modelSesion->getfk_soc(),
            ':statut' => $modelSesion->getstatut()
            );
        return $resultSet = $datasourceObj->executeUpdate(
            $sql,
            $objConection, 
            $values);
    }
    public function objectOfModelSesion($resultSet){
        
        $objModel = new sesion();
        $objModel-> __constructComplete(
            $resultSet[0]["rowid"],
            $resultSet[0]["login"],
            $resultSet[0]["pass"],
            $resultSet[0]["firstname"],
            $resultSet[0]["email"],
            $resultSet[0]["fk_soc"],
            $resultSet[0]["statut"]
        );
        return $objModel;
    }
}
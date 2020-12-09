<?php
/*Import */
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(DATABASE_PATH . "IDatasourceService.php");
class datasourceApi implements IDatasourceService
{
  private $ConectionString;
  private $ConectionObj;
  public  function __constructInit($dialect)
  {
    switch ($dialect) {
      case 'mysql':
        $this->datasourceMysql($this->initDataSource());
        break;

      default:
        $this->datasourceMysql($this->initDataSource());
        break;
    }
  }
  public function datasourceMysql($datasource = array())
  {
    try {
      $this->ConectionString = "mysql:host=" . $datasource['HOST'] . ";dbname=" . $datasource['BASENAME'];
      $this->ConectionObj = new PDO($this->ConectionString, $datasource['USERDATABASE'], $datasource['PASSDATABASE']);

      return $this->ConectionObj;
    } catch (PDOException $e) {
      echo "ERROR MESSAGE DATASOURCE [" . $e->getMessage() . "]";
    }
  }
  public function initDataSource()
  {
    return [
      "USERDATABASE" => USERDATABASE,
      "PASSDATABASE" => PASSDATABASE,
      "BASENAME" => BASENAME,
      "HOST" => HOST,
    ];
  }

  public function executeQuery($sql, $ConectionObjParam, $values = array(), $debug = false)
  {
    
    try {
      $this->ConectionObj = $ConectionObjParam;
      // if ($debug == true) {$this->debugQuerySql($sql);}

      if ($sql != "") {

        $consulta = $ConectionObjParam->prepare($sql);
        $consulta->execute($values);
        $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
       
        return $tabla_datos;
      } else {
        return 0;
      }
    } catch (PDOException $e) {
      echo "ERROR MESSAGE QUERY EXECUTE [" . $e->getMessage() . "]";
    }
  }


  public  function executeMultiTransactions($consultas = array(), $ConectionObjParam, $debug = false)
  {
    $this->ConectionObj = $ConectionObjParam;
    

    $resultado = false;
    try {
      if ($debug == true) {print_r($consultas);}

      

      $this->ConectionObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->ConectionObj->beginTransaction();
      foreach ($consultas as $key => $value) {
        $this->ConectionObj->exec($consultas[$key]);
      }
      $this->ConectionObj->commit();
      $resultado = true;
    } catch (Exception $e) {
      echo "ERROR MESSAGE QUERY EXECUTE - TRANSACTIONS [" . $e->getMessage() . "]";
    }
  }


  public function executeUpdate($sql, $ConectionObjParam, $values = array(), $debug = false)
  {
    $this->ConectionObj = $ConectionObjParam;
    if ($debug == true) {$this->debugQuerySql($sql);}

    try {
      $this->ConectionObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if ($sql != "") {
        $consulta = $this->ConectionObj->prepare($sql);
        $consulta->execute($values);
        $numero_tablas_afectadas = $consulta->rowCount();
        return $numero_tablas_afectadas;
      } else {
        return 0;
      }
    } catch (Exception $e) {
      echo "ERROR MESSAGE QUERY  UPDATE [" . $e->getMessage() . "]";
    }
  }

  public function debugQuerySql($sql)
  {
    echo  "<h3>SQL : </h3>\n" . $sql . "\n";
    
  }
 
}

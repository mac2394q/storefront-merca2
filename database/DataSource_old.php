<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');

class DataSource
{

  private $cadenaConexion;
  private $conexion;

  public function __construct($dialect)
  {
    switch ($dialect) {
      case 'mysql':
        $this->datasourceMysql();
        break;
      
      default:
        $this->datasourceMysql();
        break;
    }
  }

  public function datasourceMysql(){
    try {
      $this->cadenaConexion = "mysql:host=" . HOST . ";dbname=" . BASENAME;
      $this->conexion = new PDO($this->cadenaConexion, USERDATABASE, PASSDATABASE);
    } catch (PDOException $e) {
      echo "ERROR MESSAGE DATASOURCE [" . $e->getMessage() . "]";
    }
  }

  public function executeQuery($sql, $values = array(), $debug)
  {
    try {
      
      $this->debugQuerySql($sql,$debug);
      
      if ($sql != "") {

        $consulta = $this->conexion->prepare($sql);
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


  public  function executeMultiTransactions($consultas = array(), $debug)
  {
    if ($debug == true) {
      $this->debugQuerySql($consultas, $debug);
    }
    $resultado = false;
    try {
      if ($debug == true) {
        print_r($consultas);
      }
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->conexion->beginTransaction();
      foreach ($consultas as $key => $value) {
        $this->conexion->exec($consultas[$key]);
      }
      $this->conexion->commit();
      $resultado = true;
    } catch (Exception $e) {
      echo "ERROR MESSAGE QUERY EXECUTE - TRANSACTIONS [" . $e->getMessage() . "]";
    }
  }


  public function executeUpdate($sql, $values = array(),$debug)
  {
    
    $this->debugQuerySql($sql,$debug);
    
    try {
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if ($sql != "") {
        $consulta = $this->conexion->prepare($sql);
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

  public function debugQuerySql($sql,$debug)
  {
    if ($debug == true) {
      print_r( $sql);
    } else {
      print_r("Query NULL");
    }
  }
}

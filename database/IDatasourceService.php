<?php

interface IDatasourceService{

    public function __constructInit($dialect);

    public function initDataSource();

    public function datasourceMysql($datasource = array());

    public function executeQuery($sql, $values = array(), $debug);

    public  function executeMultiTransactions($consultas = array(), $debug);

    public function executeUpdate($sql, $values = array(),$debug);

    public function debugQuerySql($sql);

   
    


}


?>
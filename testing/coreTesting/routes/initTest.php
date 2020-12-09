<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/erp_sarp/plataforma_merca2/conf.php');
require_once(TESTING_PATH."coreTesting/routes/JRoutes.php"); 

$arrayRoutes = Array(
        Array("ROOT_PATH",ROOT_PATH,'path'),
        Array("DOMAIN_PATH",DOMAIN_PATH,'route'),
        Array("SERVER_PATH",SERVER_PATH,'route'),
        Array("APP_PATH",APP_PATH,'route'),
        Array("MODEL_PATH",MODEL_PATH,'route'),
        Array("PROVIDERS_PATH",PROVIDERS_PATH,'route')
    
);
echo "
<style>
table, th, td {border: 2px solid black;border-spacing: 10px 5px; }
table.center {
  margin-left: auto;
  margin-right: auto;
}

</style>";
echo "<pre>".JRoutes::directoryPath($arrayRoutes)."</pre>";

?>
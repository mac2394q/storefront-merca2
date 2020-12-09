<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/erp_sarp/plataforma_merca2/conf.php');
require_once(TESTING_PATH."coreTesting/datasource/JDatasource.php"); 


echo "
<h3>InitDatasource</h3>
<pre>";
print_r(JDatasource::initDatasource());
echo "</pre>
/***/";

echo "
<h3>Dialect</h3>
<pre>";
print_r(JDatasource::__constructInit());
echo "</pre>
/***/";

echo "
<h3>Debug Query</h3>
< pre>";
print_r(JDatasource::debugQuerySql());
echo "</>
/***/";


echo "
<h3>Query Construct Context C</h3>
<pre>";
print_r(JDatasource::queryConstructContextC());
echo "</pre>
/***/";

echo "
<h3>Save Custom #1</h3>
<pre>";
print_r(JDatasource::queryExecutaSaveCustom());
echo "</pre>
/***/";

echo "
<h3>Save Custom #2</h3>
<pre>";
print_r(JDatasource::queryExecutaSaveCustomName());
echo "</pre>
/***/";

echo "
<h3>Save Custom #3</h3>
<pre>";
print_r(JDatasource::queryExecutaSaveCustomParameter());
echo "</pre>
/***/";

?>
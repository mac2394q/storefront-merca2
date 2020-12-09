<?php
require_once(LIB_PATH."routes.php"); 
 class JRoutes{

    public static function validarRuta($route,$type){
        if($type == 'path'){
            return file_exists($route);
        }else{
            return routes::validationRoutes($route);
        }
    }

    public static function directoryPath($arrayRoute = array()){

        echo "
        <table>
           <tr>
               <th>Ruta</th>
               <th>Tipo</th>
               <th>Estado</th>
               <th>Directorio</th>
           </tr>
        ";
        for ($i=0; $i <count($arrayRoute) ; $i++) { 
        
            echo "
            <tr>
               <td>".$arrayRoute[$i][0]."</td>
               <td>".$arrayRoute[$i][2]."</td>
               <td>".JRoutes::validarRuta($arrayRoute[$i][1],$arrayRoute[$i][2])."</td>
               <td>".$arrayRoute[$i][1]."</td>
            </tr>";
        }
        echo "</table>";

    }

    

    



 }





?>
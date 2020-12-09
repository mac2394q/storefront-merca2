<?php 
  require_once(SERVICES_PATH . "sesionServices.php");
  require_once(API_PATH . "adapters/tercerosSesionAdapter.php");
  require_once(CONTROLLERS_PATH."routeController.php"); 
  require_once(MODEL_PATH . "entity/sesion.php");
  
class sesionController extends route
{
  public  function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {
            case 'cerrarSesion':
                return $this->cerrarSesion();
            break;

            case 'estadisticaSesion':
              return $this->lastRowId();
            break;

            case 'validarSesion':
              return $this->validarSesion($routeRequest);
            break;

            case 'retornarTerceroSesion':
              return $this->retornarTerceroSesion();
            break;
            
        }
    }

    public function cerrarSesion(){
      $objService = new sesionServices();
      $statusSesion=$objService->cerrarSesion();
      if($statusSesion){
        $this->handlerRedirect(SERVER_PATH);
      }
    }

    public function lastRowId(){
      $objService = new sesionServices();
      return $objService->lastRowId();
      
    }

    public function validarSesion($routeRequest){
      
      $objService = new sesionServices();
      $entitySesion = new sesion();
      $objAdapter = new tercerosSesionAdapter();

      $entitySesion->setlogin($routeRequest['email']);
      $entitySesion->setpass($routeRequest['clave']);
      $arraySesion = $objService->validarSesion($entitySesion);
      //print_r($arraySesion);
      if( $arraySesion != false){
        $objTercero = $objAdapter->retornarObjTercero( $arraySesion->getrowid());
    
        $_SESSION['idsesion'] = $arraySesion->getrowid();
        $_SESSION['nombre'] = $arraySesion->getnameuser();
        $_SESSION['correo'] = $arraySesion->getemail();
        $_SESSION['direccion'] = $objTercero->getAddress();
        $_SESSION['telefono'] = $objTercero->getZipPhone();
        $_SESSION['telefono2'] =$objTercero->getPhone() ;
        $_SESSION['identificacion'] =$objTercero->getSiret() ;
       
        $this->handlerRedirect(MODULE_APP_SERVER."shop/dashboard.php?id=".$arraySesion->getrowid());
      }else{
        echo '<div class="alert alert-danger mb-3">El usuario actual no coincide o no existe en el sistema .</div> ';
      }
    }

    public function retornarTerceroSesion(){
        $objAdapter = new tercerosSesionAdapter();
        $objTercero = $objAdapter->retornarTercero($_SESSION['idsesion']);
        return $objTercero;
    }
    
    
}
?>

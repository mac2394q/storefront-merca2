<?php 
  require_once(SERVICES_PATH . "sesionServices.php");
  require_once(API_PATH . "adapters/tercerosFacturasAdapter.php");
  require_once(API_PATH . "adapters/pedidosDetallesAdapter.php");
  require_once(CONTROLLERS_PATH."routeController.php"); 
  require_once(MODEL_PATH . "entity/sesion.php");
  
class pedidosController extends route
{
  public  function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {
            case 'realizarPedido':
                return $this->realizarPedido($routeRequest);
            break;
            case 'registroAfiliadoPedido':
                return $this->registroAfiliadoPedido($routeRequest);
            break;

            case 'listadoPedidosTercero':
                return $this->registroAfiliadoPedido($routeRequest);
            break;

            case 'obtenerPedidoId':
                return $this->obtenerPedidoId($routeRequest);
            break;

            case 'listadoPedidosTercero':
                return $this->listadoPedidosTercero($routeRequest);
            break;

            case 'listadoPedidosTerceroActual':
                return $this->listadoPedidosTerceroActual($routeRequest);
            break;
            
            
        }
    }
    public function realizarPedido($routeRequest){
        //echo "<pre>".print_r($routeRequest)."</pre>";
        $objService = new pedidosDetallesAdapter();
        $objService -> registrarPedido($routeRequest);
    }
    public function registroAfiliadoPedido($routeRequest){
        $objService = new pedidosDetallesAdapter();
        $pedido=$objService -> registrarPedido($routeRequest);
        echo "
        <div style='text-align:justify' class='alert alert-success mb-3 '>
            Orden de Pedido con codigo: ".$pedido->getRef()." registrado satisfactoriamente<br>
            puede consultar sobre su pedido desde la opcion de 'Seguimiento de orden' usando el codigo del pedido o
            Puede ver el detalle del pedido desde la opcion de historial .<br>
        </div>
        </div>
        <a href='".MODULE_APP_SERVER . 'shop/seguimiento.php '."' class='btn btn-primary'><li class='fa fa-search-location'></li>&nbsp;Seguimiento de Pedido</a>
        <a href='".MODULE_APP_SERVER."shop/pedido.php?idrowPedido=".$pedido->getRowid()."&idrowCliente=".$pedido->getFk_soc()."' class='btn btn-primary'><li class='fa fa-file-contract'></li>&nbsp;Ver Pedido</a>";
    }

    public function obtenerPedidoId($routeRequest){
        $objService = new pedidosDetallesAdapter();
        $objPedido = $objService ->retornarPedido($routeRequest);
        return $objPedido ;

    }

    public function listadoPedidosTercero($routeRequest){
        $objService = new pedidosDetallesAdapter();
        return $objService ->listadoPedidos($routeRequest);

    }

    public function listadoPedidosTerceroActual($routeRequest){
        $objService = new pedidosDetallesAdapter();
        return $objService ->listadoPedidosActuales($routeRequest);

    }

    public function listadoPedidosTerceroMes($routeRequest){
        $objService = new pedidosDetallesAdapter();
        return $objService ->listadoPedidosMes($routeRequest);

    }



    
    
    
}
?>

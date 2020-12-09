<?php
require_once(DATABASE_PATH . "datasourceApi.php");
require_once(SERVICES_PATH . "tercerosServices.php");
require_once(SERVICES_PATH . "sesionServices.php");
require_once(MODEL_PATH . "entity/terceros.php");
require_once(MODEL_PATH . "tercerosModel.php");
require_once(MODEL_PATH . "sesionModel.php");
require_once(MODEL_PATH . "entity/sesion.php");
require_once(MODEL_PATH . "entity/pedido.php");
require_once(MODEL_PATH . "entity/pedidoDetalle.php");
require_once(MODEL_PATH . "pedidoModel.php");
require_once(MODEL_PATH . "pedidoDetalleModel.php");
require_once(SERVICES_PATH . "sesionServices.php");
require_once(API_PATH . "adapters/IPedidosDetallesAdapter.php");
class pedidosDetallesAdapter implements IPedidoDetallesAdapter
{
    public function retornarTercero($rowidSesion)
    {
        $modelSesion = new sesionModel();
        $modelTerceros = new tercerosModel();
        $entitySesion = new sesion();
        $entityTerceros = new terceros();
        $entitySesion->setcustom($rowidSesion);

        $objSesion = $modelSesion->findByCustom('rowid', $entitySesion);
        $objSesion = $modelSesion->objectOfModelSesion($objSesion);
        $entityTerceros->setcustom($objSesion->getfk_soc());
        $objTerceros = $modelTerceros->findByCustom('rowid', $entityTerceros);
        $objTerceros = $modelTerceros->arrayOfModelTerceros($objTerceros);
        return $objTerceros;
    }
    public function registrarPedido($routeRequest)
    {
        //print_r($routeRequest);
        $objAdapter = new pedidosDetallesAdapter();
        $objPedidosModel = new pedidoModel();
        $entityPedidos = new pedidos();
        $objTercero = $this->retornarTercero($routeRequest['idsesion']);

        $entityPedidos->__constructComplete(
            null,
            $objPedidosModel->consecutivoPedido(),
            '',
            '',
            $objTercero->getRowid(),
            null,
            null,
            null,
            1,
            0,
            $routeRequest['total'],
            $routeRequest['total'],
            '',
            '',
            '',
            0,
            '',
            13,
            4,
            '',
            2,
            $routeRequest['total'],
            0,
            $routeRequest['total']
        );

        $objPedidosModel->saveCustom($entityPedidos);
        $entityPedidos->setRowid($objPedidosModel->lastRowId()[0]['lastidrow']);
        for ($i = 0; $i < intval($routeRequest['nproductos']); $i++) {
            $objDetallePedido = new pedidosDetalle();
            $objPedidosDetalleModel = new pedidoDetalleModel();
            $objDetallePedido->__constructComplete(
                null,
                $objPedidosModel->lastRowId()[0]['lastidrow'],
                $routeRequest['idproducto' . $i],
                $routeRequest['nombre' . $i],
                19,
                $routeRequest['cantidad' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                0,
                1,
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i],
                $routeRequest['pxc' . $i]
            );
            $objPedidosDetalleModel->saveCustom($objDetallePedido);
            //print_r($objDetallePedido);
        }

        return $entityPedidos;
    }
    public function retornarPedido($routeRequest)
    {
       
        $objPedidosModel = new pedidoModel();
        $objPedidosDetalleModel = new  pedidoDetalleModel();
        $objPedido = new pedidos();

        $objPedido->setCustom($routeRequest['idpedido']);
        $objArrayPedido = $objPedidosModel->findByCustom('rowid', $objPedido);
        $objArrayPedido=$objPedidosModel->objectOfModelPedido($objArrayPedido);
        
        $objArrayPedido = $objPedidosDetalleModel->detalleListPedido($objArrayPedido);

        return $objArrayPedido;
    }
    public function listadoPedidos($routeRequest)
    {

        $objPedidosModel = new pedidoModel();
        $objPedido = new pedidos();
        $objPedido->setCustom($routeRequest['idcliente']);
        $objArrayPedido = $objPedidosModel->findByCustomAll('fk_soc', $objPedido);

        $objArrayPedido = $objPedidosModel->arrayOfModelListPedidos($objArrayPedido);
        return $objArrayPedido;
    }

    public function listadoPedidosActuales($routeRequest)
    {
        $objPedidosModel = new pedidoModel();
        $objPedidosDetalleModel = new  pedidoDetalleModel();
        $objPedido = new pedidos();

        $objPedido->setCustom($routeRequest['idcliente']);

        $objArrayPedido = $objPedidosModel->pedidosActuales($objPedido);
        if (count($objArrayPedido) > 0) {
            $objArrayPedido = $objPedidosModel->arrayOfModelListPedidos($objArrayPedido);
            $objArrayPedido = $objPedidosDetalleModel->arrayDetalleFacturaList($objArrayPedido);
            return $objArrayPedido;
        } else {
            return false;
        }
    }

    
    public function listadoPedidosMes($routeRequest)
    {
        $objPedidosModel = new pedidoModel();
        $objPedidosDetalleModel = new  pedidoDetalleModel();
        $objPedido = new pedidos();

        $objPedido->setCustom($routeRequest['idcliente']);

        $objArrayPedido = $objPedidosModel->pedidosMes($objPedido);
        if (count($objArrayPedido) > 0) {
            $objArrayPedido = $objPedidosModel->arrayOfModelListPedidos($objArrayPedido);
            $objArrayPedido = $objPedidosDetalleModel->arrayDetalleFacturaList($objArrayPedido);
            return $objArrayPedido;
        } else {
            return false;
        }
    }
}

<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(LIB_PATH . "session.php");
require_once(LIB_PATH . "mobile.php");
require_once(LIB_PATH . "routesLib.php");
require_once(CONTROLLERS_PATH . "tercerosController.php");
require_once(CONTROLLERS_PATH . "pedidosController.php");

$objTercerosController = new tercerosController();
$objPedidosController = new pedidosController();
$routeLib = new routesLib();

$objTercero = $objTercerosController->retornarTercero($arrayRequest = ["rowid" => $_GET['idrowCliente']]);
$status_session = session::statusSesion($_SESSION['idsesion']);
$objPedidos = $objPedidosController->obtenerPedidoId($arrayRequest = ["idpedido" => $_GET['idrowPedido']]);

$url_pdf = "http://portalx.net/erp_sarp/documents/commande/".$objPedidos->getRef()."/".$objPedidos->getRef().".pdf";
$url = '';
$estado = '';
if($objPedidos->getFk_statut() == 1){
    $estado ="<div class='alert alert-warning '>En proceso de Validacion</div>";
}elseif($objPedidos->getFk_statut() ==2){
    $estado ="<div class='alert alert-primary '>Pedido en Curso</div>";
}elseif($objPedidos->getFk_statut() ==3){
    $estado ="<div class='alert alert-success '>Pedido Enviado</div>";
}

// if($routeLib->validationRoutes($url_pdf) != '200' ){ $url =$url_pdf ;}
// else{ $url ='#' ;}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php require_once(VIEW_PATH . "components/stoyka/head.php"); ?>
</head>
<body style="zoom:90%;">
    <?php //echo "<pre>";print_r($objPedidos); echo "</pre>"; ?>
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        <header class="site__header d-lg-none">
            <?php require_once(VIEW_PATH . "components/stoyka/mobilemenu.php"); ?>
        </header>
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        <?php require_once(VIEW_PATH . "components/stoyka/headerDesktop.php"); ?>
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            <div class="block order-success">
                <div class="container">
                    <div class="order-success__body">
                        <div class="order-success__header text-white">
                            <h3><?php echo $estado;?></h3>
                        </div>
                        <div class="order-success__meta">
                            <ul class="order-success__meta-list">
                                <li class="order-success__meta-item"><span class="order-success__meta-title">Numero de Orden:</span> <span class="order-success__meta-value"><?php echo "ID ".$objPedidos->getRowid()."<br> #".$objPedidos->getRef(); ?></span></li>
                                <li class="order-success__meta-item"><span class="order-success__meta-title">Fecha y Hora</span> <span class="order-success__meta-value"><?php echo $objPedidos->getDate_valid(); ?></span></li>
                                <li class="order-success__meta-item"><span class="order-success__meta-title">Total:</span> <span class="order-success__meta-value"><?php echo number_format($objPedidos->getTotal_ttc()); ?></span></li>
                                <li class="order-success__meta-item"><span class="order-success__meta-title">Metodo de Pago</span> <span class="order-success__meta-value"><?php echo "Servicio de Mensajeria"; ?></span></li>
                                <?php if($routeLib->validationRoutes($url_pdf) == '200' ){ ?>
                                    <li class="order-success__meta-item"><span class="order-success__meta-title">Factura PDF</span> <span class="order-success__meta-value"><a href="<?php echo $url_pdf;  ?>" target="_blank" >Descargar</a></span></li>
                                <?php }else{ ?>
                                    <li class="order-success__meta-item"><span class="order-success__meta-title">Factura PDF</span> <span class="order-success__meta-value"><a href="#" >No Disponible</a></span></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="card">
                            <div class="order-list">
                                <table>
                                    <thead class="order-list__header">
                                        <tr>
                                            <th class="order-list__column-label" colspan="2">Producto:</th>
                                            <th class="order-list__column-quantity">Cantidad</th>
                                            <th class="order-list__column-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="order-list__products">
                                        <?php 
                                        $urlBase =  URL_IMAGE;
                                        $img = "";
                                        
                                        foreach($objPedidos->getArraySubCategorias() as $key => $value){
                                            $id = $objPedidos->getArraySubCategorias()[$key]->getRowid();
                                            if ($routeLib->validationRoutes($urlBase . $id . "/" . $id . ".jpg") != '200') {
                                                $img = VENDOR_SERVER . "merca2/images/unnamed.png";
                                            } else {
                                                $img = URL_IMAGE . $id . "/" . $id . ".jpg";
                                            }
                                            echo "
                                            <tr>
                                                <td class='order-list__column-image'>
                                                    <div class='product-image'><a href='' class='product-image__body'><img class='product-image__img' src='".$img."' alt=''></a></div>
                                                </td>
                                                <td class='order-list__column-product'><a href=''>".$objPedidos->getArraySubCategorias()[$key]->getDescription()."</a></td>
                                                <td class='order-list__column-quantity' data-title='Qty:'>".$objPedidos->getArraySubCategorias()[$key]->getQty() ."</td>
                                                <td class='order-list__column-total'>".number_format($objPedidos->getArraySubCategorias()[$key]->getMulticurrency_total_ttc() ) ."</td>
                                            </tr>";
                                        }
                                        ?>
                                    </tbody>
                                    <tbody class="order-list__subtotals">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Subtotal</th>
                                            <td class="order-list__column-total"><?php echo number_format($objPedidos->getTotal_ttc()); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Envio</th>
                                            <td class="order-list__column-total">$3000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="order-list__footer">
                                        <tr>
                                            <th class="order-list__column-label" colspan="3">Total</th>
                                            <td class="order-list__column-total"><?php echo number_format($objPedidos->getTotal_ttc()); ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-3 no-gutters mx-n2">
                            <div class="col-sm-6 col-12 px-2">
                                <div class="card address-card">
                                    <div class="address-card__body">
                                        <div class="address-card__badge address-card__badge--muted">Despachador:</div>
                                        <div class="address-card__name">SARP COLOMBIA ZOMAC SAS</div>
                                        <div class="address-card__name">NIT 901.364.726-9</div>
                                        <div class="address-card__row">CRA 56 #7-58 Barrio Independencia</div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefono de Soporte</div>
                                            <div class="address-card__row-content">+57 (311) 887 2567</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Correo Soporte</div>
                                            <div class="address-card__row-content">sarpcolombiasas@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 px-2 mt-sm-0 mt-3">
                                <div class="card address-card">
                                    <div class="address-card__body">
                                        <div class="address-card__badge address-card__badge--muted">Comprador:</div>
                                        <div class="address-card__row-title">Nombre:</div>
                                        <div class="address-card__name"><?php echo $objTercero->getNom(); ?></div>
                                        <div class="address-card__row-title">Direccion de Residencia:</div>
                                        <div class="address-card__row"><?php echo $objTercero->getAddress(); ?></div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefono de Contacto:</div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getZipPhone(); ?></div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getPhone(); ?></div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Correo Electronico:</div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getEmail(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        <footer class="site__footer">
            <?php require_once(VIEW_PATH . "components/stoyka/footer.php"); ?>
        </footer>
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- quickview-modal -->
    <?php require_once(VIEW_PATH . "components/stoyka/modal.php"); ?>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <?php require_once(VIEW_PATH . "components/stoyka/pswp.php"); ?>
    <!-- photoswipe / end -->
    <!-- js -->
    <?php require_once(VIEW_PATH . "components/stoyka/lib.php"); ?>
</body>
</html>
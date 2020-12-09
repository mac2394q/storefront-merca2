<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(LIB_PATH . "session.php");
require_once(LIB_PATH . "mobile.php");
require_once(CONTROLLERS_PATH . "tercerosController.php");
require_once(CONTROLLERS_PATH . "pedidosController.php");
//Test
$objTercerosController = new tercerosController();
$objPedidosController = new pedidosController();


$objPedidos = $objPedidosController->listadoPedidosTercero($arrayRequest = ["idcliente" => $_GET['id']]);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require_once(VIEW_PATH . "components/stoyka/head.php"); ?>
</head>

<body style="zoom:90%;">

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
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Mi Cuenta</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h3>Historial de Pedidos Realizados:</h3>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="dashboard__orders card">
                            <div class="card-header">
                                <h5>Pedidos Actuales:</h5>
                            </div>
                            <div class="card-divider"></div>
                            <?php
                            if ($objPedidos != false) {
                                echo "
                                            <div class='card-table'>
                                                <div class='table-responsive-sm'>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Order</th>
                                                                <th>Fecha y Hora</th>
                                                                <th>Estado</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                        ";
                                foreach ($objPedidos as $key => $value) {
                                    $estado = '';
                                    if ($objPedidos[$key]->getFk_statut() == 1) {
                                        $estado = "<div class='alert alert-warning '>En proceso de Validacion</div>";
                                    } elseif ($objPedidos[$key]->getFk_statut() == 2) {
                                        $estado = "<div class='alert alert-primary '>Pedido en Curso</div>";
                                    } elseif ($objPedidos[$key]->getFk_statut() == 3) {
                                        $estado = "<div class='alert alert-success '>Pedido Enviado</div>";
                                    }
                                    echo "
                                                <tr>
                                                    <td>
                                                        <a href='" . MODULE_APP_SERVER . "shop/pedido.php?idrowPedido=" . $objPedidos[$key]->getRowid() . "&idrowCliente=" . $objPedidos[$key]->getFk_soc() . "'>
                                                            #" . $objPedidos[$key]->getRowid() . "
                                                        </a>
                                                    </td>
                                                    <td>" . $objPedidos[$key]->getDate_valid() . "</td>
                                                    <td>" . $estado . "</td>
                                                    <td>" . number_format($objPedidos[$key]->getTotal_ttc()) . "</td>
                                                </tr>";
                                }
                                echo "
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> 
                                        ";
                            } else {
                                echo "<div class='alert alert-danger mb-3'>Actualmente no hay pedidos abiertos.</div>";
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <br><br>
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
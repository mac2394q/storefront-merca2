<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(LIB_PATH . "session.php");
require_once(LIB_PATH . "mobile.php");
require_once(CONTROLLERS_PATH . "tercerosController.php");
require_once(CONTROLLERS_PATH . "pedidosController.php");
//Test
$objTercerosController = new tercerosController();
$objPedidosController = new pedidosController();

$objTercero = $objTercerosController->retornarTercero($arrayRequest = ["rowid" => $_GET['id']]);
//Testecho "xxx<pre>";print_r($objTercero );echo "</pre>";
$status_session = session::statusSesion($_SESSION['idsesion']);
$pedidosActuales = $objPedidosController->listadoPedidosTerceroActual($arrayRequest = ["idcliente" => $_GET['id']]);
//echo "xxx<pre>";print_r($objPedidosController->listadoPedidosTercero($arrayRequest = ["idcliente" => $_GET['id']]));echo "</pre>";
//echo "xxx<pre>";print_r($objPedidosController->listadoPedidosTerceroActual($arrayRequest = ["idcliente" => $_GET['id']]));echo "</pre>";
$objTercerosRed = $objTercerosController->listadoAsignadosTercero($arrayRequest = ["id" => $objTercero->getCode_client(),"parent" => 'parent',"debug" => 'false']);
echo "xxx<pre>";print_r($objTercerosController->listadoAsignadosTercero($arrayRequest = ["id" => $objTercero->getCode_client(),"parent" => 'parent',"debug" => 'false']));echo "</pre>";
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
                        <h3>Cuenta Empresario - Codigo Consecutivo #<?php echo $objTercero->getCode_client(); ?></h3>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Menu</h4>
                                <ul>
                                    <li class="account-nav__item account-nav__item--active"><a href="#">Panel Principal</a></li>
                                    <li class="account-nav__item"><a href="<?php echo "profile.php?id=".$_GET['id']; ?>">Historico Mensual</a></li>
                                    <li class="account-nav__item"><a href="<?php echo "historial.php?id=".$_GET['id']; ?>">Red de Asociados</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">

                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5>Mi Red de Asociados:</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <?php
                                    if($objTercerosRed != false){
                                        echo "
                                            <div class='card-table'>
                                                <div class='table-responsive-sm'>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Nombre Cliente</th>
                                                                <th>historial Facturas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                        ";
                                        foreach($objTercerosRed  as $key => $value ){ 
                                            echo "
                                                <tr>
                                                    <td><a href='#'>".$objTercerosRed[$key]->getRowid()."</a></td>
                                                    <td>".$objTercerosRed[$key]->getNom()."</td>
                                                    <td><a href='#'>Ver Facturas</a></td>
                                                </tr>";
                                        }
                                        echo "
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> 
                                        ";
                                    }else{echo "<div class='alert alert-danger mb-3'>No tienen red de asociados.</div>";}
                                    ?>
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
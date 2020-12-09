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
//echo "xxx<pre>";print_r($objTercero );echo "</pre>";
$status_session = session::statusSesion($_SESSION['idsesion']);
$pedidosActuales = $objPedidosController->listadoPedidosTerceroActual($arrayRequest = ["idcliente" => $_GET['id']]);
//echo "xxx<pre>";print_r($objPedidosController->listadoPedidosTercero($arrayRequest = ["idcliente" => $_GET['id']]));echo "</pre>";
//echo "xxx<pre>";print_r($objPedidosController->listadoPedidosTerceroActual($arrayRequest = ["idcliente" => $_GET['id']]));echo "</pre>";
$tipo = $objTercero->getName_alias();
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
                        <h3><li class="fa fa-ticket-alt"></li>&nbsp;Mi Cuenta - Codigo Consecutivo #<?php echo $objTercero->getRowid(); ?></h3>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title"><li class="fa fa-bars"></li>&nbsp;Menu</h4>
                                <ul>
                                    <li class="account-nav__item account-nav__item--active"><a href="#">Panel Principal</a></li>
                                    <li class="account-nav__item"><a href="<?php echo "profile.php?id=".$_GET['id']; ?>">Perfil</a></li>
                                    <li class="account-nav__item"><a href="<?php echo "historial.php?id=".$_GET['id']; ?>">Historial de pedidos</a></li>
                                    <?php if($tipo == 'EMPRESARIO'){?>
                                    <li class="account-nav__item"><a href="<?php echo "empresarios.php?id=".$_GET['id']; ?>">Empresarios</a></li>
                                    <?php }?>
                                    <li class="account-nav__item"><a id="logout" href="#" name="<?php echo $_SESSION['idsesion']; ?>">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar"><img src="<?php echo VENDOR_SERVER . "merca2/images/avatar.jpg"; ?>" alt=""></div>
                                        <div class="profile-card__name"><?php echo $objTercero->getNom(); ?></div>
                                        <div class="profile-card__email"><?php echo $objTercero->getEmail(); ?></div>
                                        <?php if($tipo == 'EMPRESARIO'){?>
                                            <div class="profile-card__name"><li class="fa fa-user-circle"></li>&nbsp;<?php echo $tipo; ?></div><br>
                                        <?php }else{?>
                                            <div class="profile-card__name"><li class="fa fa-user-circle"></li>&nbsp;<?php echo $tipo; ?></div><br>
                                            <?php }?>
                                        <div class="profile-card__edit"><a href="<?php echo "profile.php?id=".$_GET['id']; ?>" class="btn btn-secondary btn-sm"><li class="fa fa-user-edit"></li>&nbsp;Editar Perfil</a></div>
                                    </div>
                                </div>
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__badge"><li class="fa fa-user-id-card"></li>&nbsp;Informacion Personal</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name"><?php echo $objTercero->getNom(); ?></div>
                                        <div class="address-card__row"><?php echo "Buenaventura - Colombia ".$objTercero->getAddress(); ?></div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefonos de contacto</div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getZipPhone(); ?></div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getPhone(); ?></div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Correo Electronico</div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getEmail(); ?></div>
                                        </div>
                                        <?php if($tipo == 'EMPRESARIO'){?>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Mi Codigo de referido</div>
                                            <div class="address-card__row-content"><?php echo $objTercero->getCode_client(); ?></div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Puntos Personales <?php echo 0;?></div>
                                            <div class="address-card__row-content">Puntos Grupales <?php echo 0; ?></div>
                                        </div>
                                        <?php }?>
                                      
                                    </div>
                                </div>
                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5><li class="fa fa-shopping-cart"></li>&nbsp;Pedidos Actuales:</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <?php
                                    if($pedidosActuales != false){
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
                                        foreach($pedidosActuales as $key => $value ){ 
                                            $estado = '';
                                            if($pedidosActuales[$key]->getFk_statut() == 1){
                                                $estado ="<div class='alert alert-warning '>En proceso de Validacion</div>";
                                            }elseif($pedidosActuales[$key]->getFk_statut() ==2){
                                                $estado ="<div class='alert alert-primary '>Pedido en Curso</div>";
                                            }elseif($pedidosActuales[$key]->getFk_statut() ==3){
                                                $estado ="<div class='alert alert-success '>Pedido Enviado</div>";
                                            }
                                            echo "
                                                <tr>
                                                    <td>
                                                        <a href='".MODULE_APP_SERVER."shop/pedido.php?idrowPedido=".$pedidosActuales[$key]->getRowid()."&idrowCliente=".$pedidosActuales[$key]->getFk_soc()."'>
                                                            #".$pedidosActuales[$key]->getRowid()."
                                                        </a>
                                                    </td>
                                                    <td>".$pedidosActuales[$key]->getDate_valid()."</td>
                                                    <td>".$estado."</td>
                                                    <td>".number_format ($pedidosActuales[$key]->getTotal_ttc())."</td>
                                                </tr>";
                                        }
                                        echo "
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> 
                                        ";

                                    }else{echo "<div class='alert alert-danger mb-3'>Actualmente no hay pedidos abiertos.</div>";}
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
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
$objTercerosRed = $objTercerosController->listadoAsignadosTercero($arrayRequest = ["id" => $objTercero->getCode_client(),"parent" => 'parent',"debug" => 'false']);
//echo "xxx<pre>";print_r($objTercerosController->listadoAsignadosTercero($arrayRequest = ["id" => $objTercero->getCode_client(),"parent" => 'parent',"debug" => 'false']));echo "</pre>";
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
                                <li class="breadcrumb-item"><a href="<?php echo "dashboard.php?id=".$_GET['id']; ?>">Panel Principal</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-right-6x9"; ?>">
                                        </use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Mi cuenta</li>';
                               
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h3>Mi cuenta personal en merca2</h3>
                    
                    </div>
                </div>
            </div>
        <div class="checkout block">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6 col-xl-7">
                        <div class="card mb-lg-0">


                            <div class="card-body">
                                <h3 class="card-title">Informacion Personal</h3>
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="checkout-first-name">Nombre</label>
                                        <input type="text" class="form-control" readonly name="nombre" value="<?php echo $_SESSION['nombre']; ?>" >
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="checkout-company-name"> Identificación (CC, NIT) </label>
                                        <input type="text" class="form-control" readonly  name="identificacion" value="<?php echo $_SESSION['identificacion']; ?>" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-street-address">Direccion</label>
                                        <input type="text" class="form-control"  readonly name="direccion" value="<?php echo $_SESSION['direccion']; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-city">Ciudad </label>
                                        <input type="text" class="form-control" readonly  value="Buenaventura - Valle del Cauca">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="checkout-email">Correo Electronico</label>
                                        <input type="text" class="form-control"  readonly name="correo" value="<?php echo $_SESSION['correo']; ?>" >
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-email">Telefono de Contacto</label>
                                        <input type="email" class="form-control" readonly  name="telefono" value="<?php echo $_SESSION['telefono']; ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-phone">Telefono de Secundario(Opcional)</label>
                                        <input type="text" class="form-control" readonly  name="telefono2" value="<?php echo $_SESSION['telefono2']; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="checkout-email">Pais</label>
                                        <input type="text" class="form-control" readonly  value="Colombia">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="checkout-phone">Moneda Local</label>
                                        <input type="text" class="form-control" readonly  value="COP - Peso Colombiano">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="checkout-phone">Sujeto a iva</label>
                                        <input type="text" class="form-control" readonly  value="SI">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="checkout-email">Usuario</label>
                                        <input type="text" class="form-control" readonly name="usuario"  value="">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="checkout-phone">Clave</label>
                                        <input type="text" class="form-control" readonly name="clave" value="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <button class="btn btn-primary" id="modificarAfiliado" >Modificar </button>
                                </div>
                               
                            </div>
                
                            <div class="card-divider"></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                        <div class="card-body">
                                <h3 class="card-title">Informacion SARP - Merca2</h3>
                                <div class="form-row">
                                     <div class="form-group col-md-8">
                                        <label for="checkout-first-name">Tipo de Usuario Merca2</label>
                                        <input type="text" class="form-control" readonly  value="<?php echo $objTercero->getName_alias(); ?>" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-first-name">Tipo de Usuario SARP</label>
                                        <input type="text" class="form-control" readonly  value="<?php echo "empresarios"; ?>" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-first-name">Codigo de Referido:</label>
                                        <input type="text" class="form-control" readonly  value="<?php echo $objTercero->getCode_client(); ?>" >
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="checkout-company-name"> Asociados en mi red: </label>
                                        <input type="text" class="form-control" readonly  value="<?php echo count($objTercerosRed ); ?>" >
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="checkout-company-name">Afiliacion: </label>
                                        <input type="text" class="form-control" readonly  value="Activa" >
                                    </div>
                                </div>

                            </div>
                
                            <div class="card-divider"></div>
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
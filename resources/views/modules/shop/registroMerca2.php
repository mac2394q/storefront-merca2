<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(MODULE_APP_PATH . "shop/components/shopComponents.php");
require_once(LIB_PATH . "session.php");
$status_session = session::statusSesion($_SESSION['idsesion']);
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
                                <li class="breadcrumb-item"><a href="<?php echo SERVER_PATH; ?>">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-right-6x9"; ?>">
                                        </use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Afiliacion de cliente merca2</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Afiliacion de cliente </h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12">
                            <div class="card mb-lg-0">
                                <div class="card-body">
                                 
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="checkout-first-name"> Nombre</label>
                                            <input type="text" class="form-control" name="primerNombre" id="primerNombre" placeholder="Nombre..."></div>
                                        <div class="form-group col-md-3">
                                            <label for="checkout-last-name">Apellido </label>
                                            <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" placeholder="Nombre...">
                                        </div> 
                                        <div class="form-group col-md-3">
                                            <label for="checkout-company-name"> Tipo de Documento </label>
                                            <select  class="form-control" >
                                                <option value="0" >Selecciona tipo</option>
                                                <option value="CC" >CC</option>
                                                <option value="NIT" >NIT</option>
                                                <option value="CE" >CE</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="checkout-company-name"> Identificación (CC, NIT, CE) </label>
                                            <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificación (CC, NIT, CE)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="checkout-street-address">Direccion</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion # AB - 00">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="checkout-city">Ciudad </label>
                                            <input type="text" class="form-control" readonly name="ciudad" id="ciudad" value="Buenaventura - Valle del Cauca">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="checkout-email">Correo Electronico</label>
                                            <input type="text" class="form-control" name="email_" id="email_" placeholder="@">
                                        </div>
                                       
                                    </div>
                                  
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="checkout-email">Telefono de Contacto</label>
                                            <input type="email" class="form-control" name="telefono" id="telefono" placeholder="+57 (000) 000 0000">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="checkout-phone">Telefono de Secundario(Opcional)</label>
                                            <input type="text" class="form-control" id="telefono2" name="telefono2" placeholder="+57 (000) 000 0000">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="checkout-company-name"> Codigo de Referido (Opcional)</label>
                                            <input type="text" class="form-control" id="referido" name="referido" placeholder="Referido #...">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="checkout-company-name"> Usuario</label>
                                            <input type="text" class="form-control" readonly id="usuario" name="usuario" placeholder="Usuario...">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="checkout-company-name"> Clave</label>
                                            <input type="text" class="form-control" id="clave_" name="clave_" placeholder=" Clave...">
                                        </div>
                                    </div>
                                    <div class="checkout__agree form-group">
                                    <div class="form-check">
                                        <span class="form-check-input input-check">
                                            <span class="input-check__body">
                                                <input class="input-check__input" type="checkbox" id="checkout-terms">
                                                <span class="input-check__box"></span>
                                                <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#check-9x7"; ?>"></use>
                                                </svg>
                                            </span>
                                        </span>
                                        <label class="form-check-label" for="checkout-terms">He leído y acepto los
                                            <a target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/terminos.php '; ?>">términos y condiciones </a>de merca2
                                        </label>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <a href="#" id="registrarAfiliado" class="btn btn-primary cart__update-button">Crear Afiliacion</a>
                                    </div>
                                    <div id="smgRegistro">
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
    <!-- mobilemenu 1102
70
-->
    <!-- mobilemenu / end -->
    <!-- photoswipe -->
    <?php require_once(VIEW_PATH . "components/stoyka/pswp.php"); ?>
    <!-- photoswipe / end -->
    <!-- js -->
    <?php require_once(VIEW_PATH . "components/stoyka/lib.php"); ?>
</body>
</html>
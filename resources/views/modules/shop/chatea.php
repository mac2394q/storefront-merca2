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
                                <li class="breadcrumb-item active" aria-current="page">Chatea con Nosotros</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1><li class="fa fa-comments"></li>&nbsp;Chatea con Nosotros - Via WhatApp</h1>
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
                                        <div class="form-group col-md-4">
                                            <label for="checkout-first-name"><li class="fa fa-chalkboard-teacher"></li>&nbsp;Nombre Completo</label>
                                            <input type="text" class="form-control" name="nombre_soporte_wpp" id="nombre_soporte_wpp" placeholder="Nombre..."></div>
                                        <div class="form-group col-md-4">
                                            <label for="checkout-last-name"><li class="fa fa-phone-alt"></li>&nbsp;Telefono (Opcional)</label>
                                            <input type="text" class="form-control" id="telefono_soporte_wpp" name="telefono_soporte_wpp" placeholder="Telefono #...">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="checkout-company-name"><li class="fa fa-envelope-open-text"></li>&nbsp; Correo Electronico (Opcional) </label>
                                            <input type="text" class="form-control" id="mail_soporte_wpp" name="mail_soporte_wpp" placeholder="@">
                                        </div>
                                    </div>

                                    <div class="form-group"><textarea rows="4" id="mensaje_soporte_wpp" name="mensaje_soporte_wpp" class="form-control form-control-lg" placeholder="Mensaje"></textarea></div>
                                    </div>

                                    <div class="form-group">
                                        <a href="#" id="enviarMensaje" class="btn btn-primary cart__update-button"><li class="fa fa-paper-plane"></li>&nbsp;Enviar Mensaje</a>

                                    </div>
                                    <div id="smgWpp">
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
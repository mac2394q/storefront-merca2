<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(MODULE_APP_PATH . "shop/components/shopComponents.php");
require_once(LIB_PATH. "session.php");
$status_session=session::statusSesion($_SESSION['idsesion']); 
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
            <div class="block-map block">

            </div>
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
                                <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Contacto</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="card mb-0 contact-us">
                        <div class="contact-us__map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2327.3217919284953!2d-77.00027297881333!3d3.8753844972311944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e372470d3ee86eb%3A0xa3e3b101691f2b6a!2sBuenaventura%2C%20Valle%20del%20Cauca!5e1!3m2!1ses!2sco!4v1594888718856!5m2!1ses!2sco" 
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="card-body">
                            <div class="contact-us__container">
                                <div class="row">
                                    <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                        <h4 class="contact-us__header card-title">Informacion de Interes</h4>
                                        <div class="contact-us__address">
                                            <p>CRA 56 #7-58 Barrio Independencia ,Buenaventura<br>Email: sarpcolombiasas@mail.com<br>Telefono:  +57 (311) 887 2567</p>
                                            <p><strong>Horario de Apertura</strong><br>Lunes-Domingo 07:00am - 19:00pm</p>
                                            <p style="text-align: justify;"><strong>Nosotros</strong><br>Merca2 llega a Buenaventura para ser el primer supermercado en línea de la ciudad el cual nos ahorrará tiempo y dinero a todos los bonaverenses. Podrás encontrar con nosotros todos los productos que siempre compras de tus marcas preferidas.</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <h4 class="contact-us__header card-title">Dejanos tu mensaje</h4>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6"><label for="form-name">Tu Nombre</label> <input type="text" id="form-name" class="form-control" placeholder="Mi Nombre ..."></div>
                                                <div class="form-group col-md-6"><label for="form-email">Email</label> <input type="email" id="form-email" class="form-control" placeholder="Email ..."></div>
                                            </div>
                                            <div class="form-group"><label for="form-subject">Asunto</label> <input type="text" id="form-subject" class="form-control" placeholder="Mi asunto , Tema ETC...."></div>
                                            <div class="form-group"><label for="form-message">Mensaje</label> <textarea id="form-message" class="form-control" rows="4">Mi mensaje es ...</textarea></div><button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .block-slideshow -->
            <!-- .block-slideshow / end -->

            <!-- .block-features -->

            <!-- .block-features / end -->

            <!-- .block-products-carousel -->
            <!-- .block-products-carousel / end -->

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
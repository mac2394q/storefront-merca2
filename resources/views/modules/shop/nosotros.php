<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(MODULE_APP_PATH . "shop/components/shopComponents.php");
require_once(LIB_PATH . "session.php");

$status_session = session::statusSesion($_SESSION['idsesion']);
error_reporting(0);
ini_set('display_errors', 0);

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
                        <h1>
                            <li class="fa fa-comments"></li>&nbsp;Chatea con Nosotros - Via WhatApp
                        </h1>
                    </div>
                </div>
            </div>
            <div class="block about-us">
                <div class="about-us__image"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-10">
                            <div class="about-us__body">
                                <h1 class="about-us__title">Nosotros .</h1>
                                <div class="about-us__text typography" style="text-align: justify;">
                                    <p>Merca2 llega a Buenaventura para ser el primer supermercado en línea de la ciudad el cual nos ahorrará tiempo y dinero a todos los bonaverenses. Podrás encontrar con nosotros todos los productos que siempre compras de tus marcas preferidas..</p>
                                </div>
                                <div class="about-us__team">
                                    <h2 class="about-us__team-title">Nuestros Equipo</h2>
                                    <div class="about-us__teammates teammates">
                                        <div class="post-card post-card--layout--grid post-card--size--lg">
                                            <div class="post-card__image"><a href=""><img src="<?php echo VENDOR_SERVER . "merca2/images/us.jpg"; ?>" alt=""></a></div>
                                            <div class="post-card__info">
                                                <div class="post-card__category"><a href="https://www.facebook.com/merca2.co/">Merca2 Facebook</a></div>
                                                <div class="post-card__name"><a href="">Tu mejor experiencia</a></div>
                                                <div class="post-card__date">Junio 23, 2020</div>
                                                <div class="post-card__content" style="text-align: justify;">¡Hola a todos! Nos sentimos realmente agradecidos y con el corazón en la mano porque es en nuestra ciudad donde estamos creando un sueño, esperamos seguir contando con su apoyo para que Buenaventura siga cosechando sueños en los corazones colombianos. Recuerda que Merca2 es el primer supermercado online de Buenaventura y puedes encontrar todos los productos en nuestra App Merca2 o por medio de nuestra página web www.merca2.co te registras y listo, ya eres parte de nuestra comunidad</div>
                                                <div class="post-card__read-more"><a href="https://www.facebook.com/merca2.co/" class="btn btn-secondary btn-sm">Leer mas</a></div>
                                            </div>
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
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
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
                    <br>
                    <div class="page-header__title">
                        <h1><li class="fa fa-question"></li>&nbsp;Preguntas Frecuentes</h1>
                    </div>
                </div>
            </div>
            <div class="block faq">
                <div class="container">
                    <div class="faq__section">

                        <div class="faq__section-body">
                            <div class="row">
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Cuánto es lo mínimo que puedo comprar en Merca2?</h6>
                                        <p style="text-align: justify;">Las compras mínimas se pueden realizar desde $10 mil pesos en adelante.</p>

                                    </div>
                                </div>
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Cuánto cuesta el Domicilio?</h6>
                                        <p style="text-align: justify;">El valor del domicilio es de $3.000 actualmente para cualquier pedido.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Cuánto se demoran en entregar los pedidos?</h6>
                                        <p style="text-align: justify;">Los tiempos de entrega van desde 1 - 24 horas máximo, es posible entregar el mismo día dependiendo la agenda.</p>

                                    </div>
                                </div>
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Cómo se realizan los pagos de los pedidos?</h6>
                                        <p style="text-align: justify;">El pago se realiza en efectivo, una vez garantizada la entrega de los productos en el domicilio.(Próximamente Pagos Virtuales).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Qué tipos de productos comercializan?</h6>
                                        <p style="text-align: justify;">Los productos son de las mismas marcas y precios que podrías conseguir en cualquier supermercado tradicional. (La lista de productos disponibles se sigue ampliando día a día).</p>

                                    </div>
                                </div>
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿Cómo puedo acceder a Merca2 desde IPhone o PC?</h6>
                                        <p style="text-align: justify;">Si tienes un equipo Marca IPhone o un computador, puedes utilizar el Link para acceder a la página Web.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="faq__section-column col-12 col-lg-6">
                                    <div class="typography">
                                        <h6><li class="fa fa-bookmark"></li>&nbsp;¿De dónde provienen los productos?</h6>
                                        <p style="text-align: justify;">Los productos son proporcionados desde un sitio de acopio propio y también hay alianzas
                                            estratégicas con establecimientos de comercio de del barrio pueblo nuevo. (Trabajamos con el
                                            comercio local, no con almacenes de cadena)</p>

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
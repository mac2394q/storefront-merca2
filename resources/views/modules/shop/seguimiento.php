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
                                <li class="breadcrumb-item active" aria-current="page">Seguimiento de Pedido</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="card flex-grow-1 mb-0 mt-5">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h1>Seguimiento de mi Pedido</h1>
                                    </div>
                                    <p class="mb-4 pt-2">Ingresa el ID de tu pedido para conocer el estado y el seguimiento de tu orden.</p>
                                    <div>
                                        <div class="form-group">
                                            <label for="track-order-id">ID de Pedido</label>
                                            <input id="track-order-id" type="text" class="form-control" placeholder="Order ID">
                                        </div>
                                        <div class="pt-3">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">Rastrear</button>
                                        </div>
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
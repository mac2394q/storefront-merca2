<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(VIEW_PATH . "components/stoyka/components.php");
require_once(LIB_PATH. "session.php");
$status_session=session::statusSesion($_SESSION['idsesion']); 
$componentsStoykaRender = new componentsStoyka();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require_once(VIEW_PATH . "components/stoyka/head.php"); ?>
</head>

<body>
    <input type="hidden" name="typeView" value="<?php echo $_GET['typeView']; ?>" />
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
                                <?php if ($_GET['typeView'] == 'search') {
                                    echo ' <li class="breadcrumb-item active" aria-current="page">Resultado de la busqueda.</li>';
                                } else {
                                    echo ' <li class="breadcrumb-item active" aria-current="page">Productos</li>';
                                } ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                    </div>
                    <div class="container">
                        <?php if ($_GET['typeView'] == 'search') { ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="block">
                                        <div class="products-view">
                                            <div class="products-view__options">
                                                <div class="view-options view-options--offcanvas--always">
                                                </div>
                                            </div>
                                            <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false" data-mobile-grid-columns="2">
                                                <div class="products-list__body">
                                                    <?php echo $componentsStoykaRender->carouselSearchProductoComponent($_GET); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($_GET['typeView'] == 'profile') {
                            $routeLib = new routesLib();
                            $CoreRoute = new route();
                            $arrayRequest = ["controller" => 'productosController',"method" => 'buscarProductoId',"rowid" => $_GET['rowid']];
                            $EntityProducto = $CoreRoute->handlerRequest($arrayRequest);
                            // echoprint_r($EntityProducto);
                            $imgSrc = URL_IMAGE . $_GET['rowid'] . "/" . $_GET['rowid'];
                            $img1 = VENDOR_SERVER . "merca2/images/unnamed.png";
                            $img2 = VENDOR_SERVER . "merca2/images/unnamed.png";
                            $img3 = VENDOR_SERVER . "merca2/images/unnamed.png";
                            $img4 = VENDOR_SERVER . "merca2/images/unnamed.png";
                            $img5 = VENDOR_SERVER . "merca2/images/unnamed.png";

                            if ($routeLib->validationRoutes($imgSrc . ".jpg") == '200') { $img1 = $imgSrc . ".jpg";}

                            if ($routeLib->validationRoutes($imgSrc . "-2.jpg") == '200') { $img2 = $imgSrc . "-2.jpg";}

                            if ($routeLib->validationRoutes($imgSrc . "-3.jpg") == '200') { $img3 = $imgSrc . "-3.jpg";}

                            if ($routeLib->validationRoutes($imgSrc . "-4.jpg") == '200') {$img4 = $imgSrc . "-4.jpg";}

                            if ($routeLib->validationRoutes($imgSrc . "-5.jpg") == '200') {$img5 = $imgSrc . "-5.jpg";}
                        ?>
                            <div class="block">
                                <div class="container">
                                    <div class="product product--layout--standard" data-layout="standard">
                                        <div class="product__content">
                                            <!-- .product__gallery -->
                                            <div class="product__gallery">
                                                <div class="product-gallery">
                                                    <div class="product-gallery__featured">
                                                        <button class="product-gallery__zoom">
                                                            <svg width="24px" height="24px">
                                                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#zoom-in-24"; ?>"></use>
                                                            </svg>
                                                        </button>
                                                        <div class="owl-carousel" id="product-image">
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="<?php echo $img1; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="<?php echo $img1; ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="<?php echo $img2; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="<?php echo $img2; ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="<?php echo $img3; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="<?php echo $img3; ?>" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="<?php echo $img4; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="<?php echo $img4; ?>" alt="">
                                                                </a></div>
                                                            <div class="product-image product-image--location--gallery">
                                                                <a href="<?php echo $img5; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank">
                                                                    <img class="product-image__img" src="<?php echo $img5; ?>" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-gallery__carousel">
                                                        <div class="owl-carousel" id="product-carousel">
                                                            <a href="<?php echo $img1; ?>" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $img1; ?>" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="<?php echo $img2; ?>" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $img2; ?>" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="<?php echo $img3; ?>" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $img3; ?>" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="<?php echo $img4; ?>" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $img4; ?>" alt="">
                                                                </div>
                                                            </a>
                                                            <a href="<?php echo $img5; ?>" class="product-image product-gallery__carousel-item">
                                                                <div class="product-image__body">
                                                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $img5; ?>" alt="">
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .product__gallery / end -->
                                            <!-- .product__info -->
                                            <div class="product__info">
                                                <h1 class="product__name"><?php echo $EntityProducto->getLabel(); ?></h1>
                                                <div class="product__description"><?php echo $EntityProducto->getDescription(); ?>.</div>
                                                <ul class="product__meta">
                                                    <li class="product__meta-availability">Disponibilidad: 

                                                        <span class="text-success">En Stock</span>

                                                    </li>
                                                    <li>Codigo: <a href=""><?php echo $EntityProducto->getRowid(); ?></a></li>
                                                </ul>
                                            </div><!-- .product__info / end -->
                                            <!-- .product__sidebar -->
                                            <div class="product__sidebar">
                                                <div class="product__availability">Disponibilidad:

                                                    <span class="text-success">En Stock</span>

                                                </div>
                                                <div class="product__prices"><?php echo "$".number_format(round($EntityProducto->getPrice())); ?></div><!-- .product__options -->
                                                <div class="product__options">
                                                    <div class="form-group product__option">
                                                        <div class="product__actions">
                                                            <div class="product__actions-item">
                                                                <div class="input-number product__quantity">
                                                                    <input id="product-quantity" class="input-number__input form-control form-control-lg" name="<?php echo 'qty_' .$EntityProducto->getRowid(); ?>" type="number" min="1" value="1">
                                                                    <div class="input-number__add"></div>
                                                                    <div class="input-number__sub"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product__actions-item product__actions-item--addtocart">
                                                                <input type="hidden" value="<?php echo $img1; ?>" name="<?php echo "img_".$EntityProducto->getRowid(); ?>" />
                                                                <button class="btn btn-primary btn-lg" 
                                                                        lang="<?php echo round($EntityProducto->getPrice()); ?>" 
                                                                        dir="<?php echo $EntityProducto->getLabel(); ?>" 
                                                                        name="<?php echo $EntityProducto->getRowid(); ?>" 
                                                                        id="addCarritoX">Carrito
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .product__options / end -->
                                            </div><!-- .product__end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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
<?php
header("Access-Control-Allow-Origin: *");
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(LIB_PATH . "routesLib.php");
require_once(CONTROLLERS_PATH . "routeController.php");

$productController = new productosController();
$producto = $productController->buscarProductoId($arrayRequest = ["rowid" => $_POST['id_']]);
$preVent = round($producto->getPrice_ttc());
                $preComp = round($producto->getcost_price());
                $ganancia = intval($preVent) - intval($preComp);
                $porcentaje = (intval($ganancia) * 100) / intval($preVent);
                $puntosConsumo = ((intval($preVent) / 12) * intval($porcentaje)) / 1000;
$routeLib = new routesLib();
if ($routeLib->validationRoutes($_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-2.jpg") != '200') {
    $img2 = VENDOR_SERVER . "merca2/images/unnamed.png";
} else {
    $img2 = $_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-2.jpg";
}
if ($routeLib->validationRoutes($_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-3.jpg") != '200') {
    $img3 = VENDOR_SERVER . "merca2/images/unnamed.png";
} else {
    $img3 = $_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-3.jpg";
}
if ($routeLib->validationRoutes($_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-4.jpg") != '200') {
    $img4 = VENDOR_SERVER . "merca2/images/unnamed.png";
} else {
    $img4 = $_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-4.jpg";
}
if ($routeLib->validationRoutes($_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-5.jpg") != '200') {
    $img5 = VENDOR_SERVER . "merca2/images/unnamed.png";
} else {
    $img5 = $_POST['dir_'] . $_POST['id_'] . "/" . $_POST['id_'] . "-5.jpg";
}

?>
<div class="quickview">
    <button class="quickview__close" type="button"><svg width="20px" height="20px">
            <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#cross-20"; ?>"></use>
        </svg>
    </button>
    <div class="product product--layout--quickview" data-layout="quickview">
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
                                <a href="<?php echo $_POST['reserved_']; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="<?php echo $_POST['reserved_']; ?>" alt=""></a></div>
                            <div class="product-image product-image--location--gallery">
                                <a href="<?php echo $img2; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="<?php echo $img2; ?>" alt=""></a></div>
                            <div class="product-image product-image--location--gallery">
                                <a href="<?php echo $img3; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="<?php echo $img3; ?>" alt=""></a></div>
                            <div class="product-image product-image--location--gallery">
                                <a href="<?php echo $img4; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="<?php echo $img4; ?>" alt=""></a></div>
                            <div class="product-image product-image--location--gallery">
                                <a href="<?php echo $img5; ?>" data-width="700" data-height="700" class="product-image__body" target="_blank"><img class="product-image__img" src="<?php echo $img5; ?>" alt=""></a></div>
                        </div>
                    </div>
                    <div class="product-gallery__carousel">
                        <div class="owl-carousel" id="product-carousel">
                            <a href="<?php echo $_POST['reserved_']; ?>" class="product-image product-gallery__carousel-item">
                                <div class="product-image__body">
                                    <img class="product-image__img product-gallery__carousel-image" src="<?php echo $_POST['reserved_']; ?>" alt="">
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

                <h1 class="product__name"><?php echo $_POST['title_']; ?></h1>

                <div class="product__description"><?php echo $_POST['name_']; ?>.</div>

                <ul class="product__meta">
                    <li class="product__meta-availability">Disponibilidad: <span class="text-success">En Stock</span></li>
                    <li>Codigo: <a href=""><?php echo $_POST['id_']; ?></a></li>

                </ul>
            </div><!-- .product__info / end -->
            <!-- .product__sidebar -->
            <div class="product__sidebar">
                <div class="product__availability">Disponibilidad: <span class="text-success">En Stock</span></div>
                <div class="product__prices"><?php echo "Precio $" . $_POST['lang_']; ?></div><!-- .product__options -->
                <div class="product__prices"><?php echo "Puntos:" . $puntosConsumo; ?></div>
                <div class="product__options">

                    <div class="form-group product__option">
                        <div class="product__actions">
                            <div class="product__actions-item">
                                <div class="input-number product__quantity">
                                    <input id="product-quantity" class="input-number__input form-control form-control-lg" name="<?php echo 'qty_' . $_POST['id_']; ?>" type="number" min="1" value="1">
                                    <div class="input-number__add"></div>
                                    <div class="input-number__sub"></div>
                                </div>

                            </div>
                            <div class="product__actions-item product__actions-item--addtocart">
                                <input type="hidden" value="<?php echo $_POST['reserved_']; ?>" name="<?php echo "img_".$_POST['id_']; ?>" />
                                <button class="btn btn-primary btn-lg" 
                                    lang="<?php echo $_POST['lang_']; ?>" 
                                    dir="<?php echo $_POST['title_']; ?>" 
                                    name="<?php echo $_POST['id_']; ?>" 
                                    id="addCarritoX">Carrito
                                </button>
                            </div>

                        </div>
                    </div>
                </div><!-- .product__options / end -->
            </div><!-- .product__end -->
            <div class="product__footer">
                <div class="product__tags tags">

                </div>
                <div class="product__share-links share-links">

                </div>
            </div>
        </div>
    </div>
</div>
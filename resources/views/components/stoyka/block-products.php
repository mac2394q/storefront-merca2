<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(VIEW_PATH . "components/stoyka/components.php");
$componentsStoykaRender = new componentsStoyka();


//$componentsStoykaRender->blockProductoCarousel();
$route = new route();
$arrayRequest = ["controller" => 'categoriasController', "method" => 'listadocategorias'];
$response = $route->handlerRequest($arrayRequest);
?>


<?php
foreach ($response as $key => $value) {
    if ($response[$key]->getFk_parent() == 0) {
?>

        <?php
        ?>
        <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
            <div class="container">
                <div class="alert alert-success mb-3" style="border-color: #47991f;
                                                 background: #47991f;
                                                 color: #fff;
                                                 fill: #fff;">
                <div class="block-header" >
                   
                    <h3 class="block-header__title"><?php echo $response[$key]->getLabel(); ?></h3>
                    <div class="block-header__divider"></div>


                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-left-7x11"; ?>"></use>
                            </svg>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <svg width="7px" height="11px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-right-7x11"; ?>"></use>
                            </svg>
                        </button>
                    </div>
                  
                </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2524px, 0px, 0px); transition: all 0.25s ease 0s; width: 8978px; padding-left: 1px; padding-right: 1px;">
                                <?php
                                $arrayProducts = $componentsStoykaRender->blockProductoCarousel($response[$key]->getRowid());
                                if ($arrayProducts != false) {
                                    echo $componentsStoykaRender->blockProductoCarousel($response[$key]->getRowid());
                                } else {
                                    echo "<div class='alert alert-warning mb-0'>Actualmente no hay producto en esta categoria</div>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                            </button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>
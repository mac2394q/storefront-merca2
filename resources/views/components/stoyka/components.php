<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(LIB_PATH . "routesLib.php");
class componentsStoyka
{
    public function selectorMenuCategoria()
    {
        $route = new route();
        $arrayRequest = ["controller" => 'categoriasController', "method" => 'listadocategorias'];
        $response = $route->handlerRequest($arrayRequest);
        $render = '
        <select class="search__categories" aria-label="Category" name="selectorMenuCategoria">
            <option value="all">Todas las categorias</option>
        ';
        foreach ($response as $key => $value) {
            if ($response[$key]->getFk_parent() == 0 && $response[$key]->gettype() == 0) {
                $render = $render . '<option value="' . $response[$key]->getRowid() . '">' . $response[$key]->getLabel() . '</option>';
            }
        }
        $render = $render . '</select> ';
        return $render;
    }
    public function asideMenuCategoria()
    {
        $route = new route();
        $arrayRequest = ["controller" => 'categoriasController', "method" => 'listadocategorias'];
        $response = $route->handlerRequest($arrayRequest);
        $render = '
        <ul class="departments__links">';
        foreach ($response as $key => $value) {
            if ($response[$key]->getFk_parent() == 0 &&  $response[$key]->gettype() == 0 &&  $response[$key]->getCountSubCategorias() > 0) {
                $imageVector =  VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-right-6x9";
                $imageMenu =  VENDOR_SERVER . "merca2/images/megamenu/megamenu-1.jpg";
                $url_categoria_base = MODULE_APP_SERVER . "shop/productos.php?typeView=search&etiqueta=&categoria=" . $response[$key]->getRowid();
                $render .= '
                <li class="departments__item">
                    <a class="departments__item-link" href="#" title="' . $response[$key]->getRowid() . '">' . $response[$key]->getLabel() . ' 
                        <svg class="departments__item-arrow" width="6px" height="9px"><use xlink:href="' . $imageVector . '"></use></svg>
                    </a>
                    <div class="departments__submenu departments__submenu--type--megamenu departments__submenu--size--nl">
                        <div class="megamenu megamenu--departments">
                            <div class="megamenu__body"  >
                                <div class="row">
                                    <div class="col-8">
                                        <ul class="megamenu__links megamenu__links--level--0">
                                            <li class="megamenu__item megamenu__item--with-submenu"><a href="' . $url_categoria_base . '">' . $response[$key]->getLabel() . '</a>
                                                <ul class="megamenu__links megamenu__links--level--1">';
                foreach ($response[$key]->getArraySubCategorias() as $key_ => $value) {
                    $url_categoria = MODULE_APP_SERVER . "shop/productos.php?typeView=search&etiqueta=&categoria=" . $response[$key]->getArraySubCategorias()[$key_]->getRowid();
                    $render .= '     
                                                    <li class="megamenu__item"><a href="' . $url_categoria . '" title="' . $response[$key]->getArraySubCategorias()[$key_]->getRowid() . '">' . $response[$key]->getArraySubCategorias()[$key_]->getLabel() . '</a></li>';
                }
                $render .= '                    </ul>  
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                $render .= '
                </i>';
            } elseif ($response[$key]->getFk_parent() == 0 &&  $response[$key]->getCountSubCategorias() == 0 &&  $response[$key]->gettype() == 0 ) {
                $render .= '<li class="departments__item"><a class="departments__item-link" href="#" title="' . $response[$key]->getRowid() . '">' . $response[$key]->getLabel() . ' </a></li>';
                $render .= '</i>';
            }
        }
        $render .= '
        </ul>';
        return $render;
    }
    public function asideMenuCategoriaMobile()
    {
        $route = new route();
        $arrayRequest = ["controller" => 'categoriasController', "method" => 'listadocategorias'];
        $response = $route->handlerRequest($arrayRequest);
        $render = '
       ';
        foreach ($response as $key => $value) {
            if ($response[$key]->getFk_parent() == 0 && $response[$key]->gettype() == 0   ) {
                $render .= '<li class="mobile-links__item" data-collapse-item="">
                <div class="mobile-links__item-title">
                <a href="http://merca2.cf/resources/views/modules/shop/productos.php?typeView=search&etiqueta=&categoria=' . $response[$key]->getRowid() . '" title="' . $response[$key]->getRowid() . '" class="mobile-links__item-link">' . $response[$key]->getLabel() . '</a>
                </div>
                </i>';
            }
        }
        $render .= '
       ';
        return $render;
    }
    public function blockProductoCarousel($rowid)
    {
        $route = new route();
        $routeLib = new routesLib();
        $arrayRequest = [
            "controller" => 'productosController',
            "method" => 'listadoCategoriasProductos',
            "rowid" => $rowid,
            "limit" => 5
        ];
        $response = $route->handlerRequest($arrayRequest);
        $render = '';
        if (count($response) > 0) {


            foreach ($response as $key => $value) {
                $id = $response[$key]->getRowid();
                $cantidad = 1;
                $urlBase =  URL_IMAGE;
                $img = "";
                if ($routeLib->validationRoutes($urlBase . $id . "/" . $id . ".jpg") != '200') {
                    $img = VENDOR_SERVER . "merca2/images/unnamed.png";
                } else {
                    $img = URL_IMAGE . $id . "/" . $id . ".jpg";
                }
                $urlProducto = MODULE_APP_SERVER . 'shop/productos.php?typeView=profile&rowid=' . $id;
                $preVent = round($response[$key]->getPrice_ttc());
                $preComp = round($response[$key]->getcost_price());
                $ganancia = intval($preVent) - intval($preComp);
                $porcentaje = (intval($ganancia) * 100) / intval($preVent);
                $puntosConsumo = ((intval($preVent) / 12) * intval($porcentaje)) / 1000;
                $render .= '
        <div class="owl-item " style="width: 286.5px; margin-right: 14px;">
            <div class="block-products-carousel__column">
                <div class="block-products-carousel__cell">
                    <div class="product-card product-card--hidden-actions">
                       <button 
                            name="' . $response[$key]->getDescription() . '" 
                            lang="' . number_format(round($response[$key]->getPrice_ttc())) . '" 
                            title="' . $response[$key]->getLabel() . '"
                            reserved="' . $img . '"  
                            id="' . $id . '"
                            dir="' . $img . '"
                            value="'.$response[$key]->getcost_price().'"
                            class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                                <use xlink:href="' . VENDOR_SERVER . "merca2/images/sprite.svg#quickview-16" . '"></use>
                            </svg> 
                            <span class="fake-svg-icon"></span>
                        </button>
                        <div class="product-card__image product-image"><a href="' . $urlProducto . '" class="product-image__body"><img class="product-image__img" src="' . $img . '" alt=""></a></div>
                        <div class="product-card__info">
                            <div class="product-card__name"><a href="' . $urlProducto . '"><strong>' . $response[$key]->getLabel() . '</strong></a></div>
                            <div class="product-card__rating">
                               
                                <div class="product-card__rating-legend" style="text-align: justify"> ' . $response[$key]->getDescription() . '     </div>
                            </div>
                            
                        </div>
                        <div class="product-card__actions">
                          
                            <div class="product-card__prices" style="color: #B60606;">Precio $' . number_format(round($response[$key]->getPrice_ttc())) . '  <br>  Puntos: ' . round($puntosConsumo, 1) . '</div>
                            <div class="product-card__buttons">
                            <button class="btn btn-primary product-card__addtocart" 
                            lang="' . round($response[$key]->getPrice_ttc()) . '" 
                            title="' . $response[$key]->getLabel() . '"
                            reserved="' . $img  . '"  
                            dir="' . $id . '"
                            name="' . $cantidad . '"
                            id="addCarrito" type="button">Agregar</button> 
                            
                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" 
                            lang="' . round($response[$key]->getPrice_ttc()) . '" 
                            title="' . $response[$key]->getLabel() . '"
                            reserved="' . $img  . '"  
                            dir="' . $id . '"
                            name="' . $cantidad . '"
                            id="addCarrito" type="button">Carrito</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
            }
            return $render;
        } else {
            return false;
        }
    }
    public function profileProductoComponent($rowid)
    {
        $route = new route();
        $routeLib = new routesLib();
        $arrayRequest = [
            "controller" => 'productosController',
            "method" => 'listadoCategoriasProductos',
            "rowid" => $rowid,
            "limit" => 5
        ];
        $response = $route->handlerRequest($arrayRequest);
        $render = '';
        $id = $response->getRowid();
        $cantidad = 1;
        $urlBase =  URL_IMAGE;
        $img = "";
        if ($routeLib->validationRoutes($urlBase . $id . "/" . $id . ".jpg") != '200') {
            $img = VENDOR_SERVER . "merca2/images/unnamed.png";
        } else {
            $img = URL_IMAGE . $id . "/" . $id . ".jpg";
        }
        $urlProducto = "";
        $preVent = round($response->getPrice_ttc());
        $preComp = round($response->getcost_price());
        $ganancia = intval($preVent) - intval($preComp);
        $porcentaje = (intval($ganancia) * 100) / intval($preVent);
        $puntosConsumo = ((intval($preVent) / 12) * intval($porcentaje)) / 1000;
        $render .= '
            <div class="owl-item " style="width: 286.5px; margin-right: 14px;">
            <div class="block-products-carousel__column">
                <div class="block-products-carousel__cell">
                    <div class="product-card product-card--hidden-actions">
                       <button 
                            name="' . $response->getDescription() . '" 
                            lang="' . number_format(round($response->getPrice_ttc())) . '" 
                            title="' . $response->getLabel() . '"
                            reserved="' . $img . '"  
                            id="' . $id . '",
                            dir="' . $img . '"
                            class="product-card__quickview" type="button">
                            <svg width="16px" height="16px">
                                <use xlink:href="' . VENDOR_SERVER . "merca2/images/sprite.svg#quickview-16" . '"></use>
                            </svg> 
                            <span class="fake-svg-icon"></span>
                        </button>
                        <div class="product-card__image product-image"><a href="' . $urlProducto . '" class="product-image__body"><img class="product-image__img" src="' . $img . '" alt=""></a></div>
                        <div class="product-card__info">
                            <div class="product-card__name"><a href="' . $urlProducto . '">' . $response->getLabel() . '</a></div>
                            <div class="product-card__rating">
                               
                                <div class="product-card__rating-legend" style="text-align: justify"> ' . $response->getDescription() . '     </div>
                            </div>
                            
                        </div>
                        <div class="product-card__actions">
                          
                            <div class="product-card__prices">Precio $' . number_format(round($response->getPrice_ttc())) . '      Puntos: ' . round($puntosConsumo, 1) . '</div>
                            <div class="product-card__buttons">
                            <button class="btn btn-primary product-card__addtocart" 
                            lang="' . round($response->getPrice_ttc()) . '" 
                            title="' . $response->getLabel() . '"
                            reserved="' . $img . '"  
                            dir="' . $id . '"
                            name="' . $cantidad . '"
                            id="addCarrito" type="button">Carrito</button> 
                            
                            <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" 
                            lang="' . round($response->getPrice_ttc()) . '" 
                            title="' . $response->getLabel() . '"
                            reserved="' . $img . '"  
                            dir="' . $id . '"
                            name="' . $cantidad . '"
                            id="addCarrito" type="button">Carrito</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        return $render;
    }
    public function carouselSearchProductoComponent($arrayRequestProducto)
    {
        $route = new route();
        $routeLib = new routesLib();
        $arrayRequest = [
            "controller" => 'productosController',
            "method" => 'listadoCategoriasProductosBusqueda',
            "field" => $arrayRequestProducto['etiqueta'],
            "rowid" => $arrayRequestProducto['categoria'],
            "limit" => 250
        ];
        $response = $route->handlerRequest($arrayRequest);
        $render = '';
        if ($response != false) {
            foreach ($response as $key => $value) {
                $id = $response[$key]->getRowid();
                $cantidad = 1;
                $urlBase =  URL_IMAGE;
                $img = "";
                if ($routeLib->validationRoutes($urlBase . $id . "/" . $id . ".jpg") != '200') {
                    $img = VENDOR_SERVER . "merca2/images/unnamed.png";
                } else {
                    $img = URL_IMAGE . $id . "/" . $id . ".jpg";
                }
                $urlProducto = "";
                $preVent = round($response[$key]->getPrice_ttc());
                $preComp = round($response[$key]->getcost_price());
                $ganancia = intval($preVent) - intval($preComp);
                $porcentaje = (intval($ganancia) * 100) / intval($preVent);
                $puntosConsumo = ((intval($preVent) / 12) * intval($porcentaje)) / 1000;
                $render .= '
                
                <div class="products-list__item">
                        <div class="product-card product-card--hidden-actions">
                           <button 
                                name="' . $response[$key]->getDescription() . '" 
                                lang="' . number_format(round($response[$key]->getPrice_ttc())) . '" 
                                title="' . $response[$key]->getLabel() . '"
                                reserved="' . $img . '"  
                                id="' . $id . '",
                                dir="' . $urlBase . '"
                                class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="' . VENDOR_SERVER . "merca2/images/sprite.svg#quickview-16" . '"></use>
                                </svg> 
                                <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__image product-image"><a href="' . $urlProducto . '" class="product-image__body"><img class="product-image__img" src="' . $img . '" alt=""></a></div>
                            <div class="product-card__info">
                                <div class="product-card__name"><a href="' . $urlProducto . '">' . $response[$key]->getLabel() . '</a></div>
                                <div class="product-card__rating">
                                   
                                    <div class="product-card__rating-legend" style="text-align: justify"> ' . $response[$key]->getDescription() . '     </div>
                                </div>
                                
                            </div>
                            <div class="product-card__actions">
                              
                                <div class="product-card__prices">Precio $' . number_format(round($response[$key]->getPrice_ttc())) . '       Puntos: ' . round($puntosConsumo, 1) . '</div>
                                <div class="product-card__buttons">
                                <button class="btn btn-primary product-card__addtocart" 
                                lang="' . round($response[$key]->getPrice_ttc()) . '" 
                                title="' . $response[$key]->getLabel() . '"
                                reserved="' . $img . '"  
                                dir="' . $id . '"
                                name="' . $cantidad . '"
                                id="addCarrito" type="button">Agregar Carrito</button> 
                                
                                <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" 
                                lang="' . round($response[$key]->getPrice_ttc()) . '" 
                                title="' . $response[$key]->getLabel() . '"
                                reserved="' . $img . '"  
                                dir="' . $id . '"
                                name="' . $cantidad . '"
                                id="addCarrito" type="button">Agregar Carrito</button> 
                                </div>
                            </div>
                        </div>
                </div>
                ';
            }
        } else {
            echo "
             <div class='alert alert-danger mb-3'>
                Actualmente no hay productos en esta categoria.
             
             </div>";
        }

        return $render;
    }
}

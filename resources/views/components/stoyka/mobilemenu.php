<!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(VIEW_PATH . "components/stoyka/components.php");
require_once(LIB_PATH . "session.php");
$componentsStoykaRender = new componentsStoyka();
?>
<div class="mobile-header mobile-header--sticky" data-sticky-mode="pullToShow">
    <div class="mobile-header__panel">
        <div class="container">
            <div class="mobile-header__body">
                <button class="mobile-header__menu-button">
               
                <br><br><br><br><br><br><br>
               &nbsp;&nbsp;&nbsp;&nbsp;
                <li class="fa fa-bars fa-2x text-white"></li>
                
                </button>
                <a class="mobile-header__logo" href="<?php echo SERVER_PATH; ?>">
                    <!-- mobile-logo -->
                    <!-- logo -->
                    <!-- <img src="http://merca2.cf/vendor/merca2/images/LOGOMERCA2-02.png" width="200px" height="40px"> -->
                    <!-- logo / end -->
                    <!-- mobile-logo / end -->
                    <img src="http://merca2.cf/vendor/merca2/images/LOGOMERCA2-02.png" width="80" height="70px">
                </a>
                <div class="search search--location--mobile-header mobile-header__search">
                    <div class="search__body">
                        <div class="search__form" action="">
                            <input class="search__input" name="etiquetaBusquedad2" id="etiquetaBusquedad2" placeholder="Busca entre mas de 1000 productos disponibles" type="text" autocomplete="on">
                            <button class="search__button search__button--type--submit" type="button" id="buscarProducto2">
                                <svg width="20px" height="20px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#search-20"; ?>"></use>
                                </svg>
                            </button>
                            <button class="search__button search__button--type--close" type="button">
                                <svg width="20px" height="20px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#cross-20"; ?>"></use>
                                </svg>
                            </button>
                            <div class="search__border"></div>
                        </div>
                        <div class="search__suggestions suggestions suggestions--location--mobile-header"></div>
                    </div>
                </div>
                <div class="mobile-header__indicators">
                    <div class="indicator indicator--mobile-search indicator--mobile d-md-none">
                        <button class="indicator__button">
                            <span class="indicator__area">
                                <svg width="20px" height="20px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#search-20"; ?>"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="indicator indicator--mobile" id="btnCarrito_">
                        <a id="#" href="#" class="indicator__button">
                            <span class="indicator__area">
                                <svg width="20px" height="20px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#cart-20"; ?>"></use>
                                </svg>
                                <span id="indicadorCarritoRender2" class="indicator__value">0</span>
                            </span>
                        </a>
                    </div>
                    <div class="indicator indicator--mobile" >
                        <a  href="<?php echo MODULE_APP_SERVER . 'shop/chatea.php '; ?>" class="indicator__button">
                            <span class="indicator__area">
                            <i class="fab fa-whatsapp"></i>
                               
                            </span>
                        </a>
                    </div>
                    <!-- <div class="indicator indicator--mobile" >
                        <a  href="tel:+57-311-887-2567" class="indicator__button">
                            <span class="indicator__area">
                                <li class="fa fa-phone-alt"></li>
                              
                            </span>
                        </a>
                    </div>
                    <div class="indicator indicator--mobile" >
                        <a  href="http://portalx.net/erp_sarp/public/ticket/index.php" class="indicator__button">
                            <span class="indicator__area">
                                <li class="fa fa-question"></li>
                               
                            </span>
                        </a>
                    </div>
                    <div class="indicator indicator--mobile" >
                        <a  href="<?php echo MODULE_APP_SERVER . 'shop/faq.php '; ?>" class="indicator__button">
                            <span class="indicator__area">
                                <li class="fa fa-info-circle"></li>
                               
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#cross-20"; ?>"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse="" data-collapse-opened-class="mobile-links__item--open">


                <li class="mobile-links__item" data-collapse-item="">
                    <div class="mobile-links__item-title">
                        <a href="#" class="mobile-links__item-link">Mi Cuenta</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-12x7"; ?>"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content="">
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/sesionMerca2.php'; ?>" class="mobile-links__item-link">Iniciar Sesion</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/registroMerca2.php'; ?>" class="mobile-links__item-link">Registrate</a></div>
                            </li>
                            <?php if ($status_session) { ?>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/dashboard.php?id=' . $_SESSION['idsesion']; ?>" class="mobile-links__item-link">Editar Perfil</a></div>
                                </li>
                                
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/history.php?id=' . $_SESSION['idsesion']; ?>" class="mobile-links__item-link">Historial</a></div>
                                </li>
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="#" id="logout" class="mobile-links__item-link">Cerrar Sesion</a></div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </li>
                <?php if ($status_session) { ?>
                    <li class="mobile-links__item" data-collapse-item="">
                        <div class="mobile-links__item-title"><a href="blog-classic.html" class="mobile-links__item-link">Empresarios SARP</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger=""><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-12x7"; ?>"></use>
                                </svg></button></div>
                        <div class="mobile-links__item-sub-links" data-collapse-content="">
                            <ul class="mobile-links mobile-links--level--1">
                                <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/empresarios.php?id=' . $_SESSION['idsesion']; ?>" class="mobile-links__item-link">Oficina Virtual</a></div>
                                </li>
                               
                            </ul>
                        </div>
                    </li>
                <?php } ?>
                <li class="mobile-links__item" data-collapse-item="">
                    <div class="mobile-links__item-title">
                        <a href="" class="mobile-links__item-link">Ayudas</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger="">
                            <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-12x7"; ?>">
                                </use>
                            </svg>
                        </button>
                    </div>
                    <div class="mobile-links__item-sub-links" data-collapse-content="">
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="http://merca2.cf/resources/views/modules/shop/nosotros.php" class="mobile-links__item-link">Acerca de Nosotros</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/chatea.php '; ?>" class="mobile-links__item-link">Chatea con Nosotros</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="tel:+57-311-887-2567" class="mobile-links__item-link">Agreganos al WhatsApp</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="http://portalx.net/erp_sarp/public/ticket/index.php" class="mobile-links__item-link">PQRS</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/faq.php '; ?>" class="mobile-links__item-link">FAQ</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/terminos.php '; ?>" class="mobile-links__item-link">Terminos y Condiciones</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/contacto.php '; ?>" class="mobile-links__item-link">Contacto</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="https://goo.gl/maps/sVNq6V9ueprzzaTe6" class="mobile-links__item-link">Ubicanos en Google Maps</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                    <div class="mobile-links__item-title"><a href="<?php echo MODULE_APP_SERVER . 'shop/seguimiento.php '; ?>" class="mobile-links__item-link">Seguimiento de Orden</a></div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobile-links__item" data-collapse-item="">
                    <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">Redes Sociales</a> <button class="mobile-links__item-toggle" type="button" data-collapse-trigger=""><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-12x7"; ?>"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content="">
                        <ul class="mobile-links mobile-links--level--1">
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="https://www.facebook.com/merca2.co" class="mobile-links__item-link">Facebook</a></div>
                            </li>
                            <li class="mobile-links__item" data-collapse-item="">
                                <div class="mobile-links__item-title"><a href="https://www.instagram.com/sarpcolombia/?hl=es-la" class="mobile-links__item-link">Instagram</a></div>
                            </li>

                        </ul>
                    </div>
                </li>
 
                <li class="mobile-links__item" data-collapse-item="">
                    <div class="mobile-links__item-title"><a href="" class="mobile-links__item-link">Secciones</a>
                        <button class="mobile-links__item-toggle" type="button" data-collapse-trigger=""><svg class="mobile-links__item-arrow" width="12px" height="7px">
                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-12x7"; ?>"></use>
                            </svg></button></div>
                    <div class="mobile-links__item-sub-links" data-collapse-content="">
                        <ul class="mobile-links mobile-links--level--1">
                           <?php echo $componentsStoykaRender->asideMenuCategoriaMobile(); ?>    
                      

                        </ul>
                    </div>

                </li>

            </ul>
        </div>
    </div>
</div>
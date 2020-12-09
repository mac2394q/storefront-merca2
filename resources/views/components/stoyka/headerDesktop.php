<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(VIEW_PATH . "components/stoyka/components.php");
require_once(LIB_PATH . "session.php");
$componentsStoykaRender = new componentsStoyka();
$status_session = session::statusSesion($_SESSION['idsesion']);
?>
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="<?php echo MODULE_APP_SERVER . 'shop/nosotros.php'; ?>">
                            <li class="fa fa-address-card"></li>&nbsp;Nosotros
                        </a>
                    </div>
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="<?php echo MODULE_APP_SERVER . 'shop/contacto.php '; ?>">
                            <li class="fa fa-info-circle"></li>&nbsp;Contacto
                        </a>
                    </div>
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="<?php echo MODULE_APP_SERVER . 'shop/seguimiento.php '; ?>">
                            <li class="fa fa-search-location"></li>&nbsp;Seguimiento de tu Orden
                        </a>
                    </div>
                    <?php if ($status_session) { ?>
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="<?php echo MODULE_APP_SERVER . 'shop/empresarios.php '; ?>">
                            <li class="fa fa-users"></li>&nbsp;Empresarios
                        </a>
                    </div>
                    <?php } ?>
                    <div class="topbar__spring"></div>
                    <?php if ($status_session) { ?>
                        <div class="topbar__item">
                            <div class="topbar-dropdown">
                                <button class="topbar-dropdown__btn" type="button">
                                    <li class="fa fa-id-badge"></li>&nbsp;Mi Cuenta
                                    <svg width="7px" height="5px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-7x5"; ?>">
                                        </use>
                                    </svg>
                                </button>
                                <div class="topbar-dropdown__body">
                                    <!-- .menu -->
                                    <div class="menu menu--layout--topbar">
                                        <div class="menu__submenus-container"></div>
                                        <ul class="menu__list">
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="<?php echo MODULE_APP_SERVER . 'shop/dashboard.php?id=' . $_SESSION['idsesion']; ?>">Mi Dasboard</a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="<?php echo MODULE_APP_SERVER . 'shop/profile.php?id=' . $_SESSION['idsesion']; ?>">Editar
                                                    Perfil</a>
                                            </li>


                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="<?php echo MODULE_APP_SERVER . 'shop/history.php?id=' . $_SESSION['idsesion'] ?>">Historial</a>
                                            </li>
                                            <li class="menu__item">
                                                <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="#" id="logout">Cerrar Sesion</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu / end -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="topbar__item">
                        <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">
                                <li class="fa fa-money-bill-wave"></li>&nbsp;Moneda: <span class="topbar__item-value">COP</span> <svg width="7px" height="5px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-7x5"; ?>">
                                    </use>
                                </svg>
                            </button>
                            <div class="topbar-dropdown__body">
                                <!-- .menu -->
                                <div class="menu menu--layout--topbar">
                                    <div class="menu__submenus-container"></div>
                                    <ul class="menu__list">
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="#">$ Peso COP</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">
                                <li class="fa fa-language"></li>&nbsp;Lenguaje: <span class="topbar__item-value">ES</span> <svg width="7px" height="5px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-7x5"; ?>">
                                    </use>
                                </svg>
                            </button>
                            <div class="topbar-dropdown__body">
                                <!-- .menu -->
                                <div class="menu menu--layout--topbar menu--with-icons">
                                    <div class="menu__submenus-container"></div>
                                    <ul class="menu__list">
                                        <li class="menu__item">
                                            <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                            <div class="menu__item-submenu-offset"></div>
                                            <a class="menu__item-link" href="#">
                                                <div class="menu__item-icon"><img srcset="<?php echo VENDOR_SERVER . "merca2/images/languages/language-1.png"; ?>, <?php echo VENDOR_SERVER . "merca2/images/languages/language-1@2x.png 2x"; ?>" src="<?php echo VENDOR_SERVER . "merca2/images/languages/language-1.png"; ?>" alt=""></div>Español
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- .topbar / end -->
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="<?php echo SERVER_PATH; ?>">
                    <!-- logo -->
                    <img src="http://merca2.cf/vendor/merca2/images/Merca2-Logo-app.png" width="200px" height="40px">
                    <!-- logo / end -->
                </a>
            </div>
            <div class="site-header__search">
                <div class="search search--location--header">
                    <div class="search__body">
                        <div class="search__form">
                            <?php echo $componentsStoykaRender->selectorMenuCategoria(); ?>
                            <input class="search__input" name="etiquetaBusquedad_"  placeholder="Busca entre mas de 1000 productos disponibles" type="text" autocomplete="on">
                            <button class="search__button search__button--type--submit" type="button" id="buscarProducto">
                                <svg width="20px" height="20px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#search-20"; ?>">
                                    </use>
                                </svg>
                            </button>
                            <div class="search__border"></div>
                        </div>
                        <div class="search__suggestions suggestions suggestions--location--header"></div>
                    </div>
                </div>
            </div>
            <div class="site-header__phone">
                <div class="site-header__phone-title">
                    <li class="fa fa-headphones"></li>&nbsp;Servicio al Cliente, has click aqui!
                </div>
                <div class="site-header__phone-number">
                    <a href="tel:+57-311-887-2567">
                        <li class="fa fa-phone"></li>&nbsp;+57 (311) 887 2567
                    </a>
                </div>
                <div class="site-header__phone-number" id="smg">
                </div>
            </div>
        </div>


        <div class="site-header__nav-panel">
            <!-- data-sticky-mode - one of [pullToShow, alwaysOnTop] -->
            <div class="nav-panel nav-panel--sticky" data-sticky-mode="pullToShow">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__departments">
                            <!--.departments -->
                            <div class="departments" data-departments-fixed-by="">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <div class="departments__submenus-container"></div>
                                        <?php echo $componentsStoykaRender->asideMenuCategoria(); ?>
                                    </div>
                                </div>
                                <button class="departments__button">
                                    <svg class="departments__button-icon" width="18px" height="14px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#menu-18x14"; ?>">
                                        </use>
                                    </svg> Secciones Disponibles
                                    <svg class="departments__button-arrow" width="9px" height="6px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-9x6"; ?>">
                                        </use>
                                    </svg>
                                </button>
                            </div>
                            <!-- .departments / end -->
                        </div>
                        <!-- .nav-links -->
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item"><a class="nav-links__item-link" href="<?php echo SERVER_PATH; ?>">
                                        <div class="nav-links__item-body">Inicio</div>
                                    </a>
                                </li>
                                <li class="nav-links__item"><a class="nav-links__item-link" href="<?php echo MODULE_APP_SERVER . 'shop/nosotros.php '; ?>">
                                        <div class="nav-links__item-body">Nosotros</div>
                                    </a>
                                </li>

                                <li class="nav-links__item nav-links__item--has-submenu">
                                    <a class="nav-links__item-link" href="<?php echo SERVER_PATH . "/servicios.php?type=service"; ?>">
                                        <div class="nav-links__item-body">Servicios <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-9x6"; ?>">
                                                </use>
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="nav-links__submenu nav-links__submenu--type--menu" style="">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--classic">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="<?php echo SERVER_PATH; ?>">Tienda
                                                        Merca2</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="https://play.google.com/store/apps/details?id=com.aitheria.merca2">App</a>
                                                </li>

                                                <?php if ($status_session) { ?>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/empresarios.php '; ?>">Empresarios SARP</a>
                                                </li>
                                                <?php }?>

                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/seguimiento.php '; ?>">Seguimiento de Orden</a>
                                                </li>
                                            </ul>
                                        </div><!-- .menu / end -->
                                    </div>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="#">
                                        <div class="nav-links__item-body">Atencion al Cliente <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-9x6"; ?>">
                                                </use>
                                            </svg>
                                        </div>
                                    </a>
                                    <div class="nav-links__submenu nav-links__submenu--type--menu" style="">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--classic">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link"  target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/chatea.php '; ?>" >Chatea con Nosotros</a>
                                                    
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="http://portalx.net/erp_sarp/public/ticket/index.php">PQRS</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/faq.php '; ?>">FAQ</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/terminos.php '; ?>">Terminos y Condiciones</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" href="<?php echo MODULE_APP_SERVER . 'shop/contacto.php '; ?>">Contacto</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="https://goo.gl/maps/sVNq6V9ueprzzaTe6">Ubicanos en Google Maps</a>
                                                </li>
                                            </ul>
                                        </div><!-- .menu / end -->
                                    </div>
                                </li>
                                <li class="nav-links__item nav-links__item--has-submenu"><a class="nav-links__item-link" href="<?php echo SERVER_PATH . "/servicios.php?type=social"; ?>">
                                        <div class="nav-links__item-body">Redes Sociales <svg class="nav-links__item-arrow" width="9px" height="6px">
                                                <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-down-9x6"; ?>">
                                                </use>
                                            </svg></div>
                                    </a>
                                    <div class="nav-links__submenu nav-links__submenu--type--menu" style="">
                                        <!-- .menu -->
                                        <div class="menu menu--layout--classic">
                                            <div class="menu__submenus-container"></div>
                                            <ul class="menu__list">
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="https://www.facebook.com/merca2.co">Facebook</a>
                                                </li>
                                                <li class="menu__item">
                                                    <!-- This is a synthetic element that allows to adjust the vertical offset of the submenu using CSS. -->
                                                    <div class="menu__item-submenu-offset"></div><a class="menu__item-link" target="_blank" href="https://www.instagram.com/sarpcolombiasas/">Instagram</a>
                                                </li>
                                            </ul>
                                        </div><!-- .menu / end -->
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- .nav-links / end -->
                        <div class="nav-panel__indicators">
                            <div class="indicator indicator--trigger--click">
                                <a href="#" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#cart-20"; ?>">
                                            </use>
                                        </svg>
                                        <span id="indicadorCarritoRender" class="indicator__value">0</span>
                                    </span>
                                </a>
                                <div class="indicator__dropdown">
                                    <!-- .dropcart -->
                                    <div class="dropcart dropcart--style--dropdown">
                                        <div class="dropcart__body">
                                            <div id="dropcart__products-list_render" class="dropcart__products-list">


                                            </div>
                                            <div class="dropcart__totals">
                                                <table>
                                                    <tr>
                                                        <th>Subtotal</th>
                                                        <td id="subtotal">0</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Envio</th>
                                                        <td>$3000</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td id="subtotal2">0</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="dropcart__buttons">
                                                <span id="btnCarrito"><a class="btn btn-secondary" href="#">Carrito</a></span>
                                                <span id="btnValidar"><a class="btn btn-primary" href="<?php echo MODULE_APP_SERVER . 'shop/shop.php?typeView=checkout'; ?>">Pagar </a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .dropcart / end -->
                                </div>
                            </div>
                            <div class="indicator indicator--trigger--click">
                                <a href="#" class="indicator__button">
                                    <span class="indicator__area"><svg width="20px" height="20px">
                                            <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#person-20"; ?>">
                                            </use>
                                        </svg>
                                    </span>
                                </a>
                                <div class="indicator__dropdown">
                                    <div class="account-menu">
                                        <?php if (!$status_session) { ?>
                                            <div class="account-menu__form">
                                                <div class="account-menu__form-title">Ingrese a su Cuenta</div>
                                                <div style="text-align: center;"><img src="http://merca2.cf/vendor/merca2/images/LOGOMERCA2-02.png" width="80px" height="50px">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="header-signin-email" class="sr-only">Email</label>
                                                    <input id="header-signin-email" type="email" name="email" class="form-control form-control-sm" placeholder="Email . . .">
                                                </div>
                                                <div class="form-group">
                                                    <label for="header-signin-password" class="sr-only">Clave</label>
                                                    <div class="account-menu__form-forgot">
                                                        <input id="header-signin-password" type="password" name="clave" class="form-control form-control-sm" placeholder="Clave . . .">
                                                        <a href="<?php echo MODULE_APP_SERVER . 'shop/recuperarClave.php '; ?>" class="account-menu__form-forgot-link">Recuperar?</a>
                                                    </div>
                                                </div>
                                                <div class="form-group account-menu__form-button">
                                                    <button id="login" class="btn btn-primary btn-sm"><li class="fa fa-sign-in-alt"></li>&nbsp;Ingresar</button>
                                                </div>
                                                <div class="account-menu__form-link"><a href="<?php echo MODULE_APP_SERVER . 'shop/registroMerca2.php'; ?>">Registrarte Gratis!</a>
                                                </div>
                                                <div id="smgLogin" class="form-group account-menu__form-button">

                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="account-menu__divider"></div>

                                        <?php if ($status_session) { ?>
                                            <a href="account-dashboard.html" class="account-menu__user">
                                                <div class="account-menu__user-avatar"><img src="http://pvp.aes.org.co/vendor/aes/notfound.png" alt=""></div>
                                                <div class="account-menu__user-info">
                                                    <div class="account-menu__user-name"><?php echo $_SESSION['nombre']; ?></div>
                                                    <div class="account-menu__user-email"><?php echo $_SESSION['correo']; ?></div>
                                                </div>
                                            </a>
                                            <div class="account-menu__divider"></div>
                                            <ul class="account-menu__links">
                                                <li><a href="<?php echo MODULE_APP_SERVER . 'shop/dashboard.php?id=' . $_SESSION['idsesion'] ?>">Mi Dashboard</a></li>
                                                <li><a href="<?php echo MODULE_APP_SERVER . 'shop/profile.php?id=' . $_SESSION['idsesion']; ?>">Editar Perfil</a></li>
                                                <li><a href="<?php echo MODULE_APP_SERVER . 'shop/history.php?id=' . $_SESSION['idsesion'] ?>">Historial de Compras</a></li>
                                            </ul>
                                            <div class="account-menu__divider"></div>
                                            <ul class="account-menu__links">
                                                <li><a href="#" id="logout" name="<?php echo $_SESSION['idsesion']; ?>" id="">Cerra Sesion</a></li>
                                            </ul>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
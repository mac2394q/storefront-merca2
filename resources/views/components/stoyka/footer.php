<?php 
require_once(LIB_PATH. "mobile.php");
$objMobile = new mobile();
if($objMobile->isMobile() == 0) {?>
<div class="block block-banner">
    <div class="container">
        <a href="" class="block-banner__body">
            <div class="block-banner__image block-banner__image--desktop" style="background-image: url('https://deventosreportcolombia.files.wordpress.com/2017/05/banner_home_almendras.jpg')"></div>
            <div class="block-banner__image block-banner__image--mobile" style="background-image: url('https://deventosreportcolombia.files.wordpress.com/2017/05/banner_home_almendras.jpg')"></div>

        </a>
    </div>
</div>
<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">Contactanos</h5>
                            <div class="footer-contacts__text" style='text-align: justify;'>Merca2 llega a Buenaventura para ser el primer supermercado en línea de la ciudad el cual nos ahorrará tiempo y dinero a todos los bonaverenses. Podrás encontrar con nosotros todos los productos que siempre compras de tus marcas
                                preferidas.
                            </div>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i> CRA 56 #7-58 Barrio Independencia ,Buenaventura</li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i> sarpcolombiasas@mail.com</li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> +57 (311) 887 2567</li>
                                <li><i class="footer-contacts__icon far fa-clock"></i> Lunes-Domingo 07:00am - 19:00pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Informacion</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/nosotros.php'; ?>" class="footer-links__link">Nosotros</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/proveedores.php'; ?>" class="footer-links__link">Proveedores</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/opiniones.php'; ?>" class="footer-links__link">Opiniones</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/empresarios.php '; ?>" class="footer-links__link">Empresarios</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/contacto.php '; ?>" class="footer-links__link">Contacto</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">Mi Cuenta</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'sarp/perfil.php'; ?>" class="footer-links__link">Mi Perfil</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'sarp/historial.php'; ?>" class="footer-links__link">Historial de Compras</a></li>
                                <li class="footer-links__item"><a href="<?php echo MODULE_APP_SERVER . 'shop/seguimiento.php'; ?>" class="footer-links__link">Seguimiento de Orden</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">Notifiaciones</h5>
                            <div class="footer-newsletter__text" style='text-align: justify;'>Activa las notificaciones por correo electronico para que estes atento a todas nuestra novedades y promociones.</div>
                            <form action="#" class="footer-newsletter__form"><label class="sr-only" for="footer-newsletter-address">Correo electronico</label> <input type="text" class="footer-newsletter__form-input form-control" id="footer-newsletter-address" placeholder="@">
                                <button class="footer-newsletter__form-button btn btn-primary">Subcribete</button>
                            </form>
                            <div class="footer-newsletter__text footer-newsletter__text--social">Siguenos en nuestras redes sociales.</div>
                            <!-- social-links -->
                            <div class="social-links footer-newsletter__social-links social-links--shape--circle">
                                <ul class="social-links__list">
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--facebook" href="https://www.facebook.com/merca2.co" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="social-links__item"><a class="social-links__link social-links__link--type--instagram" href="https://www.instagram.com/sarpcolombiasas/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- social-links / end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer__copyright">
                    <!-- copyright -->Todos los derechos reservados &#169; SARP COLOMBIA ZOMAC SAS - Diseñado por <a href="https://www.linkedin.com/in/miguel-angel-claros-quintero-5a0a05141/" target="_blank">ING Miguel Angel Claros Quintero</a>
                    <!-- copyright / end -->
                </div>
                <div class="site-footer__payments">
                    <img src='<?php echo VENDOR_SERVER . "merca2/images/payments.png "; ?>' alt=" "></div>
            </div>
        </div>
        <div class="totop ">
            <div class="totop__body ">
                <div class="totop__start "></div>
                <div class="totop__container container "></div>
                <div class="totop__end ">
                    <button type="button " class="totop__button ">
                        <svg width="13px " height="8px ">
                            <use xlink:href='<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-up-13x8 "; ?>'></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php }?>
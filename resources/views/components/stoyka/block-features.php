<?php require_once(LIB_PATH. "mobile.php");

$objMobile = new mobile();
?>
<?php if($objMobile->isMobile() == 0) {?>
<div class="block block-features block-features--layout--classic">
                    <div class="container">
                        <div class="block-features__list">
                            <div class="block-features__item">
                                <div class="block-features__icon"><svg width="48px" height="48px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#fi-free-delivery-48"; ?>"></use>
                                </svg></div>
                                <div class="block-features__content">
                                    <div class="block-features__title">Pide desde Casa</div>
                                    <div class="block-features__subtitle" style="text-align: justify;">Pide ahora y te llega en dos horas a la comodidad de tu Hogar.</div>
                                </div>
                            </div>
                            <div class="block-features__divider"></div>
                            <div class="block-features__item">
                                <div class="block-features__icon"><svg width="48px" height="48px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#fi-24-hours-48"; ?>"></use>
                                </svg></div>
                                <div class="block-features__content">
                                    <div class="block-features__title">Compra Tranquilo</div>
                                    <div class="block-features__subtitle" style="text-align: justify;">Garantía de calidad del Producto y seguridad en la transacción</div>
                                </div>
                            </div>
                            <div class="block-features__divider"></div>
                            <div class="block-features__item">
                                <div class="block-features__icon"><svg width="48px" height="48px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#fi-payment-security-48"; ?>"></use>
                                </svg></div>
                                <div class="block-features__content">
                                    <div class="block-features__title">Paga en tu Casa</div>
                                    <div class="block-features__subtitle" style="text-align: justify;">Paga contraentrega cuando te llegue tu pedido</div>
                                </div>
                            </div>
                            <div class="block-features__divider"></div>
                            <div class="block-features__item">
                                <div class="block-features__icon"><svg width="48px" height="48px">
                                    <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#fi-tag-48"; ?>"></use>
                                </svg></div>
                                <div class="block-features__content">
                                    <div class="block-features__title"> Devoluciones</div>
                                    <div class="block-features__subtitle" style="text-align: justify;">Cambios y Devoluciones ,Con nosotros cambiar de opinión no es un problema.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
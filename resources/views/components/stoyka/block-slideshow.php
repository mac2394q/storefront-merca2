<?php require_once(LIB_PATH. "mobile.php");

$objMobile = new mobile();
?>
<?php //if($objMobile->isMobile() == 0) {?>
<div class="block-slideshow block-slideshow--layout--full block">
    <div class="container">
        <div class="row">
            <div class="col-12" style="zoom:90%;">
                <div class="block-slideshow__body">
                    <div class="owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2220px, 0px, 0px); transition: all 0s ease 0s; width: 7770px;">
                                <div class="owl-item cloned" style="width: 1110px;">
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('https://www.fruco.com.co/sk-eu/content/dam/brands/fruco/colombia/1646269-banner-mayo-artesanal.jpg.rendition.1960.1960.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('https://www.fruco.com.co/sk-eu/content/dam/brands/fruco/colombia/1646269-banner-mayo-artesanal.jpg.rendition.1960.1960.jpg')"></div>


                                    </a>
                                </div>
                                <div class="owl-item cloned" style="width: 1110px;">
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('https://www.ulabox.com/media/26241_banner-desktop.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('https://www.ulabox.com/media/26241_banner-desktop.jpg')"></div>

                                    </a>
                                </div>
                                <div class="owl-item active" style="width: 1110px;">
                                    <a class="block-slideshow__slide" href="">
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop" style="background-image: url('https://deventosreportcolombia.files.wordpress.com/2017/05/banner_home_almendras.jpg')"></div>
                                        <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile" style="background-image: url('https://deventosreportcolombia.files.wordpress.com/2017/05/banner_home_almendras.jpg')"></div>

                                    </a>
                                </div>


                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot active"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                            <button role="button" class="owl-dot"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php //} ?>
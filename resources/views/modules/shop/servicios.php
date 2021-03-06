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
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="">Breadcrumb</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Publicaciones</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Publicaciones</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="block">
                            <div class="posts-view">
                                <div class="posts-view__list posts-list posts-list--layout--list">
                                    <div class="posts-list__body">
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-1.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Special Offers</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Philosophy That Addresses Topics Such As Goodness</a>
                                                    </div>
                                                    <div class="post-card__date">October 19, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-2.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Latest News</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Logic Is The Study Of Reasoning And Argument Part 2</a>
                                                    </div>
                                                    <div class="post-card__date">September 5, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-3.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">New Arrivals</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Some Philosophers Specialize In One Or More Historical Periods</a>
                                                    </div>
                                                    <div class="post-card__date">August 12, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-4.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Special Offers</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">A Variety Of Other Academic And Non-Academic Approaches Have Been Explored</a>
                                                    </div>
                                                    <div class="post-card__date">Jule 30, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-5.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">New Arrivals</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Germany Was The First Country To Professionalize Philosophy</a>
                                                    </div>
                                                    <div class="post-card__date">June 12, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-6.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Special Offers</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Logic Is The Study Of Reasoning And Argument Part 1</a>
                                                    </div>
                                                    <div class="post-card__date">May 21, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-7.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Special Offers</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Many Inquiries Outside Of Academia Are Philosophical In The Broad Sense</a>
                                                    </div>
                                                    <div class="post-card__date">April 3, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-8.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Publicaciones</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">An Advantage Of Digital Circuits When Compared To Analog Circuits</a>
                                                    </div>
                                                    <div class="post-card__date">Mart 29, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-9.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">New Arrivals</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">A Digital Circuit Is Typically Constructed From Small Electronic Circuits</a>
                                                    </div>
                                                    <div class="post-card__date">February 10, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="posts-list__item">
                                            <div class="post-card post-card--layout--list post-card--size--nl">
                                                <div class="post-card__image">
                                                    <a href="">
                                                        <img src="images/posts/post-10.jpg" alt=""></a>
                                                </div>
                                                <div class="post-card__info">
                                                    <div class="post-card__category">
                                                        <a href="">Special Offers</a>
                                                    </div>
                                                    <div class="post-card__name">
                                                        <a href="">Engineers Use Many Methods To Minimize Logic Functions</a>
                                                    </div>
                                                    <div class="post-card__date">January 1, 2019</div>
                                                    <div class="post-card__content">In one general sense, philosophy is associated with wisdom, intellectual culture and a search for knowledge. In that sense, all cultures...</div>
                                                    <div class="post-card__read-more">
                                                        <a href="" class="btn btn-secondary btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="posts-view__pagination">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                                <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-left-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="">2 <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                                <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                                    <use xlink:href="images/sprite.svg#arrow-rounded-right-8x13"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
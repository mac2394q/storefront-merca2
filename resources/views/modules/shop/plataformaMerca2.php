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
                                <li class="breadcrumb-item"><a href="index.html">Home</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item"><a href="">Breadcrumb</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page">My Account</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>My Account</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Navigation</h4>
                                <ul>
                                    <li class="account-nav__item account-nav__item--active"><a href="account-dashboard.html">Dashboard</a></li>
                                    <li class="account-nav__item"><a href="account-profile.html">Edit Profile</a></li>
                                    <li class="account-nav__item"><a href="account-orders.html">Order History</a></li>
                                    <li class="account-nav__item"><a href="account-order-details.html">Order Details</a></li>
                                    <li class="account-nav__item"><a href="account-addresses.html">Addresses</a></li>
                                    <li class="account-nav__item"><a href="account-edit-address.html">Edit Address</a></li>
                                    <li class="account-nav__item"><a href="account-password.html">Password</a></li>
                                    <li class="account-nav__item"><a href="account-login.html">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar"><img src="images/avatars/avatar-3.jpg" alt=""></div>
                                        <div class="profile-card__name">Helena Garcia</div>
                                        <div class="profile-card__email">stroyka@example.com</div>
                                        <div class="profile-card__edit"><a href="account-profile.html" class="btn btn-secondary btn-sm">Edit Profile</a></div>
                                    </div>
                                </div>
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__badge">Default Address</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">Helena Garcia</div>
                                        <div class="address-card__row">Random Federation<br>115302, Moscow<br>ul. Varshavskaya, 15-2-178</div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Phone Number</div>
                                            <div class="address-card__row-content">38 972 588-42-36</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Email Address</div>
                                            <div class="address-card__row-content">stroyka@example.com</div>
                                        </div>
                                        <div class="address-card__footer"><a href="account-edit-address.html">Edit Address</a></div>
                                    </div>
                                </div>
                                <div class="dashboard__orders card">
                                    <div class="card-header">
                                        <h5>Recent Orders</h5>
                                    </div>
                                    <div class="card-divider"></div>
                                    <div class="card-table">
                                        <div class="table-responsive-sm">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="">#8132</a></td>
                                                        <td>02 April, 2019</td>
                                                        <td>Pending</td>
                                                        <td>$2,719.00 for 5 item(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">#7592</a></td>
                                                        <td>28 March, 2019</td>
                                                        <td>Pending</td>
                                                        <td>$374.00 for 3 item(s)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="">#7192</a></td>
                                                        <td>15 March, 2019</td>
                                                        <td>Shipped</td>
                                                        <td>$791.00 for 4 item(s)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
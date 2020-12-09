<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
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
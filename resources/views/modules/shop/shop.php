<?php session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(MODULE_APP_PATH . "shop/components/shopComponents.php");
require_once(LIB_PATH . "session.php");

$status_session = session::statusSesion($_SESSION['idsesion']);
$sesion = 0;
if ($status_session) {
    $sesion = 1;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require_once(VIEW_PATH . "components/stoyka/head.php"); ?>
</head>

<body style="zoom:90%;">
    <input type="hidden" id="typeView" name="typeView" value="<?php echo $_GET['typeView'] ?>" />
    <input type="hidden" id="sesion" name="sesion" value="<?php echo $sesion;  ?>" />
    <input type="hidden" id="id" name="id" value="<?php echo $_SESSION['idsesion'];  ?>" />
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
        <!-- sit be__body -->
        <div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo SERVER_PATH; ?>">Inicio</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#arrow-rounded-right-6x9"; ?>">
                                        </use>
                                    </svg>
                                </li>
                                <?php if ($_GET['typeView'] == 'cart' || $_GET['typeView'] == 'empty') {
                                    echo ' <li class="breadcrumb-item active" aria-current="page">Carrito de Compras.</li>';
                                } else {
                                    echo ' <li class="breadcrumb-item active" aria-current="page">Validacion de Compra.</li>';
                                } ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <?php
                        if ($_GET['typeView'] == 'cart' || $_GET['typeView'] == 'empty') {
                            echo ' <h1>Carrito de Compras</h1>';
                        } else {
                            echo ' <h1>Validacion de Compra</h1>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php if ($_GET['typeView'] == 'cart') { ?>
                <div class="cart block">
                    <div class="container">
                        <table class="cart__table cart-table">
                            <thead class="cart-table__head">
                                <tr class="cart-table__row">
                                    <th class="cart-table__column cart-table__column--image">Imagen</th>
                                    <th class="cart-table__column cart-table__column--product">Producto</th>
                                    <th class="cart-table__column cart-table__column--price">Precio</th>
                                    <th class="cart-table__column cart-table__column--quantity">Cantidad</th>
                                    <th class="cart-table__column cart-table__column--total">Total</th>
                                    <th class="cart-table__column cart-table__column--remove"></th>
                                </tr>
                            </thead>
                            <tbody class="cart-table__body" id="bodyRender">
                            </tbody>
                        </table>
                        <div class="cart__actions">
                            <div class="cart__buttons">
                                <a href="<?php echo SERVER_PATH; ?>" class="btn btn-primary cart__update-button">Continuar Comprando</a>
                            </div>
                        </div>
                        <div class="row justify-content-end pt-5">
                            <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Total de Compra $</h3>
                                        <table class="cart__totals">
                                            <thead class="cart__totals-header">
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td><span id="subtotal_cart"></span></td>
                                                </tr>
                                            </thead>
                                            <tbody class="cart__totals-body">
                                                <tr>
                                                    <th>Envio</th>
                                                    <td>$3.000

                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="cart__totals-footer">
                                                <tr>
                                                    <th>Total</th>
                                                    <td><span id="total_cart"></span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="<?php echo MODULE_APP_SERVER . 'shop/shop.php?typeView=checkout'; ?>">Validar Compra.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($_GET['typeView'] == 'empty') { ?>
                <div class="block-empty__body">
                    <div class="block-empty__message">Su carrito de compras está vacía!</div>
                    <div class="block-empty__actions"><a class="btn btn-primary btn-sm" href="<?php echo SERVER_PATH; ?>">Continuar</a></div>
                </div>
            <?php } ?>
            <?php if ($_GET['typeView'] == 'checkout') { ?>
                <div class="checkout block">
                    <div class="container">
                        <div class="row">
                            <?php if (!$status_session) { ?>
                                <div class="col-12 mb-3">
                                    <div class="alert alert-lg alert-primary">
                                        <li class="fa fa-user-lock"></li>&nbsp;Soy un usuario registrado?
                                        <a href="<?php echo MODULE_APP_SERVER . 'shop/sesionMerca2.php'; ?>">Click aqui para iniciar sesion!</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="col-12 col-lg-6 col-xl-7">
                                <div class="card mb-lg-0">

                                    <?php if (!$status_session) { ?>
                                        <div class="alert alert-warning mb-0">
                                            <li class="fa fa-sign-in-alt"></li>
                                            Debe iniciar sesion para poder solicitar su pedido!
                                        </div>
                                        <!-- <div class="card-body">
                                <h3 class="card-title">Detalles de facturación</h3>
                                <div class="form-row">
                                   
                                    <div class="form-group col-md-4">
                                        <label for="checkout-first-name">Primer Nombre</label>
                                        <input type="text" class="form-control" name="primerNombre" id="primerNombre" placeholder="Nombre...">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="checkout-last-name">Segundo (Opcional)</label>
                                        <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" placeholder="Nombre...">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="checkout-company-name"> Identificación (CC, NIT) </label>
                                        <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="Identificación (CC, NIT, CE)">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-street-address">Direccion</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" value="" placeholder="Direccion # AB - 00">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-city">Ciudad </label>
                                        <input type="text" class="form-control" readonly name="ciudad" id="ciudad" value="Buenaventura - Valle del Cauca">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="checkout-email">Correo Electronico</label>
                                        <input type="text" class="form-control" name="email_" id="email_" placeholder="@">
                                    </div>
                                   
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-email">Telefono de Contacto</label>
                                        <input type="email" class="form-control" name="telefono" id="telefono" placeholder="+57 (000) 000 0000">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="checkout-phone">Telefono de Secundario(Opcional)</label>
                                        <input type="text" class="form-control" id="telefono2" name="telefono2" placeholder="+57 (000) 000 0000">
                                    </div>
                                </div>
                              
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="checkout-company-name"> Codigo de Referido (Opcional)</label>
                                        <input type="text" class="form-control" id="referido" name="referido" placeholder="Referido #...">
                                    </div>
                                </div>
                                
                             
                                    <div class="form-group">
                                        <div class="form-check">
                                            <span class="form-check-input input-check">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox" id="checkout-create-account">
                                                    <span class="input-check__box">
                                                    </span>
                                                    <svg class="input-check__icon" width="9px" height="7px">
                                                        <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#check-9x7"; ?>">
                                                        </use>
                                                    </svg>
                                                </span>
                                            </span>
                                            <label class="form-check-label" for="checkout-create-account">Crear Afiliacion?</label>
                                        </div>
                                    </div>
                              
                            </div> -->
                                    <?php } ?>
                                    <?php if ($status_session) { ?>
                                        <div class="card-body">
                                            <h3 class="card-title">Detalles de facturación</h3>
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="checkout-first-name">Nombre</label>
                                                    <input type="text" class="form-control" readonly value="<?php echo $_SESSION['nombre']; ?>">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="checkout-company-name"> Identificación (CC, NIT) </label>
                                                    <input type="text" class="form-control" readonly value="<?php echo $_SESSION['identificacion']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-street-address">Direccion</label>
                                                    <input type="text" class="form-control" readonly value="<?php echo $_SESSION['direccion']; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-city">Ciudad </label>
                                                    <input type="text" class="form-control" readonly value="Buenaventura - Valle del Cauca">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="checkout-email">Correo Electronico</label>
                                                    <input type="text" class="form-control" readonly value="<?php echo $_SESSION['correo']; ?>">
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-email">Telefono de Contacto</label>
                                                    <input type="email" class="form-control" readonly value="<?php echo $_SESSION['telefono']; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="checkout-phone">Telefono de Secundario(Opcional)</label>
                                                    <input type="text" class="form-control" readonly value="<?php echo $_SESSION['telefono2']; ?>">
                                                </div>
                                            </div>

                                        </div>
                                    <?php } ?>
                                    <div class="card-divider"></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <h3 class="card-title">Tu orden</h3>
                                        <table class="checkout__totals">
                                            <thead class="checkout__totals-header">
                                                <tr>
                                                    <th>Productos</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="checkout__totals-products" id="bodyRenderCheckout">
                                            </tbody>
                                            <tbody class="checkout__totals-subtotals">
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td><span id="subtotal_checkout"></span></td>
                                                </tr>
                                                <tr>
                                                    <th>Domicilio</th>
                                                    <td>$3000</td>
                                                </tr>
                                            </tbody>
                                            <tfoot class="checkout__totals-footer">
                                                <tr>
                                                    <th>Total</th>
                                                    <td><span id="total_checkout"></span></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="payment-methods">
                                            <ul class="payment-methods__list">
                                                <li class="payment-methods__item payment-methods__item--active">
                                                    <label class="payment-methods__item-header">
                                                        <span class="payment-methods__item-radio input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked">
                                                                <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="payment-methods__item-title">Entrega en Efectivo</span>
                                                    </label>
                                                    <div class="payment-methods__item-container" style="text-align: justify;">
                                                        <div class="payment-methods__item-description text-muted">Pague en efectivo a la entrega de su pedido</div>
                                                    </div>
                                                </li>
                                                <li class="payment-methods__item">
                                                    <label class="payment-methods__item-header">
                                                        <span class="payment-methods__item-radio input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="payment-methods__item-title">Datáfono Pago Móvil </span>
                                                    </label>
                                                    <div class="payment-methods__item-container" style="text-align: justify;">
                                                        <div class="payment-methods__item-description text-muted">Pagar físicamente mediante el uso de tarjetas de crédito o débito.</div>
                                                    </div>
                                                </li>
                                                <li class="payment-methods__item ">
                                                    <label class="payment-methods__item-header">
                                                        <span class="payment-methods__item-radio input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="payment-methods__item-title">Transaferencia Bancaria (Desactivado)</span>
                                                    </label>
                                                    <div class="payment-methods__item-container" style="">
                                                        <div class="payment-methods__item-description text-muted" style="text-align: justify;">Realice su pago directamente en nuestra cuenta bancaria. Por favor use su
                                                            ID de pedido como referencia de pago. Su orden no será
                                                            enviado hasta que los fondos se hayan liquidado en su cuenta.
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="payment-methods__item">
                                                    <label class="payment-methods__item-header">
                                                        <span class="payment-methods__item-radio input-radio">
                                                            <span class="input-radio__body">
                                                                <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                                <span class="input-radio__circle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="payment-methods__item-title">PayPal (Desactivado)</span>
                                                    </label>
                                                    <div class="payment-methods__item-container" style="text-align: justify;">
                                                        <div class="payment-methods__item-description text-muted">Pagar via Paypal; puedes pagar con tu tarjeta de crédito si no Tines una cuenta PayPal.</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="checkout__agree form-group">
                                            <div class="form-check">
                                                <span class="form-check-input input-check">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input" type="checkbox" id="checkout-terms">
                                                        <span class="input-check__box"></span>
                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                            <use xlink:href="<?php echo VENDOR_SERVER . "merca2/images/sprite.svg#check-9x7"; ?>"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <label class="form-check-label" for="checkout-terms">He leído y acepto los
                                                    <a target="_blank" href="<?php echo MODULE_APP_SERVER . 'shop/terminos.php '; ?>">términos y condiciones </a>de merca2
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" id="realizarPedido" class="btn btn-primary btn-xl btn-block">
                                            <li class="fa fa-shopping-cart"></li>&nbsp;Realizar pedido
                                        </button>
                                    </div>
                                    <div id="smg_checkout"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
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
    <script>
        typeView();
    </script>
</body>

</html>
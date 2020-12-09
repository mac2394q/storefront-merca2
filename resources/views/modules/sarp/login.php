<!DOCTYPE html>
<html class="loading" lang="es-ES" data-textdirection="ltr">
<head>
    <?php
       require_once($_SERVER['DOCUMENT_ROOT'] . '/conf.php');
       require_once(VIEW_PATH . "components/moderAdmin/login/head.php"); 
    ?>
    <style>
    .redondeo{
        border-top-left-radius: 20px;
        border-bottom-right-radius: 30px;
    }
    </style>
</head>
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image menu-expanded blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <img src="https://merca2.co/img/logo_merca2.c9768412.png" class="img-fluid mx-auto d-block pt-2 redondeo" width="360"  height="330" alt="logo">
                                    <!-- <div class="card-title text-center">
                                        GESTION DE PROYECTOS AES
                                    </div> -->
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                        <!-- <span>autentificate para iniciar sesion</span></p> -->
                                        <span>SARP - EMPRESARIOS</span></p>
                                    <div class="card-body">
                                        <div class="form-horizontal">
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="user-name" name="usuario"
                                                    placeholder="Usuario o correo . . ." required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-user-shield"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="user-password" name="clave"
                                                    placeholder="Clave . . ." required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            
                                        </div>
                                    </div>
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                    </p>
                                    <div class="card-body">
                                        <button  id="validarSesion" class="btn btn-info  round btn-block waves-effect waves-light buttonAnimation " data-animation="pulse"><i
                                                class="fa fa-unlock-alt"></i> INICIO DE SESIÓN</button>
                                        <br>
                                        <div id="smgLogin"></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php require_once(VIEW_PATH . "components/moderAdmin/login/lib.php"); ?>

</body>
</html>
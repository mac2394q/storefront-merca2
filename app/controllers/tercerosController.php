<?php session_start();
error_reporting(0);
ini_set('display_errors', 0);
require_once(CONTROLLERS_PATH . "routeController.php");
require_once(SERVICES_PATH . "tercerosServices.php");
require_once(MODEL_PATH . "entity/terceros.php");


class tercerosController extends route
{
    public  function handlerController($routeRequest)
    {
        switch ($routeRequest['method']) {
            case 'registrarTerceros':
                return tercerosController::registrarTerceros($routeRequest);
                break;
                case 'retornarTercero':
                  return $this->retornarTercero($routeRequest);
                  break;
            case 'listadoTerceros':
                return tercerosController::listadoTerceros($routeRequest);
                break;
            case 'listadoAsignadosTercero':
                return tercerosController::listadoAsignadosTercero($routeRequest);
                break;
            case 'listadoAsignadosTercero':
                return tercerosController::listadoAsignadosTercero($routeRequest);
                break;
            case 'asignarTerceroEmpresario':
                return tercerosController::asignarTerceroEmpresario($routeRequest);
                break;
            case 'desasignarTerceroEmpresario':

                return tercerosController::desasignarTerceroEmpresario($routeRequest);
                break;

            case 'obtenerTipoPerfil':

                return tercerosController::obtenerTipoPerfil($routeRequest);
                break;
        }
    }
    public  function registrarTerceros($routeRequest)
    {

        $objAdapter = new tercerosSesionAdapter();
        $response = $objAdapter->registrarAfiliadoSesion($routeRequest);

        switch ($response[0]) {
            case 1:

                echo $response[1];
                sleep(2);
                //$this->handlerRedirect(SERVER_PATH);
                break;
            case 2:

                $_SESSION['idsesion'] = $response[4]->getfk_soc();
                $_SESSION['nombre'] = $response[3]->getNom();
                $_SESSION['correo'] = $response[3]->getemail();
                $_SESSION['direccion'] = $response[3]->getAddress();
                $_SESSION['telefono'] = $response[3]->getZipPhone();
                $_SESSION['telefono2'] = $response[3]->getPhone();
                $_SESSION['identificacion'] = $response[3]->getSiret();
                echo $response[1];
                sleep(2);
                $this->enviarCorreo($_SESSION['correo'], 'Bienvenido a merca2');
                $this->handlerRedirect(MODULE_APP_SERVER . "shop/dashboard.php?id=" . $response[4]->getfk_soc());
                break;
            case 3:

                echo $response[1];
                break;
            case 4:

                echo $response[1];
                break;
        }
    }
    public  function listadoTerceros($routeRequest)
    {
        return tercerosServices::listadoTerceros($routeRequest['filter'], $routeRequest['debug']);
    }
    public  function listadoAsignadosTercero($routeRequest)
    {
        
        $modelTerceros = new terceros();
        $objServicesTerceros = new tercerosServices();
        $modelTerceros->setCustom($routeRequest['id']);
       
        return $objServicesTerceros->listadoAsignadosTercero($routeRequest['parent'], $modelTerceros, $routeRequest['debug']);
    }
    public  function asignarTerceroEmpresario($routeRequest)
    {
        $modelEntity = new terceros();
        $modelEntity->setRowid($routeRequest['idEntity']);
        $modelEntitySigneTo = new terceros();
        $modelEntitySigneTo->setRowid($routeRequest['idEntitySigne']);
        return tercerosServices::asignarTercero($modelEntity, $modelEntitySigneTo);
    }
    public  function desasignarTerceroEmpresario($routeRequest)
    {
        $modelEntity = new terceros();
        $modelEntity->setRowid($_POST['idEntity']);
        $modelEntitySigneTo = new terceros();
        $modelEntitySigneTo->setRowid($routeRequest['idEntitySigne']);
        return tercerosServices::asignarTercero($modelEntity, $modelEntitySigneTo);
    }
    public function retornarTercero($routeRequest)
    {
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $objAdapter = new tercerosSesionAdapter();
       
        return $objAdapter->retornarObjTercero($routeRequest['rowid']);
    }

    public function retornarSesion($routeRequest)
    {error_reporting(E_ERROR | E_WARNING | E_PARSE);

        $objAdapter = new tercerosSesionAdapter();
        return $objAdapter->retornarObjTercero($routeRequest['rowid']);
    }

    public function obtenerTipoPerfil($routeRequest)
    {
        
        $objServiceTerceros = new tercerosServices();
        return $objServiceTerceros->obtenerTipoPerfil($routeRequest['rowid']);
    }

    public function enviarCorreo($destinatario, $asunto)
    {
       
        $remitente = "sarpcolombiasas@gmail.com";
        $remitente = "mac2394q@gmail.com";
        
        // $cuerpo = ' 
        // <html> 
        //     <head> 
        //        <title>SARP COLOMIA</title> 
        //     </head> 
        // <body> 
        //     <h1>BIENVENIDO A NUESTAR COMUNIDAD MERCA2!</h1> 
        //     <p> 
        //     <b>Te damos la bienvenida a nuestra comunidad de merca2 recuerda que puedes hacer compras desde nuestra app o plataforma web.
        //     </p> 
        // </body> 
        // </html> ';
        $cuerpo = '
        <!doctype html>
        <html>
          <head>
            <meta name="viewport" content="width=device-width" />
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>Simple Transactional Email</title>
            <style>
              /* -------------------------------------
                  GLOBAL RESETS
              ------------------------------------- */
              
              /*All the styling goes here*/
              
              img {
                border: none;
                -ms-interpolation-mode: bicubic;
                max-width: 100%; 
              }
        
              body {
                background-color: #f6f6f6;
                font-family: sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 14px;
                line-height: 1.4;
                margin: 0;
                padding: 0;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%; 
              }
        
              table {
                border-collapse: separate;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
                width: 100%; }
                table td {
                  font-family: sans-serif;
                  font-size: 14px;
                  vertical-align: top; 
              }
        
              /* -------------------------------------
                  BODY & CONTAINER
              ------------------------------------- */
        
              .body {
                background-color: #f6f6f6;
                width: 100%; 
              }
        
              /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
              .container {
                display: block;
                margin: 0 auto !important;
                /* makes it centered */
                max-width: 580px;
                padding: 10px;
                width: 580px; 
              }
        
              /* This should also be a block element, so that it will fill 100% of the .container */
              .content {
                box-sizing: border-box;
                display: block;
                margin: 0 auto;
                max-width: 580px;
                padding: 10px; 
              }
        
              /* -------------------------------------
                  HEADER, FOOTER, MAIN
              ------------------------------------- */
              .main {
                background: #ffffff;
                border-radius: 3px;
                width: 100%; 
              }
        
              .wrapper {
                box-sizing: border-box;
                padding: 20px; 
              }
        
              .content-block {
                padding-bottom: 10px;
                padding-top: 10px;
              }
        
              .footer {
                clear: both;
                margin-top: 10px;
                text-align: center;
                width: 100%; 
              }
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                  color: #999999;
                  font-size: 12px;
                  text-align: center; 
              }
        
              /* -------------------------------------
                  TYPOGRAPHY
              ------------------------------------- */
              h1,
              h2,
              h3,
              h4 {
                color: #000000;
                font-family: sans-serif;
                font-weight: 400;
                line-height: 1.4;
                margin: 0;
                margin-bottom: 30px; 
              }
        
              h1 {
                font-size: 35px;
                font-weight: 300;
                text-align: center;
                text-transform: capitalize; 
              }
        
              p,
              ul,
              ol {
                font-family: sans-serif;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                margin-bottom: 15px; 
              }
                p li,
                ul li,
                ol li {
                  list-style-position: inside;
                  margin-left: 5px; 
              }
        
              a {
                color: #3498db;
                text-decoration: underline; 
              }
        
              /* -------------------------------------
                  BUTTONS
              ------------------------------------- */
              .btn {
                box-sizing: border-box;
                width: 100%; }
                .btn > tbody > tr > td {
                  padding-bottom: 15px; }
                .btn table {
                  width: auto; 
              }
                .btn table td {
                  background-color: #ffffff;
                  border-radius: 5px;
                  text-align: center; 
              }
                .btn a {
                  background-color: #ffffff;
                  border: solid 1px #3498db;
                  border-radius: 5px;
                  box-sizing: border-box;
                  color: #3498db;
                  cursor: pointer;
                  display: inline-block;
                  font-size: 14px;
                  font-weight: bold;
                  margin: 0;
                  padding: 12px 25px;
                  text-decoration: none;
                  text-transform: capitalize; 
              }
        
              .btn-primary table td {
                background-color: #3498db; 
              }
        
              .btn-primary a {
                background-color: #3498db;
                border-color: #3498db;
                color: #ffffff; 
              }
        
              /* -------------------------------------
                  OTHER STYLES THAT MIGHT BE USEFUL
              ------------------------------------- */
              .last {
                margin-bottom: 0; 
              }
        
              .first {
                margin-top: 0; 
              }
        
              .align-center {
                text-align: center; 
              }
        
              .align-right {
                text-align: right; 
              }
        
              .align-left {
                text-align: left; 
              }
        
              .clear {
                clear: both; 
              }
        
              .mt0 {
                margin-top: 0; 
              }
        
              .mb0 {
                margin-bottom: 0; 
              }
        
              .preheader {
                color: transparent;
                display: none;
                height: 0;
                max-height: 0;
                max-width: 0;
                opacity: 0;
                overflow: hidden;
                mso-hide: all;
                visibility: hidden;
                width: 0; 
              }
        
              .powered-by a {
                text-decoration: none; 
              }
        
              hr {
                border: 0;
                border-bottom: 1px solid #f6f6f6;
                margin: 20px 0; 
              }
        
              /* -------------------------------------
                  RESPONSIVE AND MOBILE FRIENDLY STYLES
              ------------------------------------- */
              @media only screen and (max-width: 620px) {
                table[class=body] h1 {
                  font-size: 28px !important;
                  margin-bottom: 10px !important; 
                }
                table[class=body] p,
                table[class=body] ul,
                table[class=body] ol,
                table[class=body] td,
                table[class=body] span,
                table[class=body] a {
                  font-size: 16px !important; 
                }
                table[class=body] .wrapper,
                table[class=body] .article {
                  padding: 10px !important; 
                }
                table[class=body] .content {
                  padding: 0 !important; 
                }
                table[class=body] .container {
                  padding: 0 !important;
                  width: 100% !important; 
                }
                table[class=body] .main {
                  border-left-width: 0 !important;
                  border-radius: 0 !important;
                  border-right-width: 0 !important; 
                }
                table[class=body] .btn table {
                  width: 100% !important; 
                }
                table[class=body] .btn a {
                  width: 100% !important; 
                }
                table[class=body] .img-responsive {
                  height: auto !important;
                  max-width: 100% !important;
                  width: auto !important; 
                }
              }
        
              /* -------------------------------------
                  PRESERVE THESE STYLES IN THE HEAD
              ------------------------------------- */
              @media all {
                .ExternalClass {
                  width: 100%; 
                }
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                  line-height: 100%; 
                }
                .apple-link a {
                  color: inherit !important;
                  font-family: inherit !important;
                  font-size: inherit !important;
                  font-weight: inherit !important;
                  line-height: inherit !important;
                  text-decoration: none !important; 
                }
                #MessageViewBody a {
                  color: inherit;
                  text-decoration: none;
                  font-size: inherit;
                  font-family: inherit;
                  font-weight: inherit;
                  line-height: inherit;
                }
                .btn-primary table td:hover {
                  background-color: #34495e !important; 
                }
                .btn-primary a:hover {
                  background-color: #34495e !important;
                  border-color: #34495e !important; 
                } 
              }
        
            </style>
          </head>
          <body class="">
            <span class="preheader">This is preheader text. Some clients will show this text as a preview.</span>
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
              <tr>
                <td>&nbsp;</td>
                <td class="container">
                  <div class="content">
        
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role="presentation" class="main">
        
                      <!-- START MAIN CONTENT AREA -->
                      <tr>
                        <td class="wrapper">
                          <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>
                                <p>Bienvenido  a MERCA2</p>
                                <p>Te damos la bienvenida a nuestra comunidad de merca2 recuerda que puedes hacer compras desde nuestra app o plataforma web.</p>
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                                  <tbody>
                                    <tr>
                                      <td align="left">
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td> <img src="http://merca2.cf/vendor/merca2/images/Merca2-Logo-app.png" />
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p></p>
                                <p>Gracias por confiar en nosotros.</p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
        
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
        
                    <!-- START FOOTER -->
                    <div class="footer">
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td class="content-block">
                            <span class="apple-link">SARP COLOMBIA ZOMAC SAS , CRA 56 #7-58 Barrio Independencia</span>
                            <br> Correo = sarpcolombiasas@gmail.com.
                          </td>
                        </tr>
                        <tr>
                          <td class="content-block powered-by">
                            Powered by <a href="https://merca2.co/">Merca 2 - SARP</a>.
                          </td>
                        </tr>
                      </table>
                    </div>
                    <!-- END FOOTER -->
        
                  </div>
                </td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </body>
        </html>';

        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente 
        $headers .= "From: Merca2 <".$remitente.">\r\n";

        // //dirección de respuesta, si queremos que sea distinta que la del remitente 
        // $headers .= "Reply-To: mariano@desarrolloweb.com\r\n";

        // //ruta del mensaje desde origen a destino 
        // $headers .= "Return-path: holahola@desarrolloweb.com\r\n";

        // //direcciones que recibián copia 
        // $headers .= "Cc: maria@desarrolloweb.com\r\n";

        // //direcciones que recibirán copia oculta 
        // $headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";

        mail($destinatario, $asunto, $cuerpo, $headers);
    }
}

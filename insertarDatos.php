<?php

  require('lib.php');
  //$data['id'] = 'Null';
  $data['nombre'] = $_POST['nombre'];
  $data['cargo'] = $_POST['cargo'];
  $data['prefijo'] = $_POST['prefijo'];
  $data['telefono'] = $_POST['telefono'];
  $data['interno'] = $_POST['interno'];
  $data['email'] = $_POST['email'];
  $data['sede'] = $_POST['sede'];
  $data['fecha'] = date("d/m/Y");
  $html = $_POST['enviarhtml'];
  $para  = $_POST['email']; 

  
  

// título
$título = 'Instrucciónes para configurar su firma';

// mensaje
$mensaje = '
<html>
<head>
  <title>Pasos A Seguir</title>
</head>
<body>
<table width="100%" height="100%" style="background: dimgray"  cellpadding="0" cellspacing="0">

<tr>

    <td>

            <table style="margin: 0 auto; max-width: 600px;" cellpadding="0" cellspacing="0">

                    <tbody>

                    <tr>

                        <td style="text-align: center;">

                            <img src="http://www.ucp.edu.ar/landings/mail/futuro-mailing-header.png" width="100%"/>

                        </td>

                    </tr>

                    <tr>

                        <td style="padding-left: 10px; text-align: left; background: #ffffff;">
                        <p style="color: black"> Siga los siguientes pasos: </p>
                        <p style="color: black"> 1- Haga click en la herramienta de configuración. <img style="vertical-align: middle" src="https://www.ucp.edu.ar/firmas/img/config.png" alt="" width="20px" height="20px"></p> 
                        <p style="color: black"> 2- Seleccione la opcion "Configuración".</p>
                        <p style="color: black"> 3- Diríjase hacia abajo hasta llegar a la sección "Firma", una vez allí haga click derecho en el campo correspondiente a la sección y seleccione la opción ‘pegar’; si está desde un celular o tablet, toque por un momento el campo hasta que vea la opción ‘pegar’. En caso de ya contar con una firma, sólo reemplácela.</p>
                        <p style="color: black"> 4- Por último diríjase hacia el final de la página y seleccione: "Guardar cambios".</p>                                     
                        <br>
                        </td>                                           
                    </tr>
                                   
                    
                    
                    <br>

                    <div style="padding: 12px; text-align: left; background: #ffffff; text-decoration: none; padding-top: 20px">
                    '.$html.'
                    </div>
                    <br>
                      <tr>

                              <td style="background: #DDDDDD;">

                                <table width="100%" style="padding: 12px;" cellpadding="0" cellspacing="0">

                                    <td>

                                          <table>

                                             <tr>

                                                  <td><img src="http://www.ucp.edu.ar/landings/mail/ucp-logo.png"></td>

                                                   <td><table>

                                                    <tbody><tr>

                                                        <td><strong style="color: #666666; font-family: sans-serif; font-size: 13px;">Universidad de la Cuenca del Plata</strong></td>

                                                    </tr>

                                                    <tr>

                                                        <td style="color: #666666; font-family: sans-serif; font-size: 12px;">Lavalle 50, Corrientes</td>

                                                    </tr>

                                                    <tr>

                                                        <td style="color: #666666; font-family: sans-serif; font-size: 12px;">Tel (0379) 443-6299</td>

                                                    </tr>

                                                    <tr>

                                                        <td style="color: #666666; font-family: sans-serif; font-size: 12px;">contacto@ucp.edu.ar</td>

                                                    </tr>

                                                </tbody></table></td>

                                              </tr> 

                                        </table>      

                                    </td>

                                    <td>

                                        <table  style=" margin-top: -16px;" cellpadding="0" cellspacing="0">

                                            <tr>

                                                 <tr><td style="color: #666666; font-family: sans-serif;">Seguinos</td></tr>

                                                   <tr>

                                                       <td>

                                                           <a href="https://web.facebook.com/cuencadelplata" target="_blank" style="padding: 5px;"><img src="http://www.ucp.edu.ar/landings/mail/icon-face.png" alt="facebook"></a>

                                                           <a href="https://twitter.com/cuencadelplata" target="_blank" style="padding: 5px;"><img src="http://www.ucp.edu.ar/landings/mail/icon-tw.png" alt="twitter"></a>

                                                           <a href="https://www.instagram.com/cuencadelplata/" target="_blank" style="padding: 5px;"> <img src="http://www.ucp.edu.ar/landings/mail/icon-instagram.png" alt="instagram"></a>

                                                           <a href="https://www.youtube.com/user/cuencadelplata" target="_blank" style="padding: 5px;"><img src="http://www.ucp.edu.ar/landings/mail/icon-youtube.png" alt="youtube"></a>

                                                        </td>

                                                </tr>

                                            </tr> 

                                        </table>

                                    </td>

                                </table>

                            </td>

                      </tr>

                      <tr>

                          <td style="text-align: center; background: #4D4D4D; color: #DDDDDD; font-family: sans-serif; font-size: 9px;     padding: 8px; ">

                            COPYRIGHT 2019   |   UNIVERSIDAD DE LA CUENCA DEL PLATA   |   DERECHOS RESERVADOS

                        </td>

                      </tr>

                    </tbody>

                    </table>





    </td>

</tr>

</table>
<script type="text/javascript" src="js/captura.js"></script>
</body>
</html>
';



// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From:UCP - Generador de Firmas <mundocuencatv@ucp.edu.ar>' . "\r\n";
//$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
//$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);


$con = new ConectorBD('localhost', 'mundocue_userapp', '%Ucp_/MkT#' );
$response['conexion'] = $con->initConexion('mundocue_apps');
if ($response['conexion']=='OK') {
    if($con->insertData('registro_firma', $data)){
        $response['msg']="exito en la inserción";
    }else {
        $response['msg']= "Hubo un error y los datos no han sido cargados";
    }
    }else {
        $response['msg']= "No se pudo conectar a la base de datos";
    }
    echo json_encode($response);
    








 ?>

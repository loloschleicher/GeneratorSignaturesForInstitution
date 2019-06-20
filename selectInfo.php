<?php
  require('lib.php');

    $con = new ConectorBD('localhost', 'mundocue_userapp', '%Ucp_/MkT#');

     $con->initConexion('mundocue_apps');

      $consulta = $con->consultar(['registro_firma'], ['*']);
      /*$fila = $resultado->fetch_assoc();
      $response['nombre']=$fila['nombre'];
      $response['cargo']=$fila['cargo'];
      $response['prefijo']=$fila['prefijo'];
      $response['telefono']=$fila['telefono'];
      $response['interno']=$fila['interno'];
      $response['email']=$fila['email'];
      $response['sede']=$fila['sede'];
      $response['fecha']=$fila['fecha'];*/
      $i=0;
      while ($fila = $consulta->fetch_assoc()){
        $response['infoFirmas'][$i]['nombre']=$fila['nombre'];
        $response['infoFirmas'][$i]['cargo']=$fila['cargo'];
        $response['infoFirmas'][$i]['prefijo']=$fila['prefijo'];
        $response['infoFirmas'][$i]['telefono']=$fila['telefono'];
        $response['infoFirmas'][$i]['interno']=$fila['interno'];
        $response['infoFirmas'][$i]['email']=$fila['email'];
        $response['infoFirmas'][$i]['sede']=$fila['sede'];
        $response['infoFirmas'][$i]['fecha']=$fila['fecha'];
        $i++;
        }


 echo json_encode($response);



 ?>

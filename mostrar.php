<?php

session_start();

if(isset($_SESSION['name'])){
  require('lib.php');

    $con = new ConectorBD('localhost', 'mundocue_userapp', '%Ucp_/MkT#');

     $con->initConexion('mundocue_apps');

     $TAMANO_PAGINA = 10;

    $pagina = $_GET["pagina"];
    if (!$pagina) {
   	$inicio = 0;
   	$pagina=1;
    }
    else {
   	$inicio = ($pagina - 1) * $TAMANO_PAGINA;
    }

    $consulta = $con->consultar(['registro_firma'], ['*']);

    $num_total_registros = mysqli_num_rows($consulta);

    $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);

    $consulta1 = $con->consultar(['registro_firma'], ['*'], ' ORDER BY id DESC LIMIT '. $inicio .','.$TAMANO_PAGINA);
    $i=0;

    

?>



<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="verfirmas.css"  media="screen,projection"/>
            <link rel="stylesheet" type="text/css" href="estilo.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Registro de Firmas</title>
   </head>
<body>


<div id="superior" style="width:100%; height:10vh; position:relative; background:#295E94; margin:0; padding:0; margin-bottom:1vh;">
        <div style="width:81%; height:100%; position:relative; margin: 0 auto;">
            <div class="logo"><a href="inicio"><img src="img/logowhite.svg" height="100%" title="Universidad de la Cuenca del Plata"/></a></div>
        </div>
    </div>
 


<div class="container">
  <div class="row primera">
    <div class="col s12">
      <h1 class="center-align" style="color: #295E94">Firmas Registradas </h1>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="striped white">
          <thead>
            <tr>
              <th data-field="co">Id</th>
              <th data-field="co">Nombre</th>
              <th data-field="cd">Cargo</th>
              <th data-field="p">Prefijo</th>
              <th data-field="r">Telefono</th>
              <th data-field="fs">Interno</th>
              <th data-field="fl">Email</th>
              <th data-field="hs">Sede</th>
              <th data-field="hl">Fecha</th>
            </tr>
          </thead>

  <tbody id="table-body">
    <?php

  
          while ($fila = $consulta1->fetch_assoc()){

    ?>
    <tr>
      <td><?php echo $fila['id'] ?> </td>
      <td><?php echo $fila['nombre'] ?> </td>
      <td><?php echo $fila['cargo']  ?> </td>
      <td><?php echo $fila['prefijo'] ?> </td>
      <td><?php echo $fila['telefono'] ?> </td>
      <td><?php echo $fila['interno'] ?> </td>
      <td><?php echo $fila['email'] ?> </td>
      <td><?php echo $fila['sede'] ?> </td>
      <td><?php echo $fila['fecha'] ?> </td>
    </tr>
    <?php
    $i++;
    }

  
    ?>
  </tbody>

</table>
<p style="text-align: center"><button class="cerrarSesion" ><a href="logout.php">Cerrar Sesion</a></button></p>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>



<?php


    if ($total_paginas > 1){
        for ($i=1;$i<=$total_paginas;$i++){
            if ($pagina == $i)
            echo $pagina . " ";
            else
            echo "<button class=botonPaginas ><a href='mostrar.php?pagina=" . $i . "'>" . $i . "</a></button> ";
        }
    }


 //echo json_encode($response);


}else{
  Header("Location: login.php");
}
    
 ?>

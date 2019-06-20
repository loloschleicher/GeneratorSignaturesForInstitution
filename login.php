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
      <h1 class="center-align" style="color: #295E94">Acceso a las firmas registradas</h1>
    </div>
  </div>
  <div class="row">
  
    <div class=".col s4 center-block">
        <form action="accesoRegistFirmas.php" method="post"> 
            <p><?php if ($error!="") {echo $error;}; ?></p> 
            <p>Nombre: <input type="text" name="name"/></p> 
            <p>Password: <input type="password" name="pass" /></p> 
            <input class="boton_personalizado center-block" type="submit" name="Enviar" value="Entrar" /> 
            
          </form> 
    </div>

  </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

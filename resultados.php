<!DOCTYPE html>
<html lang="es-AR">
<?php include("libreria.php") ?>
<head>
<?php head(); ?>
<title>Universidad de la Cuenca del Plata</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Universidad de la Cuenca del Plata"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://www.ucp.edu.ar/"/>
    <meta property="og:image" content="http://delnea.com/sp/img/icon.png"/>
	<meta property="og:site_name" content="Universidad de la Cuenca del Plata"/>
	<meta property="og:description" content="Universidad de la Cuenca del Plata"/>

</head>
<body>
<div class="seccion">

<?php cabecera(); ?>

<div id="p1">
<div style="width:90%; height:auto; position:relative; margin: 0 auto; background:#FFF; border-radius:3px; padding:2%; font-size:8px;">

<p style="font-size:28px">Resultados</p><br>
<table width="100%" border="0" cellspacing="10" cellpadding="10" style="border-bottom:3px solid #479770; border-top:1px solid #CCCCCC;">
  <tr>
    <td width='10%' class='t12'>FECHA</td>
    <td width='10%' class='t12'>DOCUMENTO</td>
    <td width='20%' class='t12'>NOMBRE</td>
    <td width='10%' class='t12'>TELÉFONO</td>    
    <td width='20%' class='t12'>CORREO</td>
    <td width='5%' class='t12'>EDAD</td>    
    <td width='5%' class='t12'>AREA 1</td>
    <td width='5%' class='t12'>AREA 2</td>
    <td width='5%' class='t12'>AREA 3</td>
    <td width='5%' class='t12'>AREA 4</td>
    <td width='5%' class='t12'>AREA 5</td>
  </tr>
</table>
<?
               $conexion=conexion();
           
               $tabla = mysql_query("SELECT * FROM respuestas ORDER by id_rta DESC", $conexion);
               $total=mysql_num_rows($tabla);

               if($total>0){
						while ($registro = mysql_fetch_array ($tabla)) {
						echo"
						<table width='100%' border='0' cellspacing='10' cellpadding='10' style='border-bottom:1px solid #CCCCCC;'>
                          <tr>
                            <td width='10%' class='t9'>$registro[rta_fecha]</td>
                            <td width='10%' class='t9'>$registro[rta_doc]</td>
                            <td width='20%' class='t9'>$registro[rta_nombre]</td>
                            <td width='10%' class='t9'>$registro[rta_tel]</td>							
                            <td width='20%' class='t9'>$registro[rta_correo]</td>
                            <td width='5%' class='t9'>$registro[rta_edad]</td>							
                            <td width='5%' class='t9'>$registro[rta_1]%</td>
                            <td width='5%' class='t9'>$registro[rta_2]%</td>
                            <td width='5%' class='t9'>$registro[rta_3]%</td>
                            <td width='5%' class='t9'>$registro[rta_4]%</td>
                            <td width='5%' class='t9'>$registro[rta_5]%</td>
                          </tr>
						</table>
						";
                   		}  
			   }else{ echo "<br><p style='font-size:16px' align='center'>No hay registros disponibles</p><br>"; }
?>

<br>
<p style="font-size:9px; line-height:150%;"><b>Referencias</b>: Area 1: Arte, Diseño y Comunicación | Area 2: Cs. Jurídicas, Psicología y RRHH | Area 3: Cs. Empresariales | Area 4: Ingeniería y Tecnología | Area 5: Cs. Biológicas y de la Salud</p>

</div>

</div>
</body>
</html>
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
<style>
.ui-widget-header {
            background: #3498DB;
}
</style>
<script>
 
function cambiar(oculta,muestra,avance){
	$('#'+oculta).hide();
	$('#'+muestra).show(); 
	$( "#progressbar" ).progressbar({ value: avance });
}

function validar(){
	 
	$("#qt21").hide();
	$("#rta").show();	
	$("#loading").show();
	$("#alerta").html("");

	var Nombre = $("#Nombre").val();
	var Correo = $("#Correo").val();
	var Documento = $("#Documento").val();
	var Edad = $("#Edad").val();
	var Tel = $("#Tel").val();
	
<?
	for ($i = 1; $i <= 20; $i++) {
    echo "var q".$i." = $('input:radio[name=q".$i."]:checked').val(); ";
	}
?>
		
	$.post("proceso_contacto.php", { Nombre: Nombre, Correo: Correo, Documento: Documento,  <? for ($i = 1; $i <= 20; $i++) { echo "q".$i.": q".$i.", "; } ?> Edad: Edad, Tel: Tel }, function(data){ 
		$("#loading").hide();
		$("#alerta").html(data); 
		$("#alerta").show(); 
	});

}
function habilitar(){
		$("#rta").hide();
		$("#qt21").show();		
		$("#Nombre").focus();
}
function habilitarcorreo(){
		$("#rta").hide();
		$("#qt21").show();		
		$("#Correo").focus();
}
</script>                     

</head>
<body>
<div class="seccion">

<?php cabecera(); ?>
<div id="progressbar" style="width:90%; height:2vh; position:relative; margin: 0 auto; margin-bottom:3vh; background:#DDD; border:none;"></div>
<script>
$( "#progressbar" ).progressbar({ value: 0 });
</script>
<div id="p1">
<div style="width:90%; height:60vh; position:relative; margin: 0 auto; background:#FFF; border-radius:3px; text-align:center; font-size:2em;" class="vertical-centered-text">
<div class="vertical-centered-text" style="padding:5%; line-height:120%;">Guía Orientativa de Interés Vocacional</div>
</div>
<div style="width:90%; height:10vh; position:relative; margin: 0 auto; margin-top:3vh; text-align:center;">
                <input type="button" value="Comenzar" class="boton" onclick="cambiar('p1','qt1',0)">
</div>
</div>
<form>
<?
               $conexion=conexion();
           
               $tabla = mysql_query("SELECT * FROM preguntas ORDER by id_pregunta ASC", $conexion);
               $total=mysql_num_rows($tabla);
        	   $flag=1;
			   $next=$flag+1;
			   $progress=4.5;
			   $other=0;
                if($total>0){
						while ($registro = mysql_fetch_array ($tabla)) {
						?>
                        <div id="qt<?=$flag?>" style="display:none;">
                        <div style="width:90%; height:60vh; position:relative; margin: 0 auto; background:#FFF; border-radius:3px; text-align:center; font-size:1.5em;" class="vertical-centered-text">
                        <div class="vertical-centered-text" style="padding:5%; line-height:120%;"><?=$registro[pregunta_text]?></div>
                        </div>
                        <div style="width:90%; height:10vh; position:relative; margin: 0 auto; margin-top:3vh; text-align:center;">
                             <input type="button" value="x" class="botonx" onclick="window.location='inicio'">
                             <input type="radio" name="q<?=$flag?>" value="0" id="t<?=$other?>" onClick="cambiar('qt<?=$flag?>','qt<?=$next?>',<?=$progress?>)">
                             <label class="nmi" for="t<?=$other?>">NO ME INTERESA</label><? $other++; ?>
                             <input type="radio" name="q<?=$flag?>" value="1" id="t<?=$other?>" onClick="cambiar('qt<?=$flag?>','qt<?=$next?>',<?=$progress?>)">
                             <label class="mi" for="t<?=$other?>">ME INTERESA</label>
                        </div>
                        </div> 
        				<?                      
                       $flag++;
					   $other++;
                       $next=$flag+1;
                       $progress=$progress+4.5;
                   }  
			}else{ echo "No hay registros disponibles."; }
			$siguiente=$total+1;
?>

<div id="qt<?=$siguiente?>" style="display:none;">
<div style="width:90%; height:60vh; position:relative; margin: 0 auto; background:#FFF; border-radius:3px; text-align:center; font-size:1em;" class="vertical-centered-text">
<div class="vertical-centered-text" style="padding:5%; line-height:120%;">
                                    <p style="font-size:1.5em;">Datos Personales</p>
                                    <br>
                                    <input type="text" name="Nombre" id="Nombre" class="campo" maxlength="255" placeholder="Nombre y Apellido" autocomplete="off" />
                                    <br><br>
                                    <input type="number" name="Documento" id="Documento" class="campo" maxlength="10" placeholder="Documento" autocomplete="off" />
                                    <br><br>
                                    <input type="number" name="Tel" id="Tel" class="campo" maxlength="100" placeholder="Teléfono" autocomplete="off" />                                    
                                    <br><br>
                                    <input type="text" name="Correo" id="Correo" class="campo" maxlength="255" placeholder="Correo Electrónico" autocomplete="off" />                                    
                                    <br><br>
                                    <input type="number" name="Edad" id="Edad" class="campo" maxlength="3" placeholder="Edad" autocomplete="off" />
</div>
</div>
<div style="width:90%; height:10vh; position:relative; margin: 0 auto; margin-top:3vh; text-align:center;">
                <input id="botones" type="button" value="Ver Resultados" class="boton" onclick="validar()">
</div>
</div>

<div id="rta" style="display:none">
<div style="width:90%; height:60vh; position:relative; margin: 0 auto; background:#FFF; border-radius:3px; text-align:center; font-size:1em;" class="vertical-centered-text">
    <div style="padding:5%; line-height:120%; display:none;" id="alerta"></div>
    <div style="padding:5%; line-height:120%;" id="loading">
           <img src="img/loader.gif" border="0"/><br><br>Procesando
    </div>
</div>
<div style="width:90%; height:10vh; position:relative; margin: 0 auto; margin-top:3vh; text-align:center;">
                <input id="final" type="button" value="Reiniciar" class="boton" onclick="window.location='inicio'" style="display:none;">
</div>
</div>



</div>
</body>
</html>
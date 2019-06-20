<?php
   function conexion() 
   { 
	$conexion = mysql_connect('localhost', 'delnea_user', '664379') or die (mysql_error());  // se conecta con el servidor
	mysql_select_db('delnea_cuencasp', $conexion) or die (mysql_error()); // selecciona la base de datos
	return $conexion;
   } 
   function cambiofecha($fechamysql){ 
	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fechamysql, $fechaproceso); 
	$fechacorrecta = $fechaproceso[3] . "." . $fechaproceso[2] . "." . $fechaproceso[1]; 
	return $fechacorrecta; 
   } 

   function cambiofecha2($fechaphp){ 
	ereg( "([0-9]{1,2})-([0-9]{1,2})-([0-9]{2,4})", $fechaphp, $fechaproceso); 
	$fechacorrecta = $fechaproceso[3] . "-" . $fechaproceso[2] . "-" . $fechaproceso[1]; 
	return $fechacorrecta; 
   }
   function dbdia($fechamysql){ 
	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fechamysql, $fechaproceso); 
	$fechacorrecta = $fechaproceso[3]; 
	return $fechacorrecta; 
   }

   function dbmes($fechamysql){ 
	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fechamysql, $fechaproceso); 
	$fechacorrecta = $fechaproceso[2]; 
	return $fechacorrecta; 
   }

   function dbanio($fechamysql){ 
	ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fechamysql, $fechaproceso); 
	$fechacorrecta = $fechaproceso[1]; 
	return $fechacorrecta; 
   } 
   
   define("BASE","http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
	  
   function head() 
   { 
?>
    <meta http-equiv="Content-Language" content="es">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <META NAME="AUTHOR" CONTENT="Universidad de la Cuenca del Plata">
    <META NAME="SUBJECT" CONTENT="Universidad de la Cuenca del Plata">
    <META NAME="COPYRIGHT" CONTENT="Universidad de la Cuenca del Plata">
    <META NAME="KEYWORDS" CONTENT="Universidad de la Cuenca del Plata">
    <META NAME="DESCRIPTION" CONTENT="Estudiar cambia tu vida">
    <META NAME="GENERATOR" CONTENT="Universidad de la Cuenca del Plata">
    <META NAME="Language" CONTENT="Spanish">
    <META NAME="Distribution" CONTENT="Global">
    <META NAME="Robots" CONTENT="All">
    <base href="<?=BASE?>" />

    <LINK REL="stylesheet" TYPE="text/css" HREF="jquery-ui.min.css">
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

    <!-- Favicon -->
    <link rel="icon" sizes="192x192" href="img/icon.png">
    <link rel="apple-touch-icon" href="img/icon-ios.png">
    <meta name="msapplication-square310x310logo" content="img/icon-ms.png">

    <!-- Status bar/Browser Custom Color -->
    <meta name="theme-color" content="#295E94">
	<meta name="apple-mobile-web-app-status-bar-style" content="#295E94">
    <meta name="msapplication-navbutton-color" content="#295E94">
    
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    
	<!--[if lt IE 7]>
            <script type="text/javascript" src="js/unitpngfix.js"></script>
    <![endif]-->

	<script>
	//Google analytics    
    </script>
 
<? 
   }
    
  function cabecera() 
   { 

?>


    <div id="superior" style="width:100%; height:10vh; position:relative; background:#295E94; margin:0; padding:0; margin-bottom:3vh;">
        <div style="width:90%; height:100%; position:relative; margin: 0 auto;">
            <div class="logo"><a href="inicio"><img src="img/logo.svg" height="100%" title="Universidad de la Cuenca del Plata - Saenz Peña"/></a></div>
        </div>
    </div>


<? 
   }    
   function menu() 
   { 
?>

<div class="menu">
		<a href="inicio" id="m1" <? if(strpos($_SERVER['PHP_SELF'],"index.php")){ echo "class=\"active\"";} ?> ><span class="m0">Inicio</span></a><a href="objetivos" id="m2" <? if(strpos($_SERVER['PHP_SELF'],"objetivos.php")){ echo "class=\"active\"";} ?> ><span class="m0">Objetivos</span></a><a href="oferta-educativa" id="m3" <? if(strpos($_SERVER['PHP_SELF'],"oferta-educativa.php")){ echo "class=\"active\"";} ?> ><span class="m0">Oferta Educativa</span></a>
</div>
    
<? 
   }   

   function menu2() 
   { 
?>

<div class="menu">
	<a href="videos" id="m5" <? if(strpos($_SERVER['PHP_SELF'],"videos.php")){ echo "class=\"active\"";} ?> ><span class="m0">Videos</span></a><a href="fotos" id="m4" <? if(strpos($_SERVER['PHP_SELF'],"galeria.php") or strpos($_SERVER['PHP_SELF'],"fotos.php")){ echo "class=\"active\"";} ?> ><span class="m0">Galeria</span></a><a href="contacto" id="m6" <? if(strpos($_SERVER['PHP_SELF'],"contacto.php")){ echo "class=\"active\"";} ?> ><span class="m0">Contacto</span></a>
</div>

<? 
   }
      function biblioteca() 
   {
	   ?><p class="linkbv"><a href="biblioteca-virtual" >Biblioteca Virtual</a></p><?
   }
      function lateral() 
   { 
   
   				
               $conexion=conexion();
           
               $tabla = mysql_query("SELECT * FROM noticia_nota WHERE not_est=1 AND not_ubi=1 ORDER by not_id DESC LIMIT 2", $conexion);
               $total=mysql_num_rows($tabla);
        	   $chr=0;
                if($total>0){
						
						?>
						<div class="incon2">NOTICIAS BREVES</div>
						<div class="contenido2">
						<?	
                       while ($registro = mysql_fetch_array ($tabla)) {
                                    $chr++;       
                                    ?>
                                    <p class="t14 inter" style="margin-bottom:10px; font-weight:700;"><?=$registro[not_tit]?></p>
                                    <p class="t11 inter"><?=recorte($registro[not_cop],98)?> <a href="nota/<?=urls_amigables($registro[not_tit],$registro[not_id])?>">Leer nota</a></p>
                                    <?
									if($chr<2){ echo "<hr>"; }
                       }
					   ?>
                       <p class="linkvm"><a href="noticias-breves" >Ver más</a></p>
                       </div>
					   <?
                  }else{ clima(); } ?>

                	
                			
<? 
   }
      function clima() 
   { 
?>

<? 
   }      
   function tituloseccion($texto) 
   { 
?>
<div style="width:100%; height:auto; position:relative; line-height:30px; font-size:28px; color:#75706B; overflow:hidden;">
<p><?=$texto?></p>
</div>
<hr />
<? 
   }
   function tituloseccion2($texto) 
   { 
?>
<div style="width:100%; height:30px; position:relative; line-height:30px; font-size:16px; color:#333; overflow:hidden;">
<p><img src="img/arrow4.png" border="0" align="absmiddle"/>&nbsp; <?=$texto?></p>
</div>
<hr style="margin:10px 0 10px 0;" />
<? 
   }
	function recorte($txt,$long){
					if ( strlen($txt) > $long ) { $txt = str_replace("\"","&quot;",$txt); $txt = substr($txt, 0,$long)."..."; }
					return $txt;				
	}     
	function urls_amigables($url,$id) { 
	
		// Tranformamos todo a minusculas 
		
		$url = trim(strtolower($url)); 
		
		//Rememplazamos caracteres especiales latinos 
		
		$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ'); 
		
		$repl = array('a', 'e', 'i', 'o', 'u', 'n'); 
		
		$url = str_replace ($find, $repl, $url); 
		
		// Añaadimos los guiones 
		
		$find = array(' ', '&', '\r\n', '\n', '+'); 
		$url = str_replace ($find, '-', $url); 
		
		// Eliminamos y Reemplazamos demás caracteres especiales 
		
		$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'); 
		
		$repl = array('', '-', ''); 
		
		$url = "$id/".preg_replace ($find, $repl, $url); 
		
		return $url; 
	
	}        
   function espacio($alto) 
   { 
?>
<div style="width:100%; height:<?=$alto?>px; position:relative;"></div>
<? 
   }
   function Pie() 
   {
?>

<? }  ?>
<?php 

/*for ($i = 1; $i <= 20; $i++) {
    echo $_POST["q".$i].", ";
	}
*/

$area1=$_POST[q4]+$_POST[q9]+$_POST[q12]+$_POST[q18];
$area2=$_POST[q6]+$_POST[q13]+$_POST[q19]+$_POST[q20];
$area3=$_POST[q5]+$_POST[q10]+$_POST[q15]+$_POST[q17];
$area4=$_POST[q1]+$_POST[q7]+$_POST[q11]+$_POST[q16];
$area5=$_POST[q2]+$_POST[q3]+$_POST[q8]+$_POST[q14];

$area1=$area1/4*100;
$area2=$area2/4*100;
$area3=$area3/4*100;
$area4=$area4/4*100;
$area5=$area5/4*100;

$opciones=$_POST[q1].",".$_POST[q2].",".$_POST[q3].",".$_POST[q4].",".$_POST[q5].",".$_POST[q6].",".$_POST[q7].",".$_POST[q8].",".$_POST[q9].",".$_POST[q10].",".$_POST[q11].",".$_POST[q12].",".$_POST[q13].",".$_POST[q14].",".$_POST[q15].",".$_POST[q16].",".$_POST[q17].",".$_POST[q18].",".$_POST[q19].",".$_POST[q20];


if(!empty($_POST[Nombre]) && !empty($_POST[Correo]) && !empty($_POST[Documento]) && !empty($_POST[Edad]) && !empty($_POST[Tel])){
	if (filter_var($_POST[Correo], FILTER_VALIDATE_EMAIL)) {	
							$nombre= $_POST[Nombre];
							$asunto= "Universidad de la Cuenca del Plata";
							$remitente = "ingreso@ucp.edu.ar";
							$destino = $_POST[Correo];
						
							$encabezado = "From:".$remitente."\nReply-To:".$remitente."\n"; 
							$encabezado .= "X-Mailer:PHP/".phpversion()."\n"; 
							$encabezado .= "Mime-Version: 1.0\n"; 
							$encabezado .= "Content-Type: text/html"; 
						
							if (isset($_POST)){
							$cuerpo = "	<table width='100%' border='0' cellspacing='0' cellpadding='20' style='border:1px solid #CCCCCC;'>
										<tr><td bgcolor='#295E94' height='100'><font color='#FFFFFF' size='6'><b>Universidad de la Cuenca del Plata</b></font></td>
										</tr><tr><td style='#333333'>
										
										<br> 
										<b>Hola ".$_POST[Nombre]."</b>,<br><br>Te enviamos el Resultado que obtuviste en la Gu&iacute;a Orientativa de Inter&eacute;s Vocacional*.<br><br><br>";
								
							$cuerpo .= "<p align='left'>Arte, Dise&ntilde;o y Comunicaci&oacute;n: <b>".$area1."%</b></p>
								
										<div style='background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 0px 0px 10px 0px;'>
											<div style='background:#3CA95C; width: ".$area1."%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;'></div>
										</div>
										<font color='#666666'>Carreras: Licenciatura en Dise&ntilde;o Gr&aacute;fico y Multimedia, Licenciatura en Dise&ntilde;o de Indumentaria y Textil, Licenciatura en Publicidad.</font>
										<br><br><br>
										
										<p align=left'>Cs. Jur&iacute;dicas, Psicolog&iacute;a y RRHH: <b>".$area2."%</b></p>
										
										<div style='background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 0px 0px 10px 0px;'>
											<div style='background:#D3473C; width: ".$area2."%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;'></div>
										</div>
										<font color='#666666'>Carreras: Abogac&iacute;a, Escriban&iacute;a, Licenciatura en Psicolog&iacute;a, Licenciatura en Psicopedagog&iacute;a.</font>
										<br><br><br>
		
										<p align='left'>Cs. Empresariales: <b>".$area3."%</b></p>
										
										<div style='background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 0px 0px 10px 0px;'>
											<div style='background:#764F94; width: ".$area3."%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;'></div>
										</div>
										<font color='#666666'>Carreras: Licenciatura en Administraci&oacute;n, Contador P&uacute;blico, Licenciatura en Comercio Internacional, Licenciatura en Emprendimiento Tur&iacute;stico y Gesti&oacute;n Hotelera.</font>
										<br><br><br>
		
										<p align='left'>Ingenier&iacute;a y Tecnolog&iacute;a: <b>".$area4."%</b></p>
										
										<div style='background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 0px 0px 10px 0px;'>
											<div style='background:#388DBB; width: ".$area4."%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;'></div>
										</div>
										<font color='#666666'>Carreras: Ingenier&iacute;a en Sistemas de Informaci&oacute;n, Ingenier&iacute;a en Alimentos.</font>
										<br><br><br>
		
										<p align='left'>Cs. Biol&oacute;gicas y de la Salud: <b>".$area5."%</b></p>
										
										<div style='background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 10px 0px;'>
											<div style='background:#FBC600; width: ".$area5."%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;'></div>
										</div>
										<font color='#666666'>Carreras: Licenciatura en Nutrici&oacute;n, Licenciatura en Educaci&oacute;n F&iacute;sica.</font>
										<br><br><br><br>
										
										<b>Te interesa conocer nuestras carreras?</b><br><br>
										Comun&iacute;cate con nosotros<br><br>										
										<b>Tel</b>: 3794722555 | 3795191927<br><br>
										<b>Email</b>: coordsaenzpena@ucp.edu.ar | ingreso@ucp.edu.ar<br><br>
										<b>Facebook</b>: <a href='https://facebook.com/cuencadelplatasp/'>@cuencadelplatasp</a><br><br>
										
										Personalmente en Moreno 685, Planta Alta, de Lunes a Viernes de 9 a 12hs y de 18 a 20hs. Y pr&oacute;ximamente en nuestro Edificio, ubicado en Rivadavia 580.
										
										<br><br><br><br>
										Te esperamos,
										<br><br><br><br>
										<b>UCP - Sede Regional Saenz Pe&ntilde;a</b><br>
										<i>Estudiar cambia tu vida</i>
										<br><br><br><br><br>
										<hr>
										<br><br>
										<font size='1'>*Este resultado no persigue el fin de proporcionar un proceso acabado y completo de orientaci&oacute;n vocacional, ni asegura que los resultados expuestos en el test funcionen como determinantes y exitosos en la elecci&oacute;n futura.</font>
										<br><br>";
																				
							}
							$cuerpo .= "</td></tr></table><br><br><p align='center'><font size='1' color='#999999'>Enviado desde <b>ucp.edu.ar</b></font></p>";
							
							include("libreria.php");
							$conexion=conexion();
							$fecha=date("Y-m-d H:i:s");
							
							if (mysql_query("INSERT INTO respuestas (id_rta,rta_fecha,rta_doc,rta_nombre,rta_edad,rta_correo,rta_tel,rta_opciones,rta_1,rta_2,rta_3,rta_4,rta_5) values (NULL,'$fecha','$_POST[Documento]','$_POST[Nombre]','$_POST[Edad]','$_POST[Correo]','$_POST[Tel]','$opciones','$area1','$area2','$area3','$area4','$area5')",$conexion)){

							if (mail($destino,$asunto,$cuerpo,$encabezado)) {
							
								?>
								<p align="left">Arte, Diseño y Comunicación</p>
								
								<div style="background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 15px 0px;">
									<div style="background:#3CA95C; width: <?=$area1?>%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;"></div>
									<div style="width: 100%; height: 20px; position:absolute; top:0px; left:10px; z-index:2; color:#FFF; text-align: left"><?=$area1?>%</div>
								</div>
								
								<p align="left">Cs. Jurídicas, Psicología y RRHH</p>
								
								<div style="background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 15px 0px;">
									<div style="background:#D3473C; width: <?=$area2?>%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;"></div>
									<div style="width: 100%; height: 20px; position:absolute; top:0px; left:10px; z-index:2; color:#FFF; text-align: left"><?=$area2?>%</div>
								</div>
								
								<p align="left">Cs. Empresariales</p>
								
								<div style="background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 15px 0px;">
									<div style="background:#764F94; width: <?=$area3?>%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;"></div>
									<div style="width: 100%; height: 20px; position:absolute; top:0px; left:10px; z-index:2; color:#FFF; text-align: left"><?=$area3?>%</div>
								</div>
								
								<p align="left">Ingeniería y Tecnología</p>
								
								<div style="background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 15px 0px;">
									<div style="background:#388DBB; width: <?=$area4?>%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;"></div>
									<div style="width: 100%; height: 20px; position:absolute; top:0px; left:10px; z-index:2; color:#FFF; text-align: left"><?=$area4?>%</div>
								</div>
								
								<p align="left">Cs. Biológicas y de la Salud</p>
								
								<div style="background: #F1F1F1; width: 100%; height: 20px; border: 1px solid #CCC; position: relative; overflow: hidden; border-radius: 3px; margin: 5px 0px 15px 0px;">
									<div style="background:#FBC600; width: <?=$area5?>%; height: 20px; position:absolute; top:0px; left:0px; z-index:1;"></div>
									<div style="width: 100%; height: 20px; position:absolute; top:0px; left:10px; z-index:2; color:#FFF; text-align: left"><?=$area5?>%</div>
								</div>
								
								Se ha enviado su respuesta<br /><b>Gracias por participar!</b>
                                
								<script language="javascript">
								$( "#progressbar" ).progressbar({ value: 100 });
								$("#final").show();
								</script>
								
								<? 		

							}else{ 
								?>No se ha podido enviar la respuesta!<br /><br /><input type="button" value="Reintentar" class="boton" onclick="habilitar()"><?
							}
													
							}else{ 
								?>No se ha podido guardar el registro!<br /><br /><input type="button" value="Reintentar" class="boton" onclick="habilitar()"><?
							}

	}else{
		?>Su dirección de correo no es válida!<br /><br /><input type="button" value="Reintentar" class="boton" onclick="habilitarcorreo()"><?
	}

}else{
		
	?>Campos incompletos!<br /><br /><input type="button" value="Reintentar" class="boton" onclick="habilitar()"><?
	
}
?>

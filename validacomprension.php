<?php 
	require("./language.php");  //Clase Lenguaje
	$imagen = "img/feliz.png";  //encabezado
	
// parseo datos
	$preg1 	= utf8_decode($_POST['pc1']);
	$preg2 	= utf8_decode($_POST['pc2']);
	$preg3 	= utf8_decode($_POST['pc3']);
	$preg4 	= utf8_decode($_POST['pc4']);
	$preg5 	= utf8_decode($_POST['pc5']);
	$time1 	= utf8_decode($_POST['tiempo1']); //aqui viene la hora en que inicio a contestar.
	
	$time2 	 = time(); //termino de contestar.
	$diftime = $time2-$time1;  
	  
	$buenas  = 0; 	$malas	 = 0; 	$puntos	 = 0;
	$observaciones = 'Muy Bien Felicitaciones';
	
	//obteniendo respuestas  
	$resp1 = $obj_language->getRespuesta1();
	$resp2 = $obj_language->getRespuesta2();
	$resp3 = $obj_language->getRespuesta3();
	$resp4 = $obj_language->getRespuesta4();
	$resp5 = $obj_language->getRespuesta5();
	
	//revisando buenas
	if ($preg1 == $resp1) { $buenas = $buenas+1; $puntos=$puntos+20; } else { $malas = $malas+1; }
	if ($preg2 == $resp2) { $buenas = $buenas+1; $puntos=$puntos+20; } else { $malas = $malas+1; }
	if ($preg3 == $resp3) { $buenas = $buenas+1; $puntos=$puntos+20; } else { $malas = $malas+1; }
	if ($preg4 == $resp4) { $buenas = $buenas+1; $puntos=$puntos+20; } else { $malas = $malas+1; }
	if ($preg5 == $resp5) { $buenas = $buenas+1; $puntos=$puntos+20; } else { $malas = $malas+1; }
	
	if ($puntos <100) { $observaciones = 'Intentalo de Nuevo, puedes mejorar'; }
?>    
<html>    
	<head>    
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>RESULTADO LENGUAJE</title>  
		<!-- bootstrap -->  
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">				
	</head>
<body>    
  <div class="container" align='center'>
	<div class="row">
      <div class="col-xl-12"> 
        <Center>
		<br>
			<a href="menu.php"> 
					<img src=<?php echo $imagen;?> width='25%' />  <!--  IMAGEN -->
			</a>
			<br><br><br>
      </div>          
      <div class="col-xl-12" >
        <h1>RESULTADO LENGUAJE</h1>  
			<p>Tiempo en Segundos: 	<?php echo $diftime; ?></p>  
			<p>Preguntas Buenas:	<?php echo $buenas; ?></p>  
			<p>Preguntas Malas:		<?php echo $malas; ?></p>  
			<p>Total de Puntos:<b>	<?php echo $puntos; ?> </b></p>  
			<p>Observaciones:		<?php echo $observaciones; ?></p>  
			<br><br><br>
			<a href="menu.php"> 
					Regresar 
			</a>
      </div>
    </div>      
 </body>
</html>   



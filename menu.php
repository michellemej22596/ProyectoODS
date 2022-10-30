<?php    
	session_start();  
	//imagen UVG inicio	
	$imagen	 	 = "img/gt_uvg.GIF";  //encabezado
?>
  
<html>    
   
	<head>    
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>MENU PREGUNTITAS</title>  
		
		<!-- bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">				
	</head>
<body>  

<br><br>
  <div class="container" align='center'>
	<div class="row">
      <div class="col-xl-4" style="background-color:#ccc">
        <h1>Comprensión Lectora</h1>  
				<a href="comprension.php" title="Habilidad de Lectura">  
					<img src="img/language.PNG" width="230" height="130"/>
				</a> 
        <p>Mejora tu comprensión</p> 
      </div>
      <div class="col-xl-4"  >
        <h1>Matemáticas</h1> 
				<a href="matematicas.php" title="Habilidad Numérica">  
					<img src="img/math.PNG" width="230" height="130"/> 
				</a>   
        <p>a Jugar con Numeros</p> 
      </div>
      <div class="col-xl-4"  style="background-color:#ccc">
        <h1>Historia</h1>   
		<br>  
				<a href="historia.php" title="Habilidad Memoria">  
					<img src="img/history.PNG" width="230" height="130"/>
				</a> 
        <p>Aprendiendo del pasado</p> 
      </div>
    </div>
	
	<div class="row">  
      <div class="col-xl-4"  >
        <h1>¿Sabias Que?</h1>    
				<a href="progreso.php" title="Aprende algo nuevo">  
					<img src="img/sabias.PNG" width="230" height="130"/>
				</a>  
        <p>Revisa tus conocimientos</p> 
      </div>
      <div class="col-xl-4"  style="background-color:#ccc">
        <h1>Ver Creadores</h1> 
				<a href="creadores.php" title="Conoce a los creadores">  
					<img src="img/creadores.PNG" width="230" height="130"/>
				</a> 
        <p>Realizado por</p> 
      </div>  
      <div class="col-xl-4">    
        <h1>Salir</h1>  
		<br>     
				<a href="login.php" title="Jugamos Luego">  
					<img src="img/salir.PNG" width="230" height="130"/>
				</a> 
		<br><br>    
        <p>Hasta Pronto</p> 
      </div>   
	</div>  
	
  </body>
</html>



 
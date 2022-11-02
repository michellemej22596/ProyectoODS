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
		<style type="text/css">
			#letra{
				font-family: Comic Sans MS;
				font-size: 14px;
			}
			#letraTitulo{
				font-family: Comic Sans MS;
				font-size: 28px;
			}
		</style>		
	</head>
<body>  

<br><br>
  <div class="container" align='center'>
	<div class="row">
      <div class="col-xl-4" style="background-color:#ccc">
      	<br>
        <h1 id="letraTitulo" >Comprensión Lectora</h1>  
				<a href="comprension.php" title="Habilidad de Lectura">  
					<img src="img/language2.png" width="230"/>
				</a> 
        <p id="letra">Mejora tu comprensión</p> 
      </div>
      <div class="col-xl-4"  >
      	<br>
        <h1 id="letraTitulo">Matemáticas</h1> 
				<a href="matematicas.php" title="Habilidad Numérica">  
					<img src="img/math.png" width="230"/> 
				</a>   
				<br>
        <p id="letra">A jugar con Números</p> 
      </div>
      <div class="col-xl-4"  style="background-color:#ccc">
      	<br>
        <h1 id="letraTitulo">Historia</h1>   
		<br>  
				<a href="historia.php" title="Habilidad Memoria">  
					<img src="img/history2.png" width="230"/>
				</a> 
        <p id="letra">Aprendiendo del pasado</p> 
      </div>
    </div>
	
	<div class="row">  
      <div class="col-xl-4"  >
      	<br>
        <h1 id="letraTitulo">¿Sabías Qué?</h1>    
				<a href="progreso.php" title="Aprende algo nuevo">  
					<img src="img/sabias.png" width="230"/>
				</a>  
        <p id="letra">Revisa tus conocimientos</p> 
      </div>
      <div class="col-xl-4"  style="background-color:#ccc">
      	<br>
        <h1 id="letraTitulo">Ver Creadores</h1> 
				<a href="creadores.php" title="Conoce a los creadores">  
					<img src="img/creadores2.png" width="230" />
				</a> 
        <p id="letra">Integrantes</p> 
      </div>  
      <div class="col-xl-4">    
      	<br>
        <h1 id="letraTitulo">Salir</h1>  
		<br>     
				<a href="index.php" title="Jugamos Luego">  
					<img src="img/salir2.PNG" width="230"/>
				</a> 
		<br><br>    
        <p id="letra">¡Hasta Pronto!</p> 
      </div>   
	</div>  
	
  </body>
</html>



 
<?PHP
	require("./language.php");  //Clase Lenguaje.
	$imagen = "img/pinguinoUVG.png";  //encabezado
	$tiempo_ini=time(); //empieza a correr el tiempo.
?>    
 
<html>    
    <head>    
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>COMPRENSIÓN</title>  
		<!-- bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">	
		<link rel="stylesheet" href="css/fondo.css">		
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
  <form action="validacomprension.php" method="POST"> 
   <div class="container" align='center'>
	 <div class="row">
      <div class="col-xl-12"> 
        <Center>  
		<br>  
			<a href="menu.php"> 
					<img src=<?php echo $imagen;?> width='20%' />  <!--  IMAGEN -->
			</a>
			<br><br><br>
      </div>      
      <div class="col-xl-12" >
        <h1 id="letraTitulo">COMPRENSION LECTORA</h1>  
			<p id="letra">Instrucciones: Lee el párrafo y selecciona la respuesta correcta</p>  
			<p id="letra">Anna tiene dos perritos y un gato. Anna está contenta ya que por ser su<br>
			    cumpleaños número ocho su mamá le regalo una pecera pequeña con dos<br>
				pececitos de colores. Anna quiere mucho a los animales.</p>
			<br> 
			<label for="pregunta"><?php echo $obj_language->getPregunta1(); ?></label>
				<select name="pc1" id="mascota">
				  <option value="4">Cuatro Mascotas</option>
				  <option value="5">Cinco Mascotas</option>
				  <option value="6">Seis Mascotas</option>
				  <option value="8">Ocho Mascotas</option>
				</select>
			<br>
			<label for="preg1"><?php echo $obj_language->getPregunta2(); ?></label>
				<input type="number" name="pc2" class="form-input" value=' ' required/> 
			<br>	  			
			<label for="preg2"><?php echo $obj_language->getPregunta3(); ?></label>
				<input type="number" name="pc3" class="form-input" value=' ' required/>    
			<br> 
			<label for="preg4"><?php echo $obj_language->getPregunta4(); ?></label>
				<select name="pc4" id="mascota2">
				  <option value="1">Triste</option>
				  <option value="2">Contenta</option>
				  <option value="3">Hambrienta</option>
				  <option value="4">Enojada</option>
				</select>
			<br>  
			<label for="preg5"><?php echo $obj_language->getPregunta5(); ?></label>
				<input type="number" name="pc5" class="form-input" value=' ' required/>   

			<br>  
			<br>  

				<!--variable oculta para pasar el tiempo -->
				<input type="hidden" name="tiempo1" class="form-input" value=<?php echo $tiempo_ini; ?> required/>    
				
				<input  id="letra" class="btn btn-primary" name="submit" type="submit" value="Enviar Respuesta" />
			<br><br>
			<a id="letra" href="menu.php">    
				regresar
			</a>  
      </div>
    </div>  
	</form>  
 </body>
</html>    



 
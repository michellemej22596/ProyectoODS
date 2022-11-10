<?PHP 
 require("./math.php");  //Clase Matematicas. 
 $imagen = "img/pinguinoUVG.png";  //encabezado
 $tiempo_ini=time(); //empieza a correr el tiempo.
?>        

<html>    
	<head>    
		<title>MATEMÁTICAS</title>  
		<!-- bootstrap --> 
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
		<link rel="stylesheet" type="text/css" href="css/fondo.css">
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
 <form action="validamate.php" method="POST"> <!-- Llamar a la pagina de validación metodo POST --> 
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
        <h1 id="letraTitulo">MATEMÁTICAS</h1>  
			<p id="letra">Instrucciones: Contesta las siguientes preguntas</p>  
			<br>
			<label for="pregunta1"><?php echo $obj_math->getPregunta1(); ?></label>
				<input type="number" name="pm1" class="form-input" value=' ' required/>
				<br>	
			<label for="pregunta2"><?php echo $obj_math->getPregunta2(); ?></label>
				<input type="number" name="pm2" class="form-input" value=' ' required/>    
				<br>	
			<label for="pregunta3"><?php echo $obj_math->getPregunta3(); ?></label>
				<input type="number" name="pm3" class="form-input" value=' ' required/>  
				<br>	
			<label for="pregunta4"><?php echo $obj_math->getPregunta4(); ?></label>
				<input type="number" name="pm4" class="form-input" value=' ' required/> 
				<br>	
			<label for="pregunta5"><?php echo $obj_math->getPregunta5(); ?></label>
				<input type="number" name="pm5" class="form-input" value=' ' required/>   
			<br><br>
				<!--variable oculta para pasar el tiempo cuando inicio a contestar -->
				<input type="hidden" name="tiempo1" class="form-input" 
					value=<?php echo $tiempo_ini; ?> required/>    
				
				<!--Boton envia respuesta  (submit)  -->
				<input   id="letra" class="btn btn-primary" name="btn_mate" type="submit" value="Enviar Respuestas" />
			<br><br><br>  
			<a href="menu.php" id="letra"> 
					regresar
			</a>  
      </div>
    </div>    
  </form>
 </body>
</html>   
<?PHP
	require("./history.php");  //Clase historia
	$imagen = "img/pinguinoUVG.png";  //encabezado
	 
	$tiempo_ini=time(); //empieza a correr el tiempo.
?>  
 
<html>    
	<head>    
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>HISTORIA</title>  
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
 <form action="validahistoria.php" method="POST"> 
  <div class="container" align='center'>
	<div class="row">
      <div class="col-xl-12"> 
        <Center>
		<br>
			<a href="menu.php"> 
					<img src=<?php echo $imagen;?> width='20%' />  <!--  IMAGEN -->
					<link rel="stylesheet" href="css/fondo.css">
			</a>
			<br><br><br>
      </div>      
      <div class="col-xl-12" >
        <h1 id="letraTitulo">HISTORIA</h1>    
			<p id="letra">Instrucciones: Contesta las siguientes preguntas</p>  
			<br>
			<label for="respuesta"><?php echo $obj_hist->getPregunta1(); ?></label>
				<select name="ph1" id="preg1">
				  <option value="1">El 12 de octubre del año 1492</option>
				  <option value="2">El 15 de septiembre del año 1721</option>
				  <option value="3">El 15 de septiembre del año 1821</option>
				  <option value="4">01 de noviembre del año 1921</option>
				</select> <br>  
			<label for="respuesta"><?php echo $obj_hist->getPregunta2(); ?></label>
				<select name="ph2" id="preg2">
				  <option value="1">País de la Eterna Primavera</option>
				  <option value="2">lugar de muchos Lagos</option>
				  <option value="3">lugar de muchos volcanes</option>
				  <option value="4">Lugar de bosques ó muchos árboles</option>
				</select> <br>
			<label for="respuesta"><?php echo $obj_hist->getPregunta3(); ?> </label>
				<select name="ph3" id="preg3"> 
				  <option value="1">El 15 de septiembre del año 1821</option>
				  <option value="2">El 14 de Marzo del año 1897</option>
				  <option value="3">El 20 de octubre del año 1944</option>
				  <option value="4">El 15 de septiembre del año 1825</option>
				</select> <br>    
				<label for="respuesta"><?php echo $obj_hist->getPregunta4(); ?> </label>
				<select name="ph4" id="preg4"> 
				  <option value="1">El parque Nacional de Tikal</option>
				  <option value="2">El parque Nacional de Iximché</option>
				  <option value="3">El parque Nacional de Petén</option>
				  <option value="4">El parque Nacional de Guatemala</option>
				</select> <br>    
				<label for="respuesta"><?php echo $obj_hist->getPregunta5(); ?> </label>
				<select name="ph5" id="preg5"> 
				  <option value="1">El Lago de Amatitlán</option>
				  <option value="2">El Lago de los cuchumatanes</option>
				  <option value="3">El Lago de Atitlán</option>
				</select> <br>    
			<br>     
				<input type="hidden" name="tiempo1" class="form-input" value=<?php echo $tiempo_ini; ?> required/>    
				<input  class="btn btn-primary" name="submit" type="submit" id="letra" value="Enviar Respuestas" />
			<br><br><br>
			<a href="menu.php" id="letra">   
					regresar 
			</a>
      </div>  
    </div>
  </form>
 </body>
</html>   



 
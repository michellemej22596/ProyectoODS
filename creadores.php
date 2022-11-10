<?PHP  
	$imagen	 	 = "img/igloo.png";  //encabezado
?>  

<html>    
	<head>    
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>CREADORES</title>  
		<!-- bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">		
		<link rel="stylesheet" type="text/css" href="css/fondo.css">		
	</head>
<body>    
  <div class="container" align='center' >
	<div class="row">  
      <div class="col-xl-12"> 
        <Center>
		<br>
			<a href="menu.php"> 
					<img src=<?php echo $imagen;?> width='20%' />  <!--  IMAGEN -->
			</a>
			<br><br><br>
      </div>      
      <div class="col-xl-12"> 
        <h1>CREADORES</h1>  
			<p>Proyecto Preguntitas</p>  
			<p>UVG 2022</p>  
				<marquee direction="up" width="250" height="150"   
						 scrolldelay="300" align='center' bgcolor="white" > 
						<p>Catedrático Ing. Moisés Alonso</p>  
						<p>Michelle Mejia&nbsp;&nbsp;&nbsp;--> 2022-22596</p>  
						<p>Pablo Álvarez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 2022-1082</p>  
						<p>Sivlia Illescas&nbsp;&nbsp;&nbsp;--> 2022-376</p>  
						<br><br>
						<p>Catedrático Ing. Moisés Alonso</p>  
						<p>Michelle Mejía&nbsp;&nbsp;&nbsp;--> 2022-22596</p>  
						<p>Pablo Álvarez&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--> 2022-1082</p>  
						<p>Sivlia Illescas&nbsp;&nbsp;&nbsp;--> 2022-376</p>  
				</marquee> 
			<br><br>
			<a href="menu.php"> 
					regresar 
			</a>
      </div>
    </div>
  </body>
</html>   



 
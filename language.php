<?php   
 require("./materias.php");  //Clase Materias.  
 class Language extends Materias
 {      
	  protected $Pregunta1;  protected $Respuesta1;  
	  protected $Pregunta2;  protected $Respuesta2;   
	  protected $Pregunta3;  protected $Respuesta3; 
	  protected $Pregunta4;  protected $Respuesta4;  
	  protected $Pregunta5;  protected $Respuesta5;  

	  //Funciones Preguntas: 
	  public function getPregunta1()	{	return $this->Pregunta1;  }  //devuelve pregunta1
	  public function getPregunta2()	{	return $this->Pregunta2;  }  //devuelve pregunta2
	  public function getPregunta3() 	{	return $this->Pregunta3;  }  //devuelve pregunta3
	  public function getPregunta4() 	{	return $this->Pregunta4;  }  //devuelve pregunta4
	  public function getPregunta5() 	{	return $this->Pregunta5;  }  //devuelve pregunta5
	    
	  public function setPregunta1($Pregunta1) { $this->Pregunta1 = $Pregunta1;  } //setear pregunta1
	  public function setPregunta2($Pregunta2) { $this->Pregunta2 = $Pregunta2;  } //setear pregunta2
	  public function setPregunta3($Pregunta3) { $this->Pregunta3 = $Pregunta3;  } //setear pregunta3
	  public function setPregunta4($Pregunta4) { $this->Pregunta4 = $Pregunta4;  } //setear pregunta4
	  public function setPregunta5($Pregunta5) { $this->Pregunta5 = $Pregunta5;  } //setear pregunta5
	  	  
	  public function getRespuesta1()   {	return $this->Respuesta1;  } //devuelve respuesta1
	  public function getRespuesta2()   {	return $this->Respuesta2;  } //devuelve respuesta2
	  public function getRespuesta3()   {	return $this->Respuesta3;  } //devuelve respuesta3
	  public function getRespuesta4()   {	return $this->Respuesta4;  } //devuelve respuesta4
	  public function getRespuesta5()   {	return $this->Respuesta5;  } //devuelve respuesta5
	  
	  public function setRespuesta1($Respuesta1)  {	$this->Respuesta1 = $Respuesta1;  } //setear respuesta1
	  public function setRespuesta2($Respuesta2)  {	$this->Respuesta2 = $Respuesta2;  } //setear respuesta2
	  public function setRespuesta3($Respuesta3)  {	$this->Respuesta3 = $Respuesta3;  } //setear respuesta3
	  public function setRespuesta4($Respuesta4)  {	$this->Respuesta4 = $Respuesta4;  } //setear respuesta4
	  public function setRespuesta5($Respuesta5)  {	$this->Respuesta5 = $Respuesta5;  } //setear respuesta5
 }
 //creado el objeto  
 $obj_language = new Language();    	
  
 //usando Clase Principal materias   
 $obj_language->setName('Lenguaje');     

 //asignando valores clase HISTORY
 $obj_language->setPregunta1('¿Cuántas mascotas tiene Anna?');  $obj_language->setRespuesta1(5);
 $obj_language->setPregunta2('¿Cuántos años tiene Anna?');  	$obj_language->setRespuesta2(8);
 $obj_language->setPregunta3('¿Cuántos gatos tiene Anna?');   	$obj_language->setRespuesta3(1);
 $obj_language->setPregunta4('¿Cómo se siente Anna?');   	$obj_language->setRespuesta4(2);
 $obj_language->setPregunta5('¿Cuántos perros tiene Anna?');   	$obj_language->setRespuesta5(2);
?>   
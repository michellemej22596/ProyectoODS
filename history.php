<?php  
 require("./materias.php");  //Clase Materias.  
 class History extends Materias
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
 $obj_hist = new History();  	

 //usando Clase Principal materias 
 $obj_hist->setName('Historia');

 //asignando valores clase HISTORY
 $obj_hist->setPregunta1('¿En qué año fue la independencia de Guatemala?');  	$obj_hist->setRespuesta1(3);
 $obj_hist->setPregunta2('¿Qué significa el nombre de Guatemala en náhuatl?');  $obj_hist->setRespuesta2(4);
 $obj_hist->setPregunta3('¿Cuando se creó el Himno Nacional de Guatemala?' );   $obj_hist->setRespuesta3(2);
  $obj_hist->setPregunta4('¿Qué parque Nacional ha sido declarado Patrimonio Mundial?' );   $obj_hist->setRespuesta4(1);
   $obj_hist->setPregunta5('¿Cuál es el lago más profundo de América Central?' );   $obj_hist->setRespuesta5(1);
 
?>   
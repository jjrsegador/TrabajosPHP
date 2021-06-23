<?php

class alumno{

  public string $nombre;
  public int $edad;
  public int $curso;

  function __construct() {
    $this->nombre="Desconocido";
    $this->edad=0;
    $this->curso=0;
  }


  public function mostrardatos() {
	  
    echo "<br>";
    echo "Nombre del alumno: ".$this->nombre;
    echo "<br>";
    echo "Edad: ".$this->edad;
    echo "<br>";
    echo "Curso: ".$this->curso;
    echo "<br>";

  }

 public function setalumno($nombre,$edad,$curso){

     $this->nombre=$nombre;
     $this->edad=$edad;
     $this->curso=$curso;
  }

  public function mayor_edad($edad){
	  
	  if ($edad >= 18){
		  echo "El alumno es mayor de 18 años";
	  }else{
		  echo "El alumno es menor de 18 años";
	  }
		 
  }

  

}

?>

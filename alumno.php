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

  public function cambiarnombre($nombre) {

     $this->nombre = $nombre;
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

  public function getalumno() {

    return $this->nombre;
    return $this->edad;
    return $this->curso;

  }

}

?>

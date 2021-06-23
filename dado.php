<?php

class dado {

  private int $minNumDado;
  private int $maxNumDado;

  public function __constructor() {

     $this->minNumDado=0;
     $this->maxNumDado=0;

  }

  public function setDado($minNumDado,$maxNumDado) {

     $this->comprobarDado($minNumDado,$valor);
     $this->minNumDado=$valor;
     echo "Valor mínimo dado ".$this->minNumDado;

     echo "<br>";

     $this->comprobarDado($maxNumDado,$valor);
     $this->maxNumDado=$valor;
     echo "Valor máximo dado ".$this->maxNumDado;

     echo "<br>";


  }

  public function getDado() {

      return $this->minNumDado;
      return $this->maxNumDado;

  }

  public function comprobarDado($datoValidar,&$datoValidado) {

      if($datoValidar<0||$datoValidar>12){
          $datoValidado=0;
      }
      else{
          $datoValidado=$datoValidar;
      }

  }

  public function tirarDado() {

      return rand($this->minNumDado,$this->maxNumDado);

  }


}


?>

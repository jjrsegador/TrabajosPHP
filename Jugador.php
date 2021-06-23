
<?php

class Jugador {

  private int $numeroJug;
  private int $ptos;

  public function __construct() {
  }

  public function setNumJug($numeroJug){

    $this->numeroJug=$numeroJug;

  }

  public function getNumJug() {

     return $this->numeroJug;
  }

  public function setPtos($numeroPtos){

     $this->ptos=$numeroPtos;
  }

  public function getPtos() {

      return $this->ptos;
  }

  public function addPtos($aumentaPtos){
      if($aumentaPtos>0){
          $this->ptos = $this->ptos + $aumentaPtos;
      }
  }
}

?>

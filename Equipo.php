<?php

class Equipo {

  private $tablaJugadores=array();

  public function __construct() {
  }

  public function addJugador($numJugador,$puntos) {

     $this->tablaJugadores=[$numJugador=>$puntos];
     print_r($this->tablaJugadores);


  }

  public function getJugador(){

  }

  public function getTotal() {

        foreach ($this->tablaJugadores as $valor) {
          return $valor;
        }

  }
}

?>

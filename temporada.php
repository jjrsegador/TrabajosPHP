<?php
include 'Jugador.php';
include 'Equipo.php';
?>

<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD5 Caso2"</title>


</head>

<body>

  <?php

   $objJugador=new Jugador();
   $objEquipo=new Equipo();
   //$objEquipo->addJugador(25,18);

   // Prueba métodos de asignación y obtención de información a través de métodos setNumJug y getNumJug
   $objJugador->setNumJug(4);
   $numeroJug = $objJugador->getNumJug();

   // Prueba método añade puntos
   $objJugador->setPtos(0);
   $objJugador->addPtos(20);

   $totalPuntosEquipo=0;
   // Creamos tabla de forma aleatoria con número de jugador como clave + puntos conseguidos.
   for($i=1;$i<=9;$i++) {

      $asignarPuntos = rand(20,200);
      $objEquipo->addJugador($i,$asignarPuntos);
      $totalPuntosEquipo=$totalPuntosEquipo + $objEquipo->getTotal();

   }

   // Totalizamos los puntos conseguidos por nuestros jugadores

      echo "<br>";
      echo "El total de puntos del equipo es: ".$totalPuntosEquipo;
      echo "<br>";


  ?>



</body>
</html>

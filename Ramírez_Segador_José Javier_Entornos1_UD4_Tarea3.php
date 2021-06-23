<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD4 Tarea3"</title>

   <!-- Hoja de estilos -->
   <link rel="stylesheet" type="text/css" href="../css/UD4_Tarea3_estilos.css">

</head>

<body>

  <?php

    // Definición de tabla sin datos
    $equipos=[];

    for ($i=0;$i<2;$i++){

      if ($i==0){

         $equipos[0]=["Nombre"=>"Los Atletas",
                      "Jugadores"=>11,
                      "Posicion"=> 1];


      }

      if ($i==1){

        $equipos[1]=["Nombre"=>"Sin Atletas",
                     "Jugadores"=>18,
                     "Posicion"=> 15];


      }

    }


  ?>

  <!-- Se muestra la tabla con información de los equpos -->
  <ul class="formato"> Se muestran los equipos </ul>
  <?php

       foreach ($equipos as $clave=>$valor){

          foreach ($valor as $clave2=>$valor2){

              echo("<li class=\"formato\">  $clave2: $valor2 </li>");
          }
       }
  ?>

</body>
</html>

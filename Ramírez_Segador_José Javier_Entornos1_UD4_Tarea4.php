<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD4 Tarea3"</title>

   <!-- Hoja de estilos -->
   <link rel="stylesheet" type="text/css" href="../css/UD4_Tarea4_estilos.css">

</head>

<body>

  <?php

    // Definición de tabla sin datos
    $equipos=[];

    for ($i=0;$i<2;$i++){

      if ($i==0){

         $equipos[0]=["Los Atletas",
                      11,
                      1];


      }

      if ($i==1){

        $equipos[1]=["Sin Atletas",
                     18,
                     15];


      }

    }


  ?>

  <!-- Se muestra la tabla con información de los equpos -->
  <table id="tabla">
      <tr>
          <th class="cabecera"> Nombre de equipo </th>
          <th class="cabecera"> Jugadores        </th>
          <th class="cabecera"> Posición         </th>
      </tr>

      <?php

          foreach ($equipos as $clave=>$valor){

                if (strcmp($clave,0)==0){

                    echo("<tr>");

                    foreach ($valor as $clave2=>$valor2){

                     echo("<td class=\"cabecera\"> $valor2 </td>");

                    }

                     echo("</tr>");

                }

                if (strcmp($clave,0)==1){

                    echo("<tr>");

                    foreach ($valor as $clave2=>$valor2){

                        echo("<td class=\"cabecera\"> $valor2 </td>");
                    }

                    echo("</tr>");
                 }

          }
      ?>

   </table>

</body>
</html>

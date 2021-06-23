<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD4 Tarea3"</title>

   <!-- Hoja de estilos -->
   <link rel="stylesheet" type="text/css" href="../css/UD4_Caso1_estilos.css">

</head>

<body>

  <?php

    // Definición de tabla con datos
    $tablas=["primera"=>5,
             "segunda"=>13,
             "tercera"=>11];

  ?>

  <!-- Se muestra la tabla con información de los equpos -->
  <table id="tabla">
      <tr>
          <th class="cabecera"> Tabla del 5 </th>
          <th class="cabecera"> Tabla del 13 </th>
          <th class="cabecera"> Tabla del 11 </th>
      </tr>

      <?php


         for($i=1;$i<=10;$i++){          

            foreach ($tablas as $clave=>$valor){

                switch ($clave){

                  case "primera":

                       $resul5 = $valor * $i;

                  case "segunda":

                       $resul13 = $valor * $i;

                  case "tercera":

                       $resul11= $valor * $i;
                }

            }

            echo("<tr>");
            echo("<td class=\"cabecera\"> 5 x  $i  = $resul5 </td>");
            echo("<td class=\"cabecera\"> 13 x $i = $resul13 </td>");
            echo("<td class=\"cabecera\"> 11 x $i = $resul11 </td>");
            echo("</tr>");

         }


      ?>

   </table>

</body>
</html>

<!DOCTYPE html
<html>
<head>
  <title>"Caso1"</title>
  <meta charset="utf-8">
</head>

<body>

  <p>
    <h3> Del 1 al 10 </h3>
  </p>

<?php
  //Inicialización de variables a utilizar en la tabla
   $primero="Primero";
   $segundo="Segundo";
   $tercero="Tercero";
   $cuarto="Cuarto";
   $quinto="Quinto";
   $sexto="Sexto";
   $septimo="Séptimo";
   $octavo="Octavo";
   $noveno="Noveno";
   $decimo="Décimo";
   $numeroCardinal=1;
   $numeroOrdinal=$primero;
   $indice=1;
?>

  <!-- Definición y visualización de la cabecera en HTML-->
  <table align=center width=70% border=1, cellpadding=2 cellspacing=0>
    <tr>
      <th> Cardinal </th>
      <th> Ordinal  </th>
    </tr>

    <?php
    //Visualización de las filas y columnas generadas en bucle while
    while ($indice <= 10) {
      echo "<tr>";
      echo "<td align=center> $numeroCardinal </td>";
      echo "<td align=center> $numeroOrdinal  </td>";
      echo "</tr>";
      $indice++;
      $numeroCardinal=$indice;
      switch ($indice){
      case 2:
        $numeroOrdinal = $segundo;
        break;
      case 3:
        $numeroOrdinal = $tercero;
        break;
     case 4:
        $numeroOrdinal = $cuarto;
        break;
     case 5:
        $numeroOrdinal = $quinto;
        break;
     case 6:
        $numeroOrdinal = $sexto;
        break;
     case 7:
        $numeroOrdinal = $septimo;
        break;
     case 8:
        $numeroOrdinal = $octavo;
        break;
     case 9:
        $numeroOrdinal = $noveno;
        break;
     case 10:
        $numeroOrdinal = $decimo;
        break;
      }
     }
   ?>

</body>
</html>

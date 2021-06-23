
<!-- Conexión a la BBDD -->
<?php

  // Creamos el objeto con la conexión.
  $mysqli = new mysqli("127.0.0.1:33065", "root", "", "Ciudades");
  // Verificamos si la conexión se ha realizado o no con éxito
  if($mysqli->connect_errno){
	  echo "connect_errno: " . $mysqli->connect_errno;
	  echo "<br>";
	  echo "connect_error: " . $mysqli->connect_error;
	  echo "<br>";
	  echo "La conexión no se ha realizado correctamente - código error: " . $mysqli->connect . " error: " . $mysqli->connect_error;
  }else{
	  echo "La conexión se ha realizado correctamente";
	  echo "<br><br>";
  }

?>

<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD7 Caso1"</title>
  <LINK media="all" type="text/css" rel="stylesheet" href="../css/Simulacro_2.css">


</head>
<body>

  <table id="tabla">
    <tr>
      <th>Ciudad</th>
      <th>Tamaño</th>
	  <th>Población</th>
    </tr>

  <?php

  // Se realiza la petición de consulta
  $resultado = $mysqli->query("Select * from ciudad");



  // Bucle para lectura de todos los fetch
  for($i=0;$i<$resultado->num_rows;$i++){

    echo "<tr>";

	//Cada fetch - 1 registro
    $fila = $resultado->fetch_assoc();

    $Ciudad=$fila["Ciudad"];
    $Tamaño=$fila["Tamaño"];
	$Habitantes=$fila["Habitantes"];

	echo ("<td class=\"fila\">" . $fila['Ciudad'] . "</td>");
    echo ("<td class=\"fila\"> $Tamaño </td>");
	echo ("<td class=\"fila\"> $Habitantes </td>");

    echo "</tr>";

  }

  ?>

  </table>

</body>
</html>

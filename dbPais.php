
<?php

  // Creamos el objeto con la conexión.
  $mysqli = new mysqli("127.0.0.1:33065", "root", "", "Paises");
  // Verificamos si la conexión se ha realizado o no con éxito
  if($mysqli->connect_errno){
	  echo "La conexión no se ha realizado correctamente - código error: " . $mysqli->connect . " error: " . $mysqli->connect_error;
  }else{
	  echo "La conexión se ha realizado correctamente";
	  echo "<br><br>";
  }

  // Se realiza la petición de consulta
  $resultado = $mysqli->query("Select * from jugador");

  // Bucle para lectura de todos los fetch
  for($i=0;$i<$resultado->num_rows;$i++){

	  //Cada fetch - 1 registro
	  $fila = $resultado->fetch_assoc();

	  // Una vez obtenido el registro, se muestra por pantalla
	  echo "Clave interna del registro: " . $fila["Id"];
	  echo "<br>";
	  echo "Nombre: " . $fila["Nombre"];
	  echo "<br>";
	  echo "Número: " . $fila["Numero"];
	  echo "<br>";
	  echo "Posición: " . $fila["Posicion"];
	  echo "<br>";
	  echo "Edad: " . $fila["Edad"];
	  echo "<br><br>";

  }



?>

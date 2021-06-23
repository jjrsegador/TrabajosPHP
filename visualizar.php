<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD6 Tarea1"</title>

</head>
<body>

  <?php
      echo "Mostramos la información del array recibido";
      echo "<br>";
      print_r($_POST);
      echo "<br>"; echo "<br>";
      echo "Mostramos cada uno de los campos de forma separada";
      echo "<br>";
      echo "Dirección: ".$_POST["calle"];
      echo "<br>";
      echo "Número: ".$_POST["numero"];
      echo "<br>";
      echo "Población: ".$_POST["poblacion"];
      echo "<br>";
      echo "Nación: ".$_POST["nacion"];



  ?>



</body>
</html>

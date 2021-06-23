<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD5 Caso1"</title>

   <!-- Hoja de estilos -->
   <link rel="stylesheet" type="text/css" href="../css/UD4_Tarea3_estilos.css">

</head>

<body>

  <?php
     include 'dado.php';

     $dados=new dado();

     // Ejemplo de validación de número menor que 1 y mayor que 12. En ambos casos se devolverá
     // valor cero
     $valorMinimo=-7;
     $valorMaximo=13;
     $dados->setDado($valorMinimo,$valorMaximo);


     // Una vez realizado ejemplo con números negativos pasamos a informar las variables con mínimo
     // y máximo permitidos.
     $valorMinimo=1;
     $valorMaximo=12;
     $dados->setDado($valorMinimo,$valorMaximo);

     // Se tiran los dados hasta 12 veces presentando el resultado
     for($i=1;$i<=12;$i++){

        $resultado=$dados->tirarDado();
        echo "Valor resultado de los dados: ".$resultado;
        echo "<br>";

     }


  ?>

</body>
</html>

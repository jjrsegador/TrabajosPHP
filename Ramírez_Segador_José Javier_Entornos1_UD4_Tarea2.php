<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD4 Tarea2"</title>

</head>

<body>

    <?php

    // Definición de tabla multidimensional
    $personas=["Juan"=>["altura"=>175, "pelo"=>"rubio", "ojos"=>"azules"],
               "María"=>["altura"=>168, "pelo"=>"castaña", "ojos"=>"marrón"],
               "Pedro"=>["altura"=>180, "pelo"=>"castaño", "ojos"=>"verdes"]
              ];

        print_r("<br>");

        foreach($personas as $clave=>$dato) {

             if ($clave =="Juan") {

                foreach($dato as $clave2=>$dato2){

                   if ($clave2=="altura"){

                     echo("La altura de " . $clave . " es: " . $dato2);
                    }
                 }
              }

              echo("<br>");

              if ($clave =="María") {

                 foreach($dato as $clave2=>$dato2){

                    if ($clave2=="ojos"){

                      echo("El color de ojos de " . $clave . " es: " . $dato2);
                     }
                  }
               }

               echo("<br>");

               if ($clave =="Pedro") {

                  foreach($dato as $clave2=>$dato2){

                     if ($clave2=="pelo"){

                       echo("El color de pelo de " . $clave . " es: " . $dato2);
                      }
                   }
                }

        }

   ?>


</body>
</html>

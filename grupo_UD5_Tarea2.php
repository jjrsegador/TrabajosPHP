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
     include 'alumno.php';

     /* Definición de objetos */
     $alumno1=new alumno();
     $alumno2=new alumno();

     $alumno1->setalumno('Pepe',18,3);
     /* Mostramos el getter */
     $alumno1->getalumno();
     $alumno1->mostrardatos();

     /* Cambiamos el nombre de 'Desconocido' creado en el constructor por el valor real del alumno */
     $alumno1->cambiarnombre('Pepe');
     $alumno2->cambiarnombre('Antonio');

     /* Salida por pantalla */
     $alumno1->mostrardatos();
     $alumno2->mostrardatos();

  ?>

</body>
</html>

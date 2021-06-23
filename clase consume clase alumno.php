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

     /* Establecemos valor para el alumno 1 */
     $alumno1->setalumno('Pepe',18,3);
     /* Establecemos valor para el alumno 2 */
     $alumno2->setalumno('Antonio',30,5);

     /* Recuperamos datos del alumno 1 */
     $alumno1->getalumno();
     /* Recuperamos datos del alumno 2 */
     $alumno2->getalumno();


     /* Salida por pantalla */
     $alumno1->mostrardatos();
     $alumno2->mostrardatos();

  ?>

</body>
</html>

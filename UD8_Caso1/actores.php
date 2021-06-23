
 <?php

    include "thronesDB.php";
 ?>

<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"UD8 Caso1"</title>

   <!-- Hoja de estilos 
   <link rel="stylesheet" type="text/css" href="../css/UD4_Tarea4_estilos.css">
   -->
   
</head>

<body>

   <table>
       <tr>
	      <th>Serie</th>
		  <th>Actor/Actriz</th>
	   </tr>
	   
	   <?php
	   $thronesDB=new ThronesDB();
	   //En resultado dejamos el contenido
	   $tabla_resultado=$thronesDB->info_actores();
	   
	   foreach($tabla_resultado as $clave=>$dato){
		   
		   echo ("<tr>");
		   echo ("<td>".$dato["serie_name"]."</td>");
		   echo ("<td>".$dato["name"]."</td>");
		   echo ("</tr>");
		   
		   
	   }
	   
	   ?>
	   
   </table>


</body>
</html>

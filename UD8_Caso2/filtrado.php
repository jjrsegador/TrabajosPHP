
 <?php

    include "dbNBA.php";
 ?>

<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"UD8 Caso2"</title>

   <!-- Hoja de estilos 
   <link rel="stylesheet" type="text/css" href="../css/UD4_Tarea4_estilos.css">
   -->
   
</head>

<body>

   <table>
       <tr>
	      <th>Ciudad</th>
		  <th>Conferencia</th>
		  <th>División</th>
		  <th>Nombre</th>
	   </tr>
	   
	   <?php
	   
	   //var_dump($_POST);
	   
	   //Si no se ha informado el campo Equipo para realizar la petición...
	   if(empty($_POST["equipo"])){
		   
		  //echo ("no hacemos nada");	
		  
	   }else{
		   
	      $nomb_equipo = $_POST["equipo"]; 
		
		  $dbNBA = new dbNBA();
		  
	      //En tabla resultado dejamos el contenido
	      $tabla_resultado=$dbNBA->busca_equipo($nomb_equipo);
	   
	      if (isset($tabla_resultado)){
			  
	           foreach($tabla_resultado as $clave=>$dato){
		   
		         echo ("<tr>");
		         echo ("<td>".$dato["Ciudad"]."</td>");
		         echo ("<td>".$dato["Conferencia"]."</td>");
		         echo ("<td>".$dato["Division"]."</td>");
			     echo ("<td>".$dato["Nombre"]."</td>");
		         echo ("</tr>");
		      }
		  }else{
			  echo "<br><br>";
			  echo ("Datos no encontrados");
			  
		  }
	   }
	   
	   ?>
	   
   </table>

</body>
</html>

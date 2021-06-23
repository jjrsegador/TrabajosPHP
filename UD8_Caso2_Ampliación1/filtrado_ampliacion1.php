
 <?php

    include "../UD8_Caso2/dbNBA.php";
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
	      <th>Equipo Local</th>
		  <th>Equipo Visitante</th>
		  <th>Puntos Local</th>
		  <th>Puntos Visitante</th>
		  <th>Temporada</th>
	   </tr>
	   
	   <?php
	   
	   //var_dump($_POST);
	   
	   //Si no se ha informado algún criterio de entrada, se informa a blancos
	   if(empty($_POST["equipo_local"])){
		   
		  $equipo_local="";
		  
	   }else{
		   
	      $equipo_local = $_POST["equipo_local"]; 
	   }	   
	  	
	   if(empty($_POST["equipo_visitante"])){
		   
		  $equipo_visitante="";
		  
	   }else{
		   
	      $equipo_visitante = $_POST["equipo_visitante"]; 
	   }
	   
	   if(empty($_POST["temporada"])){
		   
		  $temporada = "";
		  
	   }else{
		   
	      $temporada = $_POST["temporada"]; 
	   }
	   
	   $dbNBA = new dbNBA();
		  
	   //En tabla resultado dejamos el contenido
	   $tabla_resultado=$dbNBA->busca_encuentro($equipo_local,$equipo_visitante,$temporada);
	   
	   if (isset($tabla_resultado)){
			  
	       foreach($tabla_resultado as $clave=>$dato){
		   
		         echo ("<tr>");
		         echo ("<td>".$dato["equipo_local"]."</td>");
		         echo ("<td>".$dato["equipo_visitante"]."</td>");
		         echo ("<td>".$dato["puntos_local"]."</td>");
			     echo ("<td>".$dato["puntos_visitante"]."</td>");
			     echo ("<td>".$dato["temporada"]."</td>");
		         echo ("</tr>");
		      }
	   }else{
			  echo "<br><br>";
			  echo ("Datos no encontrados");
			  
		  }
	   
	   
	   ?>
	   
   </table>

</body>
</html>

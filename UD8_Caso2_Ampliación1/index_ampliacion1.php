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

  <!-- Definimos formulario con botón de acción -->
  <form action="filtrado_ampliacion1.php" method="post">
    <br>
    <label for=enombre>Equipo Local</label>
	<br>	
	<input type="text" name="equipo_local" size="50" maxlength="45">
    <br>
    <label for=enombre>Equipo Visitante</label>
	<br>	
	<input type="text" name="equipo_visitante" size="50" maxlength="45">
	<br>
    <label for=enombre>Temporada</label>
	<br>	
	<input type="text" name="temporada" size="50" maxlength="45">
	<br><br>
	<input type="submit" value= "Consultar">
	<br><br>
	<p><i>Se permite realizar búsqueda introduciendo parte del nombre</i></p>
	     
  </form>



</body>
</html>

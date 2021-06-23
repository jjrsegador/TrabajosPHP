<!DOCTYPE html
<html>
<head>
  <title>"Tarea1"</title>
  <meta charset="utf-8">
</head>

<body>

<?php
//Definición de variables
$nombreFamoso="Clint Eastwood";
$edadFamoso=90;
$controVivencia=true;
$salidaControlVivencia;

//Verificación control vivencia en base al contenido de variable $contolVivencia
if($controlVivencia = true){
  $salidaControlVivencia="Vive actualmente";
}
?>

<p>
    <h5>"Nombre del Famoso :" <?php echo $nombreFamoso ?> </h5>
    <h5>"Edad del Famoso :  " <?php echo $edadFamoso ?> </h5>
    <h5>"Estado vivencia :  " <?php echo $salidaControlVivencia ?> </h5>
</p>

</body>
</html>

<!DOCTYPE html
<html>
<head>
   <meta charset="utf-8">
   <meta name="description" content="Desarrollo en Servidor">
   <meta name="author" content="José Javier Ramírez Segador">

  <title>"Entorno Servidor UD6 Caso3"</title>

</head>
<body>

  <?php
      echo "Mostramos la información del array recibido";
      echo "<br>";
      print_r($_POST);
      echo "<br>";

      $color=$_POST["color"];
      $almohadilla=substr($color,0,1);
      $par1hex=substr($color,1,2);
      $par2hex=substr($color,3,2);
      $par3hex=substr($color,5,2);

      // La primera posición del campo será siempre #.
      if($almohadilla!="#"){
          $almohadilla="#";
      }

      // Se verifica que vienen informados cada uno de los pares
      // Si no es así, se informa con ceros.
      if(empty($par1hex)){
         $par1hex="00";
      }
      if(empty($par2hex)){
         $par2hex="00";
      }
      if(empty($par3hex)){
         $par3hex="00";
      }

      // Conversión de pares hexadecimal a decimal
      $par1dec=hexdec($par1hex);
      $par2dec=hexdec($par2hex);
      $par3dec=hexdec($par3hex);

      // Visualización de la información en decimal
      echo "<br>";
      echo "Se visualiza caracter almohadilla: ".$almohadilla;
      echo "<br>";
      echo "Primer par ".'"'.$par1hex.'"'." convertido a decimal: ".$par1dec;
      echo "<br>";
      echo "Segundo par ".'"'.$par2hex.'"'." convertido a decimal: ".$par2dec;
      echo "<br>";
      echo "Tercer par ".'"'.$par3hex.'"'." convertido a decimal: ".$par3dec;









  ?>



</body>
</html>

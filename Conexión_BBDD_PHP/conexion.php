<html>
<?php

$mysql_server="52.38.4.236:3306/Mundo";
$mysql_login="usuario";
$mysql_pass="password";

if($conexion = mysqli_connect($mysql_server,$mysql_login,$mysql_pass)){
  echo "La conexión se ha realizado correctamente";  
}
else{
   echo "Fallo al conectar con MySQL: " . mysqli_connect_error();
}
?>
</html>


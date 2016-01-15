

<?php
  session_start();

 ?>



<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario</title>
</head>

<body>



<?php
if(isset($_SESSION['nombre'])){
    session_destroy();
    echo "se ha destruido la sesion <br/>";
    echo "<a href='index.php'>Volver</a>;

}else{
   echo "error <br/>";
   echo "<a href='index.php'>Volver</a>;
}
?>


</body>
</html>


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
	echo "<p> hola ususario:(" . $_SESSION['nombre']. ")
	[<a href='logout.php'>Salir </a>]</p>";
  }
else
{
?>

 <form action= "login.php" method="post">

 
 <fieldset>
 <labe> Nombre </label>
 <input type ="text" name= "Nombre"/> </br>
 <input type="submit"value="enviar"/>
</fieldset>
</form>
 <?php } ?>
 

</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<title>db-usuarios</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

	$conexion = mysqli_connect("localhost:3307", "root", "", "odontomax") or die ("Problemas con la conexion");

	mysqli_query($conexion, "insert into usuarios(nombre, email, num_tel, identificacion, edad, password, tratamiento) values('$_REQUEST[nombre]', '$_REQUEST[email]', '$_REQUEST[num_tel]', '$_REQUEST[identificacion]', '$_REQUEST[edad]', '$_REQUEST[password]', '$_REQUEST[tratamiento]')")or die("echo <script>
                alert('Parece que has ingresado informacion invalida. Por favor llena todos los campos.');
                window.location= 'registro.php'
    </script>" .mysqli_error($conexion));

	mysqli_close($conexion);
	
	echo "<script>
                alert('Te has registrado satisfactoriamente, solo queda loguearte.');
                window.location= 'login.php'
    </script>";
 ?>
</body>
</html>
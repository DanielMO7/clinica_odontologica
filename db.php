<!DOCTYPE html>
<html>

<head>
	<title>db-callcenter</title>
	<meta charset="utf-8">
</head>

<body>
	<?php

	$conexion = mysqli_connect("localhost:3306", "root", "My-pruebas_74", "odontomax") or die("Problemas con la conexion");

	mysqli_query($conexion, "INSERT INTO callcenter
		(
			nombre, 
			email, 
			telefono, 
			asunto, 
			mensaje
		)
		VALUES 
			(
				'$_REQUEST[nombre]',
				'$_REQUEST[email]',
				'$_REQUEST[telefono]',
				'$_REQUEST[asunto]',
				'$_REQUEST[mensaje]'
			)") or die("Problemas en el selct: " . mysqli_error($conexion));

	mysqli_close($conexion);
	echo "<script>
                alert('Tu mensaje ha sido enviado satisfactoriamente, gracias por preferirnos.');
                window.location= 'index.php'
    </script>";
	echo "Tu mensaje ha sido enviado satisfactoriamente.";
	?>
</body>

</html>
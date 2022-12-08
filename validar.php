<?php

session_start();

$usuario = $_POST['email'];
$pass = $_POST['password'];

$conexion = new mysqli("localhost:3306", "root", "My-pruebas_74", "odontomax");

$proceso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$usuario'") or die("Problemas en el select: " . mysqli_error($conexion));

foreach ($proceso as $credenciales) {
	if (password_verify($pass, $credenciales['password'])) {
		$_SESSION['u_usuario'] = $usuario;
		echo "<script>
                alert('Te has logueado exitosamente.');
                window.location= 'index.php'
    		  </script>";
	} else {
		echo "<script>
                alert('Correo o contraseña incorrectos!');
                window.location= 'login.php'
    		  </script>";
	}
}

<?php 

	session_start();

	$usuario = $_POST['email'];
	$pass = $_POST['password'];

	$conexion = new mysqli("localhost:3307", "root", "", "odontomax");

	$proceso = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$usuario' AND password = '$pass'")or die("Problemas en el select: ".mysql_error($conexion));

	if ($resultado = mysqli_fetch_array($proceso)) {
		$_SESSION['u_usuario'] = $usuario;
		echo "<script>
                alert('Te has logueado exitosamente.');
                window.location= 'index.php'
    		  </script>";
	}
	else{
		echo "<script>
                alert('Lo sentimos, tu correo o contraseña son incorrectos. Puede que no estes registrado.');
                window.location= 'login.php'
    		  </script>";
	}
 ?>

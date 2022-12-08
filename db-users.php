<!DOCTYPE html>
<html>

<head>
    <title>db-usuarios</title>
    <meta charset="utf-8">
</head>

<body>
    <!--MD5 enripta las contraseñas-->
    <?php

    // Encripta la contraseña
    $password_bycript = password_hash("$_REQUEST[password]", PASSWORD_BCRYPT);


    $conexion = mysqli_connect("localhost:3306", "root", "My-pruebas_74", "odontomax") or die("Problemas con la conexion");

    $validar_correo_documento = mysqli_query($conexion, "SELECT * FROM usuarios");
    $validacion_email = true;
    $validacion_documento = true;
    // Valida que el documento y el email no esten repetidos.
    foreach ($validar_correo_documento as $datos) {
        if ($datos['email'] == $_REQUEST['email']) {
            $validacion_email = false;
        }
    }
    foreach ($validar_correo_documento as $datos) {
        if ($datos['identificacion'] == $_REQUEST['identificacion']) {
            $validacion_documento = false;
        }
    }

    if ($validacion_documento && $validacion_email) {
        mysqli_query(
            $conexion,
            "INSERT INTO usuarios
                (
                    nombre, 
                    email, 
                    num_tel, 
                    identificacion, 
                    edad, 
                    password, 
                    tratamiento
                )
                VALUES
                    (
                        '$_REQUEST[nombre]', 
                        '$_REQUEST[email]', 
                        '$_REQUEST[num_tel]', 
                        '$_REQUEST[identificacion]', 
                        '$_REQUEST[edad]', 
                        '$password_bycript', 
                        '$_REQUEST[tratamiento]'
                    )"
        ) or die("echo <script>
                        alert('Ah ocurrido un error con la base de datos!');
                        window.history.back()
                        </script>" . mysqli_error($conexion));
        mysqli_close($conexion);
    } else {
        echo "<script>
            alert('El e-mail o identificacion ya existen! Por favor, cambialos.');
            window.history.back()
        </script>";
    }
    if ($validacion_documento && $validacion_email) {
        echo "<script>
                    alert('Te has registrado satisfactoriamente, solo queda loguearte.');
                    window.location= 'login.php'
        </script>";
    }
    ?>
</body>

</html>
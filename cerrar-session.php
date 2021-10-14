<?php 

	session_start();

	session_destroy();

	echo "<script>
                alert('Has cerrado la sesion exitosamente');
                window.location= 'index.php'
    </script>";

 ?>
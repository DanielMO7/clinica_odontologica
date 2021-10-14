<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OdontoMax</title>
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script>
  		$(document).ready(function(){
  			$('#icon').click(function(){
  				$('ul').toggleClass('show');
  			});	
  		});
  	</script>

</head>
<body class="menu">

	<nav>

		<label class="logo">OdontoMax</label>

		<ul>

			<li><a href="index.php">Inicio</a></li>

			<li><a class="active" href="tratamientos.php">Tratamientos</a></li>

			<li><a href="contactanos.php">Contactanos</a></li>

			<?php 

			session_start();

			if (isset($_SESSION['u_usuario'])){

			}else{	

				echo "<li><a href='login.php'>Loguéate</a></li>";

				echo "<li><a href='registro.php'>Regístrate</a></li>";
			}

			 ?>

			<?php 

			if (isset($_SESSION['u_usuario'])){

 			echo "<li><a href='cerrar-session.php'>Salir</a></li>";

			}else{	

			}
			
			 ?>

		</ul>

		<label id="icon">

			<i class="fas fa-bars"></i>

		</label>

	</nav>

</body>	

<hr color="2081C3">
	
	<br>
	
<div class="contenido-web">

	<h1>TRATAMIENTOS INTEGRALES</h1>

		<br/>

			<br/>

	<div class="container">

		<div class="box">

			<img src="imagenes/implante.png">

				<div class="capa">

					<a href="implante.php">Implantes</a>

				</div>

		</div>	

		<div class="box">

			<img src="imagenes/ortondoncia.png">

				<div class="capa">

					<a href="ortodoncia.php">Ortodoncia</a>

				</div>

		</div>

		<div class="box">

			<img src="imagenes/periodoncia.png">

				<div class="capa">

					<a href="periodoncia.php">Periodoncia</a>

				</div>

		</div>

		<div class="box">

			<img src="imagenes/rehabilitacion.png">	

				<div class="capa">

					<a href="primeravez.php">Primera vez</a>

			</div>

		</div>	

		<div class="box">

			<img src="imagenes/endodoncia.png">

				<div class="capa">

					<a href="endodoncia.php">Endodoncia</a>

				</div>

		</div>	

	</div>

</div>	

<div class="introduccion">
			
			<h2><img src="imagenes/logodiente.png" width="70" align="right">Toca la imagen de los tratamientos y servicios que ofrecemos, puedes ir navegando en investigado de que trata cada procedimiento.  </h2>

	<br>		

<hr color="2081C3">

			<br>
		<div class="contenido-tratamiento">

			<div class="text-trat">

				<h2>Periodoncia.</h2>

					<p><img src="imagenes/familia.jpg"  align="right">La periodoncia es una especialidad de la odontología que estudia la prevención, diagnóstico y tratamiento de las enfermedades periodontales, es decir, aquellas que son provocadas por la acumulación de placa bacteriana entre la encía y los dientes.</p>

					<p>Dentro de las enfermedades periodontales más comunes que la periodoncia alivia se encuentran la gingivitis y periodontitis; las cuales provocan mal aliento e incluso pueden ocasionar la pérdida de las piezas dentales.</p><br>

			</div>
		</div>		

</div>

	<br/>

		<br/>

			<br/>

			<br/><hr color="2081C3">

	<div class="info">
				<h2>Contactanos:</h2>

				<p>Teléfono: 3104871122</p>

				<p>Call-center: 3135555</p>

				<p>Correo electrónico: odontomax@gmail.com.co</p>
				
				<p>Dirección: Calle 40-20 a 85 – Dosquebradas.</p>
	</div>

	<br/><hr color="2081C3">

<body class="footer">

	<footer>

		<div class="footer-content">

			<h3>OdontoMax</h3>

				<p>Trabajamos diariamente para mejorar tu sonrrisa</p>

					<ul class="socials">

						<li><a href="#"><i class="fa fa-facebook"></i></a></li>

						<li><a href="#"><i class="fa fa-twitter"></i></a></li>

						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

						<li><a href="#"><i class="fa fa-youtube"></i></a></li>

						<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>

					</ul>
		</div>

		<div class="footer-botton">

			<p>copyright &copy;2020 Odontomax. desing by <span>Daniel Mendez</span> </p>

		</div>

	</footer>
</body>
</html>
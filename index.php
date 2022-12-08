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
		$(document).ready(function() {
			$('#icon').click(function() {
				$('ul').toggleClass('show');
			});
		});
	</script>

</head>

<body class="menu">

	<nav>

		<label class="logo">OdontoMax</label>

		<ul>

			<li><a class="active" href="index.php">Inicio</a></li>

			<li><a href="tratamientos.php">Tratamientos</a></li>

			<li><a href="contactanos.php">Contactanos</a></li>

			<?php

			session_start();

			if (isset($_SESSION['u_usuario'])) {
			} else {

				echo "<li><a href='login.php'>Loguéate</a></li>";

				echo "<li><a href='registro.php'>Regístrate</a></li>";
			}

			?>

			<?php

			if (isset($_SESSION['u_usuario'])) {

				echo "<li><a href='cerrar-session.php'>Salir</a></li>";
			} else {
			}

			?>

		</ul>

		<label id="icon">

			<i class="fas fa-bars"></i>

		</label>

	</nav>

</body>

<body class="slider">

	<div class="contenedor">

		<div class="slider-contenedor">

			<section class="contenido-slider">

				<div class="delineado">

					<h1>La sonrisa es la mejor manera de expresar felicidad, disfruta de una excelente sonrisa con nuestros increibles servicios.</h1>

				</div>

			</section>

			<section class="contenido-slider">

				<div>

					<h1>Sonreír con comodidad nunca fue tan fácil, visítanos y disfruta de una sonrisa a la altura de su grandeza.</h1>

				</div>

			</section>

			<section class="contenido-slider">

				<div>

					<h1>Contamos con los mejores médicos odontólogos especializados y totalmente profesionales. </h1>

				</div>

			</section>

			<section class="contenido-slider">

				<div>

					<h1>La sonrisa es la mejor manera de expresar felicidad, disfruta de una excelente sonrisa con nuestros increibles servicios.</h1>

				</div>

			</section>

		</div>

	</div>

	<script>
		let slider = document.querySelector(".slider-contenedor")
		let sliderIndividual = document.querySelectorAll(".contenido-slider")
		let contador = 1;
		let width = sliderIndividual[0].clientWidth;
		let intervalo = 8000;

		window.addEventListener("resize", function() {
			width = sliderIndividual[0].clientWidth;
		})

		setInterval(function() {
			slides();
		}, intervalo);



		function slides() {
			slider.style.transform = "translate(" + (-width * contador) + "px)";
			slider.style.transition = "transform .8s";
			contador++;

			if (contador == sliderIndividual.length) {
				setTimeout(function() {
					slider.style.transform = "translate(0px)";
					slider.style.transition = "transform 0s";
					contador = 1;
				}, 2000)
			}
		}
	</script>

</body>

<hr color="2081C3">

<div class="introduccion">

	<h1>¡Bienvenido!</h1>

	<br />

	<h2>Ondotomax es lo que buscabas.</h2>

	<br>
	<p><img src="imagenes/logodiente.png" width="200" align="right">Es un placer que estés con nosotros, esta web fue diseñada para que conozcas todos nuestros servicios, de manera interactiva puedes ir navegando y buscando el servicio que desees obtener. </p>

	<br>

	<p>- En la pestaña de tratamientos encontrara los diferentes servicios dentales que ofrecemos. </p><br>

	<p>- Contamos con un formulario en el cual puedes añadir tu información de contacto y detalles sobre el servicio que deseas obtener, así nos comunicaremos contigo y agendaremos una cita. </p><br>

	<p>- En el sistema de registro podrás inscribirte con nosotros y enterarte de las ultimas novedades en nuestra empresa. </p><br>

</div>

<div class="contenido-web">

	<br /><br />
	<hr color="2081C3"><br />

	<h1>TRATAMIENTOS INTEGRALES</h1>

	<br />

	<br />

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

				<a href="primeravez.php">Primera Vez</a>

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

<hr color="2081C3">

<br />

<br />

<div class="call-center">

	<h2> Formulario para agendar tu cita:</h2>

	<br />

	<p>Puedes llenar este formulario con tus datos, así nos comunicaremos contigo para agendar una cita o brindarte información acerca de nuestros servicios.</p>

	<br />

	<body>

		<form action="db.php" method="post">

			<p>Nombre:</p>

			<input type="text" class="field" name="nombre"> <br />

			<p><img src="imagenes/logodiente.png" width="250" align="right">Correo electrónico:</p>

			<input type="text" class="field" name="email"> <br />

			<p>Teléfono:</p>

			<input type="text" class="field" name="telefono"> <br />

			<p>Asunto:</p>

			<input type="text" class="field" name="asunto"> <br />

			<p>Mensaje:</p>

			<textarea class="field" type="text" name="mensaje"></textarea> <br />

			<br />

			<p class="center-content">

				<input type="submit" class="btn btn-green" value="Enviar">

			</p>

		</form>

</div>

<br />
<hr color="2081C3">

<div class="info">
	<h2>Contactanos:</h2>
	<p>Teléfono: 3104871122</p>
	<p>Call-center: 3135555</p>
	<p>Correo electrónico: odontomax@gmail.com.co</p>
	<p>Dirección: Calle 40-20 a 85 – Dosquebradas.</p>
</div>

<br />
<hr color="2081C3">

</body>

<br />

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
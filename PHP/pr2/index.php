<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculadora de Edad PHP</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="main.js" defer></script>
		<style>
			body {
				font-family: 'Open Sans', sans-serif;
				background-color: #e0f7fa; /* Azul claro */
				display: ex;
				justify-content: center;
				align-items: center;
				min-height: 100vh;
				margin: 0;
				color: #263238; /* Gris oscuro */
			}
			.container {
				background-color: #;
				padding: 40px;
				border-radius: 15px;
				box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
				max-width: 600px;
				width: 90%;
				text-align: center;
				border: 1px solid #b2ebf2;
			}
			h1 {
				color: #00838f; /* Verde azulado oscuro */
				margin-boom: 25px;
				font-size: 2.8em;
			}
			p {
				font-size: 1.2em;
				line-height: 1.6;
				margin-boom: 20px;
			}
			.php-output {
				background-color: #e0f2f7; /* Fondo más claro */
				border: 2px solid #00acc1; /* Borde azul */
				padding: 20px;
				margin-top: 30px;
				border-radius: 10px;
				font-family: 'Roboto Mono', monospace; /* Fuente monoespaciada */
				color: #006064; /* Color de texto oscuro */
				font-size: 1.5em;
				font-weight: bold;
			}
			.highlight {
				color: #d84315; /* Naranja intenso */
				font-weight: bold;
			}
		</style>
		</head>
		<body>
		<div class="container">
		<h1>Calculadora de Edad Simple</h1>
		<p>Este script de PHP calculará tu edad basándose en el año actual y un año de nacimiento.</p>
		<div class="php-output">
		<?php
		// Denimos variables en PHP
		$anioActual = 2025; // Podemos cambiar este valor
		$anioNacimiento = 1990; // ¡Pide a los alumnos que cambien este valor por su año!
		// Realizamos una operación matemática
		$edad = $anioActual - $anioNacimiento;
		// Mostramos el resultado usando PHP y HTML
		echo "Si naciste en el año <span class='highlight'>" . $anioNacimiento . "</span> y estamos en
		<span class='highlight'>" . $anioActual . "</span>,<br>";
		echo "¡Tu edad aproximada es de <span class='highlight'>" . $edad . "</span> años!";
		?>
		</div>
		<p>Intenta cambiar el valor de la variable `$anioNacimiento` en el código y recarga la página. ¿Qué
		sucede?</p>
		</div>
	</body>
</html>

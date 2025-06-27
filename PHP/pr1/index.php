<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mi Primer PHP con Laragon</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="main.js" defer></script>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			display: ex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background-color: #f5f5f5;
			margin: 0;
			color: #333;
			text-align: center;
		}
		.container {
			background-color: #;
			padding: 40px;
			border-radius: 12px;
			box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15); /* Sombra más pronunciada */
			max-width: 700px;
			width: 90%;
			border: 1px solid #e0e0e0;
		}
		h1 {
			color: #28a745; /* Verde vibrante */
			margin-boom: 20px;
			font-size: 2.8em;
			text-shadow: 1px 1px 2px rgba(0,0,0,0.05);
		}
		p {
			font-size: 1.3em;
			line-height: 1.7;
			margin-boom: 25px;
		}
		.php-output {
			background-color: #e6ed; /* Fondo verde claro */
			border: 2px dashed #28a745; /* Borde punteado verde */
			padding: 20px;
			margin-top: 35px;
			border-radius: 10px;
			font-family: 'Fira Code', 'Courier New', Courier, monospace; /* Fuente de código */
			Facundo Rocha
			Profesor Desarrollo de Sitios Web
			color: #004d00; /* Verde oscuro para el texto */
			font-size: 1.4em;
			font-weight: bold;
			word-wrap: break-word; /* Para que el texto largo no desborde */
		}
		.profesor-name {
			color: #6347; /* Un color rojo tomate para el nombre del profesor */
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>¡Hola, Desarrolladores Web!</h1>
		<p>Están a punto de ejecutar su primer script PHP. Esto demuestra cómo el servidor procesa el
		código y genera la página.</p>
		<p>El siguiente mensaje ha sido generado por PHP:</p>
		<div class="php-output">
		<?php
		// Esto es un comentario de una línea en PHP (ignorado por el navegador)
		// Usamos 'echo' para mostrar texto en la página HTML
		echo "¡Saludos, <span class='profesor-name'>Profesor de Desarrollo de Soware</span>!";
		echo "<br>"; // Esto inserta un salto de línea de HTML
		echo "¡Laragon está funcionando perfectamente!";
		echo "<br>";
		echo "La fecha y hora actuales son: " . date("Y-m-d H:i:s"); // Mostrando algo dinámico
		?>
		</div>
		<p>¡Felicidades! Han ejecutado su primer script PHP. Esto es solo el comienzo.</p>
	</div>
</body>
</html>

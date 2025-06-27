<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Mensaje del Día PHP</title>
		<style>
			body {
				font-family: 'Nunito', sans-serif;
				background-color: #fce4ec; /* Rosa claro */
				display: ex;
				justify-content: center;
				align-items: center;
				min-height: 100vh;
				margin: 0;
				color: #424242;
			}
			.container {
				background-color: #;
				padding: 45px;
				border-radius: 18px;
				box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
				max-width: 700px;
				width: 90%;
				text-align: center;
				border: 2px solid #f8bbd0; /* Rosa un poco más oscuro */
			}
			h1 {
				color: #ad1457; /* Rosa oscuro */
				margin-boom: 30px;
				font-size: 3em;
			}
			.message-box {
				min-height: 100px; /* Para mantener el tamaño consistente */
				display: ex;
				ex-direction: column;
				justify-content: center;
				align-items: center;
				background-color: #ebee; /* Rojo muy claro */
				border: 2px dashed #e91e63; /* Borde rojo punteado */
				padding: 25px;
				margin-top: 40px;
				border-radius: 12px;
				font-size: 1.8em;
				color: #d81b60; /* Rojo oscuro */
				font-weight: bold;
				text-shadow: 1px 1px 1px rgba(0,0,0,0.05);
			}
			.special-message {
				background-color: #e8f5e9; /* Verde muy claro para el especial */
				border-color: #43a047; /* Verde para el especial */
				color: #2e7d32; /* Verde oscuro para el especial */
			}
			p.instruction {
				font-size: 1.1em;
				margin-top: 20px;
				color: #616161;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Mensaje del Día</h1>
			<p>PHP puede mostrar un mensaje diferente dependiendo de una condición. Observa el mensaje a
			continuación:</p>
			<div class="message-box">
			<?php
			// Dene el día de la semana (puedes cambiarlo para probar)
			// Usaremos un número para simplicar:
			// 1 = Lunes, 2 = Martes, 3 = Miércoles, 4 = Jueves, 5 = Viernes, 6 = Sábado, 7 = Domingo
			$diaActual = 3; // ¡Pide a los alumnos que cambien este número!
			// Condición para mostrar un mensaje especial
			if ($diaActual == 5) { // Si es viernes (5)
			echo "¡Feliz Viernes! ¡Casi es n de semana!";
			} elseif ($diaActual == 6 || $diaActual == 7) { // Si es Sábado (6) o Domingo (7)
			echo "<span class='special-message'>¡Es n de semana! A descansar.</span>";
			} else { // Para cualquier otro día
			echo "¡Hoy es un buen día para programar!";
			}
			?>
			</div>
			<p class="instruction">Cambia el valor de la variable `$diaActual` en el código (entre 1 y 7) y
			recarga la página para ver cómo cambia el mensaje.</p>
		</div>
	</body>
</html>

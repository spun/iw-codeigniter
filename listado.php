<!DOCTYPE html>
<html>
	<head>
		<title>Listado de mascotas</title>
	</head>

	<body> 
		<h1>Listado de mascotas</h1>
		<?php

			// Abrir conexión contra la BD
			$srv = "localhost";
			$usu = "pruebas";
			$pwd = "123456";
			$bd = "pruebas";

			$con = mysqli_connect($srv, $usu, $pwd, $bd);

			// Preparar sentencia
			$sql = "select * from Mascotas order by nombre ";

			// Ejecutar sentencia
			// Obtener resultados
			$resul = mysqli_query($con, $sql);

			// ¿Hay resultados?
			if (mysqli_num_rows($resul) > 0) {


				// Recorrer resultados
				echo("<ul>");
				while ($fila = mysqli_fetch_array($resul)) {

					// Hacer algo para cada resultado
					echo('<li>' . $fila['nombre'] . "</li>");
				}

				echo("</ul>");

			} else {
				echo("No hay resultados");
			}

			// Cerrar conexión
			mysqli_close($con);



		?>
	</body>
</html>
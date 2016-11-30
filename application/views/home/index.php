<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo($titulo); ?></title>
	</head>
	<body>

		<div id="container">
			<h1>Hola mundo desde CodeIgniter</h1>

			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Especie</th>
				</tr>

				<?php
					foreach($mascotas as $mascota) {
						echo("<tr>");
						echo("<td>". $mascota->id ."</td>");
						echo("<td>". $mascota->nombre ."</td>");
						echo("<td>". $mascota->especie ."</td>");
						echo("</tr>");
					}
				?>
			</table>
		</div>
		
	</body>
</html>

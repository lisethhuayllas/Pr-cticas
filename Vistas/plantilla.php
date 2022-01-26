<!DOCTYPE html>  <!-- Vistas/plantilla.php-->
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Notas Tareas</title>

	<link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">

</head>
<body>

	<?php
	
		include 'Modulos/menu.php';
	?>
	<section>

		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
	</section>
</body>
</html>
<?php
	$adminC = new AdminC();
?>
<nav>  <!-- modulos/menu.php -->
	<ul>
	<?php if(!$adminC->sesionIniciadaC()): ?>
		<li><a href="index.php?ruta=ingreso">Ingresar</a></li>
	<?php else: ?>
		<li><a href="index.php?ruta=registrar">Registrar</a></li>
		<li><a href="index.php?ruta=tareas">Tareas</a></li>
		<li><a href="index.php?ruta=salir">Salir</a></li>
	<?php endif; ?>
	</ul>
</nav>
<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');
$tareasC = new EmpleadosC();
$tareas = $tareasC->editarTareasC();
$tareasC->actualizarTareasC();
?>
<br>
<h1>EDITAR TAREA</h1>
<form method="post" action="">
    <input type="hidden" value="<?=$tareas['id_tarea']?>" name="id_tarea" required>
	<input type="text" placeholder="Contenido" name="contenidoE" value='<?=$tareas['contenido']?>' required>
	<input type="text" placeholder="Fecha de Registro" name="fecha_registroE" value='<?=$tareas['fecha_registro']?>' required>
	<input type="text" placeholder="Fecha de Vencimiento" name="fecha_vencimientoE" value='<?=$tareas['fecha_vencimiento']?>' required>
	<input type="text" placeholder="Estado" name="estadoE" value='<?=$tareas['estado']?>' required>
	<input type="submit" value="Actualizar">
</form>
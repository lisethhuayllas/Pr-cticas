<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');
$tareasC = new TareasC();
$tareas= $tareasC->mostrarTareasC();

?>

<h2>Tareas Agendadas</h2>
<div class="container">

<div class="table">
<table class="table table-hover table-bordered ">
	<thead>
		<tr>
			<th  scope="col">Nombre</th>
			<th  scope="col">Contenido</th>
            <th  scope="col">Fecha de Registro</th>
			<th  scope="col">Fecha de Vencimiento</th>
			<th  scope="col">Estado</th>
		
		</tr>
	</thead>

	<tbody>
	<?php foreach($tareas as $tarea): ?>
            <tr>
			<td><?=$tarea['nombre']?></td>
			<td><?=$tarea['contenido']?></td>
			<td><?=$tarea['fecha_registro']?></td>
			<td><?=$tarea['fecha_vencimiento']?></td>
			<td><?=$tarea['estado']?></td>
			<td><a href='index.php?ruta=editar&id=<?=$tarea['id']?>'>
			<button>Editar</button></td>
			<td><a href='index.php?ruta=tareas&id=<?=$tarea['id']?>'>
			<button>Borrar</button></td>
			</tr>
	<?php endforeach; ?>

	</tbody>
</table>

</div>


</div>

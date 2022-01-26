<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');
$tareasC = new TareasC();
$tareasC->registrarTareasC();
?>
<br>  <!-- Vistas/Modulos/registrar.php -->
<h1>AGREGAR TAREA</h1>

<form method="post" action="">
<h2>Registrar Tarea</h2>
        Nombre  <input type="text" placeholder="nombre curso" name="nombre" required><br>
        Contenido <input type="text" placeholder="contenido" name="contenido" required><br>
        Fecha de Registro <input type="date" name= "fecha_registro" required><br>
        Fecha de Vencimiento <input type="date" name= "fecha_vencimiento" required><br>
        <input  type="submit" value="INGRESAR NUEVO REGISTRO" name="enviar" required>

</form>
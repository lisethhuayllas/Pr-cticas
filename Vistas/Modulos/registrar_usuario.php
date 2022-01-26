<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('registrar_usuario');
$usuariosC = new UsuariosC();
$usuariosC->registrarUsuariosC();
?>
<br>  <!-- Vistas/Modulos/registrar_usuario.php -->
<h1>REGÍSTRATE</h1>

<form method="post" action="">
	<input type="text" placeholder="Nombre" name="nombreR" required>
	<input type="text" placeholder="Apellidos" name="apellidosR" required>
    <input type="text" placeholder="Username" name="usernameR" required>
	<input type="date" placeholder="Fecha de nacimiento" name="fecha_nacimientoR" required>
    <input type="text" placeholder="Ciudad Actual" name="ciudad_actualR" >
    Sexo  <input type= "radio" name="sexoR">masculino
          <input type= "radio" name="sexoR">femenino

    <input type="text" placeholder="Contraseña" name="passwordR" >

	<input type="submit" value="Registrar">
</form>


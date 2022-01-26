<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();

?>

<br> <!-- Vistas/Modulos/ingreso.php -->
<h1>INICIAR SESIÓN</h1>

<form method="post" action="">
	<input type="text" placeholder="Usuario" name="usuarioI" required>
	<input type="password" placeholder="Contraseña" name="passwordI" required>
	<input type="submit" value="Ingresar">
</form>

<?php if (!$resultado):?>
	USUARIO O CLAVE INVÁLIDOS
<?php endif;?>
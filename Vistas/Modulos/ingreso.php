<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();

?>

<div class=" d-flex flex-column text-center px-5 mt-3 mb-3"><h4>EasyNotes</h4> </div>
<div class="container mt-5 mb-5 d-flex justify-content-center">
   <div class="card px-4 py-4">
        <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"><h4>INICIAR SESIÓN</h4> </div>

	      <form method="post"  action="">
	        <div class="from group">
	          <label class="sr-only" for="username"><b>Usuario</b></label>
	          <input type="username" name="username" id="username" class="form-control" required>

	          <label class="sr-only" for="password"><b>Contraseña</b></label>
	          <input type="password" name="password" id="password" class="form-control" required>
	          <br>
	         <input type="submit" value="Ingresar" class="btn btn-primary form-control">

        	</div>
    	</form>
	<br>

  <div class="link login-link text-center"><a href="index.php?ruta=registrar_usuario.php">Registrarse</a></div>


	<div class="col-12 forgot "><a href="#">Olvidaste tu contraseña?</a></div>

    </div>
</div>
<?php if (!$resultado):?>
	USUARIO O CLAVE INVÁLIDOS
<?php endif;?>
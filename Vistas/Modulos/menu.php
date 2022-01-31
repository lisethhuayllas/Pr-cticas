<?php
	$adminC = new AdminC();
?>
	<?php if(!$adminC->sesionIniciadaC()): ?>
		<li><a href="index.php?ruta=ingreso"></a></li>
	<?php else: ?>
		
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?ruta=registrar_tareas">Registrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ruta=tareas">Tareas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?ruta=salir">Salir</a>
      </li>
     
    </ul>
  </div>
</nav>

	<?php endif; ?>


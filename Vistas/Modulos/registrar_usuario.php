<?php
$adminC = new AdminC();
$adminC->redirigirSesionC('ingreso');
$usuariosC = new UsuariosC();
$usuariosC->registrarUsuariosC();
?>

<div class="container col-6 content-center">
   <div class="card px-4 py-4">
        <div class="col-md-12"><h4><b>REGÍSTRATE</b></h4> 
          <hr class="bg-primary">
        </div>
           <form method="post" action="">
           <div class="from group">
           <div class="row">
               <div class="col-6">
               <input type="text" name="nombreR" placeholder="Nombre"  class="form-control">
               </div>
	       
                <div class="col-6">
                <input type="text" name="apellidosR" placeholder="Apellidos" id="apellidos" class="form-control">
                </div> 
           </div> 

         <br>   

               <input type="username" name="usernameR"  placeholder="Usuario" id="username" class="form-control"><br>
         <br>
	          
              <p>Fecha de Nacimiento</p>
              <input type="date" name="fecha_nacimientoR" placeholder="Fecha de Nacimiento" id="fecha_nacimiento" class="form-control">
              <p>Género</p>
              <p>
               Hombre: <input type="radio" name="sexoR" value="hombre" id="sexo" /><br />
               Mujer: <input type="radio" name="sexoR" value="mujer" id="sexo" /><br />
              </p>
              <input type="password" name="passwordR"  placeholder="Contraseña" id="password" class="form-control">
	           <input type="submit" value="ENVIAR" class="btn btn-success btn-lg col-12 ">

        	</div>
    	</form>
</div>
</div>
  
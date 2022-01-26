<?php  // Controladores/empleadosC.php
class UsuariosC {
    function __construct(){
        $this->usuariosM = new UsuariosM();
    }

    public function registrarUsuariosC(){
        if(isset($_POST['nombreR'])){
            $datosC =array();
            $datosC['nombre'] = $_POST['nombreR'];
            $datosC['apellidos'] = $_POST['apellidosR'];
            $datosC['username'] = $_POST['usernameR'];
            $datosC['fecha_nacimiento'] = $_POST['fecha_nacimientoR'];
            $datosC['ciudad_actual'] = $_POST['ciudad_actualR'];
            $datosC['sexo'] = $_POST['sexoR'];
            $datosC['fecha_registro'] = $_POST['fecha_registroR'];
            $datosC['password'] = $_POST['passwordR'];

            $resultado = $this->usuariosM->registrarUsuariosM($datosC);
         
            header('location: index.php?ruta=ingreso');

        }
    }

}

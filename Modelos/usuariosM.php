<?php  //Modelos/empleadosM.php
require_once "conexionBD.php";

class UsuariosM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'usuarios';
    }

    public function registrarUsuariosM($datosC){
        $cBD = $this->conectarBD();
        $nombre = $datosC['nombre'];
        $apellidos = $datosC['apellidos'];
        $username = $datosC['username'];
        $fecha_nacimiento = $datosC['fecha_nacimiento'];
        $ciudad_actual = $datosC['ciudad_actual'];
        $sexo = $datosC['sexo'];
        $fecha_registro = $datosC['fecha_registro'];
        $password = $datosC['password'];

        $query = "INSERT INTO $this->tablaBD VALUES 
            (Null,'$nombre', '$apellidos', '$username', '$fecha_nacimiento', '$ciudad_actual','$sexo', NOW(), '$password')";

        $result = $cBD->query($query);

        return $result;
    }
}


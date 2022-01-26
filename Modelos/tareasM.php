<?php  //Modelos/tareasM.php
require_once "conexionBD.php";

class TareasM extends ConexionBD{
    function __construct(){
        $this->tablaBD = 'tareas';
    }

    public function registrarTareasM($datosC){
        $cBD = $this->conectarBD();
        $nombre = $datosC['nombre'];
        $contenido = $contenidoC['contenido'];
        $fecha_registro = $datosC['fecha_registro'];
        $fecha_vencimiento = $datosC['fecha_vencimiento'];
        $estado = $datosC['estado'];
        $query = "INSERT INTO $this->tablaBD VALUES 
            ($id_usuario,'$nombre', '$contenido', '$fecha_registro', '$fecha_vencimiento', '$estado')";

        $result = $cBD->query($query);

        return $result;
    }

    public function mostrarTareasM(){
        $cBD = $this->conectarBD();
        $query = "SELECT nombre, contenido, fecha_registro, fecha_vencimiento, estado 
                FROM $this->tablaBD ORDER BY fecha_vencimiento ASC";
        $result = $cBD->query($query);
        return $result;
    }

    public function editarTareasM($datosC){
        $cBD = $this->conectarBD();
        $id_tarea = $datosC['id_tarea'];
        $query = "SELECT id_tarea, nombre, contenido, fecha_registro, fecha_vencimiento, estado
                FROM $this->tablaBD WHERE id_tarea='$id_tarea'";
        $result = $cBD->query($query);
        return $result;
    }

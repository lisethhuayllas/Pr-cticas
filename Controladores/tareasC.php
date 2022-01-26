<?php  // Controladores/empleadosC.php
class EmpleadosC {
    function __construct(){
        $this->tareasM = new TareasM();
    }

    public function registrarTareasC(){
        
            $datosC =array();
            $datosC['nombre'] = $_POST['nombreR'];
            $datosC['contenido'] = $_POST['contenidoR'];
            $datosC['fecha_registro'] = $_POST['fecha_registroR'];
            $datosC['estado'] = $_POST['estadoR'];

            $resultado = $this->tareasM->registrarTareasM($datosC);
         
            header('location: index.php?ruta=tareas');

        
    }

    //mostrar empleados
    public function mostrarEmpleadosC(){
        $resultado = $this->empleadosM->mostrarEmpleadosM();
        return $resultado;
    }

    //editar empleados
    public function editarTareaC(){
        if(isset($_GET['id_tarea'])){
            $datosC = array('id_tarea'=>$_GET['id_tarea']);
            $resultado = $this->tareasM->editarTareaM($datosC);
            $rows = $resultado->fetch_array(MYSQLI_ASSOC);
            return $rows;
        }
    }

<?php //  Modelos/rutasM.php
class RutasM{
    public function procesaRutasM($ruta){
        if( $ruta == "ingreso" || 
            $ruta == 'empleados' || 
            $ruta == 'registrar' || 
            $ruta == 'salir' ||
            $ruta == 'editar'||
            $ruta == 'registrar_usuario' ||
            $ruta == 'tareas' ||
            $ruta == 'registrar_tareas')
        {
            $pagina = "Vistas/Modulos/".$ruta. ".php";
        }
        else if($ruta == 'index'){
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        else {
            $pagina = "Vistas/Modulos/ingreso.php";
        }
        return $pagina;
    }

}
?>
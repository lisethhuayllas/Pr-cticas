<?php  //Controladores/adminC.php
class AdminC{
    function __construct(){
        $this->adminM = new AdminM();
    }

    public function IngresoC(){
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
        if(isset($_POST["usernameI"])){
            $datosC = array(    
                        "username"=>$_POST["usernameI"], 
                        "password"=>$_POST["passwordI"]);
            $tablaBD = "usuarios";
            $pagina = $this->adminM->IngresoM($datosC, $tablaBD);
            if ($pagina){
                session_start();
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            }
            else
            {
                return false;
            }
        }
        return true;
    }

    public function salirC(){
        session_destroy();
        header("location:index.php?ruta=ingreso");
    }

    public function sesionIniciadaC(){
        session_start();
        if(isset($_SESSION['Ingreso']))
            return true;
        return false;
    }

    public function redirigirSesionC($ruta){
        if(!$_SESSION["Ingreso"]){
            header("location:index.php?=$ruta");
            exit();
        }
    }
}
?>
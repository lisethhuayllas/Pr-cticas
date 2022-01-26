<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        public function IngresoM($datosC, $tablaBD){
            $cBD = $this->conectarBD();
            $username = $datosC['username'];
            $password = $datosC['password'];
            $query = "SELECT username, password FROM $tablaBD 
                WHERE username='$username' AND password='$password'";
            $result = $cBD->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
        }
    }
?>
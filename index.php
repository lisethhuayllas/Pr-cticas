<?php //index.php
ob_start();
require_once 'Controladores/rutasC.php';
require_once 'Controladores/adminC.php';
require_once 'Controladores/tareasC.php';
require_once 'Controladores/usuariosC.php';

require_once 'Modelos/rutasM.php';
require_once 'Modelos/adminM.php';
require_once 'Modelos/tareasM.php';
require_once 'Modelos/usuariosM.php';

include 'Vistas/plantilla.php';
ob_end_flush();
?>
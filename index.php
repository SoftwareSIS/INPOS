<?php

require_once 'DB/conexion.php';

if (isset($_GET["m"])) {
    switch ($_GET["m"]) {
        case "usu":
            if (isset($_GET["id"])) {
                require_once 'Controller/usuarios_controller.php';
                $controller = new usuarios_controller();
                $controller->actualizar();
                break;
                break;
            } else {
                require_once 'Controller/usuarios_controller.php';
                $controller = new usuarios_controller();
                $controller->index();
                break;
            }
        case "per":
            require_once 'Controller/perfiles_controller.php';
            $controller = new perfiles_controller();
            $controller->index();
            break;
    }
} else {
    require 'Estyle/bootstrap-3.3.7-dist/css/Estilo_B.php';
    require_once 'View/default/header.php';
    require 'Estyle/bootstrap-3.3.7-dist/js/Estilo_JQ.php';
}
?>
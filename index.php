<?php

require_once 'DB/conexion.php';

if (isset($_REQUEST["m"])) {
    $metodo = $_REQUEST["m"];
    require_once 'Controller/usuarios_controller.php';
    $controller = new usuarios_controller();
    if (method_exists($controller, $metodo)) {
        $controller->$metodo();
    } else {
        switch ($metodo) {
            case "usu":
                if (isset($_REQUEST["id"])) {
                    $controller->actualizar();
                    break;
                } else {
                    if (isset($_REQUEST["crud"])) {
                        $controller->crear();
                        break;
                    } else {
                        $controller->index();
                        break;
                    }
                }
        }
    }
} else {
    require 'Estyle/bootstrap-3.3.7-dist/css/Estilo_B.php';
    require_once 'View/default/header.php';
    require 'Estyle/bootstrap-3.3.7-dist/js/Estilo_JQ.php';
}
?>
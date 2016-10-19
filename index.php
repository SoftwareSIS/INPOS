<?php

require_once 'DB/conexion.php';


if (isset($_REQUEST["m"])) {
    $valor = $_REQUEST["m"];
    switch ($valor) {
        case "usu":
            require_once 'Controller/usuarios_controller.php';
            $controller = new usuarios_controller();
            if (isset($_REQUEST["c"])) {
                $metodoU = $_REQUEST["c"];
                if (method_exists($controller, $metodoU)) {
                    $controller->$metodoU();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_u($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_u();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_u($eli);
                            break;
                        } else {
                            $controller->index_u();
                            break;
                        }
                    }
                }
            }

        case "per":
            require_once 'Controller/perfiles_controller.php';
            $controller = new perfiles_controller();
            if (isset($_REQUEST["c"])) {
                $metodoP = $_REQUEST["c"];
                if (method_exists($controller, $metodoP)) {
                    $controller->$metodoP();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $controller->actualizar_p();
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_p();
                        break;
                    }
                    $controller->index_p();
                    break;
                }
            }
    }
} else {
    require 'Estyle/bootstrap-3.3.7-dist/css/Estilo_B.php';
    require_once 'View/default/header.php';
    require 'Estyle/bootstrap-3.3.7-dist/js/Estilo_JQ.php';
}
?>
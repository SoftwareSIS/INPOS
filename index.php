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
                    $id = $_REQUEST["id"];
                    $controller->actualizar_p($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_p();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_p($eli);
                            break;
                        } else {
                            $controller->index_p();
                            break;
                        }
                    }
                }
            }

        case "prov":
            require_once 'Controller/proveedores_controller.php';
            $controller = new proveedores_controller();
            if (isset($_REQUEST["c"])) {
                $metodoPR = $_REQUEST["c"];
                if (method_exists($controller, $metodoPR)) {
                    $controller->$metodoPR();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_pr($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_pr();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_pr($eli);
                            break;
                        } else {
                            $controller->index_pr();
                            break;
                        }
                    }
                }
            }

        case "prod":
            require_once 'Controller/productos_controller.php';
            $controller = new productos_controller();
            if (isset($_REQUEST["c"])) {
                $metodoPRO = $_REQUEST["c"];
                if (method_exists($controller, $metodoPRO)) {
                    $controller->$metodoPRO();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_pro($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_pro();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_pro($eli);
                            break;
                        } else {
                            $controller->index_pro();
                            break;
                        }
                    }
                }
            }

        case "ter":
            require_once 'Controller/terceros_controller.php';
            $controller = new terceros_controller();
            if (isset($_REQUEST["c"])) {
                $metodoPRO = $_REQUEST["c"];
                if (method_exists($controller, $metodoPRO)) {
                    $controller->$metodoPRO();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_pro($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_pro($eli);
                            break;
                        } else {
                            $controller->index();
                            break;
                        }
                    }
                }
            }
            
            
            
            case "carg":
            require_once 'Controller/cargos_controller.php';
            $controller = new cargos_controller();
            if (isset($_REQUEST["c"])) {
                $metodoCAR = $_REQUEST["c"];
                if (method_exists($controller, $metodoCAR)) {
                    $controller->$metodoCAR();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_car($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_car();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_car($eli);
                            break;
                        } else {
                            $controller->index_car();
                            break;
                        }
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
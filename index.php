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
                            if (isset($_REQUEST["det"])) {
                                $det = $_REQUEST['det'];
                                $controller->detalle_pro($det);
                                break;
                            } else {
                                $controller->index_pro();
                                break;
                            }
                        }
                    }
                }
            }

        case "ter":
            require_once 'Controller/terceros_controller.php';
            $controller = new terceros_controller();
            if (isset($_REQUEST["c"])) {
                $metodoTER = $_REQUEST["c"];
                if (method_exists($controller, $metodoTER)) {
                    $controller->$metodoTER();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_ter($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_ter();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_ter($eli);
                            break;
                        } else {
                            $controller->index_ter();
                            break;
                        }
                    }
                }
            }

        case "ciu":
            require_once 'Controller/ciudades_controller.php';
            $controller = new ciudades_controller();
            if (isset($_REQUEST["c"])) {
                $metodoCIU = $_REQUEST["c"];
                if (method_exists($controller, $metodoCIU)) {
                    $controller->$metodoCIU();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_ciu($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_ciu();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_ciu($eli);
                            break;
                        } else {
                            $controller->index_ciu();
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

        case "cli":
            require_once 'Controller/clientes_controller.php';
            $controller = new clientes_controller();
            if (isset($_REQUEST["c"])) {
                $metodoCLI = $_REQUEST["c"];
                if (method_exists($controller, $metodoCLI)) {
                    $controller->$metodoCLI();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_cli($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_cli();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_cli($eli);
                            break;
                        } else {
                            $controller->index_cli();
                            break;
                        }
                    }
                }
            }

        case "docu":
            require_once 'Controller/documentos_controller.php';
            $controller = new documentos_controller();
            if (isset($_REQUEST["c"])) {
                $metodoDOCU = $_REQUEST["c"];
                if (method_exists($controller, $metodoDOCU)) {
                    $controller->$metodoDOCU();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_docu($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_docu();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_docu($eli);
                            break;
                        } else {
                            $controller->index_docu();
                            break;
                        }
                    }
                }
            }

        case "empr":
            require_once 'Controller/empresas_controller.php';
            $controller = new empresas_controller();
            if (isset($_REQUEST["c"])) {
                $metodoEMPR = $_REQUEST["c"];
                if (method_exists($controller, $metodoEMPR)) {
                    $controller->$metodoEMPR();
                    break;
                }
            } else {
                if (isset($_REQUEST["id"])) {
                    $id = $_REQUEST["id"];
                    $controller->actualizar_empr($id);
                    break;
                } else {
                    if (isset($_REQUEST["cd"])) {
                        $controller->crear_empr();
                        break;
                    } else {
                        if (isset($_REQUEST["eli"])) {
                            $eli = $_REQUEST["eli"];
                            $controller->eliminar_empr($eli);
                            break;
                        } else {
                            $controller->index_empr();
                            break;
                        }
                    }
                }
            }

        case "emple":
            require_once 'Controller/empleados_controller.php';
            $controller = new empleados_controller();
            if (isset($_REQUEST['c'])) {
                $metodoEMPLE = $_REQUEST['c'];
                if (method_exists($controller, $metodoEMPLE)) {
                    $controller->$metodoEMPLE();
                    break;
                }
            } else {
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $controller->actualizar_emple($id);
                    break;
                } else {
                    if (isset($_REQUEST['cd'])) {
                        $controller->crear_emple();
                        break;
                    } else {
                        if (isset($_REQUEST['eli'])) {
                            $eli = $_REQUEST['eli'];
                            $controller->eliminar_emple($eli);
                            break;
                        } else {
                            $controller->index_emple();
                            break;
                        }
                    }
                }
            }

        case "fac":
            require_once 'Controller/factura_controller.php';
            $controller = new factura_controller();
            if (isset($_REQUEST['c'])) {
                $metodoFAC = $_REQUEST['c'];
                if (method_exists($controller, $metodoFAC)) {
                    $controller->$metodoFAC();
                    break;
                }
            } else {
                $controller->index_fac();
                break;
            }

        case "suc":
            require_once 'Controller/sucursales_controller.php';
            $controller = new sucursales_controller();
            if (isset($_REQUEST['c'])) {
                $metodoSUC = $_REQUEST['c'];
                if (method_exists($controller, $metodoSUC)) {
                    $controller->$metodoSUC();
                    break;
                }
            } else {
                if (isset($_REQUEST['id'])) {
                    $id = $_REQUEST['id'];
                    $controller->actualizar_suc($id);
                    break;
                } else {
                    if (isset($_REQUEST['cd'])) {
                        $controller->crear_suc();
                        break;
                    } else {
                        if (isset($_REQUEST['eli'])) {
                            $eli = $_REQUEST['eli'];
                            $controller->eliminar_suc($eli);
                            break;
                        } else {
                            $controller->index_suc();
                            break;
                        }
                    }
                }
            }

        case "mov":
            require_once 'Controller/movimientos_controller.php';
            $controller = new movimientos_controller();
            if (isset($_REQUEST['c'])) {
                $metodoMOV = $_REQUEST['c'];
                if (method_exists($controller, $metodoMOV)) {
                    $controller->$metodoMOV();
                    break;
                }
            } else {
                $controller->crearMOV();
                break;
            }

        case "log":
            require_once 'Controller/login_controller.php';
            $controller = new login_controller();
            if (isset($_REQUEST['c'])) {
                $metodoLOG = $_REQUEST['c'];
                if (method_exists($controller, $metodoLOG)) {
                    $controller->$metodoLOG();
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
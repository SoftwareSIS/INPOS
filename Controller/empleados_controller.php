<?php

require_once 'Model/empleados_model.php';

class empleados_controller {

    private $empleados_model;

    function __construct() {
        $this->empleados_model = new empleados_model();
    }

    function index_emple() {
        $query = $this->empleados_model->get_emple();
        require_once 'View/default/header.php';
        require_once 'View/empleados/index_emple.php';
        require_once 'View/default/footer.php';
    }

    function crear_emple() {
        $ter = // Enviar consulta de terceros;
        $car = // Enviar consulta de cargos;
        $suc = // Enviar consulta de sucursales;
        require_once 'View/default/header.php';
        require_once 'View/empleados/crear_emple.php';
        require_once 'View/default/footer.php';
    }

}

?>
<?php

require_once 'Model/empleados_model.php';
require_once 'Model/cargos_model.php';
require_once 'Model/sucursales_model.php';
require_once 'Model/terceros_model.php';

class empleados_controller {

    private $empleados_model;
    private $cargos_model;
    private $terceros_model;

//    private $sucursales_model;

    function __construct() {
        $this->empleados_model = new empleados_model();
        $this->cargos_model = new cargos_model();
        $this->terceros_model = new terceros_model();
    }

    function index_emple() {
        $query = $this->empleados_model->get_emple();
        require_once 'View/default/header.php';
        require_once 'View/empleados/index_emple.php';
        require_once 'View/default/footer.php';
    }

    function crear_emple() {
        $tercero = $this->terceros_model->get_ter();
        $cargos = $this->cargos_model->get_car();
//        $sucursal = $this->sucursales_model->get_suc();
        require_once 'View/default/header.php';
        require_once 'View/empleados/crear_emple.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_emple($id) {
        $actu = $this->empleados_model->actualizar_emple($id);
        $tercero = $this->terceros_model->get_ter();
        $cargos = $this->cargos_model->get_car();
        require_once 'View/default/header.php';
        require_once 'View/empleados/actualizar_emple.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_emple() {
        
    }

    function guardarEMPLE() {
        $data['id_empleado'] = $_REQUEST['cbNombre'];
        $data['id_cargo'] = $_REQUEST['cbCargo'];
        $data['fecha_ingreso'] = $_REQUEST['txtFechaI'];
        $data['fecha_retiro'] = $_REQUEST['txtFechaR'];
        $data['salario'] = $_REQUEST['txtSalario'];
        $data['sucursal'] = $_REQUEST['cbSucursal'];

        $this->empleados_model->crear_emple($data);
        $this->index_emple();
    }

    function actualizarEMPLE() {
        
    }

    function eliminarEMPLE() {
        
    }

    function error_1062() {
        
    }

    function error_1452() {
        
    }

}

?>
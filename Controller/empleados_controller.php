<?php

require_once 'Model/empleados_model.php';
require_once 'Model/cargos_model.php';
require_once 'Model/sucursales_model.php';
require_once 'Model/terceros_model.php';

class empleados_controller {

    private $empleados_model;
    private $cargos_model;
    private $terceros_model;
    private $sucursales_model;

    function __construct() {
        $this->empleados_model = new empleados_model();
        $this->cargos_model = new cargos_model();
        $this->terceros_model = new terceros_model();
        $this->sucursales_model = new sucursales_model();
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
        $sucursal = $this->sucursales_model->get_suc();
        require_once 'View/default/header.php';
        require_once 'View/empleados/crear_emple.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_emple($id) {
        $actua = $this->empleados_model->actualizar_emple($id);
        $tercero = $this->terceros_model->get_ter();
        $cargos = $this->cargos_model->get_car();
        $sucursal = $this->sucursales_model->get_suc();
        require_once 'View/default/header.php';
        require_once 'View/empleados/actualizar_emple.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_emple($id) {
        $eli = $this->empleados_model->eliminar_emple($id);
        require_once 'View/default/header.php';
        require_once 'View/empleados/eliminar_emple.php';
        require_once 'View/default/footer.php';
    }

    function guardarEMPLE() {
        $data['id_empleado'] = $_REQUEST['cbNombre'];
        $data['id_cargo'] = $_REQUEST['cbCargo'];
        $data['fecha_ingreso'] = $_REQUEST['txtFechaI'];
        $data['fecha_retiro'] = $_REQUEST['txtFechaR'];
        $data['sucursal'] = $_REQUEST['cbSucursal'];

        $this->empleados_model->crear_emple($data);
    }

    function actualizarEMPLE() {
        $data['id_empleado'] = $_REQUEST['cbNombre'];
        $data['id_cargo'] = $_REQUEST['cbCargo'];
        $data['fecha_ingreso'] = $_REQUEST['txtFechaI'];
        $data['fecha_retiro'] = $_REQUEST['txtFechaR'];
        $data['sucursal'] = $_REQUEST['cbSucursal'];

        $actua = $this->empleados_model->actualizarEMP($data);
    }

    function eliminarEMPLE() {
        $data['id_empleado'] = $_REQUEST['txtEmpleado'];

        $this->empleados_model->eliminarEMP($data);
    }

    function error_1062() {
        require_once 'View/default/header.php';
        require_once 'View/empleados/error_1062.php';
        require_once 'View/default/footer.php';
    }

    function error_1452() {
        require_once 'View/default/header.php';
        require_once 'View/empleados/error_1452.php';
        require_once 'View/default/footer.php';
    }

    function error_1451() {
        require_once 'View/default/header.php';
        require_once 'View/empleados/error_1451.php';
        require_once 'View/default/footer.php';
    }

}

?>
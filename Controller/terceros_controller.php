<?php

require_once 'Model/terceros_model.php';
require_once 'Model/ciudades_model.php';

class terceros_controller {

    private $terceros_model;
    private $ciudades_model;

    function __construct() {
        $this->terceros_model = new terceros_model();
        $this->ciudades_model = new ciudades_model();
    }

    function index_ter() {
        $query = $this->terceros_model->get_ter();
        require_once 'View/default/header.php';
        require_once 'View/terceros/index_ter.php';
        require_once 'View/default/footer.php';
    }

    function crear_ter() {
        $ciu = $this->ciudades_model->get_ciu();
        require_once 'View/default/header.php';
        require_once 'View/terceros/crear_ter.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_ter($id) {
        $query = $this->terceros_model->consulta_ter($id);
        $ciu = $this->ciudades_model->get_ciu();
        require_once 'View/default/header.php';
        require_once 'View/terceros/actualizar_ter.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_ter($id) {
        $query = $this->terceros_model->consulta_ter($id);
        require_once 'View/default/header.php';
        require_once 'View/terceros/eliminar_ter.php';
        require_once 'View/default/footer.php';
    }

    function guardarTER() {
        $data['id_tercero'] = $_REQUEST['txtID'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['direccion'] = $_REQUEST['txtDireccion'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['correo'] = $_REQUEST['txtCorreo'];
        $data['id_ciudad'] = $_REQUEST['cbCiudad'];

        $this->terceros_model->guardar_ter($data);
    }

    function actualizarTER() {
        $data['id_tercero'] = $_REQUEST['txtID'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['direccion'] = $_REQUEST['txtDireccion'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['correo'] = $_REQUEST['txtCorreo'];
        $data['id_ciudad'] = $_REQUEST['cbCiudad'];

        $this->terceros_model->actualizar_ter($data);
    }

    function eliminarTER() {
        $id = $_REQUEST['txtID'];
        $this->terceros_model->eliminar_ter($id);
    }

    function error_1062() {
        require_once 'View/default/header.php';
        require_once 'View/terceros/error_1062.php';
        require_once 'View/default/footer.php';
    }

    function error_1451() {
        require_once 'View/default/header.php';
        require_once 'View/terceros/error_1451.php';
        require_once 'View/default/footer.php';
    }

}

?>
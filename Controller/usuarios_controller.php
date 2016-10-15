<?php

require_once 'Model/usuarios_model.php';

class usuarios_controller {

    private $usuarios_model;

    function __construct() {
        $this->usuarios_model = new usuarios_model();
    }

    function index() {
        $query = $this->usuarios_model->get();
        require_once 'View/default/header.php';
        require_once 'View/usuarios/index_u.php';
        require_once 'View/default/footer.php';
    }

    function actualizar() {
        $query = $this->usuarios_model->get();
        require_once 'View/default/header.php';
        require_once 'View/usuarios/actualizar.php';
        require_once 'View/default/footer.php';
    }

    function crear() {
        require_once 'View/default/header.php';
        require_once 'View/usuarios/crear1.php';
        require_once 'View/default/footer.php';
    }

    function guardar() {
        $data['id_usu'] = $_REQUEST['txtDocumento'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['apellido'] = $_REQUEST['txtApellido'];
        $data['clave'] = $_REQUEST['psClave'];
        $data['id_perf'] = $_REQUEST['cbPerfil'];
        $data['estado'] = $_REQUEST['cbEstado'];

        $this->usuarios_model->guardar_registro($data);
        $this->index();
    }

}

?>
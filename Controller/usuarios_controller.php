<?php

require_once 'Model/usuarios_model.php';
require_once 'Model/perfiles_model.php';
require_once 'Model/empleados_model.php';

class usuarios_controller {

    private $usuarios_model;
    private $perfiles_model;
    private $empleados_model;

    function __construct() {
        $this->usuarios_model = new usuarios_model();
        $this->perfiles_model = new perfiles_model();
        $this->empleados_model = new empleados_model();
    }

    function index_u() {
        $query = $this->usuarios_model->get_u();
        require_once 'View/default/header.php';
        require_once 'View/usuarios/index_u.php';
        require_once 'View/default/footer.php';
    }

    function crear_u() {
        $per = $this->perfiles_model->get_p();
        $emple = $this->empleados_model->get_emple();
        require_once 'View/default/header.php';
        require_once 'View/usuarios/crear_u.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_u($id) {
        $query = $this->usuarios_model->consulta_u($id);
        $per = $this->perfiles_model->get_p();
        require_once 'View/default/header.php';
        require_once 'View/usuarios/actualizar_u.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_u($id) {
        $query = $this->usuarios_model->consulta_u($id);
        require_once 'View/default/header.php';
        require_once 'View/usuarios/eliminar_u.php';
        require_once 'View/default/footer.php';
    }

    function guardarU() {
        $data['id_usu'] = $_REQUEST['cbDocumento'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['apellido'] = $_REQUEST['txtApellido'];
        $data['clave'] = $_REQUEST['psClave'];
        $data['id_perf'] = $_REQUEST['cbPerfil'];
        $data['estado'] = $_REQUEST['cbEstado'];

        $this->usuarios_model->guardar_u($data);
    }

    function actualizarU() {
        $data['id_usu'] = $_REQUEST['txtDocumento'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['apellido'] = $_REQUEST['txtApellido'];
        $data['clave'] = $_REQUEST['psClave'];
        $data['id_perf'] = $_REQUEST['cbPerfil'];
        $data['estado'] = $_REQUEST['cbEstado'];

        $this->usuarios_model->actualizar_u($data);
    }

    function eliminarU() {
        $id = $_REQUEST['txtDocumento'];
        $this->usuarios_model->eliminar_u($id);
    }

    function error_1452() {
        require_once 'View/default/header.php';
        require_once 'View/usuarios/error_1452.php';
        require_once 'View/default/footer.php';
    }

    function error_1062() {
        require_once 'View/default/header.php';
        require_once 'View/usuarios/error_1062.php';
        require_once 'View/default/footer.php';
    }

}

?>
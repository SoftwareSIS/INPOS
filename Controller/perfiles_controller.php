<?php

require_once 'Model/perfiles_model.php';


class perfiles_controller {

    private $perfiles_model;
    

    function __construct() {
        $this->perfiles_model = new perfiles_model();
        
    }

    function index_p() {
        $query = $this->perfiles_model->get_p();
        require_once 'View/default/header.php';
        require_once 'View/perfiles/index_p.php';
        require_once 'View/default/footer.php';
    }

    function crear_p() {
        $per = $this->perfiles_model->get_p();
        require_once 'View/default/header.php';
        require_once 'View/perfiles/crear_p.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_p($id) {
        $query = $this->perfiles_model->consulta_p($id);
        require_once 'View/default/header.php';
        require_once 'View/perfiles/actualizar_p.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_p($id) {
        $query = $this->perfiles_model->consulta_p($id);
        require_once 'View/default/header.php';
        require_once 'View/perfiles/eliminar_p.php';
        require_once 'View/default/footer.php';
    }

    function guardarP() {
        $data['id_perf'] = $_REQUEST['txtID'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        
        $this->perfiles_model->guardar_p($data);
        $this->index_p();
    }

    function actualizarP() {
        $data['id_perf'] = $_REQUEST['txtID'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        
        $this->perfiles_model->actualizar_p($data);
        $this->index_p();
    }

    function eliminarP() {
        $id = $_REQUEST['txtID'];
        $this->perfiles_model->eliminar_p($id);
        $this->index_p();
    }

}

?>
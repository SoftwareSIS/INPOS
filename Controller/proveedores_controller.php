<?php

require_once 'Model/proveedores_model.php';


class proveedores_controller {

    private $proveedores_model;
    

    function __construct() {
        $this->proveedores_model = new proveedores_model();
        
    }

    function index_pr() {
        $query = $this->proveedores_model->get_pr();
        require_once 'View/default/header.php';
        require_once 'View/proveedores/index_pr.php';
        require_once 'View/default/footer.php';
    }

    function crear_pr() {
        $per = $this->proveedores_model->get_pr();
        require_once 'View/default/header.php';
        require_once 'View/proveedores/crear_pr.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_pr($id) {
        $query = $this->proveedores_model->consulta_pr($id);
        require_once 'View/default/header.php';
        require_once 'View/proveedores/actualizar_pr.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_pr($id) {
        $query = $this->proveedores_model->consulta_pr($id);
        require_once 'View/default/header.php';
        require_once 'View/proveedores/eliminar_pr.php';
        require_once 'View/default/footer.php';
    }

    function guardarPR() {
        $data['id_nit'] = $_REQUEST['txtNit'];
        $data['dir_factura'] = $_REQUEST['txtFactura'];
        $data['estado'] = $_REQUEST['txtEstado'];

        $this->proveedores_model->guardar_pr($data);
        $this->index_pr();
    }

    function actualizarPR() {
        $data['id_nit'] = $_REQUEST['txtNit'];
        $data['dir_factura'] = $_REQUEST['txtFactura'];
        $data['estado'] = $_REQUEST['txtEstado'];
        
        $this->proveedores_model->actualizar_pr($data);
        $this->index_pr();
    }

    function eliminarPR() {
        $id = $_REQUEST['txtNit'];
        $this->proveedores_model->eliminar_pr($id);
        $this->index_pr();
    }

}

?>
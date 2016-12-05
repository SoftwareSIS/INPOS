<?php

require_once 'Model/documentos_model.php';

class documentos_controller {

    private $documentos_model;

    function __construct() {
        $this->documentos_model = new documentos_model();
    }

    function index_docu() {
        $query = $this->documentos_model->get_docu();
        require_once 'View/default/header.php';
        require_once 'View/documentos/index_docu.php';
        require_once 'View/default/footer.php';
    }

    function crear_docu() {
        require_once 'View/default/header.php';
        require_once 'View/documentos/crear_docu.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_docu($id) {
        $query = $this->documentos_model->consulta_docu($id);
        require_once 'View/default/header.php';
        require_once 'View/documentos/actualizar_docu.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_docu($id) {
        $query = $this->documentos_model->consulta_docu($id);
        require_once 'View/default/header.php';
        require_once 'View/documentos/eliminar_docu.php';
        require_once 'View/default/footer.php';
    }

    function guardarDOCU() {
        $data['id_documento'] = $_REQUEST['txtDocumento'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        $data['consecutivo'] = $_REQUEST['txtConsecutivo'];
        $data['tipo'] = $_REQUEST['cbTipo'];

        $this->documentos_model->guardar_docu($data);
    }

    function actualizarDOCU() {
        $data['id_documento'] = $_REQUEST['txtDocumento'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        $data['consecutivo'] = $_REQUEST['txtConsecutivo'];
        $data['tipo'] = $_REQUEST['cbTipo'];

        $this->documentos_model->actualizar_docu($data);
    }

    function eliminarDOCU() {
        $id = $_REQUEST['txtID'];
        $this->documentos_model->eliminar_docu($id);
    }

}

?>
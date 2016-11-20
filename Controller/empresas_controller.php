<?php

require_once 'Model/empresas_model.php';
require_once 'Model/ciudades_model.php';

class empresas_controller {
    private $empresas_model;
    private $ciudades_model;

    function __construct() {
        $this->empresas_model = new empresas_model();
        $this->ciudades_model= new ciudades_model();
    }

    function index_empr() {
        $query = $this->empresas_model->get_empr();
        require_once 'View/default/header.php';
        require_once 'View/empresas/index_empr.php';
        require_once 'View/default/footer.php';
    }

    function crear_empr() {
        $ciu = $this->ciudades_model->get_ciu();
        require_once 'View/default/header.php';
        require_once 'View/empresas/crear_empr.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_empr($id) {
        $query = $this->empresas_model->consulta_empr($id);
        $ciu = $this->ciudades_model->get_ciu();
        require_once 'View/default/header.php';
        require_once 'View/empresas/actualizar_empr.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_empr($id) {
        $query = $this->empresas_model->consulta_empr($id);
        require_once 'View/default/header.php';
        require_once 'View/empresas/eliminar_empr.php';
        require_once 'View/default/footer.php';
    }

    function guardarEMPR() {
        $data['id_empresa'] = $_REQUEST['txtIdEmpresa'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['ciudad'] = $_REQUEST['cbCiudad'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['email'] = $_REQUEST['txtCorreo'];
        $data['direccion'] = $_REQUEST['txtDireccion'];

        $this->empresas_model->guardar_empr($data);
        $this->index_empr();
    }

    function actualizarEMPR() {
        $data['id_empresa'] = $_REQUEST['txtIdEmpresa'];
        $data['nombre'] = $_REQUEST['txtNombre'];
        $data['ciudad'] = $_REQUEST['cbCiudad'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['email'] = $_REQUEST['txtCorreo'];
        $data['direccion'] = $_REQUEST['txtDireccion'];
        
        $this->empresas_model->actualizar_empr($data);
        $this->index_empr();
    }

    function eliminarEMPR() {
        $id = $_REQUEST['txtIdEmpresa'];
        $this->empresas_model->eliminar_empr($id);
        $this->index_empr();
    }

}

?>
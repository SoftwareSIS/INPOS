<?php

require_once 'Model/sucursales_model.php';
require_once 'Model/ciudades_model.php';
require_once 'Model/empresas_model.php';

class sucursales_controller {
    private $sucursales_model;
    private $ciudades_model;
    private $empresas_model;
    
    
    function __construct() {
        $this->sucursales_model= new sucursales_model();
        $this->ciudades_model= new ciudades_model();
        $this->empresas_model= new empresas_model();
    }
    
    function index_suc() {
        $query = $this->sucursales_model->get_suc();
        require_once 'View/default/header.php';
        require_once 'View/sucursales/index_suc.php';
        require_once 'View/default/footer.php';
    }
    
    function crear_suc(){
        $ciu = $this->ciudades_model->get_ciu();
        $empr = $this->empresas_model->get_empr();
        require_once 'View/default/header.php';
        require_once 'View/sucursales/crear_suc.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_suc($id) {
        $query = $this->sucursales_model->consulta_suc($id);
        $ciu = $this->ciudades_model->get_ciu();
        $empr = $this->empresas_model->get_empr();
        require_once 'View/default/header.php';
        require_once 'View/sucursales/actualizar_suc.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_suc($id) {
        $query = $this->sucursales_model->consulta_suc($id);
        require_once 'View/default/header.php';
        require_once 'View/sucursales/eliminar_suc.php';
        require_once 'View/default/footer.php';
    }

    function guardarSUC() {
        $data['id_sucursal'] = $_REQUEST['txtID'];
        $data['direccion'] = $_REQUEST['txtDireccion'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['estado'] = $_REQUEST['txtEstado'];
        $data['id_ciudad'] = $_REQUEST['cbCiudad'];
        $data['id_empresa'] = $_REQUEST['cbEmpresa'];

        $this->sucursales_model->guardar_suc($data);
    }

    function actualizarSUC() {
         $data['id_sucursal'] = $_REQUEST['txtID'];
        $data['direccion'] = $_REQUEST['txtDireccion'];
        $data['telefono'] = $_REQUEST['txtTelefono'];
        $data['estado'] = $_REQUEST['txtEstado'];
        $data['id_ciudad'] = $_REQUEST['cbCiudad'];
        $data['id_empresa'] = $_REQUEST['cbEmpresa'];
        
        $this->sucursales_model->actualizar_suc($data);
        $this->index_suc();
    }

    function eliminarSUC() {
        $id = $_REQUEST['txtID'];
        $this->sucursales_model->eliminar_suc($id);
        $this->index_suc();
    }

    function error() {
        require_once 'View/default/header.php';
        require_once 'View/sucursales/error_1452.php';
        require_once 'View/default/footer.php';
    }

}

?>
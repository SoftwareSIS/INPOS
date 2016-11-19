<?php

require_once 'Model/ciudades_model.php';


class ciudades_controller {

    private $ciudades_model;
    

    function __construct() {
        $this->ciudades_model = new ciudades_model();
        
    }

    function index_ciu() {
        $query = $this->ciudades_model->get_ciu();
        require_once 'View/default/header.php';
        require_once 'View/ciudades/index_ciu.php';
        require_once 'View/default/footer.php';
    }

    function crear_ciu() {
        $ciu = $this->ciudades_model->get_ciu   ();
        require_once 'View/default/header.php';
        require_once 'View/ciudades/crear_ciu.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_ciu($id) {
        $query = $this->ciudades_model->consulta_ciu($id);
        require_once 'View/default/header.php';
        require_once 'View/ciudades/actualizar_ciu.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_ciu($id) {
        $query = $this->ciudades_model->consulta_ciu($id);
        require_once 'View/default/header.php';
        require_once 'View/ciudades/eliminar_ciu.php';
        require_once 'View/default/footer.php';
    }

    function guardarCIU() {
        $data['id_ciudad'] = $_REQUEST['txtidCiu'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];

        $this->ciudades_model->guardar_ciu($data);
        $this->index_ciu();
    }

    function actualizarCIU() {
        $data['id_ciudad'] = $_REQUEST['txtidCiu'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];
        
        $this->ciudades_model->actualizar_ciu($data);
        $this->index_ciu();
    }

    function eliminarCIU() {
        $id = $_REQUEST['txtidCiu'];
        $this->ciudades_model->eliminar_ciu($id);
        $this->index_ciu();
    }

}

?>
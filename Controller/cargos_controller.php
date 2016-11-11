<?php

require_once 'Model/cargos_model.php';


class cargos_controller {

    private $cargos_model;
    

    function __construct() {
        $this->cargos_model = new cargos_model();
        
    }

    function index_car() {
        $query = $this->cargos_model->get_car();
        require_once 'View/default/header.php';
        require_once 'View/cargos/index_car.php';
        require_once 'View/default/footer.php';
    }

    function crear_car() {
        $per = $this->cargos_model->get_car();
        require_once 'View/default/header.php';
        require_once 'View/cargos/crear_car.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_car($id) {
        $query = $this->cargos_model->consulta_car($id);
        require_once 'View/default/header.php';
        require_once 'View/cargos/actualizar_car.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_car($id) {
        $query = $this->cargos_model->consulta_car($id);
        require_once 'View/default/header.php';
        require_once 'View/cargos/eliminar_car.php';
        require_once 'View/default/footer.php';
    }

    function guardarCAR() {
        $data['id_cargo'] = $_REQUEST['txtidCar'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];

        $this->cargos_model->guardar_car($data);
        $this->index_car();
    }

    function actualizarCAR() {
        $data['id_cargo'] = $_REQUEST['txtidCar'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];
        
        $this->cargos_model->actualizar_car($data);
        $this->index_car();
    }

    function eliminarCAR() {
        $id = $_REQUEST['txtidCar'];
        $this->cargos_model->eliminar_car($id);
        $this->index_car();
    }

}

?>
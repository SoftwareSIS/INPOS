<?php

require_once 'Model/conceptos_model.php';


class conceptos_controller {

    private $conceptos_model;
    

    function __construct() {
        $this->conceptos_model = new conceptos_model();
        
    }

    function index_con() {
        $query = $this->conceptos_model->get_con();
        require_once 'View/default/header.php';
        require_once 'View/conceptos/index_con.php';
        require_once 'View/default/footer.php';
    }

    function crear_con() {
        $per = $this->conceptos_model->get_con();
        require_once 'View/default/header.php';
        require_once 'View/conceptos/crear_con.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_con($id) {
        $query = $this->conceptos_model->consulta_con($id);
        require_once 'View/default/header.php';
        require_once 'View/conceptos/actualizar_con.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_con($id) {
        $query = $this->conceptos_model->consulta_con($id);
        require_once 'View/default/header.php';
        require_once 'View/conceptos/eliminar_con.php';
        require_once 'View/default/footer.php';
    }

    function guardarCON() {
        $data['id_concep'] = $_REQUEST['txtidCon'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];

        $this->conceptos_model->guardar_con($data);
        $this->index_con();
    }

    function actualizarCON() {
        $data['id_concep'] = $_REQUEST['txtidCon'];
        $data['descripcion'] = $_REQUEST['txtdescripcion'];
        
        $this->conceptos_model->actualizar_con($data);
        $this->index_con();
    }

    function eliminarCON() {
        $id = $_REQUEST['txtidCon'];
        $this->conceptos_model->eliminar_con($id);
        $this->index_con();
    }

}

?>
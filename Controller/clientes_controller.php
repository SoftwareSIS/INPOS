<?php

require_once 'Model/clientes_model.php';


class clientes_controller {

    private $clientes_model;
    

    function __construct() {
        $this->clientes_model = new clientes_model();
        
    }

    function index_cli() {
        $query = $this->clientes_model->get_cli();
        require_once 'View/default/header.php';
        require_once 'View/clientes/index_cli.php';
        require_once 'View/default/footer.php';
    }

    function crear_cli() {
        $cli = $this->clientes_model->get_cli();
        require_once 'View/default/header.php';
        require_once 'View/clientes/crear_cli.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_cli($id) {
        $query = $this->clientes_model->consulta_cli($id);
        require_once 'View/default/header.php';
        require_once 'View/clientes/actualizar_cli.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_cli($id) {
        $query = $this->clientes_model->consulta_cli($id);
        require_once 'View/default/header.php';
        require_once 'View/clientes/eliminar_cli.php';
        require_once 'View/default/footer.php';
    }

    function guardarCLI() {
        $data['id_cliente'] = $_REQUEST['txtId'];
        $data['descuento'] = $_REQUEST['txtDescuento'];
        $data['estado'] = $_REQUEST['cbEstado'];

        $this->clientes_model->guardar_cli($data);
        $this->index_cli();
    }

    function actualizarCLI  () {
        $data['id_cliente'] = $_REQUEST['txtId'];
        $data['descuento'] = $_REQUEST['txtDescuento'];
        $data['estado'] = $_REQUEST['cbEstado'];
        
        $this->clientes_model->actualizar_cli($data);
        $this->index_cli();
    }

    function eliminarCLI() {
        $id = $_REQUEST['txtId'];
        $this->clientes_model->eliminar_cli($id);
        $this->index_cli();
    }

}

?>
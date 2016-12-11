<?php

require_once 'Model/factura_model.php';

class factura_controller {

    private $factura_model;

    function __construct() {
        $this->factura_model = new factura_model();
    }

    function index_fac() {
        $query = $this->factura_model->get_fac();
        require_once 'View/default/header.php';
        require_once 'View/factura/index_fac.php';
        require_once 'View/default/footer.php';
    }

    function crear_fac() {
        
    }

}

?>
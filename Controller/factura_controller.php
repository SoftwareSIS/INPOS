<?php

require_once 'Model/factura_model.php';

class factura_controller {

    private $factura_model;

    function __construct() {
        $this->factura_model = new factura_model();
    }

    function index_fac() {
        $cab = $this->factura_model->get_facC();
        $det = $this->factura_model->get_facD();
        require_once 'View/default/header.php';
        require_once 'View/factura/index_factura.php';
        require_once 'View/default/footer.php';
    }

    function crear_fac() {
        
    }

}

?>
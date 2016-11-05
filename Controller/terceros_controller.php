<?php

require_once 'Model/terceros_model.php';
require_once 'Model/ciudades_model.php';

class terceros_controller {
    private $terceros_model;
    private $ciudades_model;
    
    
    function __construct() {
        $this->terceros_model= new terceros_model();
        $this->ciudades_model= new ciudades_model();
    }
    
    function index() {
        $query = $this->terceros_model->get();
        require_once 'View/default/header.php';
        require_once 'View/terceros/index.php';
        require_once 'View/default/footer.php';
    }
    
    function crear(){
        $ciu = $this->ciudades_model->get();
        require_once 'View/default/header.php';
        require_once 'View/terceros/crear.php';
        require_once 'View/default/footer.php';
    }
}

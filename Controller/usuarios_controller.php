<?php

require_once 'Model/usuarios_model.php';

class usuarios_controller {

    private $usuarios_model;

    function __construct() {
        $this->usuarios_model = new usuarios_model();
    }

    function index() {
        $query = $this->usuarios_model->get();
        require_once 'View/header.php';
        require_once 'View/footer.php';
        require_once 'View/usuarios.php';
    }

}

?>
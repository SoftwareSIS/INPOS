<?php

require_once 'Model/perfiles_model.php';

class perfiles_controller {

    private $perfil_model;

    function __construct() {
        $this->perfil_model = new perfiles_model();
    }

    function index() {
        $query = $this->perfil_model->get();
        require_once 'View/default/header.php';
        require_once 'View/perfiles/index.php';
        require_once 'View/default/footer.php';
    }

}

?>
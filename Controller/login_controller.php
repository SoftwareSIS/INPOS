<?php

require_once 'Model/login_model.php';

class login_controller {

    private $login_model;

    function __construct() {
        $this->login_model = new login_model();
    }

    function index_log() {
        require_once 'Estyle/bootstrap-3.3.7-dist/css/Estilo_B.php';
        require_once 'View/login/login.php';
        require_once 'Estyle/bootstrap-3.3.7-dist/js/Estilo_JQ.php';
    }

    function con() {
        $usu = $_REQUEST['txtUsuario'];
        $pass = md5(sha1($_REQUEST['txtClave']));

        $this->login_model->get_log($usu, $pass);
        $this->index_log();
    }

}

?>
<?php

require_once 'Controller/login_controller.php';

class login_model {

    private $DB;
    private $consulta;
    private $login_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_log($usu, $pass) {
        $query = mysqli_query($this->DB, "SELECT id_usu, clave FROM usuarios");

        $data[] = mysqli_fetch_array($query);

        echo 'Valor: ' . $data[0];

        if ($usu == $data[0] && $pass = $data[1]) {
            echo 'Validacion Correcta';
        } else {
            echo 'Validacion Incorrecta';
        }

        if (!$query) {
            die("Error al validar datos (Usuario)" . $query . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            echo 'retorno correcto';
        }
    }

}

?>
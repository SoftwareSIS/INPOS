<?php

require_once 'Controller/login_controller.php';

class login_model {

    private $DB;
    private $consulta;
    private $login_controller;
    private $prueba;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
        $this->prueba = array();
    }

    function get_log($usu, $pass) {
        $query = mysqli_query($this->DB, "SELECT id_usu, clave FROM usuarios");

        while ($row = mysqli_fetch_row($query)) {
            echo "Documento: " . $row[0];
            echo "\n Clave" . $row[1];
        }

        if ($usu == $row[0] && $pass = $row[1]) {
            echo 'Usuario y Contraseña Correctas';
            echo 'Datos: ' . $usu;
            echo 'Datos: ' . $pass;
        } else {
            echo 'Usuario o Contraseña Incorrecta';
            echo 'Datos: ' . $usu;
            echo 'Datos: ' . $pass;
        }

        if (!$query) {
            die("Error al validar datos (Usuario)" . $query . " " . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
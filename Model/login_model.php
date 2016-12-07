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
        $query = mysqli_query($this->DB, "SELECT id_usu, clave "
                . "FROM usuarios "
                . "WHERE id_usu = '" . $usu . "' AND clave = '" . $pass . "'");

        if ($query->num_rows > 0) {
            echo'<script type="text/javascript">
                alert("Bienvenid@ ");
                window.location="index.php"
                </script>';
        } else {
            echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location="login.php"
                </script>';
        }

        if (!$query) {
            die("Error al validar datos (Usuario)" . $query . " " . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}
?>
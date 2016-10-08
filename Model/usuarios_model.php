<?php

class usuarios_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get() {
        $query = $this->DB->query("SELECT * FROM usuarios");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

}

?>
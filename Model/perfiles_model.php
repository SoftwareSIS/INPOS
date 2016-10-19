<?php

class perfiles_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_p() {
        $query = $this->DB->query("SELECT * FROM perfiles");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }
        return $this->consulta;
    }

}

?>
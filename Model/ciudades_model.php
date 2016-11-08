<?php

class ciudades_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get() {
        $query = mysqli_query($this->DB, "SELECT * FROM ciudades ORDER BY id_ciudad");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }

        if (!$query) {
            die("Error al consultar Registros (Ciudades)" . $query . "Codigo:  " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

}

<?php

class terceros_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get() {
        $query = $this->DB->query("SELECT * FROM terceros t JOIN ciudades c on t.id_ciudad = c.id_ciudad");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }
        return $this->consulta;
    }

}

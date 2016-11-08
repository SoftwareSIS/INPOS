<?php

class terceros_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get() {
        $query = mysqli_query($this->DB, "SELECT * FROM terceros t "
                . "JOIN ciudades c on t.id_ciudad = c.id_ciudad ORDER BY id_tercero");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }
        if (!$query) {
            die("Error al consultar Registros (Terceros)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

}

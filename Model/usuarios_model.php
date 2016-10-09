<?php

class usuarios_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get() {
        $query = $this->DB->query(" SELECT id_usu, nombre, apellido, p.descripcion, estado
            FROM usuarios u
            INNER JOIN perfiles p ON u.id_perf = p.id_perf;");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

}

?>
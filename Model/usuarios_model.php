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

    function guardar_registro($data) {
        $sql = "INSERT INTO usuarios (id_usu,nombre,apellido,clave,id_perf,estado) VALUES"
                . "('" . $data['id_usu'] . "','" . $data['nombre'] . "','" . $data['apellido'] . "',"
                . "'" . $data['clave'] . "','" . $data['id_perf'] . "','" . $data['estado'] . "')";
        mysqli_query($this->DB, $sql) or die("Error al insertar datos \n" . mysqli_error($this->DB));
    }

}

?>
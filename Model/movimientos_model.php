<?php

require_once 'Controller/movimientos_controller.php';

class movimientos_model {

    private $DB;
    private $consulta;
    private $movimientos_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_mov() {
        $query = mysqli_query($this->DB, "SELECT * FROM movimientos "
                . "ORDER BY fecha_movimiento, id_documento, consecutivo");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Movimientos)" . $query . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardarMOV($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO movimientos VALUES ("
                . "'" . $data['fecha_movimiento'] . "', "
                . "'" . $data['id_sucursal'] . "', "
                . "'" . $data['id_documento'] . "', "
                . "'" . $data['consecutivo'] . "', "
                . "'" . $data['id_prod'] . "', "
                . "'" . $data['cantidad'] . "')");

        if (!$sql) {
            die("Error al guardar Registros (Movimientos)" . " " . $sql . " " . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
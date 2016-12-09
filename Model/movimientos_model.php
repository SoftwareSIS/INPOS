<?php

require_once 'Controller/movimientos_controller.php';

class movimientos_model {

    private $DB;
    private $consulta;
    private $captura;
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
                . "'" . $data['Fecha'] . "', "
                . "'" . $data['Sucursal'] . "', "
                . "'" . $data['Documento'] . "', "
                . "'" . $data['Consecutivo'] . "', "
                . "(SELECT id_prod FROM productos WHERE descripcion = '" . $data['Producto'] . "'), "
                . "'" . $data['Cantidad'] . "')");


        if (!$sql) {
            die("Error al guardar Registros (Movimientos)" . " " . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            header("Location: index.php?m=mov");
        }
    }

}

?>
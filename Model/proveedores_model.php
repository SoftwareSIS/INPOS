<?php

class proveedores_model {

    private $DB;
    private $consulta;
    private $proveedores_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_pr() {
        $query = mysqli_query($this->DB, "SELECT p.id_nit, t.nombre, p.dir_factura, p.estado "
                . "FROM proveedores p "
                . "INNER JOIN terceros t ON p.id_nit = t.id_tercero "
                . "ORDER BY id_nit");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Proveedores)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_pr($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO proveedores VALUES"
                . "('" . $data['id_nit'] . "','" . $data['dir_factura'] . "','" . $data['estado'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Proveedor)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_pr($data) {
        $sql = mysqli_query($this->DB, "UPDATE proveedores SET "
                . "dir_factura = '" . $data['dir_factura'] . "', "
                . "estado = '" . $data["estado"] . "' "
                . "WHERE id_nit = '" . $data["id_nit"] . "'");

        if (!$sql) {
            die("Error al actualizar el proveedor ('" . $data['id_nit'] . "')" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_pr($id) {
        $actu = mysqli_query($this->DB, "SELECT id_nit, dir_factura, estado
            FROM proveedores WHERE id_nit = '" . $id . "' ORDER BY id_nit");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Proveedores)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_pr($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM proveedores WHERE id_nit = '" . $id . "'");

        if (!$sql) {
            if (mysqli_errno($this->DB) == 1451) {
                require_once 'Controller/proveedores_controller.php';
                $this->proveedores_controller = new proveedores_controller();
                $this->proveedores_controller->error_1451();
            } else {
                if (mysqli_errno($this->DB) != 1451) {
                    die("Error al Eliminar el registro ('" . $id . "' ) " . $sql . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header("Location: index.php?m=prov");
        }
    }

}

?>

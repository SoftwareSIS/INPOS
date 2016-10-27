<?php

class proveedores_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_pr() {
        $query = $this->DB->query("SELECT p.id_nit, t.nombre, p.dir_factura, p.estado "
                . "FROM proveedores p "
                . "INNER JOIN terceros t ON p.id_nit = t.id_tercero");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

    function guardar_pr($data) {
        $sql = "INSERT INTO proveedores VALUES"
                . "('" . $data['id_nit'] . "','" . $data['dir_factura'] . "','" . $data['estado'] . "')";
        mysqli_query($this->DB, $sql) or die("Error al insertar datos (Proveedor)\n" . mysqli_error($this->DB));
    }

    function actualizar_pr($data) {
        $sql = "UPDATE proveedores SET "
                . "dir_factura = '" . $data['dir_factura'] . "', "
                . "estado = '" . $data["estado"] . "' "
                . "WHERE id_nit = '" . $data["id_nit"] . "'";
//        mysqli_query($this->DB, $sql) or die("Error al actualizar datos (Usuario) " . $sql . mysqli_error($this->DB));

        if ($this->DB) {
            mysqli_query($this->DB, $sql);
        } else {
            die("Error al actualizar el proveedor ('" . $data['id_nit'] . "')");
        }
    }

    function consulta_pr($id) {
        $actu = $this->DB->query("SELECT id_nit, dir_factura, estado
            FROM proveedores WHERE id_nit = '" . $id . "'");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

    function eliminar_pr($id) {
        $sql = $this->DB->query("DELETE FROM proveedores WHERE id_nit =" . $id);
        if ($this->DB) {
            mysqli_query($this->DB, $sql);
        } else {
            die("Error al Eliminar el registro ('" . $id . "')");
        }
    }

}

?>

<?php

class clientes_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_cli() {
        $query = mysqli_query($this->DB, "SELECT c.id_cliente, t.nombre, c.descuento, c.estado "
                . "FROM clientes c "
                . "INNER JOIN terceros t ON c.id_cliente = t.id_tercero "
                . "ORDER BY id_cliente");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Clientes)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_cli($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO clientes VALUES"
                . "('" . $data['id_cliente'] . "','" . $data['descuento'] . "','" . $data['estado'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Clientes)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_cli($data) {
        $sql = mysqli_query($this->DB, "UPDATE clientes SET "
                . "descuento = '" . $data['descuento'] . "', "
                . "estado = '" . $data["estado"] . "' "
                . "WHERE id_cliente = '" . $data["id_cliente"] . "'");

        if (!$sql) {
            die("Error al actualizar el cliente ('" . $data['id_nit'] . "')" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_cli($id) {
        $actu = mysqli_query($this->DB, "SELECT id_cliente, descuento, estado
            FROM clientes WHERE id_cliente = '" . $id . "' ORDER BY id_cliente");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Clientes)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_cli($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM clientes WHERE id_cliente = '" . $id . "'");
        if ($this->DB) {
            mysqli_query($this->DB, $sql);
        } else {
            die("Error al Eliminar el registro ('" . $id . "' ) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>

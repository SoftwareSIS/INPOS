<?php

class productos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_pro() {
        $query = mysqli_query($this->DB, "SELECT p.id_prod, t.nombre, p.descripcion, p.valor, p.imagen "
                . "FROM productos p "
                . "INNER JOIN proveedores pr ON p.id_proveedor = pr.id_nit "
                . "INNER JOIN terceros t ON pr.id_nit = t.id_tercero "
                . "ORDER BY id_prod");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Productos)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_pro($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO productos VALUES"
                . "('" . $data['id_prod'] . "','" . $data['id_proveedor'] . "','" . $data['descripcion'] . "',"
                . "'" . $data['valor'] . "','" . $data['imagen'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Producto)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_pro($data) {
        $sql = mysqli_query($this->DB, "UPDATE productos SET "
                . "id_prod = '" . $data['id_prod'] . "', "
                . "id_proveedor = '" . $data['id_proveedor'] . "', "
                . "descripcion = '" . $data["descripcion"] . "', "
                . "valor = '" . $data["valor"] . "', "
                . "imagen = '" . $data['imagen'] . "' "
                . "WHERE id_prod = '" . $data["id_prod"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Producto) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_pro($id) {
        $actu = $this->DB->query("SELECT p.id_prod, p.id_proveedor, p.descripcion, p.valor, p.imagen "
                . "FROM productos p "
                . "INNER JOIN proveedores t ON p.id_proveedor = t.id_nit WHERE p.id_prod = $id");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Productos)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_pro($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM productos WHERE id_prod =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Producto) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
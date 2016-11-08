<?php

class productos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_pro() {
        $query = mysqli_query($this->DB, "SELECT * FROM productos ORDER BY id_prod");

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
        $sql = mysqli_query($this->DB, "INSERT INTO usuarios VALUES"
                . "('" . $data['id_usu'] . "','" . $data['nombre'] . "','" . $data['apellido'] . "',"
                . "'" . $data['clave'] . "','" . $data['id_perf'] . "','" . $data['estado'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Usuario)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_pro($data) {
        $sql = mysqli_query($this->DB, "UPDATE usuarios SET "
                . "nombre = '" . $data['nombre'] . "', "
                . "apellido = '" . $data['apellido'] . "', "
                . "clave = '" . $data["clave"] . "', "
                . "id_perf = '" . $data["id_perf"] . "', "
                . "estado = '" . $data['estado'] . "' "
                . "WHERE id_usu = '" . $data["id_usu"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Usuario) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_pro($id) {
        $actu = $this->DB->query("SELECT id_usu, nombre, apellido, p.descripcion, estado
            FROM usuarios u
            INNER JOIN perfiles p ON u.id_perf = p.id_perf WHERE id_usu = '" . $id . "'");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Perfiles)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_pro($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM usuarios WHERE id_usu =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Usuario) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
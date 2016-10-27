<?php

class productos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_pro() {
        $query = $this->DB->query("SELECT * FROM productos");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

    function guardar_pro($data) {
        $sql = "INSERT INTO usuarios VALUES"
                . "('" . $data['id_usu'] . "','" . $data['nombre'] . "','" . $data['apellido'] . "',"
                . "'" . $data['clave'] . "','" . $data['id_perf'] . "','" . $data['estado'] . "')";
        mysqli_query($this->DB, $sql) or die("Error al insertar datos (Usuario)\n" . mysqli_error($this->DB));
    }

    function actualizar_pro($data) {
        $sql = "UPDATE usuarios SET "
                . "nombre = '" . $data['nombre'] . "', "
                . "apellido = '" . $data['apellido'] . "', "
                . "clave = '" . $data["clave"] . "', "
                . "id_perf = '" . $data["id_perf"] . "', "
                . "estado = '" . $data['estado'] . "' "
                . "WHERE id_usu = '" . $data["id_usu"] . "'";
        mysqli_query($this->DB, $sql) or die("Error al actualizar datos (Usuario) " . $sql . mysqli_error($this->DB));
    }

    function consulta_pro($id) {
        $actu = $this->DB->query("SELECT id_usu, nombre, apellido, p.descripcion, estado
            FROM usuarios u
            INNER JOIN perfiles p ON u.id_perf = p.id_perf WHERE id_usu = '" . $id . "'");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

    function eliminar_pro($id) {
        $sql = $this->DB->query("DELETE FROM usuarios WHERE id_usu =" . $id);
        mysqli_query($this->DB, $sql) or die("Error al Eliminar el registro (Usuario) " . $sql . mysqli_error($this->DB));
    }

}

?>
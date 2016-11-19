<?php

class conceptos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_con() {
        $query = mysqli_query($this->DB, "SELECT * FROM conceptos ORDER BY id_concep");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Conceptos)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_con($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO conceptos VALUES"
                . "('" . $data['id_concep'] . "','" . $data['descripcion'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Conceptos)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_con($data) {
        $sql = mysqli_query($this->DB, "UPDATE conceptos SET "
                . "descripcion = '" . $data['descripcion'] . "' "
                . "WHERE id_concep = '" . $data["id_concep"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (conceptos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_con($id) {
        $actu = $this->DB->query("SELECT * FROM conceptos WHERE id_concep = '" . $id . "' ORDER BY id_concep");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Conceptos)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_con($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM conceptos WHERE id_concep =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Conceptos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
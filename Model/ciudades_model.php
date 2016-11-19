<?php

class ciudades_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_ciu() {
        $query = mysqli_query($this->DB, "SELECT * FROM ciudades ORDER BY id_ciudad");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }

        if (!$query) {
            die("Error al consultar Registros (Ciudades)" . $query . "Codigo:  " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }
function guardar_ciu($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO ciudades VALUES "
                . "('" . $data['id_ciudad'] . "','" . $data['descripcion'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Ciudades)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_ciu($data) {
        $sql = mysqli_query($this->DB, "UPDATE ciudades SET "
                . "id_ciudad = '" . $data['id_ciudad'] . "', "
                . "descripcion = '" . $data['descripcion'] . "' "
                . "WHERE id_ciudad = '" . $data["id_ciudad"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Ciudades) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_ciu($id) {
        $actu = $this->DB->query("SELECT * FROM ciudades WHERE id_ciudad = '" . $id . "'");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Ciudades)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_ciu($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM ciudades WHERE id_ciudad =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Ciudades) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
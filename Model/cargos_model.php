<?php

class cargos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_car() {
        $query = mysqli_query($this->DB, "SELECT * FROM cargos ORDER BY id_cargo");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Cargos)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_car($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO cargos VALUES"
                . "('" . $data['id_cargo'] . "','" . $data['descripcion'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Cargos)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_car($data) {
        $sql = mysqli_query($this->DB, "UPDATE cargos SET "
                . "id_cargo = '" . $data['id_cargo'] . "', "
                . "descripcion = '" . $data['descripcion'] . "', "
                . "WHERE id_cargo = '" . $data["id_cargo"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Cargos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_car($id) {
        $actu = $this->DB->query("SELECT * FROM cargos WHERE id_cargo = '" . $id . "' ORDER BY id_cargo");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Cargos)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_car($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM cargos WHERE id_cargo =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Cargos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
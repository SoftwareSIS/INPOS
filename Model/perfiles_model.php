<?php

class perfiles_model {

    private $DB;
    private $consulta;
    private $perfiles_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_p() {
        $query = mysqli_query($this->DB, "SELECT * FROM perfiles ORDER BY id_perf");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }

        if (!$query) {
            die("Error al consultar Registros (Perfiles)" . $query . "Codigo:  " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_p($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO perfiles VALUES"
                . "('" . $data['id_perf'] . "','" . $data['descripcion'] . "')");

        if (!$sql) {
            require_once 'Controller/perfiles_controller.php';
            $this->perfiles_controller = new perfiles_controller();
            if (mysqli_errno($this->DB) == 1452) {
                $this->perfiles_controller->error_1452();
            } else {
                if (mysqli_errno($this->DB) == 1062) {
                    $this->perfiles_controller->error_1062();
                } else {
                    if (mysqli_errno($this->DB) != 1452 || mysqli_errno($this->DB) != 1062) {
                        die("Error al Guardar (Perfiles)" . " " . $query . " " . "Codigo:  " . mysqli_errno($this->DB));
                    }
                }
            }
        } else {
            header('Location: index.php?m=per');
        }
    }

    function actualizar_p($data) {
        $sql = mysqli_query($this->DB, "UPDATE perfiles SET "
                . "descripcion = '" . $data['descripcion'] . "' "
                . "WHERE id_perf = '" . $data["id_perf"] . "'");
        if (!$sql) {
            die("Error al actualizar datos (Perfiles) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_p($id) {
        $actu = mysqli_query($this->DB, "SELECT * FROM perfiles WHERE id_perf = '" . $id . "' ORDER BY id_perf");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar registros (Perfiles)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_p($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM perfiles WHERE id_perf =" . $id);

        if (!$sql) {
            die("Error al Eliminar el registro (Usuario) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

}

?>
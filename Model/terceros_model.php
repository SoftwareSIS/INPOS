<?php

class terceros_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_ter() {
        $query = mysqli_query($this->DB, "SELECT * FROM terceros t "
                . "JOIN ciudades c on t.id_ciudad = c.id_ciudad ORDER BY id_tercero");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }
        if (!$query) {
            die("Error al consultar Registros (Terceros)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }
function guardar_ter($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO terceros VALUES "
                . "('" . $data['id_tercero'] . "', "
                . "'" . $data['nombre'] . "', "
                . "'" . $data['direccion'] . "', "
                . "'" . $data['telefono'] . "', "
                . "'" . $data['correo'] . "', "
                . "'" . $data['id_ciudad'] . "')");

        if (!$sql) {
            require_once 'Controller/terceros_controller.php';
            $this->terceros_controller = new usuarios_controller();
            if (mysqli_errno($this->DB) == 1452) {
                $this->terceros_controller->error();
            } else {
                if (mysqli_errno($this->DB) != 1452) {
                    die("Error al Guardar (Usuarios)" . $sql . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header('Location: index.php?m=ter');
        }
    }

    function actualizar_ter($data) {

            $sql = mysqli_query($this->DB, "UPDATE terceros SET "
                    . "id_tercero = '" . $data['id_tercero'] . "', "
                    . "nombre = '" . $data['nombre'] . "', "
                    . "direccion = '" . $data["direccion"] . "', "
                    . "telefono = '" . $data['telefono'] . "', "
                    . "correo = '" . $data['correo'] . "', "
                    . "id_ciudad = '" . $data['id_ciudad'] . "' "
                    . "WHERE id_tercero = '" . $data["id_tercero"] . "' ");
        
        if (!$sql) {
            echo "Error al Actualizar el Tercero ('" . $data['id_tercero'] . "')" . $sql . "Codigo: " .
            mysqli_errno($this->DB);
        }
    }

    function consulta_ter($id) {
        $actu = mysqli_query($this->DB, "SELECT * FROM terceros t "
                . "INNER JOIN ciudades c on t.id_ciudad = c.id_ciudad WHERE id_tercero = $id");
               
        if (!$actu) {
            echo "Error al Consultar Datos (Form Terceros)" . " " . "Codigo: " . mysqli_errno($this->DB);
        } else {

            while ($filas = mysqli_fetch_array($actu)) {
                $this->consulta[] = $filas;
            }

            if (!$actu) {
                die("Error al consultar Registros (Terceros)" . $actu . "Codigo: " . mysqli_errno($this->DB));
            } else {
                return $this->consulta;
            }
        }
    }

    function eliminar_ter($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM terceros WHERE id_tercero = '" . $id . "'");

        if (!$sql) {
            echo "Error al Eliminar el Tercero ('" . $id . "')" . $sql . "Codigo: " . mysqli_errno($this->DB);
        }
    }

}

?>

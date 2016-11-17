<?php

class usuarios_model {

    private $DB;
    private $consulta;
    private $usuario_controller;
    private $u;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_u() {
        $query = mysqli_query($this->DB, "SELECT id_usu, nombre, apellido, p.descripcion, estado
            FROM usuarios u
            INNER JOIN perfiles p ON u.id_perf = p.id_perf 
            ORDER BY id_usu");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Usuarios)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_u($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO usuarios VALUES "
                . "('" . $data['id_usu'] . "', "
                . "'" . $data['nombre'] . "', "
                . "'" . $data['apellido'] . "', "
                . "'" . $data['clave'] . "', "
                . "'" . $data['id_perf'] . "', "
                . "'" . $data['estado'] . "')");

        if (!$sql) {
            require_once 'Controller/usuarios_controller.php';
            $this->usuario_controller = new usuarios_controller();
            if (mysqli_errno($this->DB) == 1452) {
                $this->usuario_controller->error();
            } else {
                if (mysqli_errno($this->DB) != 1452) {
                    die("Error al Guardar (Usuarios)" . $sql . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header('Location: index.php?m=usu');
        }
    }

    function actualizar_u($data) {

        if ($data['clave'] == "") {
            $sql = mysqli_query($this->DB, "UPDATE usuarios SET "
                    . "nombre = '" . $data['nombre'] . "', "
                    . "apellido = '" . $data['apellido'] . "', "
                    . "id_perf = '" . $data["id_perf"] . "', "
                    . "estado = '" . $data['estado'] . "' "
                    . "WHERE id_usu = '" . $data["id_usu"] . "'");
        } else {
            $sql = mysqli_query($this->DB, "UPDATE usuarios SET "
                    . "nombre = '" . $data['nombre'] . "', "
                    . "apellido = '" . $data['apellido'] . "', "
                    . "clave = '" . $data["clave"] . "', "
                    . "id_perf = '" . $data["id_perf"] . "', "
                    . "estado = '" . $data['estado'] . "' "
                    . "WHERE id_usu = '" . $data["id_usu"] . "'");
        }

        if (!$sql) {
            echo "Error al Actualizar el Usuario ('" . $data['id_usu'] . "')" . $sql . "Codigo: " .
            mysqli_errno($this->DB);
        }
    }

    function consulta_u($id) {
        $actu = mysqli_query($this->DB, "SELECT id_usu, nombre, apellido, p.descripcion, estado, p.id_perf 
            FROM usuarios u
            INNER JOIN perfiles p ON u.id_perf = p.id_perf WHERE id_usu = '" . $id . "'"
                . "ORDER BY id_usu");

        if (!$actu) {
            echo "Error al Consultar Datos (Form Usuarios)" . " " . "Codigo: " . mysqli_errno($this->DB);
        } else {

            while ($filas = mysqli_fetch_array($actu)) {
                $this->consulta[] = $filas;
            }

            if (!$actu) {
                die("Error al consultar Registros (Usuarios)" . $actu . "Codigo: " . mysqli_errno($this->DB));
            } else {
                return $this->consulta;
            }
        }
    }

    function eliminar_u($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM usuarios WHERE id_usu = '" . $id . "'");

        if (!$sql) {
            echo "Error al Eliminar el Usuario ('" . $id . "')" . $sql . "Codigo: " . mysqli_errno($this->DB);
        }
    }

}

?>
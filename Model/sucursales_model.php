<?php

class sucursales_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_suc() {
        $query = mysqli_query($this->DB, "SELECT s.id_sucursal, s.direccion, s.telefono, s.estado, "
                . "c.descripcion AS Ciudad, e.nombre AS Empresa "
                . "FROM sucursales s "
                . "INNER JOIN ciudades c ON s.id_ciudad = c.id_ciudad "
                . "INNER JOIN empresas e ON s.empresa = e.id_empresa "
                . "ORDER BY s.id_sucursal");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Sucusales)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_suc($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO sucursales VALUES "
                . "('" . $data['id_sucursal'] . "', "
                . "'" . $data['direccion'] . "', "
                . "'" . $data['telefono'] . "', "
                . "'" . $data['estado'] . "', "
                . "'" . $data['id_ciudad'] . "', "
                . "'" . $data['id_empresa'] . "')");

        if (!$sql) {
            require_once 'Controller/sucursales_controller.php';
            $this->sucursales_controller = new sucursales_controller();
            if (mysqli_errno($this->DB) == 1452) {
                $this->sucursales_controller->error();
            } else {
                if (mysqli_errno($this->DB) != 1452) {
                    die("Error al Guardar (Sucursales)" . $sql . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header('Location: index.php?m=suc');
        }
    }

    function actualizar_suc($data) {

        $sql = mysqli_query($this->DB, "UPDATE sucursales SET "
                . "direccion = '" . $data['direccion'] . "', "
                . "telefono = '" . $data["telefono"] . "', "
                . "estado = '" . $data['estado'] . "', "
                . "id_ciudad = '" . $data['id_ciudad'] . "', "
                . "empresa = '" . $data['id_empresa'] . "' "
                . "WHERE id_sucursal = '" . $data["id_sucursal"] . "' ");

        if (!$sql) {
            echo "Error al Actualizar la Sucursal ('" . $data['id_sucursal'] . "')" . $sql . "Codigo: " .
            mysqli_errno($this->DB);
        }
    }

    function consulta_suc($id) {
        $actu = mysqli_query($this->DB, "SELECT * FROM sucursales WHERE id_sucursal = '" . $id . "'");

        if (!$actu) {
            echo "Error al Consultar Datos (Form Sucursales)" . " " . "Codigo: " . mysqli_errno($this->DB);
        } else {

            while ($filas = mysqli_fetch_array($actu)) {
                $this->consulta[] = $filas;
            }

            if (!$actu) {
                die("Error al consultar Registros (Sucursales)" . $actu . "Codigo: " . mysqli_errno($this->DB));
            } else {
                return $this->consulta;
            }
        }
    }

    function eliminar_suc($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM sucursales WHERE id_sucursal = '" . $id . "'");

        if (!$sql) {
            echo "Error al Eliminar la Sucursal ('" . $id . "')" . $sql . "Codigo: " . mysqli_errno($this->DB);
        }
    }

}

?>

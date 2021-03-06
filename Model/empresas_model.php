<?php

class empresas_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_empr() {
        $query = mysqli_query($this->DB, "SELECT * from empresas");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Empresa)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_empr($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO empresas VALUES"
                . "('" . $data['id_empresa'] . "','" . $data['nombre'] . "','" . $data['telefono'] . "','" . $data['email'] . "','" . $data['direccion'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Empresa)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function actualizar_empr($data) {
        $sql = mysqli_query($this->DB, "UPDATE empresas SET "
                . "id_empresa = '" . $data['id_empresa'] . "', "
                . "nombre = '" . $data['nombre'] . "', "
                . "telefono = '" . $data['telefono'] . "', "
                . "email = '" . $data['email'] . "', "
                . "direccion = '" . $data['direccion'] . "' "
                . "WHERE id_empresa = '" . $data["id_empresa"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Empresa) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        }
    }

    function consulta_empr($id) {
        $actu = mysqli_query($this->DB, "SELECT * FROM empresas WHERE id_empresa =" . $id);

        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Empresa)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_empr($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM empresas WHERE id_empresa = '" . $id . "'");

        if (!$sql) {
            echo "Error al Eliminar la Empresa ('" . $id . "')" . $sql . "Codigo: " . mysqli_errno($this->DB);
        }
    }
}

?>
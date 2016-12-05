<?php

class documentos_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_docu() {
        $query = mysqli_query($this->DB, "SELECT * FROM documentos ORDER BY id_documento");

        while ($filas = mysqli_fetch_array($query)) {
            $this->consulta[] = $filas;
        }

        if (!$query) {
            die("Error al consultar Registros (Documentos)" . $query . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function guardar_docu($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO documentos VALUES"
                . "('" . $data['id_documento'] . "','" . $data['descripcion'] . "', "
                . "'" . $data['consecutivo'] . "', '" . $data['tipo'] . "')");

        if (!$sql) {
            die("Error al insertar datos (Documentos)" . $sql . "Codigo: " . mysqli_errno($this->DB));
        } else {
            header("Location: index.php?m=docu");
        }
    }

    function actualizar_docu($data) {
        $sql = mysqli_query($this->DB, "UPDATE documentos SET "
                . "id_documento = '" . $data['id_documento'] . "', "
                . "descripcion = '" . $data['descripcion'] . "', "
                . "consecutivo = '" . $data['consecutivo'] . "', "
                . "tipo = '" . $data['tipo'] . "' "
                . "WHERE id_documento = '" . $data["id_documento"] . "'");

        if (!$sql) {
            die("Error al actualizar datos (Documentos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        } else {
            header("Location: index.php?m=docu");
        }
    }

    function consulta_docu($id) {
        $actu = $this->DB->query("SELECT * FROM documentos WHERE id_documento = '" . $id . "' ORDER BY id_documento");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }

        if (!$actu) {
            die("Error al consultar Registros (Documentos)" . $actu . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_docu($id) {
        $sql = mysqli_query($this->DB, "DELETE FROM documentos WHERE id_documento = '" . $id . "'");

        if (!$sql) {
            die("Error al Eliminar el registro (Documentos) " . $sql . "Codigo: " . mysqli_errno($this->DB));
        } else {
            header("Location: index.php?m=docu");
        }
    }

}

?>
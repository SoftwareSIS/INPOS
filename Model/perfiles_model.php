<?php

class perfiles_model {

    private $DB;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_p() {
        $query = $this->DB->query("SELECT * FROM perfiles");
        while ($fila = mysqli_fetch_array($query)) {
            $this->consulta[] = $fila;
        }
        return $this->consulta;
    }
    
     function guardar_p($data) {
        $sql = "INSERT INTO perfiles VALUES"
                . "('" . $data['id_perf'] . "','" . $data['descripcion'] . "')";
        mysqli_query($this->DB, $sql) or die("Error al insertar datos (Perfiles)\n" . mysqli_error($this->DB));
    }

    function actualizar_p($data) {
        $sql = "UPDATE perfiles SET "
                . "descripcion = '" . $data['descripcion'] . "', "
                . "WHERE id_perf = '" . $data["id_perf"] . "'";
        mysqli_query($this->DB, $sql) or die("Error al actualizar datos (Perfiles) " . $sql . mysqli_error($this->DB));
    }

    function consulta_p($id) {
        $actu = $this->DB->query("SELECT * from perfiles");
        while ($filas = mysqli_fetch_array($actu)) {
            $this->consulta[] = $filas;
        }
        return $this->consulta;
    }

    function eliminar_p($id) {
        $sql = $this->DB->query("DELETE FROM perfiles WHERE id_perf =" . $id);
        mysqli_query($this->DB, $sql) or die("Error al Eliminar el registro (Usuario) " . $sql . mysqli_error($this->DB));
    }

}

?>
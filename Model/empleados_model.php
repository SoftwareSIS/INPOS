<?php

class empleados_model {

    private $DB;
    private $consulta;
    private $empleados_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_emple() {
        $sql = mysqli_query($this->DB, "SELECT e.id_empleado AS ID, c.descripcion AS Cargo, 
            e.fecha_ingreso AS Fecha_Ingreso, e.fecha_retiro AS Fecha_Retiro, e.salario AS Salario, 
            s.descripcion AS Sucursal 
            FROM empleados e 
            INNER JOIN cargos c ON e.id_cargo = c.id_cargo 
            INNER JOIN sucursales s ON e.sucursal = s.id_sucursal 
            ORDER BY e.id_empleado");

        while ($filas = mysqli_fetch_array($sql)) {
            $this->consulta[] = $filas;
        }

        if (!$sql) {
            die("Error al consultar Registros (Empleados)" . " " . $slq . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

}

?>

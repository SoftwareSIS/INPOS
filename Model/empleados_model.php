<?php

require_once 'Controller/empleados_controller.php';

class empleados_model {

    private $DB;
    private $empleados_controller;
    private $consulta;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consulta = array();
    }

    function get_emple() {

        $sql = mysqli_query($this->DB, "SELECT 
            t.nombre AS Nombre, 
            c.descripcion AS Cargo, 
            e.fecha_ingreso AS Fecha_Ingreso, 
            e.fecha_retiro AS Fecha_Retiro, 
            e.salario AS Salario, 
            s.direccion AS Sucursal 
            FROM empleados e 
            INNER JOIN terceros t ON e.id_empleado = t.id_tercero 
            INNER JOIN cargos c ON e.id_cargo = c.id_cargo 
            INNER JOIN sucursales s ON e.sucursal = s.id_sucursal 
            ORDER BY t.nombre");

        while ($filas = mysqli_fetch_array($sql)) {
            $this->consulta[] = $filas;
        }

        if (!$sql) {
            die("Error al consultar Registros (Empleados)" . $sql . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function crear_emple($data) {
        $sql = mysqli_query($this->DB, "INSERT INTO empleados VALUES("
                . "'" . $data['id_empleado'] . "', "
                . "'" . $data['id_cargo'] . "', "
                . "'" . $data['fecha_ingreso'] . "', "
                . "'" . $data['fecha_retiro'] . "', "
                . "'" . $data['salario'] . "', "
                . "'" . $data['sucursal'] . "')");

        if (!$sql) {
            die("Error al guardar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            header('Location: index.php?m=emple');
        }
    }

    function actualizar_emple($id) {
        $sql = mysqli_query($this->DB, "SELECT * FROM empleados WHERE id_empleado = '" . $id . "'");

        if (!$sql) {
            die("Error al Consultar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            header('Location: index.php?m=emple');
        }
    }

    function eliminar_emple() {
        
    }

    function crearEMP() {
        
    }

    function actualizarEMP($data) {
        $sql = mysqli_query($this->DB, "UPDATE empleados SET "
                . "id_cargo = '" . $data['id_cargo'] . "', "
                . "fecha_ingreso = '" . $data['fecha_ingreso'] . "', "
                . "fecha_retiro = '" . $data['fecha_retiro'] . "', "
                . "salario = '" . $data['salario'] . "', "
                . "sucursal = '" . $data['sucursal'] . "' "
                . "WHERE id_empleado = '" . $data['id_empleado'] . "'");

        if (!$sql) {
            die("Error al Actualizar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            header('Location: index.php?m=emple');
        }
    }

    function eliminarEMP() {
        
    }

}

?>
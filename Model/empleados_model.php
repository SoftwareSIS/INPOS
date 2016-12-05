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
            t.id_tercero AS Documento,  
            t.nombre AS Nombre, 
            c.descripcion AS Cargo, 
            e.fecha_ingreso AS Fecha_Ingreso, 
            e.fecha_retiro AS Fecha_Retiro, 
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
                . "'" . $data['sucursal'] . "')");

        if (!$sql) {
            require_once 'Controller/empleados_controller.php';
            $this->empleados_controller = new empleados_controller();
            if (mysqli_errno($this->DB) == 1452) {
                $this->empleados_controller->error_1452();
            } else {
                if (mysqli_errno($this->DB) == 1062) {
                    $this->empleados_controller->error_1062();
                } else {
                    die("Error al Guardar (Usuarios)" . $sql . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header('Location: index.php?m=emple');
        }
    }

    function actualizar_emple($id) {
        $sql = mysqli_query($this->DB, "SELECT * FROM empleados WHERE id_empleado = '" . $id . "'");

        while ($filas = mysqli_fetch_array($sql)) {
            $this->consulta[] = $filas;
        }

        if (!$sql) {
            die("Error al Consultar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function eliminar_emple($id) {
        $sql = mysqli_query($this->DB, "SELECT t.id_tercero AS Documento, t.nombre AS Nombre, c.descripcion AS Cargo "
                . "FROM empleados e "
                . "INNER JOIN terceros t ON e.id_empleado = t.id_tercero "
                . "INNER JOIN cargos c ON e.id_cargo = c.id_cargo "
                . "WHERE id_empleado = '" . $id . "'");

        while ($filas = mysqli_fetch_array($sql)) {
            $this->consulta[] = $filas;
        }

        if (!$sql) {
            die("Error al Consultar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            return $this->consulta;
        }
    }

    function actualizarEMP($data) {
        $sql = mysqli_query($this->DB, "UPDATE empleados SET "
                . "id_cargo = '" . $data['id_cargo'] . "', "
                . "fecha_ingreso = '" . $data['fecha_ingreso'] . "', "
                . "fecha_retiro = '" . $data['fecha_retiro'] . "', "
                . "sucursal = '" . $data['sucursal'] . "' "
                . "WHERE id_empleado = '" . $data['id_empleado'] . "'");

        if (!$sql) {
            die("Error al Actualizar Registros (Empleado)" . $sql . " " . "Codigo: " . mysqli_error($this->DB));
        } else {
            header('Location: index.php?m=emple');
        }
    }

    function eliminarEMP($data) {
        $eli = mysqli_query($this->DB, "DELETE FROM empleados WHERE id_empleado = '" . $data['id_empleado'] . "'");

        if (!$eli) {
            if (mysqli_errno($this->DB) == 1451) {
                require_once 'Controller/empleados_controller.php';
                $this->empleados_controller = new empleados_controller();
                $this->empleados_controller->error_1451();
            } else {
                if (mysqli_errno($this->DB) != 1451) {
                    die("Error al eliminar Registros (Empleados)" . $eli . " " . "Codigo: " . mysqli_errno($this->DB));
                }
            }
        } else {
            header('Location:index.php?m=emple');
        }
    }

}

?>
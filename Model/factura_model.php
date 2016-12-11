<?php

require_once 'Controller/factura_controller.php';

class factura_model {

    private $DB;
    private $consultaC;
    private $consultaD;
    private $factura_controller;

    function __construct() {
        $this->DB = conexion::conex();
        $this->consultaC = array();
        $this->consultaD = array();
    }

    function get_fac() {
        $det = mysqli_query($this->DB, "SELECT f.id_factura, f.fecha_fact, f.id_cliente, 
            t.nombre, pf.cantidad,pf.descuento,pf.iva,pf.valor,pf.item,pf.valor_total 
            FROM facturas f 
            INNER JOIN terceros t ON f.id_empleado = t.id_tercero 
            INNER JOIN productos_facturas pf ON f.id_factura = pf.id_factura");

        while ($filas = mysqli_fetch_array($det)) {

            $this->consultaD[] = $filas;
        }

        if (!$det) {
            die("Error al consultar Registros (Factura Detalle)" . $det . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consultaD;
        }
    }

    function crear_fac() {
        
    }

}
?>


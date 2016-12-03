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

    function get_facC() {
        $cab = mysqli_query($this->DB, "SELECT * FROM facturas ORDER BY id_factura");

        while ($filas = mysqli_fetch_array($cab)) {

            $this->consultaC[] = $filas;
        }

        if (!$cab) {
            die("Error al consultar Registros (Factura Cabecera)" . $cab . " " . "Codigo: " . mysqli_errno($this->DB));
        } else {
            return $this->consultaC;
        }
    }

    function get_facD() {
        $det = mysqli_query($this->DB, "SELECT "
                . "f.id_factura, "
                . "p.descripsion AS Producto, "
                . "f.cantidad, "
                . "f.descuento, "
                . "f.iva, "
                . "f.valor, "
                . "f.item, "
                . "f.valor_total "
                . "INNER JOIN productos p ON f.id_prod = p.id_prod");

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


<?php

require_once 'Model/movimientos_model.php';
require_once 'Model/sucursales_model.php';
require_once 'Model/documentos_model.php';
require_once 'Model/productos_model.php';

class movimientos_controller {

    private $movimientos_model;
    private $sucursales_model;
    private $documentos_model;
    private $productos_model;

    function __construct() {
        $this->movimientos_model = new movimientos_model();
        $this->sucursales_model = new sucursales_model();
        $this->documentos_model = new documentos_model();
        $this->productos_model = new productos_model();
    }

    function crearMOV() {
        $suc = $this->sucursales_model->get_suc();
        $docu = $this->documentos_model->get_docu();
        $prod = $this->productos_model->get_pro();
        require_once 'View/default/header.php';
        require_once 'View/movimientos/crear_mov.php';
        require_once 'View/default/footer.php';
    }

    function guardarMOV() {
        $data['fecha_movimiento'] = $_REQUEST['txtFechaM'];
        $data['id_sucursal'] = $_REQUEST['cbSucursal'];
        $data['id_documento'] = $_REQUEST['cbDocumento'];
        $data['consecutivo'] = $_REQUEST['txtConsecutivo'];
        $data['id_prod'] = $_REQUEST['cbProducto'];
        $data['cantidad'] = $_REQUEST['txtCantidad'];

        $this->movimientos_model->guardarMOV($data);
    }

}

?>
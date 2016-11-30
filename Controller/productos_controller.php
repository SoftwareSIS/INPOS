<?php

require_once 'Model/productos_model.php';
require_once 'Model/proveedores_model.php';

class productos_controller {

    private $productos_model;
    private $proveedores_model;

    function __construct() {
        $this->productos_model = new productos_model();
        $this->proveedores_model = new proveedores_model();
    }

    function index_pro() {
        $query = $this->productos_model->get_pro();

        require_once 'View/default/header.php';
        require_once 'View/productos/index_pro.php';
        require_once 'View/default/footer.php';
    }

    function crear_pro() {
        $per = $this->productos_model->get_pro();
        $prov = $this->proveedores_model->get_pr();
        require_once 'View/default/header.php';
        require_once 'View/productos/crear_pro.php';
        require_once 'View/default/footer.php';
    }

    function actualizar_pro($id) {
        $query = $this->productos_model->consulta_pro($id);
        $prov = $this->proveedores_model->get_pr();
        require_once 'View/default/header.php';
        require_once 'View/productos/actualizar_pro.php';
        require_once 'View/default/footer.php';
    }

    function eliminar_pro($id) {
        $query = $this->productos_model->consulta_pro($id);
        require_once 'View/default/header.php';
        require_once 'View/productos/eliminar_pro.php';
        require_once 'View/default/footer.php';
    }

    function guardarPRO() {
        $data['id_prod'] = $_REQUEST['txtIdProducto'];
        $data['id_proveedor'] = $_REQUEST['cbProveedor'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        $data['valor'] = $_REQUEST['txtValor'];
        $data['peso'] = $_REQUEST['txtPeso'];
        $data['dimension'] = $_REQUEST['txtDimensiones'];
        $data['color'] = $_REQUEST['txtColor'];
        $data['accesorios'] = $_REQUEST['txtAccesorios'];
        $data['garantia'] = $_REQUEST['txtGarantia'];
        $data['material'] = $_REQUEST['txtMateriales'];
        $data['imagen'] = $imagen = addslashes(file_get_contents($_FILES['txtImagen']['tmp_name']));

        $this->productos_model->guardar_pro($data);
        $this->index_pro();
    }

    function actualizarPRO() {
        $data['id_prod'] = $_REQUEST['txtIdProducto'];
        $data['id_proveedor'] = $_REQUEST['cbProveedor'];
        $data['descripcion'] = $_REQUEST['txtDescripcion'];
        $data['valor'] = $_REQUEST['txtValor'];
        $data['peso'] = $_REQUEST['txtPeso'];
        $data['dimension'] = $_REQUEST['txtDimensiones'];
        $data['color'] = $_REQUEST['txtColor'];
        $data['accesorios'] = $_REQUEST['txtAccesorios'];
        $data['garantia'] = $_REQUEST['txtGarantia'];
        $data['material'] = $_REQUEST['txtMateriales'];
        $data['imagen'] = $img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        $this->productos_model->actualizar_pro($data);
        $this->index_pro();
    }

    function eliminarPRO() {
        $id = $_REQUEST['txtIdProducto'];
        $this->productos_model->eliminar_pro($id);
        $this->index_pro();
    }

    function detalle_pro($det) {
        $detalle = $this->productos_model->consulta_pro($det);
        require_once 'View/default/header.php';
        require_once 'View/productos/detalles_pro.php';
        require_once 'View/default/footer.php';
    }

}

?>
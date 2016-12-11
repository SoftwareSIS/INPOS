<?php
if (!isset($_REQUEST['txtFac'])) {
    $datos = array();
} else {
    $datos = unserialize(stripslashes($_REQUEST['txtFac']));
    array_push($datos, array(
        'Id_factura' => $_REQUEST['txtId_fac'],
        'Fecha' => $_REQUEST['txtFecha'],
        'Cliente' => $_REQUEST['cbCliente'],
        'Empleado' => $_REQUEST['cbEmpleado'],
        'Producto' => $_REQUEST['txtDes_prod'],
        'Cantidad' => $_REQUEST['txtCan'],
        'Item' => $_REQUEST['txtItem'],
        'Id_pro' => $_REQUEST['txtId_prod'],
        'Descuento' => $_REQUEST['txtDescuento'],
        'Iva' => $_REQUEST['txtIva']
    ));
}
?>
<script>
    function agregar() {
        document.frm.action = "index.php?m=fac";
        document.frm.submit();
    }

    function capturar() {
        document.frm.action = "index.php?m=fac&c=capturarFAC";
        document.frm.submit();
    }
</script>
<form name="frm" id="frm" action="" method="post">
    <div class="actualizar">
        <div class="container">
            <div class="cabfactura">
                <table>
                    <thead>
                        <tr>
                            <th><label>ID Factura:</label></th><td><input type="text" class="form-control" name="txtId_fac"></td>
                            <th><label>Fecha:</label></th><td><input type="text" class="form-control" name="txtFecha"></td>
                        </tr>
                        <tr>
                            <th><label>Cliente:</label></th>
                            <td>
                                <select class="form-control" name="cbCliente">
                                    <option>Seleccione Una Opcion...</option>
                                </select>
                            </td>
                            <th>
                                <label>Empleado:</label>
                            </th>
                            <td>
                                <select  class="form-control" name="cbEmpleado">
                                    <option>Seleccione Una Opcion...</option>
                                </select>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="detfactura">
                <input type="hidden" name="txtFac" value="<?php echo serialize($datos) ?>">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <label>Producto:</label>        
                            </th>
                            <td><input type="text" class="form-control" name="txtProductos"></td>
                            <th>
                                <label>Cantidad:</label>        
                            </th>
                            <td><input type="text" class="form-control" name="txtCantidad"></td>
                        </tr>
                        <tr>
                            <td><button type="" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" onclick="">Registrar Producto</button></td>
                        </tr>
                    </thead>
                </table>
                <table>
                    <thead>
                        <tr>
                            <td>Item:</td>
                            <td>ID Producto:</td>
                            <td>Producto:</td>
                            <td>Cantidad:</td>
                            <td>Descuento:</td>
                            <td>Iva:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="txtItem" 
                                       value="" readonly="readonly" >
                            </td>
                            <td>
                                <input type="text" class="form-control" name="txtId_prod" 
                                       value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="txtDes_prod" 
                                       value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="txtCan" 
                                       value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" name="txtDescuento" 
                                       value="">
                            </td>
                            <td>
                                <input type="text" class="form-control"   name="txtIva" 
                                       value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="totalfactura">
                <table>
                    <thead>
                        <tr>
                            <th>SubTotal:</th>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Iva:</th>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <th>Total Neto:</th>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                    </thead>
                    <tr>
                        <td><button type="" class="btn btn-primary" id="btnRegistrar" name="btnRegistrar" onclick="">Facturar Productos</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</form>
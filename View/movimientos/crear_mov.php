<?php
if (!isset($_REQUEST['txtProducto'])) {
    $datos = array();
} else {
    $datos = unserialize(stripslashes($_REQUEST['txtProducto']));
    array_push($datos, array(
        'Fecha' => $_REQUEST['txtFechaM'],
        'Sucursal' => $_REQUEST['cbSucursal'],
        'Documento' => $_REQUEST['cbDocumento'],
        'Consecutivo' => $_REQUEST['txtConsecutivo'],
        'Producto' => $_REQUEST['cbProducto'],
        'Cantidad' => $_REQUEST['txtCantidad']));
}
?>
<script>
    function agregar() {
        document.frm.action = "index.php?m=mov";
        document.frm.submit();
    }

    function capturar() {
        document.frm.action = "index.php?m=mov&c=capturarMOV";
        document.frm.submit();
    }
</script>
<form name="frm" id="frm" action="" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Fecha De Movimiento:</label></th>
                    <td><input type='text' id="txtFechaM" name="txtFechaM" class="form-control " 
                               placeholder="Ingrese Una Fecha" value="<?php echo date("Y-m-d"); ?>" readonly="readonly">
                        <span class="help-block"></span>
                    </td>

                </tr>
                <tr>
                    <th><label for="nom">Sucursal:</label></th>
                    <td>
                        <select class="form-control" name="cbSucursal">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($suc as $sucursal) : ?>
                                <option value="<?php echo $sucursal[0]; ?>"><?php echo $sucursal[1]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom">Documento:</label></th>
                    <td>
                        <select class="form-control" name="cbDocumento">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($docu as $documento) : ?>
                                <option value="<?php echo $documento[0]; ?>"><?php echo $documento[1]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="doc">Consecutivo:</label></th>
                    <td><input type="number" name="txtConsecutivo" class="form-control" placeholder="Consecutivo"></td>
                </tr>
                <tr>
                    <th><label for="nom">Producto:</label></th>
                    <td>
                        <select class="form-control" name="cbProducto">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($prod as $producto) : ?>
                                <option value="<?php echo $producto[2]; ?>"><?php echo $producto[2]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="can">Cantidad:</label></th>
                    <td><input type="number" name="txtCantidad" class="form-control" placeholder="Cantidad"></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary" id="btnAgregar" name="btnAgregar" onclick="agregar();">Agregar Movimiento</button>
            <br>
            <hr>
            <div class="form-group">
                <input type="hidden" class="form-control" style="width: 500px;" name="txtProducto" 
                       value='<?php echo serialize($datos) ?>'>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <td>Producto:</td>
                            <td>Cantidad:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $valor) : ?>
                            <tr>
                                <td><input type="text" class="form-control" style="width: 500px;" name="txtCod" 
                                           value="<?php echo $valor['Producto']; ?>" readonly="readonly"></td>
                                <td><input type="text" class="form-control" style="width: 50px;"  name="txtCan" 
                                           value='<?php echo $valor['Cantidad']; ?>'></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button type="" class="btn btn-primary" id="btnAceptar" name="btnAceptar" onclick="capturar();">Guardar Movimiento</button>
                <button type="button" class="btn btn-danger" onclick="location.href = 'index.php?m=mov'">Cancelar Movimiento</button>
            </div>
        </div>
    </div>
</form>
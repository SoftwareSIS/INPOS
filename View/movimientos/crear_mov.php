<form action="index.php?m=mov&c=guardarMOV" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Fecha De Movimiento:</label></th>
                    <td><input type='text' id="txtFechaM" name="txtFechaM" class="form-control " 
                               placeholder="Ingrese Una Fecha" value="<?php echo date("Y-m-d"); ?>">
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
                                <option value="<?php echo $producto[0]; ?>"><?php echo $producto[2]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="can">Cantidad:</label></th>
                    <td><input type="number" name="txtCantidad" class="form-control" placeholder="Cantidad"></td>
                </tr>
            </table>
            <button type="button" class="btn btn-primary" id="btnAgregar" name="btnAgregar">Agregar</button>
            <br>
            <hr>
            <div>
                <table>
                    <tr>
                        <th>Producto:</th>
                        <th>Cantidad:</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" style="width: 500px;"></td>
                        <td><input type="text" class="form-control" style="width: 50px;"></td>
                    </tr>
                </table>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php'">Cancelar</button>
    </div>
</form>   
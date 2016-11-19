<form action="index.php?m=prod&c=actualizarPRO" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Id Producto:</label></th>
                    <td><input type='text' name="txtIdProducto" class="form-control " value="<?php echo $dato[0]; ?>" placeholder="Id Producto"></td>
                </tr>
                <tr>
                    <th><label for="prov">Nombre Proveedor:</label></th>
                    <td>
                        <select class="form-control" id="cbProveedor" name="cbProveedor" onkeypress="validarCB('cbProveedor', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <?php foreach ($prov as $proveedor): ?>
                                <option <?php echo ($proveedor[0] == $dato[1]) ? ' selected="selected"' : ''; ?> value="<?php echo $proveedor["id_nit"]; ?>"><?php echo $proveedor["nombre"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" value="<?php echo $dato[2]; ?>" placeholder="Descripcion"></td>
                </tr>
                <tr>
                    <th><label for="val">Valor:</label></th>
                    <td><input type='text' name="txtValor" class="form-control" value="<?php echo $dato[3]; ?>" placeholder="Valor"></td>
                </tr>
                <tr>
                    <th><label for="ima">Imagen:</label></th>
                    <td><input type='text' name="txtImagen" class="form-control" value="<?php echo $dato[4]; ?>" placeholder="Imagen"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prod'">Cancelar</button>
    </div>
</form>
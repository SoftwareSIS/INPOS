<form action="index.php?m=prod&c=actualizarPRO" method="post" enctype="multipart/form-data">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $pro) : endforeach; ?>
                <tr>
                    <th><label for="doc">ID Producto:</label></th>
                    <td><input type='text' name="txtIdProducto" class="form-control " placeholder="Id_Producto"
                               value="<?php echo $pro[0]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="prov">Nombre Proveedor:</label></th>
                    <td>
                        <select class="form-control" id="cbProveedor" name="cbProveedor" onkeypress="validarCB('cbProveedor', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <?php foreach ($prov as $proveedor): ?>
                                <option <?php echo ($proveedor[0] == $pro[1]) ? ' selected="selected"' : ''; ?> value="<?php echo $proveedor["id_nit"]; ?>"><?php echo $proveedor["nombre"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion"
                               value="<?php echo $pro[2]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="val">Valor:</label></th>
                    <td><input type='text' name="txtValor" class="form-control" placeholder="Valor"
                               value="<?php echo $pro[3]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="pes">Peso:</label></th>
                    <td><input type="text" name="txtPeso" class="form-control" placeholder="Peso"
                               value="<?php echo $pro[5]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="dim">Dimensiones:</label></th>
                    <td>
                        <textarea name="txtDimensiones" placeholder="Dimensiones" class="form-control"><?php echo $pro[6]; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="color">Color:</label></th>
                    <td><input type="text" name="txtColor" placeholder="Color" class="form-control"
                               value="<?php echo $pro[7]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="acc">Accesorios:</label></th>
                    <td>
                        <textarea name="txtAccesorios" placeholder="Accesorios" class="form-control"><?php echo $pro[8]; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="ga">Garantia:</label></th>
                    <td><input type="text" name="txtGarantia" name="txtGarantia" placeholder="Garantia" class="form-control"
                               value="<?php echo $pro[9]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="ma">Materiales:</label></th>
                    <td>
                        <textarea name="txtMateriales" placeholder="Materiales" class="form-control"><?php echo $pro[10]; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="im">Imagen:</label></th>
                    <td><img src="data:image/*;base64,<?php echo base64_encode($pro[4]); ?>" width="200px" height="150px"></td>
                </tr>
                <tr>
                    <th><label for="ima">Seleccion De Imagen:</label></th>
                    <td><input type="file" name="imagen" id="imagen" accept="image/*" value=""></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Actualizar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prod'">Cancelar</button>
        <br>
        <hr>
    </div>
</form>
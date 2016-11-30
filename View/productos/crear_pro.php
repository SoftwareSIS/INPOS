<form action="index.php?m=prod&c=guardarPRO" method="POST" enctype="multipart/form-data">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">ID Producto:</label></th>
                    <td><input type='text' name="txtIdProducto" class="form-control " placeholder="Id_Producto"></td>
                </tr>
                <tr>
                    <th><label for="prov">Nombre Proveedor:</label></th>
                    <td>
                        <select class="form-control" name="cbProveedor" id="combo" onkeydown="validarCB('combo', 'Campo Sin Seleccionar')">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($prov as $proveedor): ?>
                                <option value="<?php echo $proveedor["id_nit"]; ?>"><?php echo $proveedor["nombre"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion"></td>
                </tr>
                <tr>
                    <th><label for="val">Valor:</label></th>
                    <td><input type='text' name="txtValor" class="form-control" placeholder="Valor"></td>
                </tr>
                <tr>
                    <th><label for="pes">Peso:</label></th>
                    <td><input type="text" name="txtPeso" class="form-control" placeholder="Peso"></td>
                </tr>
                <tr>
                    <th><label for="dim">Dimensiones:</label></th>
                    <td><textarea name="txtDimensiones" placeholder="Dimensiones" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th><label for="color">Color:</label></th>
                    <td><input type="text" name="txtColor" placeholder="Color" class="form-control"></td>
                </tr>
                <tr>
                    <th><label for="acc">Accesorios:</label></th>
                    <td><textarea name="txtAccesorios" placeholder="Accesorios" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <th><label for="ga">Garantia:</label></th>
                    <td><input type="text" name="txtGarantia" name="txtGarantia" placeholder="Garantia" class="form-control"></td>
                </tr>
                <tr>
                    <th><label for="ma">Materiales:</label></th>
                    <td><textarea name="txtMateriales" placeholder="Materiales" class="form-control"></textarea></td></td>
                </tr>
                <tr>
                    <th><label for="ima">Imagen:</label></th>
                    <td><input type="file" id="txtImagen" name="txtImagen" accept="image/*"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prod'">Cancelar</button>
        <br>
        <hr>
    </div>
</form>
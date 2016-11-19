<form action="index.php?m=prod&c=guardarPRO" method="post">
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
                    <th><label for="ima">Imagen:</label></th>
                    <td><input type='text' name="txtImagen" class="form-control" placeholder="Imagen"></td>
                </tr>
                
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prod'">Cancelar</button>
    </div>
</form>   

<!--<tr>
                 <select class="form-control" name="cbProveedor">
                    <option>Seleccione Una Opcion...</option>
                    <?php foreach ($pro as $prove): endforeach; ?>
                    <option value="<?php echo $prove["id_nit"]; ?>"><?php echo $prove[""]; ?></option>
                </select>

                </tr>
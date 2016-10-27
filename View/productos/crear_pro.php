<form action="index.php?m=prod&c=guardarPRO" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">ID Producto:</label></th>
                    <td><input type='text' name="txtIdProducto" class="form-control " placeholder="Ingrese Nit"></td>
                </tr>
                <tr>
                    <th><label for="fac">ID Proveedor:</label></th>
                    <td><input type='text' name="txtIdProveedor" class="form-control" placeholder="Factura"></td>
                </tr>
                <tr>
                <select class="form-control" name="cbProveedor">
                    <option>Seleccione Una Opcion...</option>
                    <?php foreach ($pro as $prove): endforeach; ?>
                    <option value="<?php echo $prove["id_nit"]; ?>"><?php echo $prove[""]; ?></option>
                </select>

                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prov'">Cancelar</button>
    </div>
</form>   
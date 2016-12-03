<form action="index.php?m=suc&c=guardarSUC" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id Sucursal:</label></th>
                    <td><input type='text' name="txtID" class="form-control " placeholder="Ingrese su ID" 
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="nom">Direccion:</label></th>
                    <td><input type='text' name="txtDireccion" class="form-control" placeholder="Ingrese la Direccion" required></td>
                </tr>
                <tr>
                    <th><label for="nom">Telefono:</label></th>
                    <td><input type='text' name="txtTelefono" class="form-control" placeholder="Ingrese el Telefono"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Estado:</label></th>
                    <td><input type='text' name="txtEstado" class="form-control" placeholder="Ingrese el Estado"  required></td>
                </tr>
                 <tr>
                    <th><label for="nom">Ciudad:</label></th>
                    <td>
                        <select class="form-control" name="cbCiudad" required>
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($ciu as $ciudades): ?>
                                <option value="<?php echo $ciudades["id_ciudad"]; ?>"><?php echo $ciudades["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom">Empresa:</label></th>
                    <td>
                        <select class="form-control" name="cbEmpresa" required>
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($empr as $empresas): ?>
                                <option value="<?php echo $empresas["id_empresa"]; ?>"><?php echo $empresas["nombre"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=suc'">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
    </div>
</form>  
<form action="index.php?m=suc&c=actualizarSUC" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Id Sucursal:</label></th>
                    <td><input type='text' name="txtID" class="form-control " value="<?php echo $dato[0]; ?>"placeholder="Ingrese su ID" 
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="nom">Direccion:</label></th>
                    <td><input type='text' name="txtDireccion" class="form-control" value="<?php echo $dato[1]; ?>"placeholder="Ingrese el nombre" required></td>
                </tr>
                <tr>
                    <th><label for="nom">Telefono:</label></th>
                    <td><input type='text' name="txtTelefono" class="form-control" value="<?php echo $dato[2]; ?>"placeholder="Ingrese la direccion"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Estado:</label></th>
                    <td><input type='text' name="txtEstado" class="form-control" value="<?php echo $dato[3]; ?>"placeholder="Ingrese el telefono"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Ciudad:</label></th>
                    <td>
                        <select class="form-control" id="cbCiudad" name="cbCiudad" onkeypress="validarCB('cbCiudad', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <?php foreach ($ciu as $ciudades): ?>
                                <option <?php echo ($ciudades[0] == $dato[4]) ? ' selected="selected"' : ''; ?> value="<?php echo $ciudades["id_ciudad"]; ?>"><?php echo $ciudades["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom">Empresa:</label></th>
                    <td>
                        <select class="form-control" id="cbEmpresa" name="cbEmpresa" onkeypress="validarCB('cbEmpresa', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <?php foreach ($empr as $empresas): ?>
                                <option <?php echo ($empresas[0] == $dato[5]) ? ' selected="selected"' : ''; ?> value="<?php echo $empresas["id_empresa"]; ?>"><?php echo $empresas["nombre"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=suc'">Cancelar</button>
    </div>
</form>
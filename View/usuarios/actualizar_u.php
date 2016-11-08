<form action="index.php?m=usu&c=actualizarU" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Documento:</label></th>
                    <td>
                        <input type='text' name="txtDocumento" class="form-control" 
                               placeholder="Ingrese Su Documento (12)" readonly="readonly"
                               value="<?php echo $dato[0]; ?>">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom">Nombre:</label></th>
                    <td>
                        <input type='text' id="txtNombre" name="txtNombre" class="form-control" 
                               placeholder="Nombres Completos" onkeyup="validarText('txtNombre', 'Ingrese Un Nombre',
                                               'Caracter No Valido, Campo De Texto')" value="<?php echo $dato[1]; ?>">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="ape">Apellido:</label></th>
                    <td>
                        <input type='text' id="txtApellido" name="txtApellido" class="form-control" 
                               placeholder="Apellidos Completos" onkeypress="validarText('txtApellido', 'Ingrese Un Apellido',
                                               'Caracter No Valido, Campo De Texto')" value="<?php echo $dato[2]; ?>">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="cl1">Clave:</label></th>
                    <td>
                        <input type='password' id="psClave" name="psClave" class="form-control" 
                               placeholder="Contraseña" onkeyup="tamaño1('psClave', 'Minimo De Caracteres (8)')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="cl2">Confirmar Clave:</label></th>
                    <td>
                        <input type='password' id="psClave2" name="psClave2" class="form-control" 
                               placeholder="Repetir Contraseña" onkeyup="validarPass1('psClave2', 'psClave',
                                               'Repita La Contraseña', 'Las Contraseñas No Coindicen')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr class="form-group">
                    <th><label for="per">Perfil:</label></th>
                    <td>
                        <select class="form-control" id="cbPerfil" name="cbPerfil" onkeypress="validarCB('cbPerfil', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <?php foreach ($per as $perfil): ?>
                                <option <?php echo ($perfil[0] == $dato[5]) ? ' selected="selected"' : ''; ?> value="<?php echo $perfil["id_perf"]; ?>"><?php echo $perfil["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr class="form-group">
                    <th><label for="est">Estado:</label></th>
                    <td>
                        <select class="form-control" id="cbEstado" name="cbEstado" onkeypress="validarCB('cbEstado', 'Campo Sin Seleccionar')">
                            <option value="">Seleccione Una Opcion...</option>
                            <option selected="selected"><?php echo $dato[4]; ?></option>
                            <?php if ($dato[4] == "Activo") { ?>
                                <option><?php echo "Inactivo" ?></option>
                            <?php } else { ?>
                                <option><?php echo "Activo" ?></option>
                            <?php } ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=usu'">Cancelar</button>
    </div>
</form>
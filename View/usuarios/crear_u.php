<form id="crudU" action="index.php?m=usu&c=guardarU" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc" class="control-label">Documento:</label></th>
                    <td>
                        <select class="form-control" name="cbDocumento" id="combo" onkeydown="validarCB('combo', 'Campo Sin Seleccionar')">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($emple as $emp): ?>
                                <option value="<?php echo $emp[0]; ?>"><?php echo $emp[1]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom" class="control-label">Nombre:</label></th>
                    <td>
                        <input type='text' id="txtNombre" name="txtNombre" class="form-control" 
                               placeholder="Nombres Completos" onkeyup="validarText('txtNombre', 'Ingrese Un Nombre',
                                               'Caracter No Valido, Campo De Texto')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="ape" class="control-label">Apellido:</label></th>
                    <td>
                        <input type='text' id="txtApellido" name="txtApellido" class="form-control" 
                               placeholder="Apellidos Completos" onkeyup="validarText('txtApellido', 'Ingrese Un Apellido',
                                               'Caracter No Valido, Campo De Texto')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="cl1" class="control-label">Clave:</label></th>
                    <td>
                        <input type='password' name="psClave" id="psClave" class="form-control" 
                               placeholder="Contraseña" onkeyup="tamaño('psClave', 'Ingrese Una Contraseña',
                                               'Minimo De Caracteres (8)')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="cl2" class="control-label">Confirmar Clave:</label></th>
                    <td>
                        <input type='password' id="psClave2" name="psClave2" class="form-control" 
                               data-match='#psClave' placeholder="Repetir Contraseña" onkeyup="validarPass('psClave2', 'psClave',
                                               'Repita La Contraseña', 'Las Contraseñas No Coindicen')">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr class="form-group">
                    <th><label for="per">perfil:</label></th>
                    <td>
                        <select class="form-control" name="cbPerfil" id="combo" onkeydown="validarCB('combo', 'Campo Sin Seleccionar')">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($per as $perfil): ?>
                                <option value="<?php echo $perfil["id_perf"]; ?>"><?php echo $perfil["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr class="form-group">
                    <th><label for="est">Estado:</label></th>
                    <td>
                        <select class="form-control" name="cbEstado" id="combo1" onkeydown="validarCB('combo1', 'Campo Sin Seleccionar')">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" id="btnValidar" class="btn btn-primary">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=usu'">Cancelar</button>
    </div>
</form>   
<form action="index.php?m=usu&c=guardarU" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Documento:</label></th>
                    <td><input type='text' name="txtDocumento" class="form-control " placeholder="Ingrese Su Documento"></td>
                </tr>
                <tr>
                    <th><label for="nom">Nombre:</label></th>
                    <td><input type='text' name="txtNombre" class="form-control" placeholder="Nombres Completos"></td>
                </tr>
                <tr>
                    <th><label for="ape">Apellido:</label></th>
                    <td><input type='text' name="txtApellido" class="form-control" placeholder="Apellidos Completos"></td>
                </tr>
                <tr>
                    <th><label for="cl1">Clave:</label></th>
                    <td><input type='password' name="psClave" class="form-control" placeholder="Contraseña"></td>
                </tr>
                <tr>
                    <th><label for="cl2">Confirmar Clave:</label></th>
                    <td><input type='password' name="psClave2" class="form-control" placeholder="Repetir Contraseña"></td>
                </tr>
                <tr class="form-group">
                    <th><label for="per">perfil:</label></th>
                    <td>
                        <select class="form-control" name="cbPerfil">
                            <option selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($per as $perfil): ?>
                                <option value="<?php echo $perfil["id_perf"]; ?>"><?php echo $perfil["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr class="form-group">
                    <th><label for="est">Estado:</label></th>
                    <td>
                        <select class="form-control" name="cbEstado">
                            <option selected="selected">Seleccione Una Opcion...</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=usu'">Cancelar</button>
    </div>
</form>   
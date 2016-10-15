<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&Chi;</button>
            <h2 class="modal-title">Crear Usuario</h2>
        </div>
        <form action="index.php?m=crear_usuario" method="post">
            <div class="modal-body">
                <div>
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
                                <td><input type='password' name="psClave1" class="form-control" placeholder="Repetir Contraseña"></td>
                            </tr>
                            <tr class="form-group">
                                <th><label for="cbPerfil">perfil:</label></th>
                                <td>
                                    <select class="form-control">
                                        <option selected="selected">Seleccione Una Opcion...</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="form-group">
                                <th><label for="cbEstado">Estado:</label></th>
                                <td>
                                    <select class="form-control">
                                        <option selected="selected">Seleccione Una Opcion...</option>
                                        <option>Activo</option>
                                        <option>Inactivo</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" name="btnCancelar">Cancelar</button>
                <button type="submit" class="btn btn-primary" name="btnAceptar">Crear</button>
            </div>
        </form>
    </div>
</div>
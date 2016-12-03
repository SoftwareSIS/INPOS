<form action="index.php?m=empr&c=guardarEMPR" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                 <tr>
                    <th><label for="nom">Id Empresa:</label></th>
                    <td><input type='text' name="txtIdEmpresa" class="form-control " placeholder="Ingrese su ID" 
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="nom">Nombre:</label></th>
                    <td><input type='text' name="txtNombre" class="form-control" placeholder="Ingrese el nombre" required></td>
                </tr>
                <tr>
                    <th><label for="nom">Telefono:</label></th>
                    <td><input type='text' name="txtTelefono" class="form-control" placeholder="Ingrese el telefono"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Correo:</label></th>
                    <td><input type='email' pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" name="txtCorreo" class="form-control" placeholder="Ingrese el correo" required></td>
                </tr>
                <tr>
                    <th><label for="nom">Direccion:</label></th>
                    <td><input type='text' name="txtDireccion" class="form-control" placeholder="Ingrese la direccion"  required></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=empr'">Cancelar</button>
    </div>
</form>   
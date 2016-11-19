<form action="index.php?m=cli&c=guardarCLI" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id Cliente:</label></th>
                    <td><input type='text' name="txtId" class="form-control " placeholder="Ingrese Id"
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="fac">Descuento:</label></th>
                    <td><input type='text' name="txtDescuento" class="form-control" placeholder="Descuento del Cliente"></td>
                </tr>
                <tr>
                    <th><label for="est">Estado:</label></th>
                    <td><select class="form-control" name="cbEstado">
                            <option>Seleccione Una Opcion</option>
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=cli'">Cancelar</button>
    </div>
</form>   
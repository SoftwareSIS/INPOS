<form action="index.php?m=prov&c=guardarPR" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Nit:</label></th>
                    <td><input type='text' name="txtNit" class="form-control " placeholder="Ingrese Nit"
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="fac">Direccion De Facturación:</label></th>
                    <td><input type='text' name="txtFactura" class="form-control" placeholder="Factura"></td>
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
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prov'">Cancelar</button>
    </div>
</form>   
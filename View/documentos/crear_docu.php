<form action="index.php?m=docu&c=guardarDOCU" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id Documento:</label></th>
                    <td><input type='text' name="txtDocumento" class="form-control " placeholder="Ingrese Documento"></td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion"></td>
                </tr>
                <tr>
                    <th><label for="des">Consecutivo:</label></th>
                    <td><input type='number' name="txtConsecutivo" class="form-control" placeholder="Consecutivo"></td>
                </tr>
                <tr>
                    <th><label for="des">Tipo:</label></th>
                    <td>
                        <select class="form-control" name="cbTipo">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <option>Entrada</option>
                            <option>Salida</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=docu'">Cancelar</button>
    </div>
</form>   
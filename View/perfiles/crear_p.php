<form action="index.php?m=per&c=guardarP" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id:</label></th>
                    <td><input type='text' name="txtDocumento" class="form-control " placeholder="Ingrese Su Documento"></td>
                </tr>
                <tr>
                    <th><label for="nom">Descripcion:</label></th>
                    <td><input type='text' name="txtNombre" class="form-control" placeholder="Nombres Completos"></td>
                </tr>
            </table>
        </div>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=per'">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
    </div>
</form>   
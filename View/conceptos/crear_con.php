<form action="index.php?m=con&c=guardarCON" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id Concepto:</label></th>
                    <td><input type='text' name="txtidCon" class="form-control " placeholder="Ingrese Cargo"></td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtdescripcion" class="form-control" placeholder="Descripcion"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Crear</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=con'">Cancelar</button>
    </div>
</form>   
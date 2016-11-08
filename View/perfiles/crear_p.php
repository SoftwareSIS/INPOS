<form action="index.php?m=per&c=guardarP" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">ID:</label></th>
                    <td><input type='text' id="txtID" name="txtID" class="form-control " placeholder="Ingrese su ID" 
                               onkeyup="validarN('txtID', 'Ingrese Un Identificador', 'Caracter No Valido, Campo Numerico',
                                               1, 11, 'Minimo - Maximo de digitos (1 - 11)')">
                        <span class="help-block"></span>
                    </td>

                </tr>
                <tr>
                    <th><label for="nom">Descripcion:</label></th>
                    <td><input type='text' id="txtDescripcion" name="txtDescripcion" class="form-control" 
                               placeholder="Ingrese su Perfil" onkeyup="validarText('txtDescripcion', 'Ingrese Una Descripcion',
                                               'Caracter No Valido, Campo De Texto')">
                        <span class="help-block"></span>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=per'">Cancelar</button>
    </div>
</form>   
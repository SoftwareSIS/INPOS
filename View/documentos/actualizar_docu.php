<form action="index.php?m=docu&c=actualizarDOCU" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Id Documento:</label></th>
                    <td><input type='text' name="txtDocumento" class="form-control " value="<?php echo $dato[0]; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion" value="<?php echo $dato[1]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="des">Consecutivo:</label></th>
                    <td><input type='text' name="txtConsecutivo" class="form-control" placeholder="Consecutivo" value="<?php echo $dato[2]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="des">Tipo:</label></th>
                    <td>
                        <select class="form-control" name="cbTipo">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <option <?php echo ($dato[3] == 'Entrada') ? 'selected="selected"' : ''; ?>>Entrada</option>
                            <option <?php echo ($dato[3] == 'Salida') ? 'selected="selected"' : ''; ?>>Salida</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=docu'">Cancelar</button>
    </div>
</form>
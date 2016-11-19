<form action="index.php?m=con&c=actualizarCON" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Id Concepto:</label></th>
                    <td><input type='text' name="txtidCon" class="form-control " value="<?php echo $dato[0]; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtdescripcion" class="form-control" placeholder="Descripcion" value="<?php echo $dato[1]; ?>"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=con'">Cancelar</button>
    </div>
</form>
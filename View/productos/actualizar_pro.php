<form action="index.php?m=prov&c=actualizarPR" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="doc">Nit:</label></th>
                    <td><input type='text' name="txtNit" class="form-control " value="<?php echo $dato[0]; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                    <th><label for="fac">Factura:</label></th>
                    <td><input type='text' name="txtFactura" class="form-control" placeholder="Factura" value="<?php echo $dato[1]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="est">Estado:</label></th>
                    <td><input type='text' name="txtEstado" class="form-control" placeholder="Estado" value="<?php echo $dato[2]; ?>"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=prov'">Cancelar</button>
    </div>
</form>
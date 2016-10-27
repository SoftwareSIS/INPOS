<form action="index.php?m=per&c=actualizarP" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <?php foreach ($query as $dato): endforeach; ?>
                <tr>
                    <th><label for="id">ID:</label></th>
                    <td><input type='text' name="txtID" class="form-control " placeholder="Ingrese Su ID" value="<?php echo $dato[0]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="des">Descripcion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion Perfil" value="<?php echo $dato[1]; ?>"></td>
                </tr>
            </table>
        </div>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=per'">Cancelar</button>
    </div>
</form>
<form action="index.php?m=suc&c=eliminarSUC" method="post">
    <div class="container">
        <h2 class="modal-title alert-danger actualizar">¿Desea eliminar el siguiente registro?</h2>
        <br>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Sucursal</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Estadoo</th>
                        <th>Ciudad</th>
                        <th>Empresa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $consulta): ?>
                        <tr>
                            <td><input name="txtID" readonly = "readonly" value="<?php echo $consulta[0]; ?>"></td>
                            <td><?php echo $consulta[1]; ?></td>
                            <td><?php echo $consulta[2]; ?></td>
                            <td><?php echo $consulta[3]; ?></td>
                            <td><?php echo $consulta[4]; ?></td>
                            <td><?php echo $consulta[5]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Eiminar</button>
            <a href="index.php?m=suc" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
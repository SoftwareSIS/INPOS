<form action="index.php?m=prod&c=eliminarPRO" method="post">
    <div class="container">
        <h2 class="modal-title alert-danger actualizar">¿Desea eliminar el siguiente registro?</h2>
        <br>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Proveedor</th>
                        <th>Descripcion</th>
                        <th>Valor</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $consulta): ?>
                        <tr>
                            <td><input name="txtIdProducto" readonly = "readonly" value="<?php echo $consulta[0]; ?>"></td>
                            <td><?php echo $consulta[1]; ?></td>
                            <td><?php echo $consulta[2]; ?></td>
                            <td><?php echo $consulta[3]; ?></td>
                            <td><img src="data:image/*;base64,<?php echo base64_encode($consulta[4]); ?>" width="250px" height="200px"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Eiminar</button>
            <a href="index.php?m=prod" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
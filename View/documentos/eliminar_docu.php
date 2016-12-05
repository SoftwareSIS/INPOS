<form action="index.php?m=docu&c=eliminarDOCU" method="post">
    <div class="container">
        <h2 class="modal-title alert-danger actualizar">¿Desea eliminar el siguiente registro?</h2>
        <br>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Concepto</th>
                        <th>Descripcion</th>
                        <th>Consecutivo</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $consulta): ?>
                        <tr>
                            <td><input name="txtID" readonly = "readonly" value="<?php echo $consulta[0]; ?>"></td>
                            <td><?php echo $consulta[1]; ?></td>
                            <td><?php echo $consulta[2]; ?></td>
                            <td><?php echo $consulta[3]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Eiminar</button>
            <a href="index.php?m=docu" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
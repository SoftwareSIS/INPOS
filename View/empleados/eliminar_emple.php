<form action="index.php?m=emple&c=eliminarEMPLE" method="post">
    <div class="container">
        <h2 class="modal-title alert-danger actualizar">¿Desea eliminar el siguiente registro?</h2>
        <br>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Documento</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($eli as $consulta): ?>
                        <tr>
                            <td><input name="txtEmpleado" readonly = "readonly" value="<?php echo $consulta[0]; ?>"></td>
                            <td><?php echo $consulta[1]; ?></td>
                            <td><?php echo $consulta[2]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Eiminar</button>
            <a href="index.php?m=emple" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
<form action="index.php?m=carg&c=eliminarCAR" method="post">
    <div class="container">
        <h2 class="modal-title alert-danger actualizar">¿Desea eliminar el siguiente registro?</h2>
        <br>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Cargo</th>
                        <th>Descripcion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $consulta): ?>
                        <tr>
                            <td><input name="txtidCar" readonly = "readonly" value="<?php echo $consulta[0]; ?>"></td>
                            <td><?php echo $consulta[1]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Eiminar</button>
            <a href="index.php?m=carg" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>
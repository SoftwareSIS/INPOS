<br>
<div class="container table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Producto</th>
                <th>ID Proveedor</th>
                <th>Descripción</th>
                <th>Detalles</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $consulta): ?>
                <tr>
                    <td><?php echo $consulta[0]; ?></td>
                    <td><?php echo $consulta[1]; ?></td>
                    <td><?php echo $consulta[2]; ?></td>
                    <td><a href="index.php?m=prod&det=<?php echo $consulta[0]; ?>" class="btn btn-info btn-block"><span class="icon icon-profile"></span></a></td>
                    <td><a href="index.php?m=prod&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=prod&eli=<?php echo $consulta[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin "></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?m=prod&cd" class="btn btn-primary"><span class="icon icon-user-plus"></span> Crear Producto</a>
</div>
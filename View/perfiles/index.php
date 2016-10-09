<br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $consulta): ?>
                <tr>
                    <td><?php echo $consulta[0]; ?></td>
                    <td><?php echo $consulta[1]; ?></td>
                    <td><span><a href="index.php?act=<?php echo $consulta[0]; ?>">Icono A</a></span></td>
                    <td><span><a href="index.php?eli=<?php echo $consulta[0]; ?>">Icono E</a></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
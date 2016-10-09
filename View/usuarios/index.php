<?php require_once 'eliminar.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Perfil</th>
                <th>Estado</th>
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
                    <td><?php echo $consulta[3]; ?></td>
                    <td><?php echo $consulta[4]; ?></td>
                    <td><a href="index.php?m=usu&id=<?php echo $consulta[0]; ?>">Icono A</a></td>
                    <td><a href="#confirmarE" data-toggle='modal'>Icono E</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
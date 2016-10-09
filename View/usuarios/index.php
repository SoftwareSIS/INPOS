<?php require_once 'eliminar.php'; ?>
<br>
<div class="container table-responsive">
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
                    <td><a href="index.php?m=usu&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="#confirmarE" data-toggle='modal'class="btn btn-danger btn-block"><span class="icon icon-bin "></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <button class="btn bg-primary"><span class="icon icon-user-plus" id="user"></span>Nuevo Usuario</button>
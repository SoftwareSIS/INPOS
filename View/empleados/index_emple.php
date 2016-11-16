<br>
<div class="container table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th><label class="control-label">ID</label></th>
                <th><label class="control-label">Cargo</label></th>
                <th><label class="control-label">Fecha De Ingreso</label></th>
                <th><label class="control-label">Fecha De Retiro</label></th>
                <th><label class="control-label">Salario</label></th>
                <th><label class="control-label">Sucursal</label></th>
                <th><label class="control-label">Actualizar</label></th>
                <th><label class="control-label">Eliminar</label></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $emple) : ?>
                <tr>
                    <td><?php echo $emple[0]; ?></td>
                    <td><?php echo $emple[1]; ?></td>
                    <td><?php echo $emple[2]; ?></td>
                    <td><?php echo $emple[3]; ?></td>
                    <td><?php echo $emple[4]; ?></td>
                    <td><?php echo $emple[5]; ?></td>
                    <td><a href="index.php?m=emple&id=<?php echo $emple[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=emple&eli=<?php echo $emple[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin"></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?m=emple&cd" class="btn btn-primary"><span class="icon icon-users"></span> Crear Empleado</a>
</div>
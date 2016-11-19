<br>
<div class="container table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Clientes</th>
                <th>Nombre</th>
                <th>Descuento</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $consulta): ?>
                <tr>
                    <td><?php echo $consulta[0]; ?></td>
                    <td><?php echo $consulta[1]; ?></td>
                    <td><?php echo $consulta[2]; ?></td>
                    <td><?php echo $consulta[3]; ?></td>
                    <td><a href="index.php?m=cli&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=cli&eli=<?php echo $consulta[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin "></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?m=cli&cd" class="btn btn-primary"><span class="icon icon-user-plus"></span> Crear Cliente</a>
    <!--<a href="#CrearU" class="btn btn-primary" data-toggle="modal"><span class="icon icon-user-plus user"></span> Crear Usuario</a>-->
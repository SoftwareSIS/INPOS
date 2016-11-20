<br>
<div class="container table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Empresa</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Direccion</th>
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
                    <td><?php echo $consulta[5]; ?></td>
                    <td><a href="index.php?m=empr&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=empr&eli=<?php echo $consulta[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin "></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?m=empr&cd" class="btn btn-primary"><span class="icon icon-user-plus"></span> Crear Empresa</a>
    <!--<a href="#CrearU" class="btn btn-primary" data-toggle="modal"><span class="icon icon-user-plus user"></span> Crear Usuario</a>-->
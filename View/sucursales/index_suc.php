<br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                 <th>ID Sucursal</th>
                 <th>Direccion</th>
                 <th>Telefono</th>
                 <th>Estadoo</th>
                 <th>Ciudad</th>
                 <th>Empresa</th>
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
                    <td><a href="index.php?m=suc&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=suc&eli=<?php echo $consulta[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin"></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?m=suc&cd" class="btn btn-primary"><span class="icon icon-user-plus"></span> Crear Sucursal</a>
</div>
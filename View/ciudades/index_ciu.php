<br>
<div class="container table-responsive over">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Ciudad</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $consulta): ?>
                <tr>
                    <td><?php echo $consulta[0]; ?></td>
                    <td><?php echo $consulta[1]; ?></td>
                    <td><a href="index.php?m=ciu&id=<?php echo $consulta[0]; ?>" class="btn btn-success btn-block"><span class="icon icon-pencil2"></span></a></td>
                    <td><a href="index.php?m=ciu&eli=<?php echo $consulta[0]; ?>" class="btn btn-danger btn-block"><span class="icon icon-bin "></span></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<br>
<div class="container">
    <a href="index.php?m=ciu&cd" class="btn btn-primary"><span class="icon icon-user-plus"></span> Crear Ciudad</a>        
</div>
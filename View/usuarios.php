<br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Documento</th>
                <th>Genero</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $consulta): ?>
                <tr>
                    <td><?php echo $consulta[0]; ?></td>
                    <td><?php echo $consulta[1]; ?> </td>
                    <td><?php echo $consulta[2]; ?></td>
                    <td><?php echo $consulta[3]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
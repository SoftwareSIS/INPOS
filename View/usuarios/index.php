<div class="modal fade" id="confirmar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&Chi;</button>
                <h2 class="modal-title">Encabezado</h2>
            </div>
            <div class="modal-body">
                <p>¿Desea Eiminar el registro ()?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnAceptar">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <table class="table table-hover">
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
                    <td><?php echo $consulta[1]; ?> </td>
                    <td><?php echo $consulta[2]; ?></td>
                    <td><?php echo $consulta[3]; ?></td>
                    <td><?php echo $consulta[4]; ?></td>
                    <td><a href="#confirmar" data-toggle='modal'>Icono A</a></td>
                    <td><a href="#">Icono E</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<form >
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label class="control-label">Id Empleado:</label></th>
                    <td>
                        <select class="form-control">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($ter as $tercero) : ?>
                                <option value="<?php echo $ter['id_tercero']; ?>"><?php echo $ter['nombre']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                    <th><label class="control-label">Cargo:</label></th>
                    <td>
                        <select class="form-control">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($car as $cargo) : ?>
                                <option value="<?php echo $cargo['id_cargo']; ?>"><?php echo $cargo['descripcion']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                    <th><label class="control-label">Fecha De Ingreso:</label></th>
                    <td>
                        <input type="date" class="form-control" placeholder="Ingrese Una Fecha">
                        <span class="help-block"></span>
                    </td>
                    <th><label class="control-label">Fecha De Retiro:</label></th>
                    <td>
                        <input type="date" class="form-control" placeholder="Ingrese Un Fecha">
                        <span class="help-block"></span>
                    </td>
                    <th><label class="control-label">Salario:</label></th>
                    <td>
                        <input type="text" class="form-control" placeholder="Ingrese Un Valor">
                        <span class="help-block"></span>
                    </td>
                    <th><label class="control-label">Sucursal:</label></th>
                    <td>
                        <select class="form-control">
                            <option value="" selected="selected">Seleccione Una Opcion...</option>
                            <?php foreach ($suc as $sucursal) : ?>
                                <option value='<?php echo $sucursal['id_sucursal']; ?>'><?php echo $sucursal['descripcion']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>

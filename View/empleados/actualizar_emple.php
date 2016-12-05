<form id="crudU" action="index.php?m=emple&c=actualizarEMPLE" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc" class="control-label">Nombre:</label></th>
                    <td>
                        <?php foreach ($actua as $datos) : ?>
                            <select class="form-control" name="cbNombre" id="combo">
                                <option selected="selected" value="">Seleccione Una Opcion...</option>
                                <?php foreach ($tercero as $ter) : ?>
                                    <option <?php echo ($ter[0] == $datos[0]) ? 'selected="selected"' : ''; ?> 
                                        value="<?php echo $ter[0]; ?>">
                                            <?php echo $ter[1]; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <span class="help-block"></span>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="nom" class="control-label">Cargo:</label></th>
                    <td>
                        <select class="form-control" name="cbCargo">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($cargos as $car) : ?>
                                <option <?php echo ($car[0] == $datos[1]) ? 'selected="selected"' : ''; ?> 
                                    value="<?php echo $car[0]; ?>">
                                        <?php echo $car[1]; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="ape" class="control-label">Fecha De Ingreso:</label></th>
                    <td>
                        <input type='text' id="txtFechaI" name="txtFechaI" class="form-control" 
                               placeholder="Fecha Inicial" value="<?php echo $datos[2]; ?>">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                    <th><label for="cl1" class="control-label">Fecha De Retiro:</label></th>
                    <td>
                        <input type='text' name="txtFechaR" id="txtFechaR" class="form-control" 
                               placeholder="Fecha Final" value="<?php echo $datos[3]; ?>">
                        <span class="help-block"></span>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr class="form-group">
                    <th><label for="per">Sucursal:</label></th>
                    <td>
                        <select class="form-control" name="cbSucursal" id="combo" onkeydown="validarCB('combo', 'Campo Sin Seleccionar')">
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($sucursal as $suc) : ?>
                                <option <?php echo ($suc[0] == $datos[4]) ? 'selected="selected"' : ''; ?> value="<?php echo $suc[0]; ?>"><?php echo $suc[1]; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="help-block"></span>
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" id="btnValidar" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=emple'">Cancelar</button>
    </div>
</form>   
<form action="index.php?m=ter&c=guardar" method="post">
    <div class="actualizar">
        <div class="form-group table-responsive">
            <table class="table table-condensed table-hover">
                <tr>
                    <th><label for="doc">Id:</label></th>
                    <td><input type='text' name="txtID" class="form-control " placeholder="Ingrese su ID" 
                               pattern="[0-9]{1,100}" required="required" title="Campo de solo Numero"></td>
                </tr>
                <tr>
                    <th><label for="nom">Nombre:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Ingrese el nombre" required></td>
                </tr>
                <tr>
                    <th><label for="nom">DIreccion:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Ingrese la direccion"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Telefono:</label></th>
                    <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Ingrese el telefono"  required></td>
                </tr>
                <tr>
                    <th><label for="nom">Correo:</label></th>
                    <td><input type='email' pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" name="txtDescripcion" class="form-control" placeholder="Ingrese el correo" required></td>
                </tr>
                <tr>
                    <th><label for="nom">Ciudad:</label></th>
                    <td>
                        <select class="form-control" name="cbPerfil" required>
                            <option selected="selected" value="">Seleccione Una Opcion...</option>
                            <?php foreach ($ciu as $ciudades): ?>
                                <option value="<?php echo $ciudades["id_ciudad"]; ?>"><?php echo $ciudades["descripcion"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <button type="button" class="btn btn-default" onclick="location.href = 'index.php?m=ter'">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnAceptar">Aceptar</button>
    </div>
</form>  
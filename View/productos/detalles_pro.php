<div class="actualizar">
    <?php foreach ($detalle as $det) : endforeach; ?>
    <hr>
    <h2>Detalles Del Producto</h2>
    <br>
    <img class="img_detalle" src="data:image/*;base64,<?php echo base64_encode($det[4]); ?>" width="200px" height="150px"/>
    <hr>
    <form>
        <table class="table table-responsive table-striped">
            <tr>
                <th><label for="des">Descripcion:</label></th>
                <td><input type='text' name="txtDescripcion" class="form-control" placeholder="Descripcion"
                           value="<?php echo $det[2]; ?>" disabled="disabled"></td>
            </tr>
            <tr>
                <th><label for="val">Valor:</label></th>
                <td><input type='text' name="txtValor" class="form-control" placeholder="Valor"
                           value="<?php echo $det[3]; ?>" disabled="disabled"></td>
            </tr>
            <tr>
                <th><label for="pes">Peso:</label></th>
                <td><input type="text" name="txtPeso" class="form-control" placeholder="Peso"
                           value="<?php echo $det[5]; ?>" disabled="disabled"></td>
            </tr>
            <tr>
                <th><label for="dim">Dimensiones:</label></th>
                <td>
                    <textarea name="txtDimensiones" placeholder="Dimensiones" class="form-control" 
                              disabled="disabled"><?php echo $det[6]; ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="color">Color:</label></th>
                <td><input type="text" name="txtColor" placeholder="Color" class="form-control"
                           value="<?php echo $det[7]; ?>" disabled="disabled"></td>
            </tr>
            <tr>
                <th><label for="acc">Accesorios:</label></th>
                <td>
                    <textarea name="txtAccesorios" placeholder="Accesorios" class="form-control" 
                              disabled="disabled"><?php echo $det[8]; ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="ga">Garantia:</label></th>
                <td><input type="text" name="txtGarantia" name="txtGarantia" placeholder="Garantia" class="form-control"
                           value="<?php echo $det[9]; ?>" disabled="disabled"></td>
            </tr>
            <tr>
                <th><label for="ma">Materiales:</label></th>
                <td>
                    <textarea name="txtMateriales" placeholder="Materiales" class="form-control" 
                              disabled="disabled"><?php echo $det[10]; ?></textarea>
                </td>
            </tr>
        </table> 
    </form>
</div>
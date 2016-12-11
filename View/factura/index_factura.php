<?php foreach ($query as $cabecera) : endforeach; ?>
<div class="container">
    <div class="cabecera">
        <div>
            <h1><label class="control-label">ID:</label></h1>
            <label><?php echo $cabecera[0]; ?></label>
            <h1><label class="control-label">Fecha:</label></h1>    
            <label><?php echo $cabecera[1]; ?></label>
        </div>
        <div>
            <h1><label class="control-label">Cliente:</label></h1>    
            <label><?php echo $cabecera[2]; ?></label>
            <h1><label class="control-label">Empleado:</label></h1>    
            <label><?php echo $cabecera[3]; ?></label>
        </div>
    </div>
    <div class="detalle">
        <div class="table-responsive">
            <table>
                <tr>
                    <th>
                        <label class="control-label">ID Producto:</label>
                    </th>
                    <td>
                        <?php echo $cabecera[4]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="control-label">Cantidad:</label>
                    </th>
                    <td>
                        <?php echo $cabecera[5]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="control-label">Descuento:</label>
                    </th>
                    <td>
                        <?php echo $cabecera[6]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="control-label">Iva:</label>
                    </th>
                    <td>
                        <?php echo $cabecera[7]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="control-label">Valor:</label>
                    </th>
                    <td>
                        <?php echo $cabecera[8]; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label class="control-label">Item:</label>    
                    </th>
                    <td>
                        <?php echo $cabecera[9]; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="resumen">
        <h2><label class="control-label">Valor Total:</label></h2>
        <div>
            <?php echo $cabecera[10]; ?>
        </div>
    </div>
</div>
<a class="btn btn-primary" name="btnImprimir" id="btnImprimir"><span class="icon icon-barcode"> Imprimir</span></a>

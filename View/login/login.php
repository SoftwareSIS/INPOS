<!DOCTYPE html>
<html>
    <head>
        <title>INPOS</title>
        <meta charset="UTF-8">
    </head>
    <body >
        <form method="post" action="index.php?m=log&c=con">
            <div class="contenedor">
                <div class="imagen">
                    <img class="img img-responsive" src="img/LogoImpletecFinaPeql.png">
                </div>
                <div class="cuerpo">
                    <input type="text" name="txtUsuario" id="txtUsuario" class="form-control pru" placeholder="Usuario">
                    <input type="password" name="txtClave" id="txtClave" class="form-control pru" placeholder="Contraseña">
                    <br>
                    <div class="form-group button">
                        <button type="submit" class="btn btn-primary botonL"><span class="icon icon-bar"></span> Ingresar</button>
                        <a href="index.php" class="btn btn-danger botonL"><span class="icon icon-bar"></span> Cancelar</a>
                    </div>
                </div>
                <div class="pie">
                    <a class="ol">¿Olvido Su Contraseña?</a>    
                </div>
            </div>
            <div>
                <span class="help-block"></span>
            </div>
        </form>
    </body>
</html>
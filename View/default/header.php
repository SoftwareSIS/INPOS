<!DOCTYPE html>
<html>
    <head>
        <title>INPOS</title>
        <meta charset="UTF-8">
        <?php require_once 'Estyle/bootstrap-3.3.7-dist/css/Estilo_B.php'; ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-3">
                        <h1 id="main-logo"><a href="index.php"><span></span></a></h1>
                    </div>
                    <div class="col-xs-9">
                        <ul id="main-menu" class="nav nav-tabs">
                            <li class="active">
                                <a href="index.php">Inicio</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Administrativo<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?m=carg"><span class="icon">Cargos</span></a></li>
                                    <li><a href="index.php?m=ciu"><span class="icon">Ciudades</span></a></li>
                                    <li><a href="index.php?m=cli"><span class="icon">Clientes</span></a></li>
                                    <li><a href="index.php?m=con"><span class="icon">Conceptos</span></a></li>
                                    <li><a href="index.php?m=emple"><span class="icon">Empleados</span></a></li>
                                    <li><a href="index.php?m=empr"><span class="icon">Empresas</span></a></li>
                                    <li><a href="index.php?m=fac"><span class="icon">Facturas</span></a></li>
                                    <li><a href="index.php?m=inv"><span class="icon">Inventarios</span></a></li>
                                    <li><a href="index.php?m=per"><span class="icon icon-user-tie"> Perfiles</span></a></li>
                                    <li><a href="index.php?m=prod"><span class="icon icon-cart"> Productos</span></a></li>
                                    <li><a href="index.php?m=prof"><span class="icon">Productos Facturas</span></a></li>
                                    <li><a href="index.php?m=prov"><span class="icon icon-man-woman"> Proveedores</span></a></li>
                                    <li><a href="index.php?m=suc"><span class="icon">Sucursales</span></a></li>
                                    <li><a href="index.php?m=ter"><span class="icon icon-accessibility"> Terceros</span></a></li>
                                    <li><a href="index.php?m=ubi"><span class="icon">Ubicaciones</span></a></li>
                                    <li><a href="index.php?m=usu"><span class="icon icon-user"> Usuarios</span></a></li>
                                </ul>	
                            </li>
                            <li>
                                <a href="#">Consultas</a>
                            </li>
                            <li>
                                <a href="#">Movimientos</a>
                            </li>
                            <li>
                                <a href="#">Contactenos</a>
                            </li>
                            <li>
                                <a href="index.php?m=login"><span class="icon icon-users">Inicio De Sesión</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
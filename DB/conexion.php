<?php

class conexion {

    public static function conex() {

        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "posweb";

        $conn = new mysqli($host, $user, $pass, $db);
        if (!$conn) {
            echo "Error al conectar la Base de Datos 'posweb'";
        } else {
            mysqli_set_charset($conn, "utf8");
            return $conn;
        }
        
        
    }

}

?>
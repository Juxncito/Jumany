<?php
function conectarBaseDeDatos(){
    $servername = "sql10.freesqldatabase.com";
    $username = "sql10711945";
    $password = "mEP5YyFQJb";
    $dbname = "sql10711945";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión: " . $conn->connect_error);
    }

    return $conn;
}
?>

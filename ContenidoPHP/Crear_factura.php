
<?php
    function generarCodigo($longitud) {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $codigo = '';
        for ($i = 0; $i < $longitud; $i++) {
            $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $codigo;
    }

    $random_string = generarCodigo(20);

    include('../DataBase/Conecxion.php');
    $conn = conectarBaseDeDatos();


    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    // Insertar los datos en la tabla Factura
    $nombre_cli = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $num_cuenta = $_POST['num_cuenta'];

    $sql = "INSERT INTO Factura (Nombre, Correo, Cedula, Cuenta, llave) VALUES ('$nombre_cli', '$correo', '$cedula', '$num_cuenta', '$random_string')";

    if ($conn->query($sql) === false) {
        echo "Error al insertar los datos: " . $conn->error;
    }
    $sql = "SELECT `Id_Factura`, `Nombre`, `Correo`, `Cedula`, `Cuenta`, `Llave`
    FROM `Factura`
    ORDER BY `Id_factura` DESC
    LIMIT 1";
$result = $conn->query($sql);

if (!$result) {
die("Error en la consulta: " . $conn->error);
}

if ($result->num_rows > 0) {
// Imprimir todos los datos de la última factura
$row = $result->fetch_assoc();
$lastInvoiceData = $row; // No es necesario codificarlo como JSON aquí
} else {
die("No se encontraron facturas.");
}

// Cerrar la conexión
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JUMANY|Factura</title>
<link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
    <div class="Factura_Form">
        <div class="Factura">
            <h1>Factura</h1>
            <form>
                <p> <label>ID de la última factura: </label> <?php echo $lastInvoiceData['Id_Factura']; ?></p>
                <p> <label>Nombre del cliente: </label> <?php echo $lastInvoiceData['Nombre']; ?></p>
                <p> <label>Correo: </label> <?php echo $lastInvoiceData['Correo']; ?></p>
                <p> <label>Cédula: </label> <?php echo $lastInvoiceData['Cedula']; ?></p>
                <p> <label>Número de cuenta: </label> <?php echo $lastInvoiceData['Cuenta']; ?></p>
                <p> <label>Llave: </label> <?php echo $lastInvoiceData['Llave']; ?></p>
                <a href="Productos.php" class="btn-comprar">Cerrar</a> 
            </form>

        </div>


    </div>


<script>

</script>


</body>
</html>

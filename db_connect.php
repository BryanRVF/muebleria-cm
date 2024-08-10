<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_cm";

// Crear conexión
$enlace = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($enlace->connect_error) {
    die("Connection failed: " . $enlace->connect_error);
}
echo "Connected successfully";

// Realizar una consulta
$sql = "SELECT * FROM categoria"; // Reemplaza 'clientes' con tu tabla
$result = $enlace->query($sql);

// Verificar y manejar el resultado
if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
       
    echo "
    ID: $id <br>
    Nombre: $nombre<br>
    Imagen: $imagen<br>
    <img src='ropero1.png' alt='$nombre' style='width:100px;height:100px;'><br><br>
";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$enlace->close();
?>

<?php
$servername = "localhost";
$username = "id22338638_wp_196399c916fc4895591fec0e440d539e";
$password = "BRYan123456*";
$dbname = "id22338638_wp_196399c916fc4895591fec0e440d539e";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);

}
?>

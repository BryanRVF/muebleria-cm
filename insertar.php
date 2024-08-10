<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php"); // Asegúrate de que la ruta es correcta

// Consulta SQL para seleccionar todos los productos
$sql = "SELECT * FROM productos";
$filas = mysqli_query($enlace, $sql); // Ejecutar la consulta y obtener el resultado en $filas

// Verificar si hay resultados
if ($filas) {
    // Procesar resultados
    while ($fila = mysqli_fetch_array($filas)) {
        $nombre = $fila["nombre"];
        $foto = $fila["foto"];
        $descripcion = $fila["descripcion"];
        $precio = $fila["precio"];
        
        echo "<h3>$nombre</h3>";
        if ($foto) {
            echo "<img src='fotos/$foto' alt='$nombre' style='max-width: 200px; height: auto;'><br>";
        } else {
            echo "<p>No hay imagen disponible</p>";
        }
        echo "<p>$descripcion</p>";
        echo "<p>Precio: $precio</p>";
    }
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($enlace);
}

// Cerrar la conexión
mysqli_close($enlace);
?>

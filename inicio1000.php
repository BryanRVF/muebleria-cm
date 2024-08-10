<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian's Muebles de Melamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-left">
                <a href="inicio1000.php">
                    <img src="imagenes/logo.png" alt="Christian's Muebles de Melamina" class="img-fluid logo-img"></a>
                </div>
                <div class="col-md-8 text-center contact-info">
                <p style="color: white; font-weight: bold; ">FABRICACION DE DISEÑOS EN MELAMINA</p>
                    <p style="color: white; font-weight: bold; ">CELULAR: 998224145</p>
                    <p style="color: white; font-weight: bold; ">CORREO: MELAMINACRISTIAN@GMAIL.COM</p>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="inicio1.php">INICIO</a></li>
                    <li class="nav-item"><a class="nav-link " href="nosotros.php">NOSOTROS</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.php">SERVICIOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PROYECTOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactanos.php">CONTACTANOS</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="hero">
        <div class="hero-text text-center">
            <h2>CHRISTIAN'S MUEBLES</h2>
            <h2>DISEÑAMOS Y FABRICAMOS MUEBLES EN MELAMINA</h2>
            <h2>TODO TIPO DE MUEBLES A MEDIDA</h2>
            <p>Todo tipo de trabajos en melamina con diseños exclusivos, modernos y personalizados, hechos a medida y según sus requerimientos.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="heading responsive">
            <h1>ROPEROS MODERNOS</h1>
            <hr>
            <br>
        </div>
        <div class="row">
            <?php
            include 'conexion.php';

            $sql = "SELECT id, nombre, foto, descripcion, precio FROM productos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-3 col-md-6 mb-3'>";
                    echo "<div class='card h-100'>";
                    echo "<img src='fotos/" . $row["foto"] . "' class='card-img-top card-img-top-custom' alt='Imagen del producto'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row["nombre"] . "</h5>";
                    echo "<p class='card-text'>" . $row["descripcion"] . "</p>";
                    echo "<p class='card-text'><strong>S/" . $row["precio"] . " C/U</strong></p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No hay productos disponibles.</p>";
            }

            
            ?>
        </div>
    </div>
    <div class="container my-5">
    <div class="heading">
        <h1>MUEBLES DE OFICINA</h1>
        <hr>
        <BR>
    </div>
    <div class="row">
        <?php
        // Consulta para obtener los productos de la tabla 'closet'
        $sql = "SELECT id, nombre, foto, descripcion, precio FROM closet";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-lg-3 col-md-6 mb-3'>";
                echo "<div class='card h-100'>";
                echo "<img src='fotos/" . $row["foto"] . "' class='card-img-top card-img-top-custom' alt='Imagen del producto'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["nombre"] . "</h5>";
                echo "<p class='card-text'>" . $row["descripcion"] . "</p>";
                echo "<p class='card-text'><strong>S/" . $row["precio"] . " C/U</strong></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles en el grupo 'closet'.</p>";
        }

        
        ?>
    </div>
</div>
<div class="container my-5">
    <div class="heading">
        <h1>REPOSTEROS PARA COCINA</h1>
        <hr>
        <br>
    </div>
    <div class="row">
        <?php
        // Consulta para obtener los productos de la tabla 'closet'
        $sql = "SELECT id, nombre, foto, descripcion, precio FROM reposteros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-lg-3 col-md-6 mb-3'>";
                echo "<div class='card h-100'>";
                echo "<img src='fotos/" . $row["foto"] . "' class='card-img-top card-img-top-custom' alt='Imagen del producto'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["nombre"] . "</h5>";
                echo "<p class='card-text'>" . $row["descripcion"] . "</p>";
                echo "<p class='card-text'><strong>S/" . $row["precio"] . " C/U</strong></p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles en el grupo 'closet'.</p>";
        }

        // Cerrar la conexión
        $conn->close();
        ?>
    </div>
</div>
<div class= "container my-5">
<footer class="footer ">
    <div class="container-responsive text-center">
        <div class="row">
            <div class="col-md-6 ">
                <h5>Informes</h5>
                <p>
                    Av. Humboldt, Alfonso Ugarte 3ra etapa Mz A Lote 3 Gregorio<br>
                    Albarracín Lanchipa, Tacna, Perú<br>
                    <p><i class="fas fa-phone-alt"></i> CEL: 998224145</p>
                    <p><i class="fas fa-phone-alt"></i> CEL: 998224145</p>
                    <p><i class="fas fa-envelope"></i> CORREO: MELAMINACRISTIAN@GMAIL.COM</p>
                </p>
            </div>
            <div class="col-md-6 " >
                <h5>Redes Sociales</h5>
                <p>
                    Instagram: MueblesChristian<br><br>
                    WhatsApp: 923 711 418<br><br>
                    Facebook: Muebles Christian
                </p>
            </div>
        </div>
    </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


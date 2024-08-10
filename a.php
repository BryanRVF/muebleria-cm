<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Imágenes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .thumbnail {
            cursor: pointer;
            margin-bottom: 10px;
        }
        .thumbnail img {
            width: 100%;
        }
        .main-image img {
            width: 100%;
        }
        .main-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .thumbnails {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .thumbnails img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-image">
                    <img id="mainImage" src="imagenes/imagen1.png" alt="Imagen principal">
                </div>
                <div class="thumbnails">
                    <img class="thumbnail" src="imagenes/imagen1.png" alt="Miniatura 1" onclick="changeImage('imagenes/imagen1.png')">
                    <img class="thumbnail" src="imagenes/imagen2.png" alt="Miniatura 2" onclick="changeImage('imagenes/imagen2.png')">
                    <img class="thumbnail" src="imagenes/imagen3.png" alt="Miniatura 3" onclick="changeImage('imagenes/imagen3.png')">
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Aquí puedes agregar los métodos de entrega y otros detalles -->
                <h2>Métodos de entrega</h2>
                <ul>
                    <li>Despacho expreso</li>
                    <li>Despacho programado</li>
                    <li>Retiro en tienda</li>
                </ul>
                <button class="btn btn-warning">Agregar</button>
            </div>
        </div>
    </div>

    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian\'s Muebles de Melamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="estilos.css">
   
</head>
<style>
        .thumbnail {
            cursor: pointer;
            margin-bottom: 10px;
        }
        .thumbnail img {
            width: 100%;
        }
        .main-image img {
            width: 80%;
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
<body>
    <?php include ('header.php') ?>
    

    <div class="container my-5">

    
       
 
 <div class="row">
            
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100">
                   
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card h-100">
                 
                   
                </div>
            </div>
        </div>
    </div>
    
    <div class="container my-8">
     
            
        <div class="row">
           
               
           
            </div>
</div>
</div>
<br>
<br> 
<br>
<br>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-image">
                    <img id="mainImage" src="detalles/ropero4.jpg" alt="Imagen principal">
                </div>
                <div class="thumbnails">
                    <img class="thumbnail" src="detalles/ropero4.jpg" alt="Miniatura 1" onclick="changeImage('detalles/ropero4.jpg')">
                    <img class="thumbnail" src="detalles/ropero5.png" alt="Miniatura 2" onclick="changeImage('detalles/ropero5.png')">
                    <img class="thumbnail" src="detalles/ropero6.png" alt="Miniatura 3" onclick="changeImage('detalles/ropero6.png')">
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

               <h2> ¿Cómo es nuestro Ropero?:</h2>
        <br>

<ul>
    <li>color:Cafe-tabaco </li>
        <li> Estructura: Melamine 18mm</li>
        <li>Ropero Monterrey 6 Puertas 6 Cajones</li>
    </ul>
<br>

<h2> Medidas aproximadas: </h2>
<br>
<ul>

    <li>Alto  217 cm</li>
    <li>Peso
    142.5 kg</li>
    
    </ul>



 
<br>
*Producto fabricado a pedido. 
<br>
*No se aceptan cancelaciones por cambio de opinión pasadas las 24 horas.
<br>
*El producto viene armado
<br>
*No se emiten facturas, solo boletas de venta
<br>
*No incluye servicio de instalación
<br>
*Las fotos se encuentran ambientadas.
    

    </di>
              
            </div>
        </div>
    </div>

    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>
</body>
<br>
 <div class="container content text-left">
       
        <HR>
       
       
        <br>
    
        <div class="row ">
            <div class="col-md-2 ">
                
               
                <br>
                <br>
                
                <h2>
   

   


</div>

            </div>
        </div>

        <?php include('footer.php') ?>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>


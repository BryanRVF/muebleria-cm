<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian's Muebles</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tus estilos personalizados -->
    <link rel="stylesheet" href="estilos.css">
    <div class="content-wrapper">
</head>

<!-- ENCABEZADO AZUL 1 -->
<body>

    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0; /* Quita el margen por defecto del body */
}

.top-bar {
    background-color: #007bff;
    color: white;
    position: fixed;
    top: 0; /* Asegura que la barra esté pegada a la parte superior */
    width: 100%;
    font-size: 14px;
    height: 40px;
    z-index: 1030;
    font-weight: bold;
    padding: 10px;
    box-sizing: border-box; /* Incluye el padding dentro del tamaño total del elemento */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-bar p {
    margin: 0;
    white-space: nowrap; /* Evita que el texto se desborde en múltiples líneas */
    flex-shrink: 1; /* Permite que los elementos se encojan si es necesario */
}

.top-bar .contact-info {
    display: flex;
    align-items: center;
    flex-wrap: nowrap; /* Evita que los elementos se envuelvan en múltiples líneas */
    overflow: hidden; /* Esconde cualquier contenido desbordante */
}

.top-bar .contact-info > * {
    margin-right: 10px; /* Reduce el margen entre elementos */
}

.navbar-nav .nav-link {
    color: black !important;
}

.navbar {
    margin-top: 40px; /* Ajustar el margen superior para dejar espacio a la top-bar fija */
    background-color: #f4f4f4;
}

.content {
    text-align: center;
    padding: 0px;
}

/* Media query para ocultar la barra azul en pantallas pequeñas */
@media (max-width: 768px) {
    .top-bar {
        display: none;
    }

    .navbar {
        margin-top: 0; /* Ajustar el margen superior ya que la barra azul no estará presente */
    }
}

.text-barra {
    text-align: left; /* Alineación del texto */
    margin-top: 10px; /* Espacio entre la imagen y el texto */
    font-size: 10px;
    height: 10px;
}

.text h6 {
    margin-bottom: 1px; /* Espacio entre cada línea de texto */
}
.logo-img {
    width: 100px; /* Cambia este valor según tus necesidades */
    height: auto; /* Mantiene la proporción de la imagen */
}

    </style>
    <div class="top-bar ">
        <div class="row align-items-right">
            <div class="col-md-4 text-center text-md-left">
                <img src="imagenes/logo2.png" alt="Christian's Muebles de Melamina" class="img-fluid logo-img" />
            </div>
            <div class="col-md-8 text-center text-md-right contact-info">
                <p>FABRICACION DE DISEÑOS EN MELAMINA</p>
                <span class="ml-8"><i class="fas fa-phone-alt"></i><span class="ml-16">CEL: 998224145</span> 
                </i> MELAMINACRISTIAN@GMAIL.COM
            </div>
        </div>
    </div>
    
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="inicio.html">INICIO</a></li>
                <li class="nav-item"><a class="nav-link" href="#">NOSOTROS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">SERVICIOS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PROYECTOS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTACTANOS</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="hero">
        <div class="hero-text text-center">
            <h1>CHRISTIAN'S MUEBLES</h1>
            <h1>DISEÑAMOS Y FABRICAMOS MUEBLES EN MELAMINA</h1>
            <h2>TODO TIPO DE MUEBLES A MEDIDA</h2>
            <p>Todo tipo de trabajos en melamina con diseños exclusivos, modernos y personalizados,
                 hechos a medida y según sus requerimientos.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="heading">
            <h1>ROPEROS MODERNOS </h1>
            <hr>
        </div>
        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero1.jpg" class="card-img-top card-img-top-custom"alt="Imagen del producto 1">
                                    <div class="card-body">
                                      
                                        <h5 class="card-text">Ropero Armario 2 puertas Bronco 6 cajones  </h5>
                                        <p class="card-text">color: Blanco</p>
                                        <p class="card-text"><strong>S/223.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Armario Moderno Rivera 1 puerta 6 cajones </h5>
                                        <p class="card-text">color: Blanco-Duna </p>
                                        <p class="card-text"><strong>S/723.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero3.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Moderno Doha 4 puertas 2 cajones TU MESITA </h5>
                                        <p class="card-text">color Blanco/Duna</p>
                                        <p class="card-text"><strong>S/926.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero4.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Moderno 2 puertas 3 cajones Mendez</h5>
                                        <p class="card-text">color: Negro</p>
                                        <p class="card-text"><strong>S/1126.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero5.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Monterrey 6 Puertas 6 Cajones </h5>
                                        <p class="card-text">color:Cafe-tabaco</p>
                                        <p class="card-text"><strong>S/1132.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Tokio Madesa 2 Puertas Corredizas Con Espejo</h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1026.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 7">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Belem 8 Puertas 4 Cajones </h5>
                                        <p class="card-text">Color: Castaño-Blanco</p>
                                        <p class="card-text"><strong>S/1632.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 8">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Cris 4 Puertas 2 Cajones + Espacio Zapatero </h5>
                                        <p class="card-text">Color: Negro-Amaderado</p>
                                        <p class="card-text"><strong>S/1523.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </body>

    <div class="container my-5">
        <div class="heading">
            <h1>MUEBLES DE OFICINA</h1>
            <hr>
        </div>
      
            <body>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina1.png" class="card-img-top card-img-top-custom"alt="Imagen del producto 1">
                                        <div class="card-body">
                                          
                                            <h5 class="card-text">Escritorio para Oficina movible </h5>
                                            <p class="card-text">Color: Cedro</p>
                                            <p class="card-text"><strong>S/623.90 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Credenza de Oficina 2 puertas batientes  </h5>
                                            <p class="card-text">color: Blanco-Negro </p>
                                            <p class="card-text"><strong>S/626.90 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina3.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 3">
                                        <div class="card-body">
                                            <h5 class="card-title"> Escritorio Ejecutivo con 2 correderas telescopicas </h5>
                                            <p class="card-text">Color: Teka Artico</p>
                                            <p class="card-text"><strong>S/826.90 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina4.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Escritorio basico 2 cajones</h5>
                                            <p class="card-text">Color: Cedro</p>
                                            <p class="card-text"><strong>S/480.00 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina5.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                        <div class="card-body">
                                            <h5 class="card-title">Mueble para Recepcion Cris </h5>
                                            <p class="card-text">Color: Caramel</p>
                                            <p class="card-text"><strong>S/1132.90 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                        <div class="card-body">
                                            <h5 class="card-title">Locker 1 x 3 Puertas movible </h5>
                                            <p class="card-text">Color: Cedro</p>
                                            <p class="card-text"><strong>S/550.00 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 7">
                                        <div class="card-body">
                                            <h5 class="card-title">Locker 2 x 4 Puertas movible </h5>
                                            <p class="card-text">Color: Rovere-Negro</p>
                                            <p class="card-text"><strong>S/989.00 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 8">
                                        <div class="card-body">
                                            <h5 class="card-title">Librero Estante puertas libres </h5>
                                            <p class="card-text">Color: Arce</p>
                                            <p class="card-text"><strong>S/680.00 C/U</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
    <div class="container my-5">
        <div class="heading">
            <h1>REPOSTEROS ALTOS Y BAJOS</h1>
            <hr>
        </div>
        <p class="text-center">
            Los reposteros son muebles de cocina diseñados para almacenar utensilios,
            alimentos y otros artículos de cocina. Se encuentran en dos categorías principales: 
            reposteros altos, que se montan en las paredes, y reposteros bajos, que se colocan debajo
            de las encimeras. Estos muebles ayudan a mantener la cocina organizada y funcional,
            proporcionando un espacio específico para cada tipo de artículo.
        </p>
        
        <body>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero1.png" class="card-img-top card-img-top-custom"alt="Imagen del producto 1">
                                    <div class="card-body">
                                      
                                        <h5 class="card-text">Mueble de Cocina Multiusos  3 cajones 4 puertas </h5>
                                        <p class="card-text">Color: Blanco-Gris</p>
                                        <p class="card-text"><strong>S/1550.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Multiusos 3 cajones 4 puertas </h5>
                                        <p class="card-text">Color: Cedro </p>
                                        <p class="card-text"><strong>S/723.90 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero3.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Armario de cocina completo 11 puertas 1 cajon</h5>
                                        <p class="card-text">Color: Negro-Cedro</p>
                                        <p class="card-text"><strong>S/2500.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero4.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble para cocina 4 puertas 3 cajones </h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1500.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero5.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                    <div class="card-body">
                                        <h5 class="card-title"> Mueble de cocina Alacena Completo  </h5>
                                        <p class="card-text">Color: Gris </p>
                                        <p class="card-text"><strong>S/3000.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Moderno 6 puertas 1 cajón </h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1300.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 7">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Moderno 1cajon x 3puertas </h5>
                                        <p class="card-text">Color: Negro</p>
                                        <p class="card-text"><strong>S/1350.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 8">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de cocina simple 4puertas x 1cajon </h5>
                                        <p class="card-text">Color: Negro-Wengue</p>
                                        <p class="card-text"><strong>S/550.00 C/U</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>

        <footer class="footer mt-10 py-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Informes</h5>
                        <p>
                            Av. Humboldt, Alfonso Ugarte 3ra etapa Mz A Lote 3 Gregorio<br>
                            Albarracín Lanchipa, Tacna, Perú<br>
                            Celular: 924234321<br>
                            Celular: 952145103<br>
                            Correo: melaniesmcast@gmail.com
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5>Redes Sociales</h5>
                        <p>
                            Instagram: MueblesChristian<br>
                            WhatsApp: 923 711 418<br>
                            Facebook: Muebles Christian
                        </p>
                    </div>
                </div>
            </div>
        </footer>
  
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</div>
</html>

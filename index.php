<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian's Muebles de Melamina</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

  
   <?php include('header.php') ?>
    <br>
            <br>
            <br>
            <br>
    <div class="hero">
        <div class="hero-text text-center">
           
            <h2>CHRISTIAN'S MUEBLES</h2>
            <h2>DISEÑAMOS Y FABRICAMOS MUEBLES EN MELAMINA</h2>
            <h2>TODO TIPO DE MUEBLES A MEDIDA</h2>
            <p>Todo tipo de trabajos en melamina con diseños exclusivos, modernos y personalizados, hechos a medida y según sus requerimientos.</p>
        </div>
    </div>

    <style>
        .card button {
            background-color: black; /* Color de fondo del botón */
            color: white; /* Color de la letra del botón */
            border: none;
            padding: 10px 10px;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #0056b3; /* Color de fondo del botón al pasar el mouse */
        }
        .card-img-top-custom {
    object-fit: contain; /* O usa 'cover' si prefieres que la imagen cubra el contenedor */
    width: 100%; /* Asegúrate de que la imagen se ajuste al ancho del contenedor */
    height: auto; /* Mantén la proporción de la imagen */
}

     /* Añade este estilo a tu CSS */
.row > .col-md-3 {
    margin-bottom: 30px; /* Ajusta este valor según el espacio que necesites */
}

    </style>
</head>
<body>
    <div class="container my-5">
        <div class="heading">
            <h1>ROPEROS MODERNOS</h1>
            <hr>
        </div>

       
        <div class="row">
    <!-- Primer Producto -->
    <div class="col-md-3">
        <div class="card h-100">
            <img src="fotos/ropero1.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 1">
            <div class="card-body">
                <h5 class="card-title">Ropero Armario 2 puertas Bronco 6 cajones</h5>
                <p class="card-text">Color: Blanco</p>
                <p class="card-text"><strong>S/223.90 C/U</strong></p>
                <button onclick="addToCart('Ropero Armario 2 puertas Bronco 6 cajones', 'Blanco', 223.90, 'fotos/ropero1.jpg')">
                    <h6>Agregar al carrito</h6>
                </button>
            </div>
        </div>
    </div>
                <!-- Repite para otros productos -->

                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="fotos/ropero2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 2">
                        <div class="card-body">
                            <h5 class="card-title">Ropero Armario Moderno Rivera 1 puerta 6 cajones</h5>
                            <p class="card-text">Color: Blanco-Duna</p>
                            <p class="card-text"><strong>S/723.90 C/U</strong></p>
                            <button onclick="addToCart('Ropero Armario Moderno Rivera 1 puerta 6 cajones', 'Blanco-Duna', 723.90, 'fotos/ropero2.png')">
                    <h6>Agregar al carrito</h6>
                </button>
                        </div>
                    </div>
                </div>

                <!-- Añade aquí más tarjetas según sea necesario -->

                <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero3.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Moderno Doha 4 puertas 2 cajones</h5>
                                        <p class="card-text">color Blanco/Duna</p>
                                        <p class="card-text"><strong>S/926.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Moderno Doha 4 puertas 2 cajones', 'Blanco/Duna', 926.90, 'fotos/ropero3.jpg')">
                    <h6>Agregar al carrito</h6>
                </button>
                </button>
                                    </div>
                                </div>
                            </div>

                <div class="col-md-3">
                                <div class="card h-100">
                                <img src="fotos/ropero4.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Moderno 2 puertas 3 cajones Mendez</h5>
                                        <p class="card-text">color: Negro</p>
                                        <p class="card-text"><strong>S/1126.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Moderno 2 puertas 3 cajones Mendez', 'Negro', 1126.90, 'fotos/ropero4.jpg')">
                    <h6>Agregar al carrito</h6>
                </button>
                                    </div>
                                </div>
                            </div>

                <div class="col-md-3">
                                <div class="card h-100">
                                <img src="fotos/ropero5.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Monterrey 6 Puertas 6 Cajones </h5>
                                        <p class="card-text">color:Cafe-tabaco</p>
                                        <p class="card-text"><strong>S/1132.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Monterrey 6 Puertas 6 Cajones', 'color:Cafe-tabaco', 1132.90, 'fotos/ropero5.png')">
                    <h6>Agregar al carrito</h6>
                </button>
</div>
                                </div>
                            </div>

                <div class="col-md-3">
                    
                                <div class="card h-100">
                                    <img src="fotos/ropero6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Tokio Madesa 2 Puertas Corredizas Con Espejo</h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1026.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Tokio Madesa 2 Puertas Corredizas Con Espejo', 'Color: Blanco', 1026.90, 'fotos/ropero6.png')">
                    <h6>Agregar al carrito</h6>
                </button>
                                    </div>
                                </div>
                            </div>

                <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Belem 8 Puertas 4 Cajones </h5>
                                        <p class="card-text">Color: Castaño-Blanco</p>
                                        <p class="card-text"><strong>S/1632.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Belem 8 Puertas 4 Cajones', 'Color: Castaño-Blanco', 1632.90, 'fotos/ropero7.png')">
                    <h6>Agregar al carrito</h6>
                </button>
                                    </div>
                                </div>
                            </div>

                <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/ropero8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Ropero Cris 4 Puertas 2 Cajones + Espacio Zapatero</h5>
                                        <p class="card-text">Color: Negro-Amaderado</p>
                                        <p class="card-text"><strong>S/1523.90 C/U</strong></p>
                                        <button onclick="addToCart('Ropero Cris 4 Puertas 2 Cajones + Espacio Zapatero', 'Color: Negro-Amaderado', 1523.90, 'fotos/ropero8.png')">
                    <h6>Agregar al carrito</h6>
                </button>
                                        
                                    </div>
                                </div>
                            </div>

    <script>
       
    function addToCart(nombre, color, precio, imagen) {
        // Crear un objeto producto con los detalles
        const producto = {
            nombre: nombre,
            color: color,
            precio: precio,
            imagen: imagen,
            cantidad: 1 // Asignamos una cantidad inicial de 1
        };

        // Recuperar el carrito existente o crear uno nuevo si no existe
        let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

        // Agregar el nuevo producto al carrito
        carrito.push(producto);

        // Guardar el carrito actualizado en el localStorage
        localStorage.setItem('carrito', JSON.stringify(carrito));

        // Redireccionar a la página del carrito
        window.location.href = 'carrito.php';
    }




        
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



 <div class="container my-5">
        <div class="heading">
            <h1>MUEBLES DE OFICINA</h1>
            <hr>
        </div>
      
            <body>
                
                    <div class="row">

                      <!-- Primer Producto -->

                    <div class="col-md-3">
        <div class="card h-100">
            <img src="fotos/oficina1.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 1">
            <div class="card-body">
                <h5 class="card-title">Escritorio para Oficina movible </h5>
                <p class="card-text">Color: Cedro</p>
                <p class="card-text"><strong>S/623.90 C/U</strong></p>
                <button onclick="addToCart('Escritorio para Oficina movible', 'Color: Cedro', 623.90, 'fotos/oficina1.png')">
                    <h6>Agregar al carrito</h6>
                </button>
            </div>
        </div>
    </div>

      <!-- Segundo Producto -->

      <div class="col-md-3">
        <div class="card h-100">
            <img src="fotos/oficina2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 1">
            <div class="card-body">
                <h5 class="card-title">Credenza de Oficina 2 puertas batientes  </h5>
                <p class="card-text">color: Blanco-Negro</p>
                <p class="card-text"><strong>S/626.90 C/U</strong></p>
                <button onclick="addToCart('Credenza de Oficina 2 puertas batientes ', 'color: Blanco-Negro', 626.90, 'fotos/oficina2.png')">
                    <h6>Agregar al carrito</h6>
                </button>
            </div>
        </div>
    </div>

  <!-- Segundo Producto -->

                                <div class="col-md-3">

                                    <div class="card h-100">
                                        <img src="fotos/oficina3.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 3">
                                        <div class="card-body">
                                            <h5 class="card-title"> Escritorio Ejecutivo con 2 correderas telescopicas </h5>
                                            <p class="card-text">Color: Teka Artico</p>
                                            <p class="card-text"><strong>S/826.90 C/U</strong></p>
                                            <button onclick="addToCart('Escritorio Ejecutivo con 2 correderas telescopicas',
                                             'Color: Teka Artico',826.90,'fotos/oficina3.png')"><h6>Agregar al carrito</h6></button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina4.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Escritorio basico 2 cajones</h5>
                                            <p class="card-text">Color: Cedro</p>
                                            <p class="card-text"><strong>S/480.00 C/U</strong></p>
                                            <button onclick="addToCart('Escritorio basico 2 cajones','Color: Cedro',480.00,
                                            'fotos/oficina4.png')"><h6>Agregar al carrito</h6></button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina5.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                        <div class="card-body">
                                            <h5 class="card-title">Mueble para Recepcion Cris </h5>
                                            <p class="card-text">Color: Caramel</p>
                                            <p class="card-text"><strong>S/1132.90 C/U</strong></p>
                                            <button onclick="addToCart('Mueble para Recepcion Cris','Color: Caramel',1132.90,'fotos/oficina5.png')"><h6>Agregar al carrito</h6>
                                        </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                        <div class="card-body">
                                            <h5 class="card-title">Locker 1 x 3 Puertas movible </h5>
                                            <p class="card-text">Color: Cedro</p>
                                            <p class="card-text"><strong>S/550.00 C/U</strong></p>
                                            <button onclick="addToCart('Locker 1 x 3 Puertas movible','Color: Cedro',550.00,
                                            'fotos/oficina6.png')"><h6>Agregar al carrito</h6></button>
                                        </div>
                                    </div>
                                </div>

 <!-- sexto Producto -->

                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 7">
                                        <div class="card-body">
                                            <h5 class="card-title">Locker 2 x 4 Puertas movible </h5>
                                            <p class="card-text">Color: Rovere-Negro</p>
                                            <p class="card-text"><strong>S/989.00 C/U</strong></p>
                                            <button onclick="addToCart('Locker 2 x 4 Puertas movible ','Color: Rovere-Negro',989.00,
                                            'fotos/oficina7.png')"><h6>Agregar al carrito</h6></button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="card h-100">
                                        <img src="fotos/oficina8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 8">
                                        <div class="card-body">
                                            <h5 class="card-title">Librero Estante puertas libres </h5>
                                            <p class="card-text">Color: Arce</p>
                                            <p class="card-text"><strong>S/680.00 C/U</strong></p>
                                            <button onclick="addToCart('Librero Estante puertas libres',
                                            'Color: Arce',680.00,'fotos/oficina8.png')"><h>Agregar al carrito</h6></button>
                                        </div>
                                    </div>
                                </div>
                           
<script>
       
       function addToCart(nombre, color, precio, imagen) {
           // Crear un objeto producto con los detalles
           const producto = {
               nombre: nombre,
               color: color,
               precio: precio,
               imagen: imagen,
               cantidad: 1 // Asignamos una cantidad inicial de 1
           };
   
           // Recuperar el carrito existente o crear uno nuevo si no existe
           let carrito = JSON.parse(localStorage.getItem('carrito')) || [];
   
           // Agregar el nuevo producto al carrito
           carrito.push(producto);
   
           // Guardar el carrito actualizado en el localStorage
           localStorage.setItem('carrito', JSON.stringify(carrito));
   
           // Redireccionar a la página del carrito
           window.location.href = 'carrito.php';
       }
   
 </script>
   
   

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
    
         
                <div class="row">
                    
                <!-- Primer Producto -->

                          <div class="col-md-3">

                                <div class="card h-100">
                                    <img src="fotos/reportero1.png" class="card-img-top card-img-top-custom"alt="Imagen del producto 1">
                                    <div class="card-body">
                                      
                                        <h5 class="card-text">Mueble de Cocina Multiusos  3 cajones 4 puertas </h5>
                                        <p class="card-text">Color: Blanco-Gris</p>
                                        <p class="card-text"><strong>S/1550.00 C/U</strong></p>
                                        <button onclick="addToCart('Mueble de Cocina Multiusos  3 cajones 4 puertas',
                                        'Color: Blanco-Gris',1550.00,'fotos/reportero1.png')"><h6>Agregar al carrito</h6></button>
                                    </div>
                                </div>
                            </div>
                        
                           <!-- SEgundo Producto -->

                           <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero2.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Multiusos 3 cajones 4 puertas </h5>
                                        <p class="card-text">Color: Cedro </p>
                                        <p class="card-text"><strong>S/723.90 C/U</strong></p>
                                        <button onclick="addToCart('Mueble de Cocina Multiusos 3 cajones 4 puertas',
                                        'Color: Cedro',723.90,'fotos/reportero2.png')"><h6>Agregar al carrito</h6></button>
                                    </div>
                                </div>
                            </div>

   <!-- TERCER Producto -->

                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero3.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Armario de cocina completo 11 puertas 1 cajon</h5>
                                        <p class="card-text">Color: Negro-Cedro</p>
                                        <p class="card-text"><strong>S/2500.00 C/U</strong></p>
                                        <button onclick="addToCart('Armario de cocina completo 11 puertas 1 cajon',
                                        'Color: Negro-Cedro',2500.00,'fotos/reportero3.png')"><h6>Agregar al carrito</h6></button>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero4.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble para cocina 4 puertas 3 cajones </h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1500.00 C/U</strong></p>
                                        <button onclick="addToCart('Mueble para cocina 4 puertas 3 cajones',
                                        'Color: Blanco',1500.00,'fotos/reportero4.png')"><h5>Agregar al carrito</h5></button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero5.jpg" class="card-img-top card-img-top-custom" alt="Imagen del producto 5">
                                    <div class="card-body">
                                        <h5 class="card-title"> Mueble de cocina Alacena Completo  </h5>
                                        <p class="card-text">Color: Gris </p>
                                        <p class="card-text"><strong>S/3000.00 C/U</strong></p>
                                        <button onclick="addToCart(' Mueble de cocina Alacena Completo ',
                                        'Color: Gris',3000.00 ,'fotos/reportero5.jpg')"><h5>Agregar al carrito</h5></button>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero6.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Moderno 6 puertas 1 cajón </h5>
                                        <p class="card-text">Color: Blanco</p>
                                        <p class="card-text"><strong>S/1300.00 C/U</strong></p>
                                        <button onclick="addToCart('Mueble de Cocina Moderno 6 puertas 1 cajón ',
                                        'Color: Blanco',1300.00,'fotos/reportero6.png')"><h5>Agregar al carrito</h5></button>
                                    </div>
                                </div>
                            </div>


                           <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero7.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 7">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de Cocina Moderno 1cajon x 3puertas </h5>
                                        <p class="card-text">Color: Negro</p>
                                        <p class="card-text"><strong>S/1350.00 C/U</strong></p>
                                        <button onclick="addToCart('Mueble de Cocina Moderno 1cajon x 3puertas ','Color: Negro',1350.00,'fotos/reportero7.png'
                                        )"><h5>Agregar al carrito</h5></button>
                                    </div>
                                </div>
                            </div>


                          <div class="col-md-3">
                                <div class="card h-100">
                                    <img src="fotos/reportero8.png" class="card-img-top card-img-top-custom" alt="Imagen del producto 8">
                                    <div class="card-body">
                                        <h5 class="card-title">Mueble de cocina simple 4puertas x 1cajon </h5>
                                        <p class="card-text">Color: Negro-Wengue</p>
                                        <p class="card-text"><strong>S/550.00 C/U</strong></p>
                                        <button onclick="addToCart('Mueble de cocina simple 4puertas x 1cajon',
                                        'Color: Negro-Wengue',550.00,'fotos/reportero8.png')"><h5>Agregar al carrito</h5></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
              </div>
            </div>
        </div>
    </div>
</div>

                        
                           
    </body>

<style>


.block {
    width: 100%;
    padding: 50px 20px;
    box-sizing: border-box;
    
}

#section1 {
    background-color: #999999;
}

#section2 {
    background-color: #cccccc;
}

#section3 {
    background-color: #999999;
}

h2 {
    margin-top: 0;
    text-align: center;
}

p {
    text-align: center;
}

</style>

    <div class="block" id="section1">
        <h2>Sección 1</h2>
        <p>Contenido de la primera sección.</p>
       
    </div>

    <div class="block" id="section2">
        <h2>Sección 2</h2>
        <p>Contenido de la segunda sección.</p>
    </div>

    <div class="block" id="section3">
        <h2>Sección 3</h2>
        <p>Contenido de la tercera sección.</p>
    </div>

</body>

<div class="container my-5">
<?php include('footer.php') ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro de Compras</title>
    <style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
}

/* Contenedor del carrito */
.container {
    max-width: 100%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
}

/* Encabezado */
h2 {
    font-size: 24px;
    color: #333;
    margin: 0;
    padding-bottom: 10px;
}

/* Alerta */
.alert {
    padding: 10px;
    background-color: #f1f1f1;
    border-left: 5px solid #8bc34a;
    color: #333;
    margin-bottom: 20px;
}

/* Promo box */
.promo-box {
    background-color: #333;
    color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Permite que el contenido envuelva en pantallas más pequeñas */
}

/* Botón en la promo box */
.promo-box button {
    background-color: #4caf50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin: 10px 0;
    flex-shrink: 0; /* Impide que el botón se reduzca en pantallas pequeñas */
}

/* Tabla */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 14px; /* Ajusta el tamaño de fuente */
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f9f9f9;
}

/* Imágenes de producto */
.product-img {
    width: 50px;
    height: auto;
}

/* Botones */
.btn {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    margin-top: 10px;
    cursor: pointer;
    font-size: 14px; /* Ajusta el tamaño de fuente */
}

.btn:hover {
    background-color: #555;
}

/* Campo de texto */
input[type="text"] {
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    margin-top: 10px;
}

/* Media Queries para dispositivos móviles */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    h2 {
        font-size: 22px; /* Ajustar tamaño de fuente para pantallas más pequeñas */
    }

    table {
        font-size: 12px; /* Ajustar tamaño de fuente para pantallas más pequeñas */
    }

    th, td {
        padding: 8px;
    }

    .promo-box {
        flex-direction: column;
        align-items: stretch;
    }

    .promo-box button {
        width: 100%;
        margin-top: 10px;
    }

    .btn {
        width: 100%;
        box-sizing: border-box;
        margin-top: 10px; /* Añadido espacio entre botones */
    }
}

@media (max-width: 480px) {
    .container {
        padding: 10px;
    }

    h2 {
        font-size: 20px; /* Ajustar aún más el tamaño de fuente en pantallas muy pequeñas */
    }

    table {
        font-size: 10px; /* Ajustar aún más el tamaño de fuente en pantallas muy pequeñas */
    }

    th, td {
        padding: 6px;
    }

    .promo-box button {
        font-size: 14px; /* Ajustar tamaño de fuente para el botón en pantallas pequeñas */
        padding: 8px;
    }

    .btn {
        font-size: 12px; /* Ajustar tamaño de fuente para el botón en pantallas pequeñas */
        padding: 8px;
    }
}



    </style>
</head>
<body>
    <div class="container">
        <h2>Carro de compras</h2>
        <div class="alert">
            <span>MUEBLERIA CRISTIANS.</span>
        </div>
        <div class="promo-box">
            <span>¡Agrega ahora la «Instalación mueble 02» a tu compra!</span>
            <button>Agregar Instalación mueble 02</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody id="carrito-body">
                <!-- Aquí se insertará el producto seleccionado -->
            </tbody>
            <tfoot>
    <tr>
        <td colspan="4" style="text-align:right; font-weight: bold;">Total:</td>
        <td id="total">S/0.00</td>
    </tr>
</tfoot>
        </table>
        <div style="display: flex; justify-content: space-between;">
            <div>
                <input type="text" placeholder="Código" style="padding: 10px; width: 150px;">
                <button class="btn">Aplicar cupón</button>
            </div>
            <div>
                <button class="btn">Actualizar carrito</button>
            </div>
        </div>
    </div>

    <script>
       
        

        function removeFromCart(index) {
            const productos = JSON.parse(localStorage.getItem('carrito')) || [];
            productos.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(productos));
            location.reload(); // Recargar la página para actualizar el carrito
        }

        function updateQuantity(index, cantidad) {
            const productos = JSON.parse(localStorage.getItem('carrito')) || [];
            productos[index].cantidad = parseInt(cantidad);
            localStorage.setItem('carrito', JSON.stringify(productos));
            location.reload(); // Recargar la página para actualizar el subtotal
        }
        // Recuperar los productos del localStorage y cargar el carrito
        function loadCarrito() {
    const productos = JSON.parse(localStorage.getItem('carrito')) || [];
    const carritoBody = document.getElementById('carrito-body');
    carritoBody.innerHTML = ''; // Limpiar el contenido actual del carrito

    if (productos.length > 0) {
        productos.forEach((producto, index) => {
            // Verificar que producto.precio y producto.cantidad son números válidos
            const precio = parseFloat(producto.precio) || 0;
            const cantidad = parseInt(producto.cantidad) || 0;

            const row = document.createElement('tr');
            row.innerHTML = `
                <td><button class="btn" onclick="removeFromCart(${index})">X</button></td>
                <td>
                    <img src="${producto.imagen}" alt="${producto.nombre}" style="width:50px;">
                    ${producto.nombre}
                </td>
                <td>S/${precio.toFixed(2)}</td>
                <td><input type="number" value="${cantidad}" min="1" style="width: 50px;" onchange="updateQuantity(${index}, this.value)"></td>
                <td>S/${(precio * cantidad).toFixed(2)}</td>
            `;
            carritoBody.appendChild(row);
        });
    } else {
        carritoBody.innerHTML = `<tr><td colspan="5" style="text-align:center;">No hay productos en el carrito.</td></tr>`;
    }

    // Actualizar el total después de cargar los productos
    updateTotal();
}


// Calcular y actualizar el total
function updateTotal() {
    const productos = JSON.parse(localStorage.getItem('carrito')) || [];
    let total = 0;

    productos.forEach(producto => {
        total += producto.precio * producto.cantidad;
    });

    document.getElementById('total').innerText = `S/${total.toFixed(2)}`;
}

// Función para eliminar un producto del carrito
function removeFromCart(index) {
    const productos = JSON.parse(localStorage.getItem('carrito')) || [];
    productos.splice(index, 1); // Elimina el producto en el índice especificado
    localStorage.setItem('carrito', JSON.stringify(productos));
    loadCarrito(); // Actualizar el carrito después de eliminar un producto
}
// Función para actualizar la cantidad de un producto en el carrito
function updateQuantity(index, cantidad) {
    const productos = JSON.parse(localStorage.getItem('carrito')) || [];
    productos[index].cantidad = parseInt(cantidad);
    localStorage.setItem('carrito', JSON.stringify(productos));
    loadCarrito(); // Actualizar el carrito sin recargar la página
}

// Cargar el carrito al inicio
loadCarrito();

// Agregar evento al botón "Actualizar carrito"
document.querySelector('.btn').addEventListener('click', function() {
    loadCarrito(); // Actualizar el carrito y el total
});

    </script>
</body>
</html>

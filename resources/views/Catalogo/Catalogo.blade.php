<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalogo</title>
    <link rel="stylesheet" href="{{ asset('css/Catalogo.css') }}">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>



    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">

        <div class="ico1">
            @auth
                <!-- Ícono de perfil genérico, el cual me lleva a formulario registro -->
                <a href="{{ route('perfil') }}">
                    <img src="images/perfil.png" alt="perfil" class="perfil">
                </a>
            @endauth
            <img src="images/carritocompras.png" alt="carritocompras" class="carrito">
            <img src="images/ajustes.png" alt="ajustes" class="ajustes">
        </div>

        <div class="b11">
            <input type="text" placeholder="Buscar" class="barrabusqueda">
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                <li><a href="#">Categoría</a></li>
                <li><a href="#">Ofertas</a></li>
                @auth
                    <li><a href="#">Compras</a></li>
                    <li><a href="#">Vender</a></li>
                    <li><a href="#">Historial</a></li>
                    <li><a href="#">Mis Favoritos</a></li>
                    <li><a href="#">Ayuda/PQRS</a></li>
                @endauth
            </ul>
        </nav>
    </header>



    <main>
        <section class="catalog">
            <div class="product-card">
                <img src="{{ asset('images/pro1.jpg') }}" alt="Producto 2">
                <h2>Alimento para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro2.jpg') }}" alt="Producto 2">
                <h2>Juguete para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro3.jpg') }}" alt="Producto 2">
                <h2>Dispensador de Alimento</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro4.jpg') }}" alt="Producto 2">
                <h2>Shampoo para perro</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro5.png') }}" alt="Producto 2">
                <h2>Alimento gato (15Kg)</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro2.jpg') }}" alt="Producto 2">
                <h2>Juguete para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro1.jpg') }}" alt="Producto 2">
                <h2>Alimento para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro5.png') }}" alt="Producto 2">
                <h2>Alimento gato (15Kg)</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro3.jpg') }}" alt="Producto 2">
                <h2>Dispensador de Alimento</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro4.jpg') }}" alt="Producto 2">
                <h2>Shampoo para perro</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro5.png') }}" alt="Producto 2">
                <h2>Alimento gato (15Kg)</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro3.jpg') }}" alt="Producto 2">
                <h2>Dispensador de Alimento</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro4.jpg') }}" alt="Producto 2">
                <h2>Shampoo para perro</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/pro2.jpg') }}" alt="Producto 2">
                <h2>Juguete para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>

            <div class="product-card">
                <img src="{{ asset('images/pro1.jpg') }}" alt="Producto 2">
                <h2>Alimento para gato</h2>
                <p>$20.00</p>
                <button>Agregar al carrito</button>
            </div>


        </section>
    </main>

    <footer>
        <div class="pie-pag">
        <p>&copy; Copyrigth 2022 | OneClick Pets <br>Información legal | Politicas de privacidad</p>
    </div>

    <div class="redes">
        <a href="https://www.facebook.com" target="_blank">
            <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="facebook">
        </a>
        <a href="https://www.twitter.com" target="_blank">
            <img src="{{ asset('images/x.png') }}" alt="X" class="TX">
        </a>
        <a href="https://www.youtube.com" target="_blank">
            <img src="{{ asset('images/youtube.png') }}" alt="Youtube" class="youtube">
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="instagram">
        </a>
    </div>
    </footer>

</body>
</html>

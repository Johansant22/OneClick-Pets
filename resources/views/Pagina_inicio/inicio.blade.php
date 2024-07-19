<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link rel="icon" type="image/png" href="images/favicon.png" />

</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">

        <div class="ico1">
            @auth
                <!-- Ícono de perfil con las iniciales del usuario -->
                <img src="{{ $gravatarUrl }}" alt="perfil" class="perfil">
            @else
                <!-- Ícono de perfil genérico, el cual me lleva a formulario registro -->
                <a href="{{ route('formulario-iniciar-sesion') }}">
                    <img src="images/perfil.png" alt="perfil" class="perfil">
                </a>
            @endauth
            <a href="{{ route('carrito-compras') }}">
                <img src="images/carritocompras.png" alt="carritocompras" class="carrito">
            </a>


            <a href="{{ route('perfil') }}">
                <img src="images/ajustes.png" alt="ajustes" class="ajustes">
            </a>

        </div>

        <div class="b11">
            <input type="text" placeholder="Buscar" class="barrabusqueda">
        </div>

        <nav>
            <ul>
                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                <li><a href="#">Categoría</a></li>
                <li><a href="{{route('ofertas')}}">Ofertas</a></li>
                @auth
                    <li><a href="#">Compras</a></li>
                    <li><a href="#">Vender</a></li>
                    <li><a href="#">Historial</a></li>
                    <li><a href="#">Mis Favoritos</a></li>
                    <li><a href="{{ route('ayuda') }}">Ayuda/PQRS</a></li>
                @endauth
            </ul>
        </nav>
    </header>

    <div id="contenedor_imagen_inicio">
        <img src="images/inico.jpg" class="img-inicio">
    </div>

    <footer>
        <div class="pie-pag">
            <p>&copy; Copyrigth 2022 | OneClick Pets <br>Información legal | Políticas de privacidad</p>
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

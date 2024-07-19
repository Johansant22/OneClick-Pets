<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración de usuario</title>
    <link rel="stylesheet" href="css/ConfigUsuario.css">
    <link rel="icon" type="image/png" href="imagenes/favicon.png" />

</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">   <! -- Enlazar -->

        <div class="ico1">
        <img src="images/perfil.png" alt="perfil" class="perfil">      <! -- Enlazar -->
        <img src="images/carritocompras.png" alt="carritocompras" class="carrito">    <! -- Enlazar -->
        <img src="images/ajustes.png" alt="ajustes" class="ajustes">              <! -- Enlazar -->
        </div>

        <div class="b11">
        <input type="text" placeholder="Buscar" class="barrabusqueda">
        </div>

        <nav>
            <ul>
              <li><a href="{{ route('catalogo') }}">Catálogo</a></li>          <! -- Enlazar -->
              <li><a href="#">Categoría</a></li>          <! -- Enlazar -->
              <li><a href="#">Compras</a></li>         <! -- Enlazar -->
              <li><a href="#">Vender</a></li>            <! -- Enlazar -->
              <li><a href="#">Ofertas</a></li>           <! -- Enlazar -->
              <li><a href="#">Historial</a></li>           <! -- Enlazar -->
              <li><a href="#">Mis Favoritos</a></li>            <! -- Enlazar -->
              <li><a href="#">Ayuda/PQRS</a></li>               <! -- Enlazar -->
            </ul>
          </nav>
    </header>



    <div class="infoConfig">
    <h2>Configuración Cuenta</h2>
    </div>

<div class="info-perfil">               <! -- Enlazar -->
    <h2 class="tit-1">@auth
        {{ Auth::user()->name }}
    @endauth</h2>
    <div>
        <img src="images/cta personal.png" alt="Perfil" class="perfil11">
        <div class="cont-1">
        <p>
            @auth
                {{ Auth::user()->email}}
            @endauth
        </div>
    </div>
</div>

<div class="act-info">
    <div>
            <img src="images/cta personal.png" alt="Datos de cuenta" class="perfil22">
            <h3 class="dtcuenta">Datos de cuenta</h3>
            <p class="inf-cuenta">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est amet alias reprehenderit? Iure vero id hic vitae quibusdam libero excepturi.</p>
    </div>

    <div>
        <img src="images/tarjeta.svg" alt="Tarjetas" class="tarjeta">
        <div>
            <h3 class="dt-tarjeta">Tarjetas</h3>
            <p class="inf-tarjeta">Tarjetas guardadas en tu cuenta</p>
        </div>
    </div>

    <div>
        <img src="images/candado.png" alt="Seguridad" class="seguridad">
        <div>
            <h3 class="dt-seg">Seguridad</h3>
            <p class="inf-seg">Configuraciones de seguridad de tu cuenta</p>
        </div>
    </div>
</div>




<div class="menu-opciones">
    <h2>Opciones</h2>
    <select>
        <option value="Comprador">Comprador</option>
        <option value="Vendedor">Vendedor</option>
    </select>
    <a href="{{ route('cerrar-sesion') }}">
        <ul name="configuraciones" id="configuraciones">
            <li>
                CERRAR SESIÓN
            </li>
        </ul>
    </a>

</div>

<img src="images/soporte.png" class="soporte">

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

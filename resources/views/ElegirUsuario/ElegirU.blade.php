<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href= "css/ElegirU.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de usuario</title>
    
</head>
<body>

    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">  <! -- enlazar al home -->

        <div class="ico1">
            <img src="images/perfil.png" alt="perfil" class="perfil">                     <! -- enlazar -->
            <img src="images/carritocompras.png" alt="carritocompras" class="carrito">    <! -- enlazar -->
            <img src="images/ajustes.png" alt="ajustes" class="ajustes">                  <! -- enlazar -->
            </div>
    
            <div class="b11">
            <input type="text" placeholder="Buscar" class="barrabusqueda">
            </div>
    
            <nav>
                <ul>
                  <li><a href="#">Catálogo</a></li>  <! -- enlazar toda esta navegacion -->
                  <li><a href="#">Categoría</a></li>
                  <li><a href="#">Compras</a></li>
                  <li><a href="#">Vender</a></li>
                  <li><a href="#">Ofertas</a></li>
                  <li><a href="#">Historial</a></li>
                  <li><a href="#">Mis Favoritos</a></li>
                  <li><a href="#">Ayuda/PQRS</a></li>         <! -- Nagevacion -->
                </ul>
              </nav>
        </header>
    </header>

    <h1 class="titulo-tipo_user">Elegir tipo de usuario </h1>

    <section class="select_user" id="select_user">
        <div class="contenedor-tipo-usuario">
            <div class="contenedor-cliente tarjeta-cliente">                 <! -- enlazar -->
                <img src="images/cta personal.png" alt="" loading="lazy" class="icono-ctapersonal">
                <h2 class="titulo-cliente">Cuenta personal</h2>
            </div>
            <div class="contenedor-vendedor tarjeta-vendedor">                 <! -- enlazar -->
                <img src="images/cta empresa.png" alt="" loading="lazy" class="icono-cta-empresa">
                <h2 class="titulo-empresa">Empresa</h2>
            </div>
        </div>
    </section>

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

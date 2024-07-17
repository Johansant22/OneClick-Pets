<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="css/InicioS.css">

</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">  <! -- Enlazar -->

    </header>
<main>
    <div class="container">
        <h1>INICIAR SESION</h1>
        <form action="{{ route('inicia-sesion') }}" method="post">
            @csrf

            <label class="correo" for="email">Correo Electrónico*</label><br>
            <input type="email" id="email" name="email" required><br> <br>

            <label class="correo" for="password">Contraseña*</label><br>
            <input class="passwordIni" type="password" id="password" name="password" required><br>

            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recordar Contraseña</label><br>

            <button type="submit" class="button1">Iniciar sesión</button>
        </form>

        <div class="BotonesIni">
        <button class="button1">iniciar sesion</button>


        <a href="{{ route('registro.create') }}">
            <button class="button2">Crear cuenta</button>
        </a>


        <p class="texto_ini">iniciar con:</p>

    <div class="20px !importantenedorRed">

    <img src="imagenes/faceInicio.png" class="FaceI">
    <img src="imagenes/gmail-Inicio.png" class="email-ini">
    </div>



</main>

<footer>
        <div class="pie-pag">
        <p>&copy; Copyrigth 2022 | OneClick Pets <br> Información legal | Politicas de privacidad
        </p>
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

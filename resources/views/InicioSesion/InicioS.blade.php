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
        <h1>INICIAR SESIÓN</h1>
        <action="/login" method="post">
            
            <label for="email">Correo Electronico*</label><br>
            <input type="email" id="email" name="email" required><br> <br>
            <label for="password">Contraseña*</label><br>
            <input type="password" id="password" name="password" required><br>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recordar Contraseña</label><br>
        </form>
    
        <div class="BotonesIni">
        <button class="button1">Iniciar Sesión</button> <! -- Enlazar -->
        <button class="button2">Crear Cuenta</button>   <! -- Enlazar -->
        </div>
        
    
        <p class="texto_ini">Iniciar con:</p>
    
    <div class="Icon33">
    
        <a href="https://www.facebook.com">
            <img src="images/faceInicio.png" class="FaceI" alt="Registrarse con Facebook">
        </a>
        <a href="https://accounts.google.com/">
            <img src="images/gmail-Inicio.png" class="email-ini" alt="Registrarse con Gmail">
        </a>
    </div>
</main>


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
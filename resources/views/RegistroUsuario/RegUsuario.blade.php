<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/RegUsuario.css">
</head>
<body>
    <header> 
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header"> 
    </header>

    <div class="container">
        <form action="/submit_registration" method="post">
            <h2>Registro de Usuario</h2>
            <form>
                <label for="fname">Nombres:</label><br>
                <input type="text" id="fname" name="fname"><br>
                
                <label for="lname">Apellidos:</label><br>
                <input type="text" id="lname" name="lname"><br>
                
                <label for="uname">Usuario:</label><br>
                <input type="text" id="uname" name="uname"><br>
                
                <label for="pwd">Crear Contraseña:</label><br>
                <input type="password" id="pwd" name="pwd"><br>
                
                <label for="cpwd">Confirmar Contraseña:</label><br>
                <input type="password" id="cpwd" name="cpwd"><br>
                
                <input type="checkbox" id="terms" name="terms">
                <label for="terms"> Acepto términos y condiciones</label><br>
            </form>

        <div class="Boton">
            <button class="button1">Registrarse</button>
            <p class="texto_ini">Ya tienes una cuenta? inicia con:</p>
            <div class="iconos3">
                <img src="images/faceInicio.png" class="FaceI">
                <img src="images/gmail-Inicio.png" class="email-ini">
            </div>
            </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="css/RegUsuario.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">
    </header>

    <div class="container">
        <form action="{{ route('validar-registro') }}" method="POST">
            @csrf
            <h2>Registro de Usuario</h2>

            <!-- Primer grupo de campos -->
            <div class="form-group1">
                <label for="Nombre1">Primer Nombre:</label>
                <input type="text" id="Nombre1" name="Nombre1" required>

                <label for="Nombre2">Segundo Nombre:</label>
                <input type="text" id="Nombre2" name="Nombre2">
            </div>

            <!-- Segundo grupo de campos -->
            <div class="form-group2">
                <label for="Apellido1">Primer Apellido:</label>
                <input type="text" id="Apellido1" name="Apellido1" required>

                <label for="Apellido2">Segundo Apellido:</label>
                <input type="text" id="Apellido2" name="Apellido2">
            </div>

            <!-- Tercer grupo de campos -->
            <div class="form-group1">
                <label for="Direccion">Dirección:</label>
                <input type="text" id="Direccion" name="Direccion" required>
            </div>

            <!-- Cuarto grupo de campos -->
            <div class="form-group2">
                <label for="Num_identificacion">Número de Identificación:</label>
                <input type="text" id="Num_identificacion" name="Num_identificacion" required>

                <label for="Correo">Correo:</label>
                <input type="email" id="Correo" name="Correo" required>
            </div>

            <!-- Quinto grupo de campos -->
            <div class="form-group1">
                <label for="Telefono">Teléfono:</label>
                <input type="text" id="Telefono" name="Telefono" required>

            </div>
            <!-- Octavo grupo de campos -->
            <div class="form-group2">
                <label for="pwd">Crear Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>

                <label for="cpwd">Confirmar Contraseña:</label>
                <input type="password" id="confirm-contrasena" name="confirm-contrasena" required>
            </div>

            <!-- Checkbox -->
            <div class="check">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Acepto términos y condiciones</label>
            </div>

            <!-- Botón de registro -->
            <a href="{{ route('prueba-log') }}">
                <button type="submit" class="button1">Registrarse</button>
            </a>


            <!-- Enlace para iniciar sesión -->
            <a href="{{ route('formulario-iniciar-sesion') }}">
                <p class="texto_ini">¿Ya tienes una cuenta? Inicia sesión aquí.</p>
            </a>

            <!-- Otra opción de inicio de sesión -->
            <p class="texto_ini">Inicia con:</p>
            <div class="iconos3">
                <a href="https://www.facebook.com">
                    <img src="images/faceInicio.png" class="FaceI" alt="Registrarse con Facebook">
                </a>
                <a href="https://accounts.google.com/">
                    <img src="images/gmail-Inicio.png" class="email-ini" alt="Registrarse con Gmail">
                </a>
            </div>
        </form>
    </div>

    <img src="images/soporte.png" class="soporte">

    <footer>
        <div class="pie-pag">
            <p>&copy; Copyright 2022 | OneClick Pets <br>Información legal | Políticas de privacidad</p>
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

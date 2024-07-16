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
        <a href="{{ route('registro.create') }}"> <!-- Ruta al formulario de registro -->
            <img src="images/perfil.png" alt="Perfil" class="perfil">
        </a>
    </header>

    <div class="container">
        <form action="{{ route('registro.create') }}" method="POST">
            @csrf
            <h2>Registro de Usuario</h2>

            <!-- Primer grupo de campos -->
            <div class="form-group">
                <label for="Nombre1">Primer Nombre:</label>
                <input type="text" id="Nombre1" name="Nombre1" required>

                <label for="Nombre2">Segundo Nombre:</label>
                <input type="text" id="Nombre2" name="Nombre2">
            </div>

            <!-- Segundo grupo de campos -->
            <div class="form-group">
                <label for="Apellido1">Primer Apellido:</label>
                <input type="text" id="Apellido1" name="Apellido1" required>

                <label for="Apellido2">Segundo Apellido:</label>
                <input type="text" id="Apellido2" name="Apellido2">
            </div>

            <!-- Tercer grupo de campos -->
            <div class="form-group">
                <label for="Direccion">Dirección:</label>
                <input type="text" id="Direccion" name="Direccion" required>
            </div>

            <!-- Cuarto grupo de campos -->
            <div class="form-group">
                <label for="Num_identificacion">Número de Identificación:</label>
                <input type="text" id="Num_identificacion" name="Num_identificacion" required>

                <label for="Correo">Correo:</label>
                <input type="email" id="Correo" name="Correo" required>
            </div>

            <!-- Quinto grupo de campos -->
            <div class="form-group">
                <label for="Telefono">Teléfono:</label>
                <input type="text" id="Telefono" name="Telefono" required>

                <label for="tipo_documento_id">Tipo de Documento:</label>
                <select id="tipo_documento_id" name="tipo_documento_id" required>
                    <option value="">Selecciona...</option>
                    <option value="CC">Cédula de Ciudadanía (CC)</option>
                    <option value="TI">Tarjeta de Identidad (TI)</option>
                    <option value="CE">Cédula de Extranjería (CE)</option>
                </select>
            </div>

            <!-- Sexto grupo de campos -->
            <div class="form-group">
                <label for="ciudad_id">Ciudad:</label>
                <input type="text" id="ciudad_id" name="ciudad_id" required>

                <label for="departamento_id">Departamento:</label>
                <input type="text" id="departamento_id" name="departamento_id" required>
            </div>

            <!-- Séptimo grupo de campos -->
            <div class="form-group">
                <label for="tipo_tercero_id">Tipo de cuenta:</label>
                <select id="tipo_tercero_id" name="tipo_tercero_id" required>
                    <option value="">Selecciona...</option>
                    <option value="1">Empresa</option>
                    <option value="2">Cuenta Personal</option>
                </select>

                <label for="genero_id">Género:</label>
                <select id="genero_id" name="genero_id" required>
                    <option value="">Selecciona...</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                </select>
            </div>

            <!-- Octavo grupo de campos -->
            <div class="form-group">
                <label for="pwd">Crear Contraseña:</label>
                <input type="password" id="pwd" name="pwd" required>

                <label for="cpwd">Confirmar Contraseña:</label>
                <input type="password" id="cpwd" name="cpwd" required>
            </div>

            <!-- Checkbox -->
            <div class="form-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Acepto términos y condiciones</label>
            </div>

            <!-- Botón de registro -->
            <button type="submit" class="button1">Registrarse</button>

            <!-- Enlace para iniciar sesión -->
            <a href="{{ route('inicio.index') }}">
                <p class="texto_ini">¿Ya tienes una cuenta? Inicia sesión aquí.</p>
            </a>

            <!-- Otra opción de inicio de sesión -->
            <p class="texto_ini">Inicia con:</p>
            <div class="iconos3">
                <img src="images/faceInicio.png" class="FaceI">
                <img src="images/gmail-Inicio.png" class="email-ini">
            </div>
        </form>
    </div>



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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Vendedor</title>
    <link rel="stylesheet" href="css/RegistroV.css">
    <link rel="icon" type="image/png" href="imagenes/favicon.png" />
</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">   <! -- Enlazar -->


    </header>
    <main>
        <div class="registro">
            <h2>Completa los datos para crear cuenta</h2>
           
            <div class="e-mail">
                <img src="images/email.png">
            <h3>Agregar e-mail</h3>
            <button class="boton1">Agregar</button>
            </div>

            <div class="nit">
                <img src="images/Nit.png">
            <h3>Agregar Nit</h3>
            <button class="boton2">Agregar</button>
            </div>

            <div class="telefono">
                <img src="images/telefonocelular.png">
            <h3>Valida tu telefono</h3>
            <button class="boton3">Agregar</button>
            </div>

            <div class="contraseña">
                <img src="images/candado.png">
            <h3>Crea Contraseña</h3>
            <button class="boton4">Agregar</button>
            </div>

            <button class="boton5">Regresar</button>   <! -- Enlazar -->
            <button class="boton6">Registrar</button>   <! -- Enlazar -->

        </div> 
        <img src="images/Soporte.png" class="soporte">

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

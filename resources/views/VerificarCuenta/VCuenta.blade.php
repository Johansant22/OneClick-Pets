<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Cuenta</title>
    <link rel="stylesheet" href="css/VerificarCuenta.css">
</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header"> <! -- Enlazar -->
    <div class="ico1">
        <img src="images/perfil.png" alt="perfil" class="perfil">  <! -- Enlazar -->
        <img src="images/ajustes.png" alt="ajustes" class="ajustes">   <! -- Enlazar -->
    </header>  
    
    <h2 class="titulo-user"> Verificar Cuenta </h2>

    <p class="p-user">Para verifcar tu numero de telefono, introduce el codigo de verifcación</p>
        <p class="p-user2"> te hemos enviado a la dirección de correo electrónico indicada</p>

        <div class="container">
            <p class="email">*****@gmail.com</p>
            <div class="boton">
                <button class="button1">Reenviar Correo</button>
            </div>
        </div>
        

            <div class="verify">
                <input type="text" id="verification-code" placeholder="Código de Verificación" />
                <button class="button2">Verificar</button></div>       <! -- Enlazar -->
             

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
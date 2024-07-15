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
        <img src="imagenes/Logo.png" alt="Logo OneClick Pets" class="logo-header">
    </header>
<main>
    <div class="container">
        <h1>INICIAR SESION</h1>
        <action="/login" method="post">
            
            <label class="correo" for="email">Correo Electronico*</label><br>
            <input type="email" id="email" name="email" required><br> <br>
            <label class="correo" for="password">Contraseña*</label><br>
            <input class="passwordIni" type="password" id="password" name="password" required><br>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Recordar Contraseña</label><br>
        </form>
    
        <div class="BotonesIni">
        <button class="button1">iniciar sesion</button>
        <button class="button2">crear cuenta</button>
        </div>
        
    
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

    </footer>
</body>
</html>
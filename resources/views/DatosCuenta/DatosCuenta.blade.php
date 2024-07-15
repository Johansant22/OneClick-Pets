<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/datos_cuenta.css">
    <link rel="icon" type="image/png" href="imagenes/favicon.png" />
    <title>Datos de cuenta</title>
</head>
<body>
        
    <header>
        <img src="imagenes/Logo.png" alt="Logo OneClick Pets" class="logo-header">
        
        <div class="ico1">
        <img src="imagenes/perfil.png" alt="perfil" class="perfil">
        <img src="imagenes/carritocompras.png" alt="carritocompras" class="carrito">
        <img src="imagenes/ajustes.png" alt="ajustes" class="ajustes">
        </div>

        <div class="b11">
        <input type="text" placeholder="Buscar" class="barrabusqueda">
        </div>

        <nav>
            <ul>
              <li><a href="#">Catálogo</a></li>
              <li><a href="#">Categoría</a></li>
              <li><a href="#">Compras</a></li>
              <li><a href="#">Vender</a></li>
              <li><a href="#">Ofertas</a></li>
              <li><a href="#">Historial</a></li>
              <li><a href="#">Mis Favoritos</a></li>
              <li><a href="#">Ayuda/PQRS</a></li>
            </ul>
          </nav>
    </header>
    <div class="datos-cuenta">
        <h3>Datos de cuenta</h3>
        <form action="configuracion_usuario.html" method="post">
            <label for="primer-nombre">Primer nombre *</label>
            <input type="text" id="primer-nombre" name="primer-nombre" required>
    
            <label for="segundo-nombre">Segundo nombre</label>
            <input type="text" id="segundo-nombre" name="segundo-nombre">
    
            <label for="primer-apellido">Primer apellido *</label>
            <input type="text" id="primer-apellido" name="primer-apellido" required>
    
            <label for="segundo-apellido">Segundo apellido</label>
            <input type="text" id="segundo-apellido" name="segundo-apellido">
    
            <label for="numero-documento">Número de documento *</label>
            <input type="text" id="numero-documento" name="numero-documento" required>
    
            <label for="tipo-documento">Tipo de documento *</label>
            <select id="tipo-documento" name="tipo-documento" required>
                <option value="">Selecciona un tipo de documento</option>
                <option value="CC">Cédula de ciudadanía (CC)</option>
                <option value="TI">Tarjeta de identidad (TI)</option>
                <option value="CE">Cédula de extranjería (CE)</option>
            </select>
    
            <label for="fecha-expedicion">Fecha de expedición *</label>
            <div class="fecha-expedicion">
                <input type="text" id="dia-expedicion" name="dia-expedicion" placeholder="DD" maxlength="2" required>
                <input type="text" id="mes-expedicion" name="mes-expedicion" placeholder="MM" maxlength="2" required>
                <input type="text" id="anio-expedicion" name="anio-expedicion" placeholder="AAAA" maxlength="4" required>
            </div>
    
            <label for="direccion">Dirección *</label>
            <input type="text" id="direccion" name="direccion" required>
    
            <label for="numero-contacto">Número de contacto *</label>
            <input type="text" id="numero-contacto" name="numero-contacto" required>
    
            <input type="submit" value="Enviar">
        </form>
        <a href="configuracion_usuario.html" class="boton-regresar">Regresar</a>
    </div>

    <footer>
        <div class="pie-pag">
        <p>&copy; Copyrigth 2022 | OneClick Pets <br>Información legal | Politicas de privacidad</p>
    </div>

    <div class="redes">
        <img src="imagenes/facebook.png" alt="Facebook" class="facebook">
        <img src="imagenes/x.png" alt="X" class="TX">
        <img src="imagenes/youtube.png" alt="Youtube" class="youtube">
        <img src="imagenes/instagram.png" alt="Instagram" class="instagram">
    </div>
    </footer>

</body>
</html>
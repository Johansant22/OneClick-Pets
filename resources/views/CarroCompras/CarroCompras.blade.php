<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito Compras</title>
    <link rel="stylesheet" href="css/CarroCompras.css">
    <link rel="icon" type="image/png" href="imagenes/favicon.png"/>
</head>
<body>
    <header>
        <img src="images/Logo.png" alt="Logo OneClick Pets" class="logo-header">
        
        <div class="ico1">
        <img src="images/perfil.png" alt="perfil" class="perfil">
        
        <a href="CarroCompras.html">
        <img src="images/carritocompras.png" alt="carritocompras" class="carrito">
        </a>

        <img src="images/ajustes.png" alt="ajustes" class="ajustes">
        </div>

        <div class="b11">
        <input type="text" placeholder="Buscar" class="barrabusqueda">
        </div>

        <nav>
            <ul>
              <li><a href="#">Catálogo</a></li>
              <li><a href="#">Categoría</a></li>
              <li><a href="CarroCompras.html">Compras</a></li>
              <li><a href="RegistroV.html">Vender</a></li>
              <li><a href="DescuentosOfertas.html">Ofertas</a></li>
              <li><a href="#">Historial</a></li>
              <li><a href="#">Mis Favoritos</a></li>
              <li><a href="#">Ayuda/PQRS</a></li>
            </ul>
          </nav>
    </header>

    <main>
        <h2 class="Titulo">Carrito de compras</h2>
        
        <div class="Informacion">
            <h4>Item</h4>
            <h4>Articulo</h4>
            <h4>Descripción</h4>
            <h4>Precio</h4>
            <h4>Cantidad</h4>
            <h4>Total</h4>
            <h4>Acciones</h4>
        </div>

        <div class="GCompras">
            <h3 class="Gcom1">Generar Compra</h3>

            <h4 class="Gcom2">Subtotal: $000.000</h4>
            <h4 class="Gcom3">Envio: $0.00</h4>
            <h4 class="Gcom4">Descuento: $0.00</h4>
            <h4 class="Gcom5">Total: $000.000</h4>

            <div class="metodos">
                <img src="images/mastercard.png" class="mastercard">
                <img src="images/paypal.png" class="paypal">
                <img src="images/visa.png" class="visa">
            </div>

            <h3 class="Gcom6">Generar Compra</h3>
            <h3 class="Gcom7">Realizar Compra</h3>
        </div>

        <div class="Articulos">
            <div class="Item1">
                <h4>1</h4>
                <img src="images/producto.png">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>$00.00</h4>
                <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                <h4>Total :$000.000</h4>
                <img src="images/basura.svg" class="basura">
            </div>

            <div class="Item2">
                <h4>2</h4>
                <img src="images/producto.png">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>$00.00</h4>
                <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                <h4>Total :$000.000</h4>
                <img src="images/basura.svg" class="basura">
            </div>

            <div class="Item3">
                <h4>3</h4>
                <img src="images/producto.png">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h4>$00.00</h4>
                <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                <h4>Total :$000.000</h4>
                <img src="images/basura.svg" class="basura">
            </div>
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
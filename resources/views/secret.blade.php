<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista protegida</title>
</head>
<body>
    <h1>¡Bienvenido a la vista protegida!</h1>
    <p>Solo los usuarios autenticados pueden ver esto.</p>

    <a href="{{ route('cerrar-sesion') }}">
        <button>Salir</button>
    </a>
</body>
</html>

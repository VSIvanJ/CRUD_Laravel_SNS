<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>CONSULTA DE MENÚS</h1>
    <p>Aquí puedes consultar los menús registrados.</p>
    @foreach ($menus as $menu)
        <hr>
        <p><strong>ID:</strong> {{ $menu->id_menu }}</p>
        <p><strong>Nombre del Menú:</strong> {{ $menu->nombre }}</p>
        <p><strong>Precio:</strong> ${{ $menu->precio }}</p>
    @endforeach
    <br><br>
    <footer>
        <nav>
            <a href="{{ route('Menus.inicio') }}" class="btn btn-secondary">Volver al inicio</a>
        </nav>
    </footer>
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
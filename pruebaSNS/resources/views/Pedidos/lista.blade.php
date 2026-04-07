<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>CONSULTA DE PEDIDOS</h1>
    <p>Aquí puedes consultar los pedidos registrados.</p>
    @foreach ($pedidos as $pedido)
        <hr>
        <p><strong>ID:</strong> {{ $pedido->id_pedido }}</p>
        <p><strong>Nombre del Menú:</strong> {{ $pedido->menu->nombre }}</p>
        <p><strong>Precio:</strong> S/.{{ $pedido->menu->precio }}</p>
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
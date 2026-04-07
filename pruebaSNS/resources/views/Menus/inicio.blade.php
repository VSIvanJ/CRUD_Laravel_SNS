<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="bg-primary text-white text-center py-4">
            <h1 class="display-4">MENÚ PRINCIPAL</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('Menus.registrar') }}" class="btn btn-primary btn-lg">Registrar Menu</a>
                <a href="{{ route('Menus.lista') }}" class="btn btn-secondary btn-lg">Consultar Menús existentes</a>
                <a href="{{ route('Pedidos.registrar') }}" class="btn btn-success btn-lg">Registrar Pedido</a>
            </div>
        </div>
    </main>
    
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
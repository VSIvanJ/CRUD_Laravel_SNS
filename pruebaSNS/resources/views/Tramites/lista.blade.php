<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA</title>
</head>
<body>
    <h2>Resultado de la consulta</h2>
    <hr>
    <p><strong>Nombre:</strong> {{ $tramite->nombre }}</p>
    <p><strong>Estado:</strong> {{ $tramite->estado }}</p>
    <br><br>
    <footer>
        <p>Puede cerrar la pestaña al terminar de ver el resultado.</p>
    </footer>
</body>
</html>
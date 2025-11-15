<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Actualizar datos de Alumno</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('actA') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="id" class="form-label">ID Alumno:</label>
                                <input type="text" class="form-control border-secondary" id="subcategoria_id" name="subcategoria_id" required>
                            </div>
                            <div class="mb-3">
                                <label for="carrera" class="form-label">Carrera:</label>
                                <input type="text" class="form-control border-secondary" id="carrera" name="carrera" required maxlength="50">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                                <a href="{{ route('Alumnos.lista') }}" class="btn btn-secondary">Volver a la Lista</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETICIÓN DE CONSULTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow rounded-3">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Consultar Trámite</h3>
                        <form action="{{ route('conT') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nº de Trámite</label>
                                <input type="text" name="id" class="form-control" placeholder="Ingrese Nº Trámite" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-4">ENVIAR</button>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA COMPLETA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #212529;
        }
        .sidebar {
            background-color: #343a40 !important;
        }
        .nav-link {
            color: #adb5bd;
        }
        .nav-link:hover, .nav-link.active {
            color: #fff;
        }
        .card {
            background-color: #343a40;
            border-color: #495057;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Lista de Alumnos</h1>
                </div>

                @if($alumnos->isEmpty())
                    <div class="alert alert-secondary" role="alert">
                        No existen registros para mostrar.
                    </div>
                @else
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-striped table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Carrera</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alumnos as $a)
                                            <tr>
                                                <td>{{ $a->id }}</td>
                                                <td>{{ $a->nombre }}</td>
                                                <td>{{ $a->apellido }}</td>
                                                <td>{{ $a->carrera }}</td>
                                                <td>
                                                    <a href="{{ route('Alumnos.actualizar', $a->id) }}" class="btn btn-warning me-1">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="{{ route('Alumnos.eliminar', $a->id) }}" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('Alumnos.registrar') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle me-1"></i> Registrar Alumno
                </a>
            </div>
            </main>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>